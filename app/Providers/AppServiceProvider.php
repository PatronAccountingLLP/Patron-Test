<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Breadcrumbs render from the layout, like the header and footer, rather
        // than being hand-written into each page. The composer watches every
        // view so it can tell which page is being rendered, then hands the
        // layout the matching trail from resources/breadcrumbs.php.
        \Illuminate\Support\Facades\View::composer('*', \App\Http\View\Composers\BreadcrumbComposer::class);

        // Each request starts with no page recorded. Under php-fpm this is
        // moot, but Octane and queue workers reuse the process.
        \App\Http\View\Composers\BreadcrumbComposer::reset();
    }
}