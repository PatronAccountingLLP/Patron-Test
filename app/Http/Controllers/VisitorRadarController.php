<?php

namespace App\Http\Controllers;

use App\Models\VisitorEvent;
use App\Models\VisitorSession;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Visitor Radar - collection and read-back.
 *
 * Three jobs:
 *   script()   serves the tracking beacon (a route, not a static file, so it
 *              resolves in every environment and stays off ad-block filter lists)
 *   collect()  receives a batch of events from the beacon, writes the rows
 *   live() / sessions() / session() feed the admin screens with real data
 *
 * The write path is deliberately defensive: this endpoint is public, so
 * everything is length-capped, the batch is capped, unknown event types are
 * dropped, and nothing the browser sends is trusted for the IP or the bot flag.
 */
class VisitorRadarController extends Controller
{
    /** Heartbeat older than this and the visit is no longer "active now". */
    private const ACTIVE_WINDOW = 30;

    private const MAX_EVENTS_PER_BATCH = 60;

    // -----------------------------------------------------------------
    // Collection (public)
    // -----------------------------------------------------------------

    public function collect(Request $request)
    {
        // Master off switch (Phase 8 urgent) - when tracking is disabled the
        // collector writes nothing, silently, even if a stale cached page still
        // holds the beacon.
        if (! config('analytics.enabled')) {
            return response()->noContent();
        }

        // Carry-over C - three silent guards. Anything that fails returns 204 and
        // writes nothing, so a forger learns nothing and the rollup stays clean.
        //   1. token: must carry a valid rotating token from our own /px/s.js
        //   2. origin: the Origin/Referer host must be ours
        //   3. url: the reported page URL must belong to our site
        if (! $this->validToken($this->clean($request->input('tok'), 64))) {
            return response()->noContent();
        }
        if (! $this->sameOrigin($request)) {
            return response()->noContent();
        }
        if (! $this->urlIsOurs($request->input('url'), $request)) {
            return response()->noContent();
        }

        $sessionId = $this->clean($request->input('sid'), 40);
        $visitorId = $this->clean($request->input('vid'), 40);
        if (! $sessionId || ! $visitorId) {
            return response()->noContent(); // nothing usable; say nothing back
        }

        $events = $request->input('events');
        if (! is_array($events)) {
            $events = [];
        }
        $events = array_slice($events, 0, self::MAX_EVENTS_PER_BATCH);

        $ua = (string) $request->userAgent();
        $ip = $request->ip(); // server-side, honours TrustProxies

        // PHASE 4 - bot detection at write, using the FULL ip (crawler ranges).
        // Carry-over B - the full ip is used here and for the city lookup, then
        // never stored: only a /24-truncated form is persisted, so a stored row
        // can't identify one person. DPDP data-minimisation.
        [$isBot, $botReason] = $this->botCheck($ua, $ip);
        // (City lookup would run here on the full ip once GeoIP is added; it is
        //  a later phase, so ip_city stays null for now.)

        $session = VisitorSession::firstOrNew(['session_id' => $sessionId]);
        if (! $session->exists) {
            $session->visitor_id  = $visitorId;
            $session->ip          = $this->truncateIp($ip);
            $session->user_agent  = Str::limit($ua, 500, '');
            $session->device      = $this->device($ua, $isBot);
            $session->browser     = $this->browser($ua);
            $session->os          = $this->os($ua);
            // PHASE 2 - strip query strings from every stored URL: they can carry
            // personal data (a prefilled email, a name). utm_* are already parsed
            // out client-side, so nothing analytical is lost.
            $referrer = $this->stripQuery($this->clean($request->input('ref'), 1000));
            $session->referrer    = $referrer;
            $session->source      = $this->source($referrer, $request->input('utm_source'));
            $session->utm_source  = $this->clean($request->input('utm_source'), 128);
            $session->utm_medium  = $this->clean($request->input('utm_medium'), 128);
            $session->utm_campaign = $this->clean($request->input('utm_campaign'), 128);
            $session->gclid       = $this->clean($request->input('gclid'), 255);
            $session->channel     = $this->channel($referrer, $request->input('utm_source'), $request->input('utm_medium'), $request->input('utm_campaign'), $request->input('gclid'));
            $session->landing_url = $this->stripQuery($this->clean($request->input('url'), 1000));
            $session->landing_path = $this->stripQuery($this->clean($request->input('path'), 255));
            $session->is_bot      = $isBot;
            $session->bot_reason  = $botReason;
            $session->started_at  = now();

            // The migration's default() applies on INSERT, not to a fresh model
            // instance, so a first beacon that carries no scroll would leave
            // these null and the NOT NULL columns would reject the save.
            $session->page_count      = 0;
            $session->click_count     = 0;
            $session->engaged_seconds = 0;
            $session->max_scroll_pct  = 0;
        }

        // Fold the batch in.
        $engaged = (int) $request->input('engaged', 0);
        if ($engaged > 0 && $engaged < 86400) {
            // engaged is the running total for the visit, monotonic
            $session->engaged_seconds = max($session->engaged_seconds, $engaged);
        }

        $rows = [];
        $now = now();
        $addedPageView = false;
        $maxScroll = (int) $session->max_scroll_pct;
        // Carry-over A - read % rides in the request meta, so it persists on every
        // POST including the first page_view and any final sendBeacon flush.
        $metaRead = (int) $request->input('read', 0);
        if ($metaRead > 0) {
            $maxScroll = max($maxScroll, min(100, $metaRead));
        }
        $clicks = 0;

        foreach ($events as $e) {
            if (! is_array($e)) {
                continue;
            }
            $type = $this->clean($e['t'] ?? null, 24);
            if (! in_array($type, ['page_view', 'click', 'scroll', 'form_start', 'form_submit', 'site_search', 'exit', 'move', 'view', 'error', 'page_error', 'session_start', 'first_visit', 'video_start', 'video_progress', 'video_complete', 'field_focus', 'field_blur', 'section', 'form_view'], true)) {
                continue;
            }

            // A genuine enquiry submission converts the visit.
            if ($type === 'form_submit' && ! $session->converted) {
                $session->converted = true;
                $session->converted_at = $now;
            }

            $scroll = isset($e['s']) ? max(0, min(100, (int) $e['s'])) : null;
            if ($scroll !== null) {
                $maxScroll = max($maxScroll, $scroll);
            }
            if ($type === 'click') {
                $clicks++;
            }

            $evPath = $this->stripQuery($this->clean($e['p'] ?? null, 255));

            // PHASE 1.1 - ghost-pageview safety net: a page_view whose path equals
            // the session's most recent page_view is a 0-duration duplicate. Keep
            // whichever record carries the title, and never insert the second.
            if ($type === 'page_view') {
                $newTitle = $this->clean($e['ti'] ?? null, 255);
                $prev = $this->lastPageView($sessionId, $rows);
                if ($prev !== null && $prev['path'] === $evPath) {
                    // Keep whichever record carries the title. If the kept one has
                    // no title but this duplicate does, patch it - in the pending
                    // batch (same request) or in the DB (an earlier batch).
                    if ($newTitle && empty($prev['title'])) {
                        if ($prev['id']) {
                            VisitorEvent::where('id', $prev['id'])->update(['title' => $newTitle]);
                        } else {
                            for ($j = count($rows) - 1; $j >= 0; $j--) {
                                if ($rows[$j]['type'] === 'page_view' && $rows[$j]['path'] === $evPath) {
                                    $rows[$j]['title'] = $newTitle;
                                    break;
                                }
                            }
                        }
                    }
                    continue; // do not store a second page_view for the same page
                }
                $addedPageView = true;
            }

            $rows[] = [
                'session_id'      => $sessionId,
                'visitor_id'      => $visitorId,
                'type'            => $type,
                'url'             => $this->stripQuery($this->clean($e['u'] ?? null, 1000)),
                'path'            => $evPath,
                'title'           => $this->clean($e['ti'] ?? null, 255),
                'label'           => $this->clean($e['l'] ?? null, 255),
                'href'            => $this->stripQuery($this->clean($e['h'] ?? null, 1000)),
                'element'         => $this->clean($e['el'] ?? null, 255),
                'element_key'     => $this->clean($e['ek'] ?? null, 160),
                'region'          => $this->clean($e['rg'] ?? null, 24),
                'x'               => isset($e['x']) ? max(0, min(1, (float) $e['x'])) : null,
                'y'               => isset($e['y']) ? max(0, (int) $e['y']) : null,
                'vw'              => isset($e['vw']) ? max(0, (int) $e['vw']) : null,
                'el_x'            => isset($e['ex']) && $e['ex'] !== null ? max(0, min(1, (float) $e['ex'])) : null,
                'el_y'            => isset($e['ey']) && $e['ey'] !== null ? max(0, min(1, (float) $e['ey'])) : null,
                'scroll_pct'      => $scroll,
                'engaged_seconds' => isset($e['es']) ? max(0, (int) $e['es']) : null,
                'occurred_at'     => $now,
                'created_at'      => $now,
            ];
        }

        if ($rows) {
            VisitorEvent::insert($rows);
        }

        // PHASE 4 - fold in behavioural bot signals now the session's totals are
        // known: many pages with no pointer/scroll at all, or impossibly fast
        // page-turning. Only ever tightens the flag; a human is never re-flagged.
        if (! $session->is_bot) {
            [$b, $r] = $this->behaviouralBot($session);
            if ($b) {
                $session->is_bot = true;
                $session->bot_reason = $r;
            }
        }

        // Update the live-facing fields.
        $current = $this->clean($request->input('url'), 1000);
        if ($current) {
            $session->current_url   = $current;
            $session->current_title = $this->clean($request->input('title'), 255);
        }
        if ($addedPageView) {
            $session->page_count = $session->page_count + 1;
        }
        $session->click_count   = $session->click_count + $clicks;
        $session->max_scroll_pct = $maxScroll;
        $session->last_seen_at  = $now;
        $session->save();

        return response()->noContent();
    }

