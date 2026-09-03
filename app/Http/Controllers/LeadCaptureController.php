<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * Every enquiry from partials/bigin-form.blade.php lands here.
 *
 *      1. write the lead to our `leads` table   <- server-side, cannot be lost
 *      2. 307 back to Zoho                      <- the BROWSER delivers it
 *
 * Why the browser and not us.
 *
 * This class used to forward the enquiry to Zoho itself. It looked right, and
 * Zoho answered "Thanks for submitting the form" every time - but no lead ever
 * arrived in Bigin. Proved by experiment: the identical payload, with identical
 * browser-style headers, reaches the CRM when posted from a normal machine and
 * does NOT when posted from the Render server. Zoho is refusing the datacentre
 * origin, silently, while still returning its thank-you page. No change to the
 * body or the headers can fix that, and several were tried.
 *
 * So the delivery goes back to where it worked: the visitor's own browser. A 307
 * preserves both the method and the body, so the browser re-posts the identical
 * submission to Zoho from its own address - which is exactly what the live site
 * does, and the live site's leads arrive.
 *
 * We still write the row first, so the lead is banked before anything that can
 * fail, which is the point of this route existing at all.
 *
 * What this costs, stated plainly: once the browser is talking to Zoho we can no
 * longer see what Zoho did. That visibility was never real - Zoho thanks you
 * whether it keeps the record or bins it - so nothing of substance is lost, but
 * `zoho_status` can no longer claim delivery and does not pretend to.
 */
class LeadCaptureController extends Controller
{
    /** The real Zoho endpoint. NOT WebToRecordForm - that placeholder 400s. */
    private const ZOHO_ENDPOINT = 'https://bigin.zoho.in/crm/WebForm';

    /**
     * Handed to the visitor's browser to deliver. Not a claim that it arrived -
     * see scopeNotInCrm, which does not treat this as either success or failure.
     */
    private const STATUS_BROWSER = 'browser';

    public function store(Request $request)
    {
        $lead = $this->record($request);

        if ($lead === null) {
            // The row is our guarantee. Losing it means the log is the only copy,
            // so it is written at a level nobody filters out.
            Log::critical('Enquiry not saved to the leads table', [
                'lead' => $request->except(['xnQsjsdp', 'xmIwtLD']),
            ]);
        }

        // 307, not 302: 302 would turn the browser's POST into a GET and drop the
        // body, and Zoho would receive an empty request. 307 keeps both.
        return redirect()->away(self::ZOHO_ENDPOINT, 307);
    }

    /**
     * Save whatever arrived, without judging it.
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
                'name'        => $this->clip($get('Contacts.Last Name'), 255),
                'phone'       => $this->clip($get('Contacts.Mobile'), 32),
                'email'       => $this->clip($get('Contacts.Email'), 255),
                'city'        => $this->clip($get('Contacts.Mailing City'), 255),
                'deal_name'   => $this->clip($get('Potential Name'), 255),
                'service'     => $this->clip($this->serviceFromDealName($get('Potential Name')), 255),
                'page_url'    => $this->clip($get('pa_page_url') ?: $request->headers->get('referer'), 2000),
                'message'     => $this->clip($get('Contacts.Description'), 5000),
                'ip'          => $this->clip($request->ip(), 45),
                'user_agent'  => $this->clip($request->userAgent(), 1000),
                'zoho_status' => self::STATUS_BROWSER,
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
}
