<?php

namespace App\Console\Commands;

use App\Models\VisitorEvent;
use App\Models\VisitorSession;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Phase 5 - the nightly rollup.
 *
 * Writes one row per page, per IST day, per device into the page_daily* tables.
 * A visit belongs to the IST day it STARTED, even if its later events cross
 * midnight. Bot-flagged sessions are excluded from every table. Every stored
 * number is a SUM or COUNT so any date range is a plain SUM between two dates.
 *
 * Idempotent: a day's rows are deleted before re-insert, so re-running is safe.
 *
 *   php artisan radar:rollup            # yesterday IST (the completed day)
 *   php artisan radar:rollup 2026-09-16 # a specific IST day (backfill)
 */
class RadarRollup extends Command
{
    protected $signature = 'radar:rollup {date? : IST day YYYY-MM-DD, default yesterday}';

    protected $description = 'Roll raw visitor sessions up into the page_daily tables for one IST day';

    private const IST = 'Asia/Kolkata';
    private const BOUNCE_SECONDS = 10;

    public function handle(): int
    {
        $day = $this->argument('date')
            ? Carbon::createFromFormat('Y-m-d', $this->argument('date'), self::IST)->startOfDay()
            : Carbon::now(self::IST)->subDay()->startOfDay();
        $dateStr = $day->format('Y-m-d');

        // IST day window, expressed in the app timezone that started_at is stored in.
        $startUtc = $day->copy()->setTimezone(config('app.timezone'));
        $endUtc = $day->copy()->addDay()->setTimezone(config('app.timezone'));

        $this->info("Rolling up {$dateStr} IST …");

        // Humans only; a visit belongs to the day it STARTED.
        $sessions = VisitorSession::where('is_bot', false)
            ->whereBetween('started_at', [$startUtc, $endUtc])
            ->get()
            ->keyBy('session_id');

        if ($sessions->isEmpty()) {
            $this->deleteDay($dateStr);   // still clear, so a day that lost its traffic zeroes out
            $this->info('No human sessions. Day cleared.');
            return self::SUCCESS;
        }

        // All events for those sessions, in order. Their occurred_at may be after
        // midnight; they still belong to the session's start day.
        $events = VisitorEvent::whereIn('session_id', $sessions->keys())
            ->orderBy('session_id')->orderBy('id')
            ->get()
            ->groupBy('session_id');

        $page = [];       // "url\0device" => metrics
        $clicks = [];      // "url\0device\0key" => ['clicks'=>, 'sids'=>[]]
        $sections = [];    // "url\0device\0section" => ['secs'=>, 'sids'=>[]]
        $exits = [];       // "url\0device\0type" => count
        $formStartSids = []; // "url\0device" => [sid,...]
        $layout = [];      // url => version (cached)

        foreach ($sessions as $sid => $s) {
            $device = in_array($s->device, ['mobile', 'desktop', 'tablet'], true) ? $s->device : 'desktop';
            $evs = $events->get($sid, collect());

            // Ordered page_view paths (for exits, bounce, per-page presence).
            $pvPaths = $evs->where('type', 'page_view')->pluck('path')->filter()->values()->all();
            if (! $pvPaths) {
                continue;
            }
            $lastPage = end($pvPaths);

            // Per-page reduction for this session.
            $byPath = $evs->groupBy('path');
            $seenPaths = array_values(array_unique($pvPaths));

            foreach ($seenPaths as $p) {
                if ($p === null || $p === '') {
                    continue;
                }
                $pe = $byPath->get($p, collect());
                $seconds = (int) $pe->max('engaged_seconds');            // per-page engaged
                $read = (int) $pe->max('scroll_pct');                    // per-page read %
                $pk = $p . "\0" . $device;

                if (! isset($page[$pk])) {
                    $page[$pk] = ['url' => $p, 'device' => $device, 'visits' => 0,
                        'total_seconds' => 0, 'total_read_pct' => 0, 'bounced_under_10s' => 0,
                        'exits' => 0, 'form_views' => 0, 'form_starts' => 0, 'form_submits' => 0,
                        'layout_version' => $layout[$p] ?? ($layout[$p] = $this->layoutVersion($p))];
                }
                $page[$pk]['visits']++;
                $page[$pk]['total_seconds'] += max(0, $seconds);
                $page[$pk]['total_read_pct'] += max(0, min(100, $read));
                // PHASE 6 Fix C - form_views is now a REAL count: sessions where the
                // enquiry form actually entered the viewport (form_view event), not
                // an assumption that every visit saw it.
                if ($pe->where('type', 'form_view')->isNotEmpty()) {
                    $page[$pk]['form_views']++;
                }
                $page[$pk]['form_submits'] += $pe->where('type', 'form_submit')->count();

                // form_starts = distinct sessions that focused a field / started the form
                if ($pe->whereIn('type', ['field_focus', 'form_start'])->isNotEmpty()) {
                    $formStartSids[$pk][$sid] = true;
                }

                // Bounce: single-page visit that left under 10s, credited to that page.
                if (count($seenPaths) === 1 && $seconds < self::BOUNCE_SECONDS) {
                    $page[$pk]['bounced_under_10s']++;
                }

                // Clicks by stable key.
                foreach ($pe->where('type', 'click') as $c) {
                    $ek = $c->element_key ?: ($c->label ?: 'unlabelled');
                    $ck = $p . "\0" . $device . "\0" . $ek;
                    if (! isset($clicks[$ck])) {
                        $clicks[$ck] = ['url' => $p, 'device' => $device, 'element_key' => $ek, 'clicks' => 0, 'sids' => []];
                    }
                    $clicks[$ck]['clicks']++;
                    $clicks[$ck]['sids'][$sid] = true;
                }

                // PHASE 6 - section attention from the real IntersectionObserver
                // 'section' events (keyed by data-slot / id / H2). Each carries the
                // running visible-seconds for that section; the session's final
                // value is the MAX. Additive across sessions.
                foreach ($pe->where('type', 'section')->groupBy('label') as $secKey => $secEvs) {
                    $secKey = trim((string) $secKey);
                    if ($secKey === '') {
                        continue;
                    }
                    $secSeconds = (int) $secEvs->max('engaged_seconds');
                    if ($secSeconds < 1) {
                        continue;   // Fix C - under 1s visible does not count as reached
                    }
                    $sk = $p . "\0" . $device . "\0" . $secKey;
                    if (! isset($sections[$sk])) {
                        $sections[$sk] = ['url' => $p, 'device' => $device, 'section_key' => $secKey, 'secs' => 0, 'sids' => []];
                    }
                    $sections[$sk]['secs'] += $secSeconds;
                    $sections[$sk]['sids'][$sid] = true;   // reached the section at all
                }
            }

            // Exits: every page the session was on records how it was left.
            for ($i = 0; $i < count($pvPaths); $i++) {
                $p = $pvPaths[$i];
                $device2 = $device;
                if ($i < count($pvPaths) - 1) {
                    $type = 'navigated_away';
                } else {
                    // terminal page - use the exit event's reason if present.
                    $reason = optional($byPath->get($p, collect())->where('type', 'exit')->last())->label;
                    $type = in_array($reason, ['idle_timeout', 'off_site', 'closed_or_back'], true) ? $reason : 'closed_or_back';
                    // page_daily.exits scalar = terminal exits (left the site here)
                    $pk = $p . "\0" . $device2;
                    if (isset($page[$pk])) {
                        $page[$pk]['exits']++;
                    }
                }
                $xk = $p . "\0" . $device2 . "\0" . $type;
                $exits[$xk] = ($exits[$xk] ?? ['url' => $p, 'device' => $device2, 'exit_type' => $type, 'count' => 0]);
                $exits[$xk]['count']++;
            }
        }

        // Fold distinct form-starters in.
        foreach ($formStartSids as $pk => $sidSet) {
            if (isset($page[$pk])) {
                $page[$pk]['form_starts'] = count($sidSet);
            }
        }

        // Write atomically & idempotently.
        DB::transaction(function () use ($dateStr, $page, $clicks, $sections, $exits) {
            $this->deleteDay($dateStr);
            $now = now();

            $this->chunkInsert('page_daily', array_map(fn ($r) => [
                'date' => $dateStr, 'url' => $r['url'], 'device' => $r['device'],
                'visits' => $r['visits'], 'total_seconds' => $r['total_seconds'],
                'total_read_pct' => $r['total_read_pct'], 'bounced_under_10s' => $r['bounced_under_10s'],
                'exits' => $r['exits'], 'form_views' => $r['form_views'],
                'form_starts' => $r['form_starts'], 'form_submits' => $r['form_submits'],
                'layout_version' => $r['layout_version'], 'created_at' => $now, 'updated_at' => $now,
            ], array_values($page)));

            $this->chunkInsert('page_daily_clicks', array_map(fn ($r) => [
                'date' => $dateStr, 'url' => $r['url'], 'device' => $r['device'],
                'element_key' => $r['element_key'], 'clicks' => $r['clicks'],
                'clicked_sessions' => count($r['sids']), 'created_at' => $now, 'updated_at' => $now,
            ], array_values($clicks)));

            $this->chunkInsert('page_daily_sections', array_map(fn ($r) => [
                'date' => $dateStr, 'url' => $r['url'], 'device' => $r['device'],
                'section_key' => $r['section_key'], 'total_visible_seconds' => $r['secs'],
                'sessions_reaching_section' => count($r['sids']), 'created_at' => $now, 'updated_at' => $now,
            ], array_values($sections)));

            $this->chunkInsert('page_daily_exits', array_map(fn ($r) => [
                'date' => $dateStr, 'url' => $r['url'], 'device' => $r['device'],
                'exit_type' => $r['exit_type'], 'count' => $r['count'],
                'created_at' => $now, 'updated_at' => $now,
            ], array_values($exits)));
        });

        $this->info(sprintf('Done: %d page rows, %d click rows, %d section rows, %d exit rows.',
            count($page), count($clicks), count($sections), count($exits)));
        return self::SUCCESS;
    }

