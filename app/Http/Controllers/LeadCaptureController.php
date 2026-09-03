<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Every enquiry from partials/bigin-form.blade.php lands here.
 *
 * The form used to post straight to Zoho Bigin, which meant an enquiry existed
 * only if Zoho accepted it. It now posts to us, and the order below is the whole
 * point of the class:
 *
 *      1. write the lead to our `leads` table          <- cannot be lost
 *      2. forward the identical body to Zoho           <- may fail, and that is survivable
 *      3. record what Zoho said                        <- so failures are visible
 *
 * Nothing in step 2 or 3 is allowed to throw. A lead we hold but could not
 * forward is a phone call to make by hand; a lead we dropped on the floor is
 * gone forever, and that is the failure this class exists to prevent.
 *
 * The response is rendered into the form's hidden iframe, so its body is only
 * seen by js/enquiry-form.js, which swaps the card for a thank-you on iframe
 * load. It must return 200 for that to happen.
 */
class LeadCaptureController extends Controller
{
    /** The real Zoho endpoint. NOT WebToRecordForm - that placeholder 400s. */
    private const ZOHO_ENDPOINT = 'https://bigin.zoho.in/crm/WebForm';

    /** Zoho is normally sub-second. Past this we keep the lead and give up. */
    private const ZOHO_TIMEOUT = 15;

    public function store(Request $request)
    {
        $lead = $this->record($request);

        $zohoOk = $this->forwardToZoho($request, $lead);

        // The enquiry is safe if EITHER store took it: our table is the record we
        // control, Zoho is the one the team works in. Only when both failed has
        // the enquiry actually gone nowhere, and the visitor has to be told - the
        // form used to say "we will call you shortly" no matter what happened,
        // because js/enquiry-form.js showed the thank-you on any frame load.
        $captured = ($lead !== null) || $zohoOk;

        if (!$captured) {
            Log::critical('Enquiry lost: neither the database nor Zoho took it', [
                'lead' => $request->except(['xnQsjsdp', 'xmIwtLD']),
            ]);
        }

        return response($this->iframeBody($captured), 200)
            ->header('Content-Type', 'text/html; charset=UTF-8');
    }

    /**
     * Step 1. Save whatever arrived, without judging it.
     *
     * There is deliberately no validate() here. A half-filled enquiry with a
     * phone number is worth a callback; rejecting it would recreate exactly the
     * silent loss this is meant to stop. The browser already enforces the
     * required fields, and js/enquiry-form.js checks the number's shape - this
     * is the net underneath both.
     */
    private function record(Request $request): ?Lead
    {
        // NOT $request->input(). Zoho's field names contain dots ("Contacts.Mobile"),
        // and input() reads a dot as nested-array notation - it looks for a
        // "Contacts" array with a "Mobile" key, finds nothing, and returns null.
        // That silently emptied name, phone, email and city while "Potential Name",
        // which has no dot, came through fine. Read the raw array by literal key.
        $in = $request->all();
        $get = fn (string $key) => is_scalar($in[$key] ?? null) ? $in[$key] : null;

        try {
            return Lead::create([
                'name'       => $this->clip($get('Contacts.Last Name'), 255),
                'phone'      => $this->clip($get('Contacts.Mobile'), 32),
                'email'      => $this->clip($get('Contacts.Email'), 255),
                'city'       => $this->clip($get('Contacts.Mailing City'), 255),
                'deal_name'  => $this->clip($get('Potential Name'), 255),
                'service'    => $this->clip($this->serviceFromDealName($get('Potential Name')), 255),
                'page_url'   => $this->clip($get('pa_page_url') ?: $request->headers->get('referer'), 2000),
                'message'    => $this->clip($get('Contacts.Description'), 5000),
                'ip'         => $this->clip($request->ip(), 45),
                'user_agent' => $this->clip($request->userAgent(), 1000),
            ]);
        } catch (\Throwable $e) {
            // The database is the safety net, so if IT fails the log has to hold
            // the lead - the visitor is not filling this in twice.
            Log::error('Lead capture could not be saved', [
                'error' => $e->getMessage(),
                'lead'  => $request->except(['xnQsjsdp', 'xmIwtLD']),
            ]);

            return null;
        }
    }