    // -----------------------------------------------------------------
    // The beacon (public) - served as JS
    // -----------------------------------------------------------------

    public function script()
    {
        // Master off switch - serve a no-op if tracking is disabled, in case the
        // tag is requested from a cached page.
        if (! config('analytics.enabled')) {
            return response('/* visitor radar disabled */', 200)
                ->header('Content-Type', 'application/javascript; charset=utf-8')
                ->header('Cache-Control', 'no-store');
        }

        $endpoint = route('radar.collect');
        // Carry-over C - a short-lived rotating token embedded in the script and
        // required by the collector. It rotates hourly; the collector accepts the
        // current or previous window, so it survives the 1h script cache. Raises
        // the bar against someone POSTing forged rows straight to /px/c.
        $js = $this->beacon($endpoint, $this->radarToken());

        return response($js, 200)
            ->header('Content-Type', 'application/javascript; charset=utf-8')
            ->header('Cache-Control', 'public, max-age=3600');
    }

    /** Carry-over C - Origin (or Referer) host must match this site's host. */
    private function sameOrigin(Request $request): bool
    {
        $host = $request->getHost();
        $origin = $request->headers->get('Origin') ?: $request->headers->get('Referer');
        if (! $origin) {
            return false;                      // a real browser always sends one
        }
        $oh = parse_url($origin, PHP_URL_HOST);
        return $oh !== null && strcasecmp($oh, $host) === 0;
    }

    /** Carry-over C - the reported page URL must be on our host (or relative). */
    private function urlIsOurs($url, Request $request): bool
    {
        if (! $url) {
            return true;                       // a bare path with no host is fine
        }
        $h = parse_url((string) $url, PHP_URL_HOST);
        if ($h === null) {
            return true;                       // relative URL
        }
        return strcasecmp($h, $request->getHost()) === 0;
    }

    /** A token bound to an hourly window, signed with the app key. */
    private function radarToken(?int $window = null): string
    {
        $window = $window ?? (int) floor(time() / 3600);
        $sig = substr(hash_hmac('sha256', 'radar|' . $window, config('app.key')), 0, 20);
        return $window . '.' . $sig;
    }

    /** Valid if it matches the current or previous hour window (cache-safe). */
    private function validToken(?string $tok): bool
    {
        if (! $tok || ! str_contains($tok, '.')) {
            return false;
        }
        $now = (int) floor(time() / 3600);
        foreach ([$now, $now - 1, $now + 1] as $w) {   // ±1h for cache + clock skew
            if (hash_equals($this->radarToken($w), $tok)) {
                return true;
            }
        }
        return false;
    }

    // -----------------------------------------------------------------
    // Admin read-back (behind auth in routes/web.php)
    // -----------------------------------------------------------------

    /** Everyone active right now, plus the day's headline numbers. */
    public function live(Request $request)
    {
        $active = VisitorSession::active()
            ->orderByDesc('last_seen_at')
            ->limit(200)
            ->get()
            ->map(fn ($s) => $this->sessionRow($s));

        $since = Carbon::today();

        return response()->json([
            'now'        => now()->toIso8601String(),
            'active'     => $active->values(),
            'stats'      => [
                'active_humans' => VisitorSession::active()->humans()->count(),
                'active_bots'   => VisitorSession::active()->where('is_bot', true)->count(),
                'last_30_min'   => VisitorSession::where('started_at', '>=', now()->subMinutes(30))->humans()->count(),
                'today'         => VisitorSession::where('started_at', '>=', $since)->humans()->count(),
                'today_events'  => VisitorEvent::where('created_at', '>=', $since)->count(),
            ],
        ]);
    }

    /** Recent visits (for the history / journeys list). */
    public function sessions(Request $request)
    {
        $q = VisitorSession::query()->orderByDesc('started_at');
        if (! $request->boolean('bots')) {
            $q->humans();
        }
        $rows = $q->limit(300)->get()->map(fn ($s) => $this->sessionRow($s));

        return response()->json(['sessions' => $rows->values()]);
    }

    /** One visit in full - the journey and every click, for the map. */
    public function session(string $sessionId)
    {
        $s = VisitorSession::where('session_id', $sessionId)->firstOrFail();

        $events = VisitorEvent::where('session_id', $sessionId)
            ->orderBy('id')
            ->limit(6000)
            ->get()
            ->map(fn ($e) => [
                'type'    => $e->type,
                'path'    => $e->path,
                'title'   => $e->title,
                'label'   => $e->label,
                'href'    => $e->href,
                'element' => $e->element,
                'element_key' => $e->element_key,
                'region'  => $e->region,
                'x'       => $e->x,
                'y'       => $e->y,
                'vw'      => $e->vw,
                'scroll'  => $e->scroll_pct,
                'es'      => $e->engaged_seconds,
                'at'      => optional($e->occurred_at)->toIso8601String(),
            ]);

        return response()->json([
            'session' => $this->sessionRow($s),
            'events'  => $events->values(),
        ]);
    }

    // -----------------------------------------------------------------
    // Helpers
    // -----------------------------------------------------------------

    private function sessionRow(VisitorSession $s): array
    {
        return [
            'session_id'   => $s->session_id,
            'visitor_id'   => $s->visitor_id,
            'ip'           => $s->ip,
            'city'         => $s->ip_city ?: ($this->isLocalIp($s->ip) ? 'Local (this machine)' : null),
            'country'      => $s->ip_country,
            'channel'      => $s->channel ?: ucfirst((string) $s->source),
            'converted'    => (bool) $s->converted,
            'device'       => $s->device,
            'browser'      => $s->browser,
            'os'           => $s->os,
            'landing_path' => $s->landing_path,
            'current_url'  => $s->current_url,
            'current_path' => $s->current_url ? parse_url($s->current_url, PHP_URL_PATH) : $s->landing_path,
            'source'       => $s->source,
            'referrer'     => $s->referrer,
            'pages'        => $s->page_count,
            'clicks'       => $s->click_count,
            'engaged'      => $s->engaged_seconds,
            'max_scroll'   => $s->max_scroll_pct,
            'is_bot'       => $s->is_bot,
            'started_at'   => optional($s->started_at)->toIso8601String(),
            'last_seen_at' => optional($s->last_seen_at)->toIso8601String(),
            'active'       => $s->last_seen_at && $s->last_seen_at->gte(now()->subSeconds(self::ACTIVE_WINDOW)),
        ];
    }

    /**
     * Per-page report for developers and SEO. One row per page over the window,
     * with the numbers each side needs:
     *   SEO       - views, visitors, how far people read (scroll), which CTAs get
     *               clicked, how many enquiries a page produces.
     *   Developer - JavaScript errors, broken-page (404) hits, and "dead clicks":
     *               taps on something that looks clickable but isn't (a heading,
     *               a badge), which is a real usability defect.
     */
    public function pages(Request $request)
    {
        $days = min(90, max(1, (int) $request->input('days', 7)));
        $from = now()->subDays($days - 1)->startOfDay();

        // Human visits only - bots would drown the signal.
        $humanSids = VisitorSession::where('started_at', '>=', $from)->where('is_bot', false)->pluck('session_id');

        $events = VisitorEvent::where('created_at', '>=', $from)
            ->whereIn('session_id', $humanSids)
            ->get();

        $rows = [];
        foreach ($events->groupBy('path') as $path => $evs) {
            if (! $path) {
                continue;
            }
            $clicks = $evs->where('type', 'click');
            $dead = $clicks->filter(fn ($e) => ! $e->href
                && ! preg_match('/^(a|button|input|select|textarea|summary)/i', (string) $e->element));

            $topClicks = $clicks->groupBy(fn ($e) => $e->label ?: ($e->element ?: 'unlabelled'))
                ->map->count()->sortDesc()->take(6)
                ->map(fn ($n, $l) => ['label' => $l, 'n' => $n])->values();

            $deadDetail = $dead->groupBy(fn ($e) => $e->label ?: ($e->element ?: 'unlabelled'))
                ->map->count()->sortDesc()->take(6)
                ->map(fn ($n, $l) => ['label' => $l, 'n' => $n])->values();

            $errList = $evs->whereIn('type', ['error', 'page_error'])
                ->groupBy(fn ($e) => $e->label ?: $e->type)
                ->map(fn ($g) => ['type' => $g->first()->type, 'msg' => $g->first()->label, 'where' => $g->first()->element, 'n' => $g->count()])
                ->sortByDesc('n')->take(10)->values();

            $avgScroll = $evs->where('type', 'scroll')
                ->groupBy('session_id')->map(fn ($g) => $g->max('scroll_pct'))->avg();

            $rows[] = [
                'path'        => $path,
                'views'       => $evs->where('type', 'page_view')->count(),
                'visitors'    => $evs->pluck('session_id')->unique()->count(),
                'clicks'      => $clicks->count(),
                'dead_clicks' => $dead->count(),
                'submits'     => $evs->where('type', 'form_submit')->count(),
                'js_errors'   => $evs->where('type', 'error')->count(),
                'page_errors' => $evs->where('type', 'page_error')->count(),
                'avg_scroll'  => (int) round($avgScroll ?? 0),
                'top_clicks'  => $topClicks,
                'dead_detail' => $deadDetail,
                'errors'      => $errList,
            ];
        }

        usort($rows, fn ($a, $b) => $b['views'] <=> $a['views']);

        return response()->json([
            'days'  => $days,
            'from'  => $from->toDateString(),
            'pages' => $rows,
        ]);
    }

