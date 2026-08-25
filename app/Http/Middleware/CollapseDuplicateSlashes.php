<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * 301 any path containing a repeated slash to the single-slash form.
 *
 * //virtual-cfo-services/ and //hsn-code/62063090 both reach the site from
 * external links - 11 such URLs took 12 pageviews in the 90 days to 2026-08-25.
 * They are not generated here: the sitemaps are clean and no layout or partial
 * emits one, so they arrive from other people's links, pasted URLs and scrapers.
 *
 * Before this, they split two ways:
 *   //page/   301'd to /page, but only by accident - the trailing-slash rule
 *             happened to rebuild the path and dropped the extra slash with it
 *   //page    404'd, because nothing normalised it at all
 *
 * The second case is the one that matters: three real visitors hit a 404 on
 * pages that exist. This makes both forms behave the same.
 *
 * Why middleware rather than nginx: nginx merges slashes for its own location
 * matching but passes REQUEST_URI through untouched, so PHP still sees the
 * original. Keeping it here means the rule is in git, reviewable, and deploys
 * with the app instead of living in a server config nothing tracks.
 *
 * Loop safety: the redirect target is built by collapsing runs of slashes, so
 * it can never itself contain one - a request for the target cannot match the
 * condition again. The query string is passed through raw, in the order it
 * arrived, for the same reason as RedirectIndexPhp.
 *
 * Protocol-relative URLs are not a concern here: this only ever inspects the
 * path of a request that already reached this application.
 */
class CollapseDuplicateSlashes
{
    public function handle(Request $request, Closure $next)
    {
        $uri = $request->server('REQUEST_URI', '');
        $path = strtok($uri, '?');

        if ($path === false || strpos($path, '//') === false) {
            return $next($request);
        }

        $clean = preg_replace('#/{2,}#', '/', $path);

        // Nothing to do if the collapse changed nothing, or produced an empty
        // path. Both are defensive: preg_replace returns null on failure.
        if ($clean === null || $clean === '' || $clean === $path) {
            return $next($request);
        }

        $query = strstr($uri, '?');
        $query = $query === false ? '' : substr($query, 1);

        $target = $request->getSchemeAndHttpHost() . $clean . ($query ? '?' . $query : '');

        return new \Illuminate\Http\RedirectResponse($target, 301);
    }
}
