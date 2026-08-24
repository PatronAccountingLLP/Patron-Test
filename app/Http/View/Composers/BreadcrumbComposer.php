<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

/**
 * Supplies the breadcrumb trail to the layouts, so pages do not have to.
 *
 * Breadcrumbs used to be hand-written into every page - 941 of them, in four
 * different markup styles. This makes them behave like the header and footer:
 * rendered once by the layout, from one partial, with one design.
 *
 * The trail cannot be derived from the URL. /accounting-services is a flat path
 * yet belongs under "Accounting & Bookkeeping Services", and only the page knew
 * that. So resources/breadcrumbs.php holds the trails harvested from the markup
 * the pages already carried, keyed by view name.
 *
 * Why view name rather than URL: one Blade view can serve many URLs (the city
 * pages, the code directories), and Laravel hands us the view name for free.
 *
 * Precedence:
 *   1. $breadcrumbs already set on the view (a controller or @php block wins,
 *      and setting it to [] suppresses the trail entirely)
 *   2. the harvested map
 *   3. nothing - no map entry means no breadcrumb, which is correct for the
 *      homepage and for pages that never had one
 */
class BreadcrumbComposer
{
    /** @var array<string,array<int,array<string,string>>>|null */
    private static ?array $map = null;

    /**
     * The page view being rendered, captured before the layout composes.
     *
     * With @extends, Blade renders the child first and the layout last, so by
     * the time the layout composes, this holds the page - not the layout, and
     * not any partial the page pulled in.
     */
    private static ?string $pageView = null;

    /** Views that are never the page itself. */
    private const NOT_A_PAGE = ['layouts.', 'partials.', 'components.', 'errors.'];

    public function compose(View $view): void
    {
        $name = $view->getName();

        if (!self::isLayout($name)) {
            if (!self::isChrome($name) && self::$pageView === null) {
                self::$pageView = $name;
            }
            return;
        }

        // Composing a layout: resolve the trail for the page it is wrapping.
        $data = $view->getData();
        if (array_key_exists('breadcrumbs', $data)) {
            $view->with('paBreadcrumbs', is_array($data['breadcrumbs']) ? $data['breadcrumbs'] : []);
            return;
        }

        $view->with('paBreadcrumbs', self::trailFor(self::$pageView));
    }

    /** @return array<int,array<string,string>> */
    public static function trailFor(?string $viewName): array
    {
        if ($viewName === null) {
            return [];
        }

        if (self::$map === null) {
            $path = resource_path('breadcrumbs.php');
            self::$map = is_file($path) ? (array) require $path : [];
        }

        $trail = self::$map[$viewName] ?? [];

        // A trail of just "Home" tells the reader nothing; drop it.
        return count($trail) > 1 ? $trail : [];
    }

    /**
     * Reset between requests. Without this the first page rendered in a queue
     * worker or a test run would leak into every later one.
     */
    public static function reset(): void
    {
        self::$pageView = null;
    }

    private static function isLayout(string $name): bool
    {
        return str_starts_with($name, 'layouts.');
    }

    private static function isChrome(string $name): bool
    {
        foreach (self::NOT_A_PAGE as $prefix) {
            if (str_starts_with($name, $prefix)) {
                return true;
            }
        }
        return false;
    }
}