    /**
     * In-depth, per-page behaviour report. For each page:
     *   - what got READ most (dwell by depth band, from the reading samples)
     *   - what got CLICKED most (top elements)
     *   - where people LEFT TO and via which link/region (page-to-page moves)
     *   - where people QUIT (exit rate + how far they'd scrolled when they left)
     *   - how the ENQUIRY FORM performed (started vs submitted)
     * This is the narrative a developer and SEO can act on, not just counts.
     */
    public function pageDeep(Request $request)
    {
        $days = min(90, max(1, (int) $request->input('days', 7)));
        $from = now()->subDays($days - 1)->startOfDay();

        $humanSids = VisitorSession::where('started_at', '>=', $from)->where('is_bot', false)->pluck('session_id');
        $sessions  = VisitorSession::whereIn('session_id', $humanSids)->get()->keyBy('session_id');
        $events    = VisitorEvent::where('created_at', '>=', $from)
            ->whereIn('session_id', $humanSids)->orderBy('id')->get();

        $bySession = $events->groupBy('session_id');

        // Page-to-page moves: for each session, walk its page_views in order and
        // attribute the move to the last navigating click on the page left.
        $entered = [];  // path => count (first page of a visit)
        $exited  = [];  // path => count (last page of a visit)
        $moves   = [];  // "from|to" => [ 'n'=>, 'via'=>[label|region => n] ]
        $exitScroll = []; // path => [scroll values at exit]

        foreach ($bySession as $sid => $evs) {
            $pageViews = $evs->where('type', 'page_view')->values();
            if ($pageViews->isEmpty()) {
                continue;
            }
            $first = $pageViews->first()->path;
            $last  = $pageViews->last()->path;
            $entered[$first] = ($entered[$first] ?? 0) + 1;
            $exited[$last]   = ($exited[$last] ?? 0) + 1;

            // scroll reached on the page they left from
            $lastScroll = $evs->where('type', 'scroll')->where('path', $last)->max('scroll_pct');
            if ($lastScroll !== null) {
                $exitScroll[$last][] = $lastScroll;
            }

            // consecutive page transitions + the navigating click
            $paths = $pageViews->pluck('path')->all();
            for ($i = 0; $i < count($paths) - 1; $i++) {
                $a = $paths[$i];
                $b = $paths[$i + 1];
                $key = $a . '|' . $b;
                if (! isset($moves[$key])) {
                    $moves[$key] = ['n' => 0, 'via' => []];
                }
                $moves[$key]['n']++;
                // find a click on page A whose href resolves to B
                $navClick = $evs->where('type', 'click')->where('path', $a)
                    ->first(fn ($c) => $c->href && $this->hrefPath($c->href) === $b);
                $label = $navClick
                    ? (($navClick->label ?: 'a link') . ' · ' . ($navClick->region ?: 'page'))
                    : 'no link click (back button, menu script, or new tab)';
                $moves[$key]['via'][$label] = ($moves[$key]['via'][$label] ?? 0) + 1;
            }
        }

        $rows = [];
        foreach ($events->groupBy('path') as $path => $evs) {
            if (! $path) {
                continue;
            }
            $clicks = $evs->where('type', 'click');
            $views  = $evs->where('type', 'page_view')->count();

            // reading: dwell seconds per 10% depth band, from view samples
            $bands = array_fill(0, 10, 0.0);
            foreach ($evs->where('type', 'view')->groupBy('session_id') as $vs) {
                $vs = $vs->sortBy('engaged_seconds')->values();
                for ($i = 0; $i < $vs->count() - 1; $i++) {
                    $dt = min(30, max(0, (int) $vs[$i + 1]->engaged_seconds - (int) $vs[$i]->engaged_seconds));
                    $top = (float) $vs[$i]->x;
                    $bottom = min(1, $top + ((int) $vs[$i]->scroll_pct) / 100);
                    for ($b = 0; $b < 10; $b++) {
                        $lo = $b / 10; $hi = ($b + 1) / 10;
                        $overlap = max(0, min($hi, $bottom) - max($lo, $top));
                        if ($overlap > 0) {
                            $bands[$b] += $dt * ($overlap / 0.1);
                        }
                    }
                }
            }
            $mostRead = null;
            if (array_sum($bands) > 0) {
                $peak = array_keys($bands, max($bands))[0];
                $mostRead = ['band' => ($peak * 10) . '-' . (($peak + 1) * 10) . '%', 'seconds' => (int) round(max($bands))];
            }

            // Engaging SECTIONS by name: sum reading seconds per section heading,
            // from the section label carried on each view sample.
            $sectionSecs = [];
            foreach ($evs->where('type', 'view')->groupBy('session_id') as $vs) {
                $vs = $vs->sortBy('engaged_seconds')->values();
                for ($i = 0; $i < $vs->count() - 1; $i++) {
                    $sec = trim((string) $vs[$i]->label);
                    if ($sec === '') {
                        continue;
                    }
                    $dt = min(30, max(0, (int) $vs[$i + 1]->engaged_seconds - (int) $vs[$i]->engaged_seconds));
                    $sectionSecs[$sec] = ($sectionSecs[$sec] ?? 0) + $dt;
                }
            }
            arsort($sectionSecs);
            $engagingSections = collect($sectionSecs)->take(6)
                ->map(fn ($s, $name) => ['section' => $name, 'seconds' => (int) round($s)])->values();

            // Lines the mouse hovered most (a proxy for where the eye lingers on a
            // computer): count move samples per hovered line text.
            $hoverLines = $evs->where('type', 'move')->filter(fn ($e) => trim((string) $e->label) !== '')
                ->groupBy(fn ($e) => $e->label)
                ->map(fn ($g) => ['line' => $g->first()->label, 'element' => $g->first()->element, 'samples' => $g->count()])
                ->sortByDesc('samples')->take(8)->values();

            $topClicks = $clicks->groupBy(fn ($e) => $e->label ?: ($e->element ?: 'unlabelled'))
                ->map(fn ($g) => ['label' => $g->first()->label ?: $g->first()->element, 'region' => $g->first()->region, 'n' => $g->count()])
                ->sortByDesc('n')->take(8)->values();

            // where did people go from here
            $leftTo = [];
            foreach ($moves as $key => $m) {
                [$a, $b] = explode('|', $key, 2);
                if ($a !== $path) {
                    continue;
                }
                arsort($m['via']);
                $leftTo[] = ['to' => $b, 'n' => $m['n'], 'via' => array_slice(array_map(fn ($k, $v) => ['label' => $k, 'n' => $v], array_keys($m['via']), $m['via']), 0, 3)];
            }
            usort($leftTo, fn ($x, $y) => $y['n'] <=> $x['n']);

            $exitCount = $exited[$path] ?? 0;
            $exitScr = $exitScroll[$path] ?? [];
            $rows[] = [
                'path'        => $path,
                'views'       => $views,
                'entered_here' => $entered[$path] ?? 0,
                'left_site_here' => $exitCount,
                'exit_rate'   => $views ? (int) round($exitCount / max(1, $views) * 100) : 0,
                'avg_scroll_at_exit' => $exitScr ? (int) round(array_sum($exitScr) / count($exitScr)) : null,
                'most_read'   => $mostRead,
                'engaging_sections' => $engagingSections,
                'hover_lines' => $hoverLines,
                'top_clicks'  => $topClicks,
                'left_to'     => array_slice($leftTo, 0, 5),
                'form_starts' => $evs->where('type', 'form_start')->pluck('session_id')->unique()->count(),
                'form_submits' => $evs->where('type', 'form_submit')->count(),
            ];
        }

        usort($rows, fn ($a, $b) => $b['views'] <=> $a['views']);

        return response()->json(['days' => $days, 'from' => $from->toDateString(), 'pages' => $rows]);
    }

    /**
     * GA4-style event counts, so this tool can be read against Google Analytics
     * in the same vocabulary. Most names are DERIVED from what we already store
     * (a tel: click is a phone_click, an enquiry submit is a generate_lead), so
     * they work on data captured before these names existed; video_* and
     * first_visit are captured directly by the beacon.
     *
     * The business conversions the user listed - consultation_booking,
     * consultation_start, ads_conversion_Sign_Up_1 - are NOT invented here: they
     * are read from config('analytics.events') so you define what triggers each.
     */
    public function events(Request $request)
    {
        $days = min(90, max(1, (int) $request->input('days', 7)));
        $from = now()->subDays($days - 1)->startOfDay();
        $humanSids = VisitorSession::where('started_at', '>=', $from)->where('is_bot', false)->pluck('session_id');
        $ev = VisitorEvent::where('created_at', '>=', $from)->whereIn('session_id', $humanSids)->get();

        $fileExt = '/\.(pdf|docx?|xlsx?|pptx?|csv|zip|rtf|txt)(\?|#|$)/i';
        $count = [];
        // A real closure with &$count - an arrow fn would capture by value and
        // the increments would never stick.
        $add = function ($name, $n = 1) use (&$count) {
            $count[$name] = ($count[$name] ?? 0) + $n;
        };

        foreach ($ev as $e) {
            switch ($e->type) {
                case 'page_view':      $add('page_view'); break;
                case 'session_start':  $add('session_start'); break;
                case 'first_visit':    $add('first_visit'); break;
                case 'scroll':         $add('scroll'); $add('user_engagement'); break;
                case 'video_start':    $add('video_start'); break;
                case 'video_progress': $add('video_progress'); break;
                case 'video_complete': $add('video_complete'); break;
                case 'form_start':
                    $add('form_start');
                    if ($e->path === '/contact-us') { $add('contact_form_start'); }
                    break;
                case 'form_submit':
                    $add('form_submit'); $add('generate_lead'); $add('lead_submit');
                    if ($e->path === '/contact-us') { $add('contact_form_submit'); $add('contact_us'); }
                    break;
                case 'click':
                    $add('click');
                    $href = (string) $e->href;
                    if (preg_match('/^tel:/i', $href))                       { $add('phone_click'); }
                    elseif (preg_match('/wa\.me|whatsapp/i', $href))         { $add('whatsapp_click'); }
                    elseif ($href && preg_match($fileExt, $href))            { $add('file_download'); }
                    break;
            }
        }

        // Business conversions the user defines (path or href contains a marker).
        foreach ((array) config('analytics.events', []) as $name => $rule) {
            $match = $rule['path'] ?? null;
            if (! $match) {
                continue;
            }
            $n = $ev->filter(fn ($e) => $e->path && str_contains($e->path, $match)
                && in_array($e->type, $rule['on'] ?? ['form_submit'], true))->count();
            if ($n) {
                $add($name, $n);
            }
        }

        arsort($count);
        $rows = collect($count)->map(fn ($n, $name) => ['event' => $name, 'count' => $n])->values();

        return response()->json(['days' => $days, 'from' => $from->toDateString(), 'events' => $rows]);
    }

