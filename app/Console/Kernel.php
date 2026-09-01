<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Pull new Google reviews overnight. Incremental, so this is normally a
        // single API call per location; withoutOverlapping stops a slow run
        // being joined by the next one.
        $schedule->command('testimonials:sync')
            ->dailyAt('03:00')
            ->withoutOverlapping()
            ->runInBackground();

        // Once a week, read every review rather than stopping at the first
        // unchanged one. This is what notices a review that was deleted on
        // Google, which an incremental walk cannot see.
        $schedule->command('testimonials:sync --full')
            ->weeklyOn(0, '03:30')
            ->withoutOverlapping();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}