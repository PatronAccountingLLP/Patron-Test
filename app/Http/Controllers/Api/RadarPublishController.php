<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RadarPublication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Where Radar's pages land.
 *
 * ── UPSERT BY doc_key, NEVER BY URL ───────────────────────────────────────────────────────────
 *
 * doc_key is Radar's identity for the document — the source plus the regulator's own id, or the
 * case fingerprint. Matching on it means a re-push replaces the page in place: the summary can be
 * rewritten, corrected, improved, and the URL Google already has never moves. Matching on the slug
 * instead would create a second page the day CBIC typed a circular number differently.
 *
 * The path Radar suggests is honoured unless another document already has it, in which case a
 * suffix is added. That is rare and it is not a failure: two documents genuinely can reduce to one
 * slug, and quietly overwriting the first one with the second is the alternative.
 */
class RadarPublishController extends Controller
{
    /** Sections we will route to. Anything else is a typo or a Radar version we do not know. */
    private const SECTIONS = [
        'notif' => ['gst', 'income-tax', 'mca'],
        'case'  => ['aar', 'aaar'],
    ];

    public function store(Request $request)
    {
        $data = $request->json()->all();
        if (!is_array($data)) {
            return response()->json(['ok' => false, 'error' => 'Body is not JSON.'], 400);
        }

        $kind = (string) ($data['kind'] ?? '');

        // The Connector tab's test ping: a real signed POST, so it proves reachability AND the
        // secret, which a GET could not. It stores nothing.
        if ($kind === 'ping') {
            return response()->json(['ok' => true, 'pong' => true, 'at' => now()->toIso8601String()]);
        }

        if (!isset(self::SECTIONS[$kind])) {
            return response()->json(['ok' => false, 'error' => "Unknown kind '{$kind}'."], 422);
        }

        $docKey  = trim((string) ($data['doc_key'] ?? ''));
        $section = trim((string) ($data['section'] ?? ''));
        $slug    = trim((string) ($data['slug'] ?? ''));

        if ($docKey === '' || $slug === '') {
            return response()->json(['ok' => false, 'error' => 'doc_key and slug are required.'], 422);
        }
        if (!in_array($section, self::SECTIONS[$kind], true)) {
            return response()->json([
                'ok'    => false,
                'error' => "Section '{$section}' is not one this site routes for {$kind}.",
            ], 422);
        }

        // The slug is rebuilt here rather than trusted: it becomes a URL segment, and a path
        // arriving with a slash or a dot in it would address a page nobody meant to create.
        $slug = Str::slug($slug) ?: 'document-' . substr(sha1($docKey), 0, 8);
        $base = $kind === 'notif' ? '/updates/' : '/case-laws/';
        $path = $base . $section . '/' . $slug;

        $row = RadarPublication::where('doc_key', $docKey)->first();

        // Somebody else already at that URL? Suffix, rather than overwrite a different document.
        $clash = RadarPublication::where('path', $path)
            ->when($row, fn ($q) => $q->where('id', '!=', $row->id))
            ->exists();
        if ($clash) {
            $n = 2;
            while (RadarPublication::where('path', $path . '-' . $n)->exists()) {
                $n++;
            }
            $slug .= '-' . $n;
            $path .= '-' . $n;
        }

        // A published URL is permanent. Once a document has a path it keeps it, even if Radar
        // later suggests a different one because a title was corrected upstream.
        if ($row && $row->path !== '') {
            $path = $row->path;
            $slug = $row->slug;
        }

        $dated = $kind === 'notif' ? ($data['issued_on'] ?? null) : ($data['order_date'] ?? null);
        $dated = ($dated === '' || $dated === null) ? null : substr((string) $dated, 0, 10);

        $pdfPath = $row->pdf_path ?? null;
        if (!empty($data['pdf_base64'])) {
            $pdfPath = $this->storePdf((string) $data['pdf_base64'], $kind, $slug) ?: $pdfPath;
        }

        // The bytes are not the page. Stored separately so `payload` stays something a person can
        // read in a database client, and so a re-push does not carry a megabyte through the row.
        unset($data['pdf_base64'], $data['pdf_name']);

        $values = [
            'kind'             => $kind,
            'doc_key'          => $docKey,
            'section'          => $section,
            'slug'             => $slug,
            'path'             => $path,
            'title'            => Str::limit((string) ($data['headline'] ?? $data['title'] ?? $slug), 480, ''),
            'meta_title'       => Str::limit((string) ($data['meta_title'] ?? ''), 290, ''),
            'meta_description' => Str::limit((string) ($data['meta_desc'] ?? ''), 490, ''),
            'meta_keywords'    => implode(', ', array_map('strval', (array) ($data['meta_keywords'] ?? []))),
            'dated'            => $dated,
            'payload'          => $data,
            'pdf_path'         => $pdfPath,
            'content_hash'     => substr(sha1(json_encode($data)), 0, 40),
            'published_at'     => $row->published_at ?? now(),
        ];

        try {
            $row = $row ? tap($row)->update($values) : RadarPublication::create($values);
        } catch (\Throwable $e) {
            Log::error('radar.publish', ['doc_key' => $docKey, 'error' => $e->getMessage()]);
            return response()->json(['ok' => false, 'error' => 'Could not save: ' . $e->getMessage()], 500);
        }

        // The set of published pages just changed, so the sitemap has too.
        \App\Http\Controllers\RadarPageController::writeSitemap();

        return response()->json([
            'ok'      => true,
            'url'     => url($path),
            'path'    => $path,
            'created' => $row->wasRecentlyCreated,
        ]);
    }

    /**
     * The firm's own summary PDF.
     *
     * Written to storage/, not to the web root: the live public/ directory is not what deploys
     * touch on this host, so a file put there would exist on one machine and not the next. It is
     * served back through a route instead — see RadarPageController::pdf().
     */
    private function storePdf(string $base64, string $kind, string $slug): ?string
    {
        $bytes = base64_decode($base64, true);
        if ($bytes === false || strncmp($bytes, '%PDF', 4) !== 0) {
            return null;   // not a PDF; the page is still worth publishing without the download
        }
        $path = 'radar/' . $kind . '/' . $slug . '.pdf';
        return Storage::disk('local')->put($path, $bytes) ? $path : null;
    }
}