    /**
     * On-demand rollup trigger for servers with no cron (e.g. Render, where the
     * container only runs Apache). Admin-only. Rolls up an IST day - defaults to
     * TODAY so a tester sees data straight after browsing, rather than waiting
     * for the nightly job's "yesterday". Idempotent, so pressing it twice is safe.
     */
    public function rollupNow(Request $request)
    {
        $date = $request->input('date') ?: Carbon::now(self::IST_TZ)->format('Y-m-d');
        $codeToday = \Illuminate\Support\Facades\Artisan::call('radar:rollup', ['date' => $date]);
        $out = trim(\Illuminate\Support\Facades\Artisan::output());
        // Also fold in yesterday, in case a visit crossed midnight while testing.
        $yesterday = Carbon::parse($date, self::IST_TZ)->subDay()->format('Y-m-d');
        \Illuminate\Support\Facades\Artisan::call('radar:rollup', ['date' => $yesterday]);

        return response()->json([
            'ran_for'  => [$date, $yesterday],
            'ok'       => $codeToday === 0,
            'output'   => $out,
            'page_daily_rows' => DB::table('page_daily')->count(),
        ]);
    }

    /** Phase 7 - pages that have rollup data, for the report's page picker. */
    public function reportPages(Request $request)
    {
        $rows = DB::table('page_daily')
            ->selectRaw('url, SUM(visits) as visits, MIN(date) as first_date, MAX(date) as last_date')
            ->groupBy('url')->orderByDesc('visits')->limit(3000)->get();

        return response()->json(['pages' => $rows]);
    }

    /**
     * Phase 7 - the aggregate report for one page over a date range. Additive
     * metrics come from the rollup (a plain SUM between two IST dates); the
     * heatmap and the last-field-before-quit come from raw events within the
     * 60-day retention window. All dates are IST.
     */
    public function pageReport(Request $request)
    {
        $url = (string) $request->input('url');
        if ($url === '') {
            return response()->json(['error' => 'no url'], 422);
        }

        // "All time" starts at the first date of data for this page.
        $firstDate = DB::table('page_daily')->where('url', $url)->min('date');
        $lastData = DB::table('page_daily')->where('url', $url)->max('date');

        $to = $request->input('to') ?: Carbon::now(self::IST_TZ)->subDay()->format('Y-m-d');
        $from = $request->input('from') ?: ($firstDate ?: $to);

        $main = $this->reportRange($url, $from, $to);
        $main['from'] = $from;
        $main['to'] = $to;

        $out = [
            'url'          => $url,
            'first_date'   => $firstDate,
            'last_data'    => $lastData,
            'report'       => $main,
        ];

        // Compare with the equally-long preceding period.
        if ($request->boolean('compare') && $firstDate) {
            $days = Carbon::parse($from, self::IST_TZ)->diffInDays(Carbon::parse($to, self::IST_TZ)) + 1;
            $prevTo = Carbon::parse($from, self::IST_TZ)->subDay()->format('Y-m-d');
            $prevFrom = Carbon::parse($prevTo, self::IST_TZ)->subDays($days - 1)->format('Y-m-d');
            $prev = $this->reportRange($url, $prevFrom, $prevTo);
            $prev['from'] = $prevFrom;
            $prev['to'] = $prevTo;
            $out['previous'] = $prev;
        }

        return response()->json($out);
    }

    private const IST_TZ = 'Asia/Kolkata';

    /** All the aggregate numbers for one page over [from,to] IST. */
    private function reportRange(string $url, string $from, string $to): array
    {
        $daily = DB::table('page_daily')->where('url', $url)->whereBetween('date', [$from, $to]);
        $agg = (clone $daily)->selectRaw(
            'SUM(visits) v, SUM(total_seconds) secs, SUM(total_read_pct) rd, SUM(bounced_under_10s) b, '
            . 'SUM(exits) ex, SUM(form_views) fv, SUM(form_starts) fs, SUM(form_submits) fsub'
        )->first();

        $visits = (int) ($agg->v ?? 0);
        $safe = max(1, $visits);

        // Layout-version markers in the range.
        $versions = (clone $daily)->whereNotNull('layout_version')->distinct()->pluck('layout_version')->sort()->values();

        // Per-device totals (for the mobile/desktop split).
        $byDevice = (clone $daily)->selectRaw('device, SUM(visits) v, SUM(total_seconds) secs, SUM(total_read_pct) rd')
            ->groupBy('device')->get()->map(fn ($r) => [
                'device' => $r->device, 'visits' => (int) $r->v,
                'avg_time' => $r->v ? round($r->secs / $r->v, 1) : 0,
                'avg_read' => $r->v ? round($r->rd / $r->v) : 0,
            ])->values();

        // Section attention, ranked.
        $sections = DB::table('page_daily_sections')->where('url', $url)->whereBetween('date', [$from, $to])
            ->selectRaw('section_key, SUM(total_visible_seconds) secs, SUM(sessions_reaching_section) reach')
            ->groupBy('section_key')->get()
            ->map(fn ($r) => [
                'section' => $r->section_key,
                'seconds' => (int) $r->secs,
                'reached' => (int) $r->reach,
                'reach_share' => $visits ? round($r->reach / $safe * 100) : 0,
            ])->sortByDesc('seconds')->values();

        // Most-clicked elements, ranked by distinct sessions.
        $clicks = DB::table('page_daily_clicks')->where('url', $url)->whereBetween('date', [$from, $to])
            ->selectRaw('element_key, SUM(clicks) clicks, SUM(clicked_sessions) sess')
            ->groupBy('element_key')->orderByDesc('sess')->limit(25)->get()
            ->map(fn ($r) => ['element_key' => $r->element_key, 'clicks' => (int) $r->clicks, 'sessions' => (int) $r->sess])->values();

        // Exit breakdown.
        $exits = DB::table('page_daily_exits')->where('url', $url)->whereBetween('date', [$from, $to])
            ->selectRaw('exit_type, SUM(count) c')->groupBy('exit_type')->orderByDesc('c')->get()
            ->map(fn ($r) => ['type' => $r->exit_type, 'count' => (int) $r->c])->values();

        return [
            'visits'      => $visits,
            'avg_time'    => $visits ? round(($agg->secs ?? 0) / $safe, 1) : 0,
            'avg_read'    => $visits ? round(($agg->rd ?? 0) / $safe) : 0,
            'bounce_rate' => $visits ? round(($agg->b ?? 0) / $safe * 100) : 0,
            'exits'       => (int) ($agg->ex ?? 0),
            'funnel'      => [
                'saw'       => (int) ($agg->fv ?? 0),
                'started'   => (int) ($agg->fs ?? 0),
                'submitted' => (int) ($agg->fsub ?? 0),
                'drop_off'  => max(0, (int) ($agg->fs ?? 0) - (int) ($agg->fsub ?? 0)),
                'last_field'=> $this->lastFieldBeforeQuit($url, $from, $to),
            ],
            'by_device'   => $byDevice,
            'sections'    => $sections,
            'clicks'      => $clicks,
            'exits_breakdown' => $exits,
            'layout_versions' => $versions,
            'spans_layout_change' => $versions->count() > 1,
            'heatmap'     => $this->clickHeatmap($url, $from, $to),
            'reliable'    => $visits >= 30,
        ];
    }

    /** Which field the people who started but did NOT submit touched last. Raw. */
    private function lastFieldBeforeQuit(string $url, string $from, string $to): ?array
    {
        [$startUtc, $endUtc] = $this->istBounds($from, $to);
        // Sessions that touched a field on this page in range.
        $sids = VisitorEvent::where('path', $url)->where('type', 'field_focus')
            ->whereBetween('created_at', [$startUtc, $endUtc])
            ->distinct()->pluck('session_id');
        if ($sids->isEmpty()) {
            return null;
        }
        // Of those, the ones that did NOT submit on this page.
        $submitted = VisitorEvent::where('path', $url)->where('type', 'form_submit')
            ->whereIn('session_id', $sids)->distinct()->pluck('session_id')->flip();

        $tally = [];
        foreach ($sids as $sid) {
            if (isset($submitted[$sid])) {
                continue;
            }
            $last = VisitorEvent::where('session_id', $sid)->where('path', $url)
                ->whereIn('type', ['field_focus', 'field_blur'])
                ->orderByDesc('id')->value('label');
            if ($last) {
                $tally[$last] = ($tally[$last] ?? 0) + 1;
            }
        }
        if (! $tally) {
            return null;
        }
        arsort($tally);
        $field = array_key_first($tally);
        return ['field' => $field, 'count' => $tally[$field]];
    }

    /** Element-relative click points for the heatmap, split by device. Raw. */
    private function clickHeatmap(string $url, string $from, string $to): array
    {
        [$startUtc, $endUtc] = $this->istBounds($from, $to);
        $humanSids = VisitorSession::where('is_bot', false)->pluck('session_id');   // bounded below
        $points = VisitorEvent::where('path', $url)->where('type', 'click')
            ->whereNotNull('el_x')->whereNotNull('el_y')
            ->whereBetween('created_at', [$startUtc, $endUtc])
            ->whereIn('session_id', $humanSids)
            ->limit(5000)
            ->get(['session_id', 'element_key', 'el_x', 'el_y']);

        $deviceOf = VisitorSession::whereIn('session_id', $points->pluck('session_id')->unique())
            ->pluck('device', 'session_id');

        $out = ['mobile' => [], 'desktop' => [], 'tablet' => []];
        foreach ($points as $p) {
            $d = $deviceOf[$p->session_id] ?? 'desktop';
            if (! isset($out[$d])) {
                $d = 'desktop';
            }
            $out[$d][] = ['key' => $p->element_key, 'x' => round($p->el_x, 3), 'y' => round($p->el_y, 3)];
        }
        return $out;
    }

