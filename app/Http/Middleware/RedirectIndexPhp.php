<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * 301 /index.php to /.
 *
 * This is GSC's entire "Duplicate without user-selected canonical" row: /index.php
 * serves the homepage on a second URL with no canonical pointing home, so Google sees
 * two homepages and picks one itself.
 *
 * It cannot be done with a route. The web server executes index.php directly for that
 * path, so routing never sees "/index.php" - Laravel's Request::path() has already
 * normalised it to "/". Middleware works because Laravel still boots, and the raw
 * REQUEST_URI is intact at that point.
 *
 * Loop safety: the comparison is against the literal path "/index.php" only, taken
 * from REQUEST_URI with the query string stripped. A request for "/" never matches,
 * so the redirect target can never re-trigger the rule. Internal Apache rewrites of
 * "/" to index.php do not change REQUEST_URI, which stays "/".
 *
 * The query string is preserved so campaign parameters survive the hop.
 */
class RedirectIndexPhp
{
    public function handle(Request $request, Closure $next)
    {
        $uri = $request->server('REQUEST_URI', '');
        $path = strtok($uri, '?');

        if ($path === '/index.php' || $path === '/index.php/') {
            $query = $request->getQueryString();

            // Build the Location header from scheme+host directly. Do NOT use
            // redirect('/') or url('/') here: when the request arrives as /index.php
            // the framework's base URL already contains "/index.php", so the helper
            // resolves "/" back to "/index.php" and the response redirects to itself.
            // That is a real 50-hop loop, not a theoretical one - it was caught in
            // testing before this shipped.
            $target = $request->getSchemeAndHttpHost() . '/' . ($query ? '?' . $query : '');

            return new \Illuminate\Http\RedirectResponse($target, 301);
        }

        return $next($request);
    }
}
