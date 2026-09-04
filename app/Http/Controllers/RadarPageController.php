<?php

namespace App\Http\Controllers;

use App\Models\RadarPublication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

/**
 * The public side of Radar's pages: the two hubs, the pages themselves, and the PDF.
 *
 * Both kinds render through ONE template. A regulatory update and an advance ruling are the same
 * page — chrome, breadcrumb, a rail of what else is in this section, the plain-English body, the
 * questions, the firm — differing only in which blocks the payload happens to carry. Two templates
 * would be two places to fix every layout change, and they would drift within a month.
 */
class RadarPageController extends Controller
{
    /*
     * ── FOUR ENTRY POINTS, NOT TWO WITH A $kind PARAMETER ─────────────────────────────────────
     *
     * These were hub($kind) and show($kind, $section, $slug), with the kind supplied by
     * ->defaults() on the route. It read more tidily and it was silently wrong.
     *
     * Laravel appends DEFAULT parameters after the ones bound from the URL, then calls the
     * controller method with array_values() — positionally. So [section, slug, kind] arrived as
     * ($kind, $section, $slug): the page looked itself up at "/case-laws/notification-…/notif",
     * found nothing, and returned a perfectly clean 404. The hub worked throughout, because it
     * has exactly one parameter and order cannot matter with one.
     *
     * The kind is not URL data anyway. It is a fact about which route was registered, so it is
     * written here, where nothing can shuffle it.
     */
    public function updates(Request $request)  { return $this->hub($request, 'notif'); }
    public function caseLaws(Request $request) { return $this->hub($request, 'case'); }

    public function update(string $section, string $slug)  { return $this->page('notif', $section, $slug); }
    public function caseLaw(string $section, string $slug) { return $this->page('case', $section, $slug); }

    /** /updates and /case-laws — what has been published, newest first. */
    private function hub(Request $request, string $kind)
    {
        $section = (string) $request->query('section', '');
        $valid   = array_keys(RadarPublication::SECTIONS[$kind]);
        if (!in_array($section, $valid, true)) {
            $section = '';
        }

        $rows = RadarPublication::query()
            ->where('kind', $kind)
            ->when($section !== '', fn ($q) => $q->where('section', $section))
            ->orderByRaw('COALESCE(dated, DATE(published_at)) DESC')
            ->orderByDesc('id')
            ->paginate(20)
            ->withQueryString();

        $isNotif = $kind === 'notif';

        return view('frontend.radar.hub', [
            'kind'        => $kind,
            'rows'        => $rows,
            'section'     => $section,
            'sections'    => RadarPublication::SECTIONS[$kind],
            'hubPath'     => $isNotif ? '/updates' : '/case-laws',
            'hubTitle'    => $isNotif ? 'Regulatory updates' : 'GST case laws',
            'hubLead'     => $isNotif
                ? 'What the GST, Income Tax and MCA departments have published, explained in plain English.'
                : 'GST advance rulings and appellate orders, explained in plain English.',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => '/'],
                ['name' => $isNotif ? 'Updates' : 'Case laws'],
            ],
        ]);
    }

    /** One page. */
    private function page(string $kind, string $section, string $slug)
    {
        $path = ($kind === 'notif' ? '/updates/' : '/case-laws/') . $section . '/' . $slug;

        $pub = RadarPublication::where('path', $path)->first();
        abort_if($pub === null, 404);

        return view('frontend.radar.show', [
            'pub' => $pub,
            'pl'   => $pub->payload,
            'rail' => RadarPublication::railFor($pub->kind, $pub->section),
            // Radar sends the trail it wants; the layout's composer honours `breadcrumbs` when a
            // view passes one, so this is the whole of it — the same array feeds the JSON-LD below.
            'breadcrumbs' => $pub->p('breadcrumbs', []),
        ]);
    }

    /** The firm's own summary, as a download. */
    public function pdf(string $section, string $slug)
    {
        $pub = RadarPublication::where('path', '/case-laws/' . $section . '/' . $slug)->first();
        abort_if($pub === null || !$pub->pdf_path, 404);
        abort_unless(Storage::disk('local')->exists($pub->pdf_path), 404);

        return response()->file(
            Storage::disk('local')->path($pub->pdf_path),
            ['Content-Type' => 'application/pdf',
             'Content-Disposition' => 'inline; filename="' . $slug . '.pdf"']
        );
    }

    /**
     * Both sections as one sitemap, WRITTEN TO DISK.
     *
     * ── WHY A FILE AND NOT A ROUTE ────────────────────────────────────────────────────────────
     *
     * This was a route, and it 404'd from nginx without PHP ever seeing it: every other sitemap on
     * this site is a real file at the web root, so the server config resolves *.xml from disk and
     * a missing file is nginx's 404, not Laravel's. Rather than ask for an nginx exception for one
     * URL, this writes the file the same way the others exist.
     *
     * It is NOT committed and it IS gitignored, deliberately. Deploy does `git reset --hard`, which
     * would restore a committed copy over the generated one on every deploy and leave the sitemap
     * stale until the next publish. reset --hard leaves an ignored file alone.
     *
     * Regenerated whenever a page is published, which is the only moment the set changes. Failure
     * is logged and swallowed: a sitemap that could not be written is not a reason to fail a
     * publish that has already succeeded.
     */
    public static function writeSitemap(): bool
    {
        try {
            $rows = RadarPublication::query()
                ->orderByRaw('COALESCE(dated, DATE(published_at)) DESC')
                ->get(['path', 'updated_at']);

            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n"
                 . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
            foreach (['/updates', '/case-laws'] as $hub) {
                $xml .= '  <url><loc>' . e(url($hub)) . '</loc><changefreq>daily</changefreq></url>' . "\n";
            }
            foreach ($rows as $r) {
                $xml .= '  <url><loc>' . e(url($r->path)) . '</loc>'
                      . '<lastmod>' . $r->updated_at->toAtomString() . '</lastmod></url>' . "\n";
            }
            $xml .= '</urlset>' . "\n";

            return @file_put_contents(base_path('sitemap-radar.xml'), $xml) !== false;
        } catch (\Throwable $e) {
            Log::warning('radar.sitemap', ['error' => $e->getMessage()]);
            return false;
        }
    }
}