    /** IST date range -> [startUtc, endUtc) in the app timezone. */
    private function istBounds(string $from, string $to): array
    {
        $start = Carbon::parse($from, self::IST_TZ)->startOfDay()->setTimezone(config('app.timezone'));
        $end = Carbon::parse($to, self::IST_TZ)->addDay()->startOfDay()->setTimezone(config('app.timezone'));
        return [$start, $end];
    }

    /** Resolve an href to a same-site path, or null if it's off-site/anchor/tel. */
    private function hrefPath(?string $href): ?string
    {
        if (! $href || $href[0] === '#' || preg_match('#^(tel:|mailto:|javascript:|https?://wa\.me|whatsapp)#i', $href)) {
            return null;
        }
        if ($href[0] === '/') {
            return rtrim(strtok($href, '?#'), '/') ?: '/';
        }
        $host = parse_url($href, PHP_URL_HOST);
        if ($host && ! str_contains($host, request()->getHost())) {
            return null;
        }
        $p = parse_url($href, PHP_URL_PATH);
        return $p ? (rtrim($p, '/') ?: '/') : null;
    }

    private function isLocalIp(?string $ip): bool
    {
        if (! $ip) {
            return false;
        }
        return $ip === '127.0.0.1' || $ip === '::1'
            || str_starts_with($ip, '192.168.') || str_starts_with($ip, '10.')
            || (bool) preg_match('/^172\.(1[6-9]|2\d|3[01])\./', $ip);
    }

    /**
     * End-of-day style report: one row per day, with visits, enquiries and
     * errors. Reads live from the events; a nightly job can later freeze these.
     */
    public function daily(Request $request)
    {
        $days = min(90, max(1, (int) $request->input('days', 30)));
        $from = now()->subDays($days - 1)->startOfDay();

        $sessions = VisitorSession::where('started_at', '>=', $from)->get();
        $errorsByDay = VisitorEvent::whereIn('type', ['error', 'page_error'])
            ->where('created_at', '>=', $from)
            ->get()
            ->groupBy(fn ($e) => optional($e->created_at)->toDateString());

        $rows = [];
        for ($i = 0; $i < $days; $i++) {
            $day = now()->subDays($i)->toDateString();
            $daySessions = $sessions->filter(fn ($s) => optional($s->started_at)->toDateString() === $day);
            $humans = $daySessions->where('is_bot', false);
            $rows[] = [
                'date'       => $day,
                'visitors'   => $humans->count(),
                'bots'       => $daySessions->where('is_bot', true)->count(),
                'pageviews'  => $humans->sum('page_count'),
                'enquiries'  => $humans->where('converted', true)->count(),
                'errors'     => optional($errorsByDay->get($day))->count() ?? 0,
                'avg_engaged' => $humans->count() ? (int) round($humans->avg('engaged_seconds')) : 0,
                'top_page'   => $humans->groupBy('landing_path')->map->count()->sortDesc()->keys()->first(),
            ];
        }

        return response()->json(['days' => $rows]);
    }

    private function clean($v, int $max): ?string
    {
        if ($v === null || $v === '') {
            return null;
        }
        return Str::limit(trim((string) $v), $max, '');
    }

    private function looksLikeBot(string $ua): bool
    {
        if ($ua === '') {
            return true;
        }
        return (bool) preg_match('/bot|crawl|spider|slurp|headless|lighthouse|gtmetrix|python|axios|curl|wget|preview|monitor|facebookexternalhit|bingpreview/i', $ua);
    }

    /**
     * PHASE 4 - audit of what the bot filter caught and what it let through, so
     * the rules can be tuned rather than trusted blind.
     */
    public function bots(Request $request)
    {
        $days = min(90, max(1, (int) $request->input('days', 7)));
        $from = now()->subDays($days - 1)->startOfDay();
        $all = VisitorSession::where('started_at', '>=', $from)->get();

        $flagged = $all->where('is_bot', true);
        $byReason = $flagged->groupBy(fn ($s) => $s->bot_reason ?: 'unknown')
            ->map->count()->sortDesc()
            ->map(fn ($n, $reason) => ['reason' => $reason, 'count' => $n])->values();

        $recent = $flagged->sortByDesc('started_at')->take(100)->map(fn ($s) => [
            'ip'         => $s->ip,
            'reason'     => $s->bot_reason,
            'device'     => $s->device,
            'user_agent' => Str::limit((string) $s->user_agent, 80),
            'pages'      => $s->page_count,
            'clicks'     => $s->click_count,
            'engaged'    => $s->engaged_seconds,
            'started_at' => optional($s->started_at)->toIso8601String(),
        ])->values();

        return response()->json([
            'days'           => $days,
            'total'          => $all->count(),
            'flagged'        => $flagged->count(),
            'human'          => $all->where('is_bot', false)->count(),
            'flagged_pct'    => $all->count() ? (int) round($flagged->count() / $all->count() * 100) : 0,
            'by_reason'      => $byReason,
            'recent_flagged' => $recent,
        ]);
    }

    /** PHASE 4 - cheap up-front bot signals: user-agent, then crawler IP range. */
    private function botCheck(string $ua, ?string $ip): array
    {
        if ($this->looksLikeBot($ua)) {
            return [true, 'ua-match'];
        }
        if ($this->isCrawlerIp($ip)) {
            return [true, 'crawler-ip'];
        }
        return [false, null];
    }

    /** Known search-engine / crawler IP prefixes (Google, Bing, Yandex, Apple…). */
    private function isCrawlerIp(?string $ip): bool
    {
        if (! $ip) {
            return false;
        }
        $prefixes = [
            '66.249.', '64.233.', '66.102.', '72.14.', '74.125.', '209.85.', '216.239.', // Google
            '40.77.', '207.46.', '157.55.', '13.66.', '13.67.', '204.79.',                // Bing/Microsoft
            '17.58.', '17.241.',                                                          // Applebot
            '5.255.', '37.9.', '37.140.', '77.88.', '87.250.', '93.158.', '95.108.',
            '141.8.', '178.154.', '213.180.',                                             // Yandex
        ];
        foreach ($prefixes as $p) {
            if (str_starts_with($ip, $p)) {
                return true;
            }
        }
        return false;
    }

    /**
     * PHASE 4 - behavioural bot signals, once the session's totals are known:
     * impossible page-turning speed, or several pages with no interaction at all
     * (no click, page never rendered enough to register any scroll).
     */
    private function behaviouralBot(VisitorSession $s): array
    {
        $pages = (int) $s->page_count;
        $elapsed = $s->started_at ? max(0, now()->getTimestamp() - $s->started_at->getTimestamp()) : 0;

        if ($pages >= 5 && $elapsed > 0 && $elapsed < 3)  { return [true, 'impossible-timing']; }
        if ($pages >= 8 && $elapsed < 8)                  { return [true, 'impossible-timing']; }
        if ($pages >= 3 && (int) $s->click_count === 0 && (int) $s->max_scroll_pct === 0 && (int) $s->engaged_seconds <= 1) {
            return [true, 'no-interaction'];
        }
        return [false, null];
    }

    /**
     * Carry-over B - reduce a stored IP to its network so it can't identify a
     * person: IPv4 to /24 (last octet zeroed), IPv6 to /48. Enough for a
     * network-level bot audit, not enough to single anyone out.
     */
    private function truncateIp(?string $ip): ?string
    {
        if (! $ip) {
            return null;
        }
        if (str_contains($ip, '.')) {                 // IPv4
            $p = explode('.', $ip);
            if (count($p) === 4) {
                return $p[0] . '.' . $p[1] . '.' . $p[2] . '.0';
            }
        }
        if (str_contains($ip, ':')) {                 // IPv6 -> /48
            $g = explode(':', $ip);
            return implode(':', array_slice($g, 0, 3)) . '::';
        }
        return $ip;
    }

    /** Strip query string and fragment so no personal data is stored in a URL. */
    private function stripQuery(?string $url): ?string
    {
        if ($url === null || $url === '') {
            return $url;
        }
        $url = strtok($url, '?');   // drop ?query
        $h = strpos($url, '#');
        return $h === false ? $url : substr($url, 0, $h);
    }

    /** Most recent page_view in the session - from the pending batch, else the DB. */
    private function lastPageView(string $sid, array $pending): ?array
    {
        for ($i = count($pending) - 1; $i >= 0; $i--) {
            if (($pending[$i]['type'] ?? '') === 'page_view') {
                return ['path' => $pending[$i]['path'], 'title' => $pending[$i]['title'], 'id' => null];
            }
        }
        $row = VisitorEvent::where('session_id', $sid)->where('type', 'page_view')
            ->orderByDesc('id')->first(['id', 'path', 'title']);
        return $row ? ['path' => $row->path, 'title' => $row->title, 'id' => $row->id] : null;
    }

    private function device(string $ua, bool $isBot): string
    {
        if ($isBot) {
            return 'bot';
        }
        if (preg_match('/iPad|Tablet/i', $ua)) {
            return 'tablet';
        }
        if (preg_match('/Mobi|Android|iPhone/i', $ua)) {
            return 'mobile';
        }
        return 'desktop';
    }

    private function browser(string $ua): string
    {
        foreach ([
            'Edg' => 'Edge', 'OPR' => 'Opera', 'Chrome' => 'Chrome',
            'Firefox' => 'Firefox', 'Safari' => 'Safari',
        ] as $needle => $name) {
            if (str_contains($ua, $needle)) {
                return $name;
            }
        }
        return 'Other';
    }

    private function os(string $ua): string
    {
        foreach ([
            'Windows' => 'Windows', 'Android' => 'Android', 'iPhone' => 'iOS',
            'iPad' => 'iOS', 'Mac OS' => 'macOS', 'Linux' => 'Linux',
        ] as $needle => $name) {
            if (str_contains($ua, $needle)) {
                return $name;
            }
        }
        return 'Other';
    }