    /**
     * Step 2 and 3. Hand the enquiry to Zoho exactly as the form built it.
     *
     * The body is passed through untouched, including Zoho's own identity fields
     * (xnQsjsdp / xmIwtLD / actionType), so from Zoho's side this is the same
     * submission it has always received. Bigin still silently discards fields its
     * web form was not built with; the difference now is that we kept a copy.
     */
    private function forwardToZoho(Request $request, ?Lead $lead): bool
    {
        $status = 'error';
        $code   = null;
        $body   = null;

        try {
            $fields = collect($request->except(['_token']))
                ->filter(fn ($v) => is_scalar($v) || is_null($v))
                ->map(fn ($v) => (string) $v)
                ->all();

            // Redirects are NOT followed, deliberately.
            //
            // Zoho answers a web form with a 302, and where it sends you is the
            // only clue about what it did. A submission it REJECTS redirects to
            // https://www.zoho.in - Zoho's own marketing homepage - and following
            // that lands on a cheerful HTTP 200. We used to follow it and record
            // the lead as "sent to CRM", so a rejected enquiry looked identical to
            // an accepted one and never appeared in the "Not in CRM" list. That is
            // the same invisible-failure fault this whole class exists to remove,
            // so we now keep the 302 and judge it.
            $response = Http::asMultipart()
                ->withoutRedirecting()
                ->timeout(self::ZOHO_TIMEOUT)
                ->withHeaders(['User-Agent' => 'PatronAccounting-LeadCapture/1.0'])
                ->post(self::ZOHO_ENDPOINT, $fields);

            $code     = $response->status();
            $location = $response->header('Location');
            $body     = $location ? ('Location: '.$location) : $response->body();
            $status   = $this->readZohoOutcome($response->status(), $location);

            if ($status !== 'ok') {
                Log::warning('Zoho did not confirm a lead', [
                    'http' => $code, 'location' => $location,
                    'status' => $status, 'lead_id' => $lead?->id,
                ]);
            }
        } catch (\Throwable $e) {
            $body = $e->getMessage();
            Log::error('Zoho forward failed', ['error' => $e->getMessage(), 'lead_id' => $lead?->id]);
        }

        if ($lead) {
            try {
                $lead->update([
                    'zoho_status'    => $status,
                    'zoho_http_code' => $code,
                    'zoho_response'  => $this->clip($body, 2000),
                ]);
            } catch (\Throwable $e) {
                Log::error('Could not stamp Zoho outcome on lead', ['error' => $e->getMessage(), 'lead_id' => $lead->id]);
            }
        }

        return $status === 'ok';
    }

    /**
     * What Zoho's answer means: 'ok' | 'rejected' | 'failed'.
     *
     * Measured against the live endpoint: posting without the form-identity
     * fields returns 302 to https://www.zoho.in, i.e. "I do not know this form".
     * A bare redirect to Zoho's own homepage therefore means the submission was
     * thrown away.
     *
     * Any OTHER redirect is reported as 'ok' rather than guessed at. This form
     * posts returnURL="null", so a confirmed submission's exact redirect has not
     * been observed - and inventing a success contract we have not seen would
     * either cry wolf on good leads or hide bad ones. The Location is recorded on
     * every lead, so the first confirmed submission will show the real signature
     * and this can be tightened to match it.
     */
    private function readZohoOutcome(int $status, ?string $location): string
    {
        if ($status >= 400) {
            return 'failed';
        }

        if ($location && preg_match('~^https?://(www\.)?zoho\.(in|com)/?$~i', trim($location))) {
            return 'rejected';
        }

        return 'ok';
    }

    /** "Website Enquiry - GST Registration - Pune" -> "GST Registration - Pune". */
    private function serviceFromDealName(?string $dealName): ?string
    {
        if (!$dealName) {
            return null;
        }

        return trim(preg_replace('/^Website Enquiry\s*-\s*/i', '', $dealName)) ?: null;
    }

    private function clip($value, int $max): ?string
    {
        if ($value === null) {
            return null;
        }

        $value = trim((string) $value);

        return $value === '' ? null : mb_substr($value, 0, $max);
    }

    /**
     * Loaded into the hidden iframe. js/enquiry-form.js only listens for the
     * iframe's load event, so the markup is irrelevant to it - but a visitor
     * running without JavaScript never sees a thank-you, and this is the one
     * place we can still say something to them.
     */
    private function iframeBody(bool $captured): string
    {
        // The <meta> is the machine-readable part. The response now comes from our
        // own domain, so js/enquiry-form.js can read this frame and only celebrate
        // when the enquiry was actually taken - it used to show the thank-you on
        // any frame load, error pages included.
        $state = $captured ? 'captured' : 'failed';

        $message = $captured
            ? 'Thank you. Your enquiry has reached Patron Accounting and our CA/CS team will call you shortly.'
            : 'Sorry, we could not record your enquiry. Please call us on +91 94594 56700.';

        return '<!doctype html><html lang="en"><head><meta charset="utf-8">'
             . '<meta name="pa-lead" content="'.$state.'">'
             . '<title>Enquiry '.$state.'</title></head><body>'
             . '<p>'.$message.'</p>'
             . '</body></html>';
    }
}
