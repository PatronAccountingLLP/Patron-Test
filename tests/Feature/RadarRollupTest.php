<?php

namespace Tests\Feature;

use App\Models\VisitorEvent;
use App\Models\VisitorSession;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * Phase 5 - proof that summing the daily rollup rows over a date range gives the
 * SAME answer as computing straight from the raw sessions for that range.
 *
 * Covers a midnight-crossing session, a bot session (must be excluded), and a
 * day with zero traffic. Runs against an in-memory SQLite DB with only the
 * tracker tables, so it never touches real data.
 */
class RadarRollupTest extends TestCase
{
    private const IST = 'Asia/Kolkata';

    protected function setUp(): void
    {
        parent::setUp();
        // Build only the tracker tables (self-contained migrations).
        foreach ([
            '2026_09_16_000001_create_visitor_tracking_tables.php',
            '2026_09_16_000002_add_region_to_visitor_events.php',
            '2026_09_16_000003_add_attribution_and_conversion_to_sessions.php',
            '2026_09_18_000001_add_capture_fixes_to_visitor_tables.php',
            '2026_09_18_000002_create_page_daily_rollup_tables.php',
        ] as $file) {
            (require database_path('migrations/' . $file))->up();
        }
    }

    /** IST datetime -> the app-timezone value stored in started_at/occurred_at. */
    private function ist(string $ymdHis)
    {
        return \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $ymdHis, self::IST)
            ->setTimezone(config('app.timezone'));
    }

    private function mkSession(array $attrs): VisitorSession
    {
        return VisitorSession::create(array_merge([
            'visitor_id' => 'v-' . $attrs['session_id'],
            'ip' => '127.0.0.0', 'device' => 'desktop', 'is_bot' => false,
            'page_count' => 0, 'click_count' => 0, 'engaged_seconds' => 0, 'max_scroll_pct' => 0,
        ], $attrs));
    }

    private function ev(string $sid, string $type, array $a = []): void
    {
        VisitorEvent::insert(array_merge([
            'session_id' => $sid, 'visitor_id' => 'v-' . $sid, 'type' => $type,
            'path' => null, 'scroll_pct' => null, 'engaged_seconds' => null,
            'element_key' => null, 'label' => null,
            'occurred_at' => now(), 'created_at' => now(),
        ], $a));
    }

    private function seedData(): void
    {
        // --- Session A: D1 desktop, 2 pages, an enquiry submit ---
        $this->mkSession(['session_id' => 'A', 'device' => 'desktop', 'started_at' => $this->ist('2026-06-01 10:00:00')]);
        $this->ev('A', 'page_view', ['path' => '/gst',     'occurred_at' => $this->ist('2026-06-01 10:00:00')]);
        $this->ev('A', 'scroll',    ['path' => '/gst',     'scroll_pct' => 60, 'engaged_seconds' => 20]);
        $this->ev('A', 'page_view', ['path' => '/contact', 'occurred_at' => $this->ist('2026-06-01 10:00:30')]);
        $this->ev('A', 'scroll',    ['path' => '/contact', 'scroll_pct' => 40, 'engaged_seconds' => 30]);
        $this->ev('A', 'form_submit', ['path' => '/contact', 'label' => 'enquiry form']);
        // Phase 6 sections on /gst: overview read a lot, fees scrolled past quickly.
        $this->ev('A', 'section', ['path' => '/gst', 'label' => 'overview', 'engaged_seconds' => 12]);
        $this->ev('A', 'section', ['path' => '/gst', 'label' => 'fees',     'engaged_seconds' => 2]);  // quick scroll-past
        $this->ev('A', 'form_view', ['path' => '/contact']);   // saw the form
        $this->ev('A', 'exit',      ['path' => '/contact', 'label' => 'closed_or_back', 'scroll_pct' => 40, 'engaged_seconds' => 30]);

        // --- Session B: MIDNIGHT-CROSSING. Starts 23:58 IST on D1; its exit event
        //     lands after midnight (D2) but the visit belongs to D1. Mobile,
        //     single page, under 10s -> a bounce. ---
        $this->mkSession(['session_id' => 'B', 'device' => 'mobile', 'started_at' => $this->ist('2026-06-01 23:58:00')]);
        $this->ev('B', 'page_view', ['path' => '/stock', 'occurred_at' => $this->ist('2026-06-01 23:59:00')]);
        $this->ev('B', 'scroll',    ['path' => '/stock', 'scroll_pct' => 100, 'engaged_seconds' => 5]);
        // Background tab: the section was reached but accrued ZERO seconds (the
        // client pauses accrual while hidden). It must count as reached, add 0s.
        $this->ev('B', 'section',   ['path' => '/stock', 'label' => 'overview', 'engaged_seconds' => 0]);
        $this->ev('B', 'exit',      ['path' => '/stock', 'label' => 'closed_or_back', 'scroll_pct' => 100, 'engaged_seconds' => 5,
                                     'occurred_at' => $this->ist('2026-06-02 00:01:00')]); // after midnight

        // --- Session C: D1 desktop BOT. Must be excluded from every table. ---
        $this->mkSession(['session_id' => 'C', 'device' => 'desktop', 'is_bot' => true, 'bot_reason' => 'ua-match',
                        'started_at' => $this->ist('2026-06-01 12:00:00')]);
        $this->ev('C', 'page_view', ['path' => '/gst', 'occurred_at' => $this->ist('2026-06-01 12:00:00')]);
        $this->ev('C', 'scroll',    ['path' => '/gst', 'scroll_pct' => 90, 'engaged_seconds' => 99]);

        // D2 (2026-06-02) has NO human session that STARTED on it -> zero day.
    }

    /** Independent "truth": per-page metrics straight from raw human sessions. */
    private function rawTruth(string $fromIst, string $toIst): array
    {
        $from = $this->ist($fromIst . ' 00:00:00');
        $to = $this->ist($toIst . ' 23:59:59');
        $sessions = VisitorSession::where('is_bot', false)
            ->whereBetween('started_at', [$from, $to])->get();

        $visits = 0; $seconds = 0; $read = 0; $submits = 0; $bounces = 0; $exits = 0;
        foreach ($sessions as $s) {
            $evs = VisitorEvent::where('session_id', $s->session_id)->orderBy('id')->get();
            $pv = $evs->where('type', 'page_view')->pluck('path')->all();
            $paths = array_values(array_unique($pv));
            foreach ($paths as $p) {
                $pe = $evs->where('path', $p);
                $visits++;
                $seconds += (int) $pe->max('engaged_seconds');
                $read += (int) $pe->max('scroll_pct');
                $submits += $pe->where('type', 'form_submit')->count();
                if (count($paths) === 1 && (int) $pe->max('engaged_seconds') < 10) {
                    $bounces++;
                }
            }
            $exits++; // one terminal exit per session
        }
        return compact('visits', 'seconds', 'read', 'submits', 'bounces', 'exits');
    }

    private function dailySum(string $from, string $to): array
    {
        $q = DB::table('page_daily')->whereBetween('date', [$from, $to]);
        return [
            'visits'  => (int) $q->sum('visits'),
            'seconds' => (int) $q->sum('total_seconds'),
            'read'    => (int) $q->sum('total_read_pct'),
            'submits' => (int) $q->sum('form_submits'),
            'bounces' => (int) $q->sum('bounced_under_10s'),
            'exits'   => (int) $q->sum('exits'),
        ];
    }

    public function test_daily_sum_equals_raw_over_range(): void
    {
        $this->seedData();
        Artisan::call('radar:rollup', ['date' => '2026-06-01']);
        Artisan::call('radar:rollup', ['date' => '2026-06-02']);

        $raw = $this->rawTruth('2026-06-01', '2026-06-02');
        $sum = $this->dailySum('2026-06-01', '2026-06-02');

        // THE core proof: the rollup range-sum equals the raw truth, field by field.
        $this->assertSame($raw, $sum, 'Rollup range-sum must equal the raw computation');

        // And the concrete expected values (hand-computed from the seed):
        $this->assertSame(3, $sum['visits']);      // /gst, /contact, /stock (bot's /gst excluded)
        $this->assertSame(55, $sum['seconds']);    // 20 + 30 + 5
        $this->assertSame(200, $sum['read']);      // 60 + 40 + 100
        $this->assertSame(1, $sum['submits']);     // the enquiry
        $this->assertSame(1, $sum['bounces']);     // /stock, single page, 5s
        $this->assertSame(2, $sum['exits']);       // 2 human sessions -> 2 terminal exits (bot excluded)
    }

    public function test_bot_session_is_excluded(): void
    {
        $this->seedData();
        Artisan::call('radar:rollup', ['date' => '2026-06-01']);

        // The bot also visited /gst; /gst desktop must still show only 1 visit.
        $gst = DB::table('page_daily')->where('date', '2026-06-01')->where('url', '/gst')->where('device', 'desktop')->first();
        $this->assertNotNull($gst);
        $this->assertSame(1, (int) $gst->visits);          // bot not counted
        $this->assertSame(20, (int) $gst->total_seconds);  // bot's 99s not added
    }

    public function test_midnight_session_counts_to_start_day(): void
    {
        $this->seedData();
        Artisan::call('radar:rollup', ['date' => '2026-06-01']);
        Artisan::call('radar:rollup', ['date' => '2026-06-02']);

        // Session B started 23:58 on D1 and exited after midnight on D2. It belongs to D1.
        $d1 = DB::table('page_daily')->where('date', '2026-06-01')->where('url', '/stock')->first();
        $d2 = DB::table('page_daily')->where('date', '2026-06-02')->where('url', '/stock')->first();
        $this->assertNotNull($d1);
        $this->assertSame(1, (int) $d1->visits);
        $this->assertNull($d2, '/stock must not appear on D2');
    }

    public function test_zero_traffic_day_is_empty(): void
    {
        $this->seedData();
        Artisan::call('radar:rollup', ['date' => '2026-06-02']);
        $this->assertSame(0, DB::table('page_daily')->where('date', '2026-06-02')->count());
    }

    public function test_section_daily_sum_equals_raw(): void
    {
        $this->seedData();
        Artisan::call('radar:rollup', ['date' => '2026-06-01']);

        // Independent raw truth for sections: per (session,url,section) take MAX
        // seconds, sum across sessions; sessions_reaching = distinct sessions.
        $sessions = VisitorSession::where('is_bot', false)->get();
        $rawSecs = []; $rawReach = [];
        foreach ($sessions as $s) {
            $evs = VisitorEvent::where('session_id', $s->session_id)->where('type', 'section')->get();
            foreach ($evs->groupBy(fn ($e) => $e->path . '|' . $e->label) as $key => $g) {
                $secs = (int) $g->max('engaged_seconds');
                if ($secs < 1) {
                    continue;   // Fix C - under 1s does not count as reached
                }
                $rawSecs[$key] = ($rawSecs[$key] ?? 0) + $secs;
                $rawReach[$key] = ($rawReach[$key] ?? 0) + 1;
            }
        }

        $daily = DB::table('page_daily_sections')->get();
        $daySecs = []; $dayReach = [];
        foreach ($daily as $r) {
            $daySecs[$r->url . '|' . $r->section_key] = (int) $r->total_visible_seconds;
            $dayReach[$r->url . '|' . $r->section_key] = (int) $r->sessions_reaching_section;
        }

        $this->assertSame($rawSecs, $daySecs, 'Section seconds: daily SUM must equal raw');
        $this->assertSame($rawReach, $dayReach, 'Sections reached: daily must equal raw');

        // Concrete: /gst overview read 12s; fees scrolled past = 2s; /stock
        // overview in a background tab = 0s -> NOT reached, absent from the table.
        $this->assertSame(12, $daySecs['/gst|overview']);
        $this->assertSame(2, $daySecs['/gst|fees']);              // quick scroll-past accrues little
        $this->assertArrayNotHasKey('/stock|overview', $daySecs); // Fix C: background tab never counts
        $this->assertArrayNotHasKey('/stock|overview', $dayReach);
    }

    public function test_form_views_is_real_not_visits(): void
    {
        $this->seedData();
        Artisan::call('radar:rollup', ['date' => '2026-06-01']);

        // Only /contact had a form_view event (session A). /gst had visits but no
        // form_view, so form_views must be 0 there - not equal to visits.
        $contact = DB::table('page_daily')->where('url', '/contact')->first();
        $gst = DB::table('page_daily')->where('url', '/gst')->first();
        $this->assertSame(1, (int) $contact->form_views);   // real: the form was seen
        $this->assertSame(0, (int) $gst->form_views);       // NOT visits (which is 1)
        $this->assertSame(1, (int) $gst->visits);
    }

    public function test_prune_deletes_old_raw_but_keeps_rolled_up_daily(): void
    {
        config(['analytics.raw_retention_days' => 60]);
        $old = \Illuminate\Support\Carbon::now(self::IST)->subDays(90);   // well past the window
        $oldDay = $old->format('Y-m-d');

        // An old session with events, and its already-computed daily row.
        $this->mkSession(['session_id' => 'OLD', 'device' => 'desktop',
            'started_at' => $old->copy()->setTimezone(config('app.timezone'))]);
        $this->ev('OLD', 'page_view', ['path' => '/gst', 'occurred_at' => $old->copy()->setTimezone(config('app.timezone'))]);
        $this->ev('OLD', 'scroll',    ['path' => '/gst', 'scroll_pct' => 50, 'engaged_seconds' => 20]);
        DB::table('page_daily')->insert([
            'date' => $oldDay, 'url' => '/gst', 'device' => 'desktop', 'visits' => 1,
            'total_seconds' => 20, 'total_read_pct' => 50, 'bounced_under_10s' => 0, 'exits' => 1,
            'form_views' => 0, 'form_starts' => 0, 'form_submits' => 0, 'layout_version' => null,
            'created_at' => now(), 'updated_at' => now(),
        ]);

        // A recent session that must survive.
        $this->mkSession(['session_id' => 'NEW', 'device' => 'desktop', 'started_at' => now()->subDay()]);
        $this->ev('NEW', 'page_view', ['path' => '/gst']);

        Artisan::call('radar:prune');

        // Old raw gone, its daily row untouched, recent raw kept.
        $this->assertFalse(VisitorSession::where('session_id', 'OLD')->exists(), 'old session pruned');
        $this->assertSame(0, VisitorEvent::where('session_id', 'OLD')->count(), 'old events pruned');
        $this->assertSame(1, DB::table('page_daily')->where('date', $oldDay)->count(), 'daily row survives');
        $this->assertTrue(VisitorSession::where('session_id', 'NEW')->exists(), 'recent session kept');
    }

    public function test_prune_keeps_old_human_day_with_no_rollup(): void
    {
        config(['analytics.raw_retention_days' => 60]);
        $old = \Illuminate\Support\Carbon::now(self::IST)->subDays(90);
        // Human traffic, but NO page_daily row for that day (rollup never ran).
        $this->mkSession(['session_id' => 'UNROLLED', 'device' => 'desktop',
            'started_at' => $old->copy()->setTimezone(config('app.timezone'))]);
        $this->ev('UNROLLED', 'page_view', ['path' => '/gst']);

        Artisan::call('radar:prune');

        $this->assertTrue(VisitorSession::where('session_id', 'UNROLLED')->exists(),
            'a human day with no rollup must NOT be pruned');
    }

    public function test_rollup_is_idempotent(): void
    {
        $this->seedData();
        Artisan::call('radar:rollup', ['date' => '2026-06-01']);
        $first = $this->dailySum('2026-06-01', '2026-06-01');
        Artisan::call('radar:rollup', ['date' => '2026-06-01']);
        Artisan::call('radar:rollup', ['date' => '2026-06-01']);
        $third = $this->dailySum('2026-06-01', '2026-06-01');
        $this->assertSame($first, $third, 'Re-running a day must not change the totals');
    }
}