    private function source(?string $referrer, $utmSource): string
    {
        if ($utmSource) {
            return Str::limit((string) $utmSource, 64, '');
        }
        if (! $referrer) {
            return 'direct';
        }
        $host = parse_url($referrer, PHP_URL_HOST) ?: '';
        if ($host === '' || str_contains($host, request()->getHost())) {
            return 'direct';
        }
        if (preg_match('/google\./i', $host)) {
            return 'google';
        }
        if (preg_match('/bing\.|duckduckgo\.|yahoo\./i', $host)) {
            return 'search';
        }
        if (preg_match('/facebook\.|instagram\.|linkedin\.|t\.co|twitter\.|x\.com/i', $host)) {
            return 'social';
        }
        return 'referral';
    }

    /**
     * A human-readable channel for how a visit began.
     *
     * The honest limit: Google organic and a Google Business Profile (GMB) click
     * both arrive with a google.com referrer and no reliable way to tell them
     * apart - UNLESS the Business Profile's website link carries a utm_source
     * (e.g. ?utm_source=gmb). If it does, we can say "Google Business Profile";
     * if it does not, both read as "Google Search".
     */
    private function channel(?string $referrer, $utmSource, $utmMedium, $utmCampaign, $gclid): string
    {
        $src = strtolower(trim((string) $utmSource));
        $med = strtolower(trim((string) $utmMedium));
        $camp = strtolower(trim((string) $utmCampaign));

        // Paid Google - a gclid or a cpc/paid medium.
        if ($gclid || in_array($med, ['cpc', 'ppc', 'paid', 'paidsearch', 'paid_search'], true)) {
            return 'Google Ads';
        }
        // Business Profile, only knowable from a tagged link.
        if (in_array($src, ['gmb', 'gbp', 'google-business', 'googlemybusiness', 'google_business', 'google-my-business'], true)
            || str_contains($camp, 'gmb') || str_contains($camp, 'business-profile')) {
            return 'Google Business Profile';
        }
        // Any other tagged source wins over the referrer guess.
        if ($src !== '') {
            return ucwords(str_replace(['-', '_'], ' ', $src));
        }

        if (! $referrer) {
            return 'Direct / typed / bookmark';
        }
        $host = strtolower(parse_url($referrer, PHP_URL_HOST) ?: '');
        $reqHost = strtolower(request()->getHost());
        if ($host === '' || str_contains($host, $reqHost)) {
            return 'Direct / typed / bookmark';
        }
        $path = strtolower(parse_url($referrer, PHP_URL_PATH) ?: '');
        if (preg_match('/google\./', $host)) {
            return str_contains($path, 'maps') ? 'Google Maps / Business' : 'Google Search';
        }
        if (preg_match('/bing\./', $host))       return 'Bing';
        if (preg_match('/duckduckgo\./', $host)) return 'DuckDuckGo';
        if (preg_match('/yahoo\./', $host))      return 'Yahoo';
        if (preg_match('/facebook\.|fb\./', $host))   return 'Facebook';
        if (preg_match('/instagram\./', $host))       return 'Instagram';
        if (preg_match('/linkedin\.|lnkd\./', $host)) return 'LinkedIn';
        if (preg_match('/t\.co|twitter\.|x\.com/', $host)) return 'X / Twitter';
        if (preg_match('/youtube\.|youtu\.be/', $host))    return 'YouTube';
        if (preg_match('/wa\.me|whatsapp/', $host))        return 'WhatsApp';

        return 'Referral · ' . preg_replace('/^www\./', '', $host);
    }

