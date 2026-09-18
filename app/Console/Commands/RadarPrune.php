<?php

namespace App\Console\Commands;

use App\Models\VisitorEvent;
use App\Models\VisitorSession;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Phase 8 - retention prune.
 *
 * Deletes raw sessions and their events older than raw_retention_days (default
 * 60), but NEVER a day the rollup has not yet processed: a day older than the
 * window is only pruned once it has rollup rows (proof it was aggregated) OR it
 * had no human sessions at all (nothing to aggregate). A day that had human
 * traffic but no rollup rows is left alone and reported, so a missed rollup
 * night can never silently lose data.
 *
 * The rollup tables are kept forever unless rollup_retention_days is set.
 *
 *   php artisan radar:prune            # use the configured windows
 *   php artisan radar:prune --dry-run  # report what would go, delete nothing
 */
class RadarPrune extends Command
{
    protected $signature = 'radar:prune {--dry-run : report only, delete nothing}';

    protected $description = 'Delete raw visitor data past the retention window (keeps rolled-up days safe)';

    private const IST = 'Asia/Kolkata';

    public function handle(): int
    {
        $dry = (bool) $this->option('dry-run');
        $rawDays = (int) config('analytics.raw_retention_days', 60);
        $cutoffIst = Carbon::now(self::IST)->startOfDay()->subDays($rawDays);
        $cutoffUtc = $cutoffIst->copy()->setTimezone(config('app.timezone'));

        $this->info(sprintf('Prune raw data started before %s IST (keep %d days)%s',
            $cutoffIst->format('Y-m-d'), $rawDays, $dry ? ' [dry-run]' : ''));

        // Which IST days has the rollup produced rows for?
        $rolledDays = DB::table('page_daily')->distinct()->pluck('date')
            ->map(fn ($d) => Carbon::parse($d)->format('Y-m-d'))->flip();

        // Candidate sessions: started before the cutoff.
        $candidates = VisitorSession::where('started_at', '<', $cutoffUtc)
            ->get(['id', 'session_id', 'started_at', 'is_bot']);

        if ($candidates->isEmpty()) {
            $this->info('Nothing past the window.');
            $this->pruneRollup($dry);
            return self::SUCCESS;
        }

        // Group by IST start-day and decide, per day, whether it is safe to prune.
        $byDay = $candidates->groupBy(fn ($s) => Carbon::parse($s->started_at)
            ->setTimezone(self::IST)->format('Y-m-d'));

        $toDelete = [];
        $skippedDays = [];
        foreach ($byDay as $day => $sessions) {
            $rolledUp = $rolledDays->has($day);
            $hadHumans = $sessions->where('is_bot', false)->isNotEmpty();
            if ($rolledUp || ! $hadHumans) {
                foreach ($sessions as $s) {
                    $toDelete[] = $s->session_id;
                }
            } else {
                // Human traffic that was never rolled up - do NOT delete it.
                $skippedDays[$day] = $sessions->count();
            }
        }

        foreach ($skippedDays as $day => $n) {
            $this->warn("  kept {$day}: {$n} sessions had human traffic but no rollup - run `radar:rollup {$day}` first");
        }

        $sessionsPruned = count($toDelete);
        $eventsPruned = 0;

        if ($sessionsPruned && ! $dry) {
            foreach (array_chunk($toDelete, 500) as $chunk) {
                $eventsPruned += VisitorEvent::whereIn('session_id', $chunk)->delete();
                VisitorSession::whereIn('session_id', $chunk)->delete();
            }
        } elseif ($sessionsPruned) {
            $eventsPruned = VisitorEvent::whereIn('session_id', $toDelete)->count();
        }

        $this->info(sprintf('%s %d sessions and %d events%s.',
            $dry ? 'Would delete' : 'Deleted', $sessionsPruned, $eventsPruned,
            $skippedDays ? ', ' . array_sum($skippedDays) . ' kept for safety' : ''));

        $this->pruneRollup($dry);
        return self::SUCCESS;
    }

    /** Optionally prune very old rollup rows (default: keep forever). */
    private function pruneRollup(bool $dry): void
    {
        $days = config('analytics.rollup_retention_days');
        if ($days === null) {
            return;
        }
        $cutoff = Carbon::now(self::IST)->startOfDay()->subDays((int) $days)->format('Y-m-d');
        $tables = ['page_daily', 'page_daily_clicks', 'page_daily_sections', 'page_daily_exits'];
        $total = 0;
        foreach ($tables as $t) {
            $q = DB::table($t)->where('date', '<', $cutoff);
            $total += $dry ? $q->count() : $q->delete();
        }
        $this->info(sprintf('%s %d rollup rows older than %s.', $dry ? 'Would delete' : 'Deleted', $total, $cutoff));
    }
}