    private function deleteDay(string $dateStr): void
    {
        foreach (['page_daily', 'page_daily_clicks', 'page_daily_sections', 'page_daily_exits'] as $t) {
            DB::table($t)->where('date', $dateStr)->delete();
        }
    }

    private function chunkInsert(string $table, array $rows): void
    {
        foreach (array_chunk($rows, 200) as $c) {
            if ($c) {
                DB::table($table)->insert($c);
            }
        }
    }

    /**
     * layout_version - the day the page's content last changed, so a report can
     * be cut at "since the page last changed".
     *
     * The estate is ~600+ staticPage Blade files and ~cityPages Blade files
     * against only a handful of DB-backed routes, so the Blade FILE is the real
     * source of "when did this page change". Resolve the view that backs the URL
     * (PageController renders frontend.staticPage.{slug} / frontend.cityPages.{slug})
     * and use its modification time. Fall back to the CMS updated_at for
     * DB-backed pages and blog posts. Null only when nothing matches.
     */
    private function layoutVersion(string $url): ?string
    {
        $slug = trim(parse_url($url, PHP_URL_PATH) ?? $url, '/');
        if ($slug === '') {
            $slug = 'index';                                  // home
        }
        $hyphen = str_replace('/', '-', $slug);               // internal-audit/pune -> internal-audit-pune
        $nested = str_replace('-', '/', $slug);               // and the nested form
        $last = str_contains($slug, '/') ? substr(strrchr($slug, '/'), 1) : $slug;

        $base = resource_path('views/frontend');
        $files = [];
        if ($slug === 'index') {
            $files[] = "{$base}/pages/index.blade.php";        // home only
        } else {
            foreach (['staticPage', 'cityPages', 'pages'] as $dir) {
                foreach (array_unique([$hyphen, $slug, $nested, $last]) as $cand) {
                    $files[] = "{$base}/{$dir}/{$cand}.blade.php";
                }
            }
        }

        // Pick the matching Blade file (newest by mtime if several forms exist).
        $match = null; $matchMtime = -1;
        foreach ($files as $f) {
            if (is_file($f) && filemtime($f) > $matchMtime) {
                $match = $f; $matchMtime = filemtime($f);
            }
        }
        if ($match) {
            // Fix B - the GIT commit date is the real "when the page last changed":
            // it survives a pull, checkout, fresh clone and a file-copy promotion,
            // none of which preserve mtime. Fall back to mtime, then to the CMS.
            $git = $this->gitDate($match);
            if ($git) {
                return $git;
            }
            return date('Y-m-d', $matchMtime);
        }

        // DB-backed pages and blog posts: content lives in the row, so its
        // updated_at is the version.
        foreach (['pages', 'posts'] as $table) {
            try {
                if (! DB::getSchemaBuilder()->hasTable($table)) {
                    continue;
                }
                $ts = DB::table($table)->where('slug', $last)->value('updated_at');
                if ($ts) {
                    return Carbon::parse($ts)->format('Y-m-d');
                }
            } catch (\Throwable $e) {
                // best-effort
            }
        }
        return null;
    }

    /** Last commit date (Y-m-d) that touched a file, or null if git can't tell. */
    private function gitDate(string $absPath): ?string
    {
        static $cache = [];
        if (array_key_exists($absPath, $cache)) {
            return $cache[$absPath];
        }
        $rel = str_replace('\\', '/', ltrim(str_replace(base_path(), '', $absPath), '/\\'));
        try {
            $p = \Symfony\Component\Process\Process::fromShellCommandline(
                'git log -1 --format=%cI -- ' . escapeshellarg($rel),
                base_path()
            );
            $p->setTimeout(5);
            $p->run();
            $out = trim($p->getOutput());
            if ($p->isSuccessful() && $out !== '') {
                return $cache[$absPath] = Carbon::parse($out)->setTimezone(self::IST)->format('Y-m-d');
            }
        } catch (\Throwable $e) {
            // fall through to null - caller uses mtime
        }
        return $cache[$absPath] = null;
    }
}