    /**
     * The tracking beacon. Vanilla, self-contained, fails silently.
     * - visitor_id: first-party cookie, 1 year (the same person across visits)
     * - session_id: sessionStorage, one visit
     * - heartbeat every 10s, ONLY while the tab is visible (real engaged time)
     * - clicks batched and flushed every 3s; final flush via sendBeacon on unload
     */
    private function beacon(string $endpoint, string $token = ''): string
    {
        $ep = json_encode($endpoint);
        $tok = json_encode($token);
        // Privacy allowlist (Phase 2): CSS selectors whose text MAY be recorded.
        // Default empty, so nothing a visitor types is ever captured unless the
        // site owner explicitly opts an element in.
        $allow = json_encode(array_values((array) config('analytics.text_allowlist', [])));
        // Sampling (constraint): always record form-interacting sessions; sample
        // the rest at this rate (1 = everyone).
        $sampleRate = (float) config('analytics.sample_rate', 1);
        $sample = json_encode(max(0, min(1, $sampleRate)));

        return <<<JS
(function(){
  "use strict";
  try {
    var EP = {$ep};
    var TOK = {$tok};            // rotating collector token (Carry-over C)
    var ALLOW = {$allow};        // selectors whose text may be recorded (Phase 2)
    var SAMPLE = {$sample};      // fraction of non-form sessions to record
    var HEARTBEAT = 10000, FLUSH = 3000;

    // Sampling gate: decide once per session, but NEVER drop a session that
    // touches a form - those are the ones that matter. Until a form is touched
    // a non-sampled session buffers nothing.
    var formTouched = false, sampledIn = (Math.random() < SAMPLE);
    function recording(){ return sampledIn || formTouched; }

    // Is this element allowed to have its text recorded? (Phase 2 allowlist.)
    function textAllowed(el){
      if(!ALLOW.length || !el || !el.closest) return false;
      for(var i=0;i<ALLOW.length;i++){ try { if(el.closest(ALLOW[i])) return true; } catch(_a){} }
      return false;
    }

    function uid(){
      try { return (crypto.randomUUID ? crypto.randomUUID() : (Date.now()+"-"+Math.random().toString(16).slice(2))); }
      catch(e){ return Date.now()+"-"+Math.random().toString(16).slice(2); }
    }
    function getCookie(n){
      var m = document.cookie.match("(^|;)\\\\s*"+n+"\\\\s*=\\\\s*([^;]+)");
      return m ? m.pop() : "";
    }
    function setCookie(n,v,days){
      try {
        var d = new Date(); d.setTime(d.getTime()+days*864e5);
        document.cookie = n+"="+v+";expires="+d.toUTCString()+";path=/;SameSite=Lax";
      } catch(e){}
    }

    var vid = getCookie("pa_vid");
    var isFirstVisit = false;
    if(!vid){ vid = uid(); setCookie("pa_vid", vid, 365); isFirstVisit = true; } // no cookie = never here before
    var sid, isNewSession = false;
    try { sid = sessionStorage.getItem("pa_sid"); if(!sid){ sid = uid(); sessionStorage.setItem("pa_sid", sid); isNewSession = true; } }
    catch(e){ sid = uid(); isNewSession = true; }

    var path = location.pathname;
    var queue = [];
    var engaged = 0;            // seconds the tab was actually visible
    var lastTick = Date.now();
    var maxScroll = 0;
    // Carry-over A - measure the visible fraction IMMEDIATELY, before the first
    // send, so even a 3-second visit that never scrolls stores a real read %.
    // meta().read then rides on EVERY request, so no exit path can lose it.
    try {
      var _vh0 = window.innerHeight || 0, _f0 = document.documentElement.scrollHeight || 1;
      maxScroll = _f0 <= _vh0 + 4 ? 100 : Math.round(((window.pageYOffset + _vh0) / _f0) * 100);
      maxScroll = Math.max(0, Math.min(100, maxScroll));
    } catch(_s0){}

    function meta(){
      return {
        sid: sid, vid: vid,
        url: location.href, path: path, title: document.title,
        ref: document.referrer || "",
        utm_source: param("utm_source"), utm_medium: param("utm_medium"),
        utm_campaign: param("utm_campaign"), gclid: param("gclid"),
        engaged: engaged, read: maxScroll, tok: TOK
      };
    }
    function param(k){
      try { return new URLSearchParams(location.search).get(k) || ""; } catch(e){ return ""; }
    }
    // Always buffer; a non-sampled session keeps at most 200 events in case it
    // later touches a form and becomes recordable.
    function push(ev){ queue.push(ev); if(queue.length > 200 && !recording()) queue.splice(0, queue.length - 200); }

    function send(useBeacon){
      if(!recording()) return;                 // sampling gate (Phase constraint)
      if(!queue.length && !useBeacon) return;
      var body = meta(); body.events = queue.splice(0, 60);
      var json = JSON.stringify(body);
      try {
        if(useBeacon && navigator.sendBeacon){
          navigator.sendBeacon(EP, new Blob([json], {type:"application/json"}));
        } else {
          fetch(EP, {method:"POST", headers:{"Content-Type":"application/json"}, body:json, keepalive:true, credentials:"same-origin"})
            .catch(function(){});
        }
      } catch(e){}
    }

    // PHASE 1.1 - fire the pageview ONCE, after the title has resolved, so there
    // is no titleless ghost record. session_start / first_visit ride with it.
    var pvSent = false;
    function firePageView(){
      if(pvSent) return; pvSent = true;
      if(isNewSession){ push({t:"session_start", p:path}); }
      if(isFirstVisit){ push({t:"first_visit", p:path}); }
      push({t:"page_view", u:location.href, p:path, ti:document.title});
      send(false);
    }
    if(document.title){ firePageView(); }
    else {
      // title set by later JS: wait a tick (and a hard fallback) but fire once.
      if(document.readyState === "complete"){ setTimeout(firePageView, 0); }
      else { window.addEventListener("DOMContentLoaded", firePageView); window.addEventListener("load", firePageView); }
      setTimeout(firePageView, 1500);
    }

    // engaged-time clock: only counts while visible
    setInterval(function(){
      if(document.visibilityState === "visible"){
        engaged += Math.round((Date.now()-lastTick)/1000);
      }
      lastTick = Date.now();
    }, 1000);

    // heartbeat
    setInterval(function(){ push({t:"scroll", p:path, s:maxScroll, es:engaged}); send(false); }, HEARTBEAT);
    // periodic flush of clicks
    setInterval(function(){ send(false); }, FLUSH);

    // reading sampler - which slice of the page is on screen, and for how long.
    // Sampled every 1.5s ONLY while the tab is visible, tagged with the engaged
    // clock so the reader can add up real seconds per band. This, not the mouse,
    // is the honest "what did they actually read" signal.
    var lastView = -1, viewCount = 0, VIEW_CAP = 500;
    setInterval(function(){
      if(document.visibilityState !== "visible" || viewCount >= VIEW_CAP) return;
      var ph = document.documentElement.scrollHeight || 1;
      var top = window.pageYOffset || 0;
      var vh = window.innerHeight || 0;
      var topFrac = Math.max(0, Math.min(1, top / ph));
      var vpPct = Math.max(1, Math.min(100, Math.round((vh / ph) * 100)));
      // only when it moved or on the first sample, but keep time flowing via es
      if(engaged === lastView) return;
      lastView = engaged; viewCount++;
      // Which section is on screen? The nearest heading at or above the top of
      // the viewport names the section, so reading time can be summed per section.
      var sec = "";
      try {
        var hs = document.querySelectorAll("h1,h2,h3");
        for(var i=0;i<hs.length;i++){
          var rr = hs[i].getBoundingClientRect();
          if(rr.top <= 140){ sec = (hs[i].innerText||"").trim().replace(/\s+/g," ").slice(0,90); }
          else if(rr.top > 0){ break; }
        }
      } catch(_v){}
      push({t:"view", p:path, x:topFrac, s:vpPct, es:engaged, l:sec});
    }, 1500);

    // PHASE 1.2 - read depth = the furthest-down fraction of the page that has
    // been ON SCREEN, measured from load (not only when a scroll fires). A page
    // that fits the viewport with no scrolling has been fully seen, so it reads
    // 100%, never 0%.
    function computeScroll(){
      var full = document.documentElement.scrollHeight || 1;
      var vh = window.innerHeight || 0;
      var pct;
      if(full <= vh + 4){ pct = 100; }                                  // whole page fits
      else { pct = Math.round(((window.pageYOffset + vh) / full) * 100); } // bottom of viewport
      if(pct > maxScroll){ maxScroll = Math.max(0, Math.min(100, pct)); }
    }
    window.addEventListener("scroll", computeScroll, {passive:true});
    window.addEventListener("resize", computeScroll, {passive:true});
    window.addEventListener("load", computeScroll);
    computeScroll();                                  // measure immediately at start

    // Which part of the page an element sits in. Checked outermost-role first
    // so a link inside the header counts as "header", not "content".
    function regionOf(el){
      var n = el;
      while(n && n.nodeType === 1 && n !== document.body){
        var tag = (n.tagName||"").toLowerCase();
        var role = (n.getAttribute && n.getAttribute("role")) || "";
        var cls = (typeof n.className === "string" ? n.className : "").toLowerCase();
        if(/(sticky|floating|whatsapp|wa-bar|wa-sticky|fab|back-to-top)/.test(cls)) return "sticky bar";
        if(tag === "header" || /(site-header|main-header|navbar|topbar|pa-h(\\b|-)|header)/.test(cls)) return "header";
        if(tag === "nav" || role === "navigation" || /(^|[\\s-])(nav|menu|toc|subnav)/.test(cls)) return "menu";
        if(tag === "footer" || /footer/.test(cls)) return "footer";
        if(tag === "form" || /(enquiry|contact-form|lead-form|\\bform\\b)/.test(cls)) return "form";
        if(tag === "aside") return "sidebar";
        n = n.parentElement;
      }
      return "page content";
    }
    // Does this click move to another page on our own site?
    function navTarget(el){
      var a = el.closest && el.closest("a[href]");
      if(!a) return "";
      var href = a.getAttribute("href") || "";
      if(!href || href.charAt(0) === "#" || /^(tel:|mailto:|javascript:|wa\\.me|https?:\\/\\/wa\\.me|whatsapp)/i.test(href)) return "";
      try {
        var u = new URL(href, location.href);
        if(u.host !== location.host) return "";          // external link, not our page
        if(u.pathname === location.pathname) return "";  // same page / anchor
        return u.pathname;
      } catch(e){ return ""; }
    }

    // Nearest heading at or above an element - the last-resort click identity.
    function nearestHeading(el){
      var n = el;
      while(n && n !== document.body){
        var p = n;
        while(p){
          if(p.tagName && /^H[1-6]$/.test(p.tagName)){ return (p.innerText||"").trim().replace(/\\s+/g," ").slice(0,60); }
          p = p.previousElementSibling;
        }
        n = n.parentElement;
      }
      return "";
    }
    // PHASE 1.4 - a stable, groupable identity for a click. Resolution order:
    // data-track > id > aria-label > text+href > nearest heading + tag. NEVER a
    // positional CSS path, so it survives a page edit. PHASE 2: for a form field
    // this NEVER reads the typed value - only the field's name.
    function elementKey(t){
      if(!t || !t.getAttribute) return "";
      var dt = t.getAttribute("data-track") || (t.closest && t.closest("[data-track]") && t.closest("[data-track]").getAttribute("data-track"));
      if(dt) return dt.trim().slice(0,120);
      if(t.id) return "#"+t.id;
      var al = t.getAttribute("aria-label");
      if(al) return al.trim().replace(/\\s+/g," ").slice(0,80);
      var tag = (t.tagName||"").toLowerCase();
      if(/^(input|select|textarea)$/.test(tag)){
        // a form field: identity is its NAME, never its value
        var nm = t.getAttribute("name") || t.getAttribute("placeholder") || "field";
        return "field:"+String(nm).trim().slice(0,60);
      }
      var txt = textAllowed(t) ? (t.innerText||"").trim().replace(/\\s+/g," ").slice(0,60) : (t.innerText||"").trim().replace(/\\s+/g," ").slice(0,60);
      var href = t.getAttribute("href") || "";
      if(txt || href) return (txt + (href ? " -> "+href : "")).slice(0,120);
      var h = nearestHeading(t);
      return ((h ? h+" " : "") + tag).slice(0,120) || tag;
    }

    // PHASE 1.3 - debounce identical clicks landing within 300ms (a video overlay
    // fires twice). Keyed on the stable element key.
    var lastClickKey = "", lastClickAt = 0;
    // Phase 5 exit-reason signals.
    var lastExternalClick = false, lastActivity = Date.now();
    function markActivity(){ lastActivity = Date.now(); }
    ["mousemove","keydown","scroll","click","touchstart"].forEach(function(ev){
      window.addEventListener(ev, markActivity, {passive:true});
    });

    // clicks - stable key, position, region, and (for a link) the path it leads to.
    document.addEventListener("click", function(e){
      try {
        var t = e.target.closest("a,button,input,select,textarea,summary,[role=button]") || e.target;
        var tag = (t.tagName||"").toLowerCase();
        var isForm = /^(input|select|textarea)$/.test(tag);
        var key = elementKey(t);
        var now = Date.now();
        if(key && key === lastClickKey && (now - lastClickAt) < 300) return;  // debounce
        lastClickKey = key; lastClickAt = now;

        var pw = document.documentElement.clientWidth || window.innerWidth || 1;
        // PHASE 2 - label never carries a typed value. For a field it's the name;
        // otherwise the visible text or aria-label (page content, not user input).
        var label = isForm
          ? ("field: " + ((t.getAttribute && (t.getAttribute("name") || t.getAttribute("placeholder"))) || "field"))
          : ((t.innerText || (t.getAttribute && t.getAttribute("aria-label")) || "").trim().slice(0,120));

        // PHASE 5 - element-relative click position (0..1 within the element's
        // own box), so a heatmap can merge phone and laptop clicks. Raw pixels
        // can't stack across screen widths; a fraction of the element can.
        var elx = null, ely = null;
        try {
          var rct = t.getBoundingClientRect();
          if(rct.width > 0)  elx = Math.max(0, Math.min(1, (e.clientX - rct.left) / rct.width));
          if(rct.height > 0) ely = Math.max(0, Math.min(1, (e.clientY - rct.top) / rct.height));
        } catch(_r){}

        push({
          t: isForm ? "form_start" : "click",
          p: path, l: label,
          h: (t.getAttribute && t.getAttribute("href")) || "",
          el: (tag + (t.id ? "#"+t.id : "")).slice(0,80),   // raw tag+id for display only
          ek: key,                                          // stable grouping key (Phase 1.4)
          rg: regionOf(t),
          nx: navTarget(e.target),
          x: Math.max(0, Math.min(1, e.pageX / pw)),
          y: Math.round(e.pageY),
          vw: pw, ex: elx, ey: ely                          // element-relative (Phase 5)
        });
        lastExternalClick = /^(https?:)?\\/\\//i.test((t.getAttribute && t.getAttribute("href")) || "") && navTarget(e.target) === "";
        // A form submission is recorded ONLY by the "submit" listener below.
      } catch(err){}
    }, true);

    // PHASE 2 - form-field activity WITHOUT ever reading what was typed. We record
    // that a field was focused, that it was left, and whether it ended up filled
    // or empty - by name only. No keystroke listener exists anywhere in this
    // recorder. Touching a form also opts the session into recording (100% of
    // form-interacting sessions are kept, per the sampling rule).
    function fieldName(el){
      return String((el.getAttribute && (el.getAttribute("name") || el.getAttribute("id") || el.getAttribute("placeholder"))) || "field").trim().slice(0,60);
    }
    document.addEventListener("focusin", function(e){
      var el = e.target;
      if(!el || !/^(input|textarea|select)$/i.test(el.tagName)) return;
      if(/^(hidden|submit|button)$/i.test(el.type||"")) return;
      formTouched = true;                              // keep this session
      push({t:"field_focus", p:path, l:fieldName(el), rg:regionOf(el)});
    }, true);
    document.addEventListener("focusout", function(e){
      var el = e.target;
      if(!el || !/^(input|textarea|select)$/i.test(el.tagName)) return;
      if(/^(hidden|submit|button)$/i.test(el.type||"")) return;
      // 'filled' vs 'empty' is a boolean about LENGTH only - the value itself is
      // never read into any variable that leaves the browser.
      var filled = false;
      try { filled = !!(el.value && String(el.value).length > 0); } catch(_f){}
      push({t:"field_blur", p:path, l:fieldName(el), el: filled ? "filled" : "empty", rg:regionOf(el)});
    }, true);

    // mouse movement - a rough read of where attention goes on desktop. Sampled
    // (not every event), only when the cursor has actually moved, and capped per
    // page so it never floods. No mouse on touch devices; there scroll is the signal.
    var lastMove = 0, moves = 0, lastMx = -1, lastMy = -1, MOVE_CAP = 320;
    document.addEventListener("mousemove", function(e){
      try {
        var t = Date.now();
        if(t - lastMove < 150 || moves >= MOVE_CAP) return;
        var dx = Math.abs(e.pageX - lastMx), dy = Math.abs(e.pageY - lastMy);
        if(lastMx >= 0 && dx < 10 && dy < 10) return;
        lastMove = t; lastMx = e.pageX; lastMy = e.pageY; moves++;
        // Divide by the true content width and store that SAME width, so replay
        // renders at it and left = x*width lands exactly - no scrollbar drift.
        var pw = document.documentElement.clientWidth || window.innerWidth || 1;
        // What line/element is the cursor over? Records the text of the hovered
        // block so we can say which line people hover most - never a form field's
        // typed value.
        var hv = "", hel = "";
        try {
          var he = document.elementFromPoint(e.clientX, e.clientY);
          if(he && !/^(input|textarea|select)$/i.test(he.tagName)){
            var blk = he.closest("a,button,li,p,h1,h2,h3,h4,h5,td,th,summary,figure,[class*=card],[class*=btn]") || he;
            if(!/^(input|textarea|select)$/i.test(blk.tagName)){
              hv = (blk.innerText || blk.textContent || "").trim().replace(/\s+/g," ").slice(0,90);
              hel = (blk.tagName||"").toLowerCase();
            }
          }
        } catch(_h){}
        push({t:"move", p:path, x:Math.max(0,Math.min(1, e.pageX/pw)), y:Math.round(e.pageY), vw:pw, l:hv, el:hel});
      } catch(err){}
    }, {passive:true});

    // a real enquiry submission - the site's form fires a native submit and only
    // blocks it on a validation failure, so a submit that was NOT prevented is a
    // genuine send. sendBeacon now, because the page navigates straight after.
    document.addEventListener("submit", function(e){
      try {
        if(e.defaultPrevented) return;      // validation blocked it - not a real send
        var f = e.target;
        if(!f || f.tagName !== "FORM") return;
        // Only the enquiry/lead form counts as a conversion. A search box or a
        // filter is still a submit, but it is not an enquiry.
        var action = (f.getAttribute && f.getAttribute("action")) || "";
        var isEnquiry = /lead-capture|enquiry|contact|crm\/webform|bigin/i.test(action)
          || !!f.querySelector('[name*="Mobile" i],[name*="phone" i],[data-mobile],[data-submit]');
        if(!isEnquiry) return;              // a non-enquiry form: don't record, don't convert
        formTouched = true;                 // a submit always keeps the session
        push({t:"form_submit", p:path, l:"enquiry form", ek:"enquiry-form-submit", rg:regionOf(f)});
        send(true);
      } catch(err){}
    }, false);

    // errors the visitor actually hit
    // 1) a broken page - the error views set window.__paPageError to the status
    if(window.__paPageError){
      push({t:"page_error", p:path, l:"HTTP "+window.__paPageError, el:String(window.__paPageError).slice(0,8)});
      send(false);
    }
    // 2) a JavaScript error while they were on the page
    var errCount = 0;
    window.addEventListener("error", function(ev){
      try {
        if(errCount >= 10) return; errCount++;
        var msg = (ev && ev.message) ? ev.message : "script error";
        var src = (ev && ev.filename) ? (ev.filename+":"+(ev.lineno||0)) : "";
        push({t:"error", p:path, l:String(msg).slice(0,180), el:String(src).slice(0,180)});
      } catch(e2){}
    });
    window.addEventListener("unhandledrejection", function(ev){
      try {
        if(errCount >= 10) return; errCount++;
        var r = ev && ev.reason;
        push({t:"error", p:path, l:("promise: "+(r && r.message ? r.message : String(r))).slice(0,180)});
      } catch(e2){}
    });

    // HTML5 video - start, 25/50/75% progress, and complete. (An embedded
    // YouTube/Vimeo iframe is cross-origin and cannot be read; native <video> can.)
    function vlabel(v){
      return ((v.getAttribute && (v.getAttribute("title") || v.getAttribute("aria-label")))
        || (v.currentSrc ? v.currentSrc.split("/").pop() : "") || "video").slice(0,100);
    }
    document.addEventListener("play", function(e){
      var v = e.target;
      if(!v || v.tagName !== "VIDEO") return;
      if(!v.__paSeen){ v.__paSeen = {marks:{}}; push({t:"video_start", p:path, l:vlabel(v)}); }
    }, true);
    document.addEventListener("timeupdate", function(e){
      var v = e.target;
      if(!v || v.tagName !== "VIDEO" || !v.duration || !v.__paSeen) return;
      var pct = v.currentTime / v.duration * 100;
      [25,50,75].forEach(function(m){
        if(pct >= m && !v.__paSeen.marks[m]){ v.__paSeen.marks[m] = 1; push({t:"video_progress", p:path, l:vlabel(v), el:m+"%"}); }
      });
    }, true);
    document.addEventListener("ended", function(e){
      var v = e.target;
      if(v && v.tagName === "VIDEO"){ push({t:"video_complete", p:path, l:vlabel(v)}); send(false); }
    }, true);

    // PHASE 6 - section attention. Time each content slot is genuinely on screen,
    // keyed by data-slot (preferred), else id, else H2 text. An Intersection
    // Observer tracks which sections intersect; a 1-second ticker credits the
    // visible ones ONLY while the tab is visible and the visitor is not idle, and
    // caps each section so an abandoned open tab cannot poison the data.
    var SECTION_CAP = 600, IDLE_MS = 30000;
    var secList = [], secMap = null;
    try {
      var slots = document.querySelectorAll("[data-slot]");
      var secEls = slots.length ? slots : document.querySelectorAll("h2");
      if(secEls.length && "IntersectionObserver" in window){
        secMap = new WeakMap();
        Array.prototype.forEach.call(secEls, function(el, i){
          var key = (el.getAttribute && el.getAttribute("data-slot")) || el.id
            || (el.innerText||"").trim().replace(/\\s+/g," ").slice(0,60) || ("section-"+i);
          var s = {key:key, visible:false, seconds:0, reached:false};
          secList.push(s); secMap.set(el, s);
        });
        var sio = new IntersectionObserver(function(entries){
          entries.forEach(function(e){
            var s = secMap.get(e.target);
            if(s){ s.visible = e.isIntersecting; if(e.isIntersecting) s.reached = true; }
          });
        }, {threshold: 0.02});
        Array.prototype.forEach.call(secEls, function(el){ sio.observe(el); });
        setInterval(function(){
          if(document.visibilityState !== "visible") return;   // tab hidden - no accrual
          if(Date.now() - lastActivity > IDLE_MS) return;       // idle - no accrual
          for(var i=0;i<secList.length;i++){
            if(secList[i].visible && secList[i].seconds < SECTION_CAP) secList[i].seconds++;
          }
        }, 1000);
      }
    } catch(_sec){}
    function flushSections(){
      // Fix C - a section counts only after at least 1 second of genuinely
      // visible time. A page opened in a background tab accrues 0s, so it is
      // never emitted and never counts as "reached".
      for(var i=0;i<secList.length;i++){
        if(secList[i].seconds >= 1){
          push({t:"section", p:path, l:secList[i].key, es:secList[i].seconds});
        }
      }
    }
    setInterval(function(){ if(secList.length){ flushSections(); send(false); } }, 20000);

    // PHASE 6 Fix C - a REAL form-view: the enquiry form entering the viewport,
    // once per page. This gives an honest saw -> started -> submitted denominator
    // instead of assuming every visit saw the form.
    try {
      var fEl = document.querySelector('[data-track="form.enquiry"]')
        || document.querySelector('form [name*="Mobile" i], form [name*="phone" i], form [data-submit]');
      if(fEl && fEl.tagName !== "FORM" && fEl.closest) fEl = fEl.closest("form");
      if(!fEl) fEl = document.querySelector("form");
      if(fEl && "IntersectionObserver" in window){
        var seenForm = false;
        var fio = new IntersectionObserver(function(entries){
          entries.forEach(function(e){
            if(e.isIntersecting && !seenForm){ seenForm = true; push({t:"form_view", p:path}); fio.disconnect(); }
          });
        }, {threshold: 0.2});
        fio.observe(fEl);
      }
    } catch(_fv){}

    // final flush - with a best-effort reason. Internal navigation is recognised
    // server-side (a later page_view in the session); here we can tell idle and
    // off-site apart from a plain close/back.
    function exitReason(){
      if(Date.now() - lastActivity > 30000) return "idle_timeout";
      if(lastExternalClick) return "off_site";
      return "closed_or_back";
    }
    function bye(){ flushSections(); push({t:"exit", p:path, es:engaged, s:maxScroll, l:exitReason()}); send(true); }
    document.addEventListener("visibilitychange", function(){ if(document.visibilityState === "hidden"){ flushSections(); send(true); } });
    window.addEventListener("pagehide", bye);
    window.addEventListener("beforeunload", bye);
  } catch(e){ /* never break the page */ }
})();
JS;
    }
}
