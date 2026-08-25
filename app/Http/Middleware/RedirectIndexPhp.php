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
 * The query string is dropped: every form of the URL lands on the bare homepage.
 * See the note in handle() for why that is safe here and when to reverse it.
 */
class RedirectIndexPhp
{
    public function handle(Request $request, Closure $next)
    {
        $uri = $request->server('REQUEST_URI', '');
        $path = strtok($uri, '?');

        if ($path === '/index.php' || $path === '/index.php/') {
            // Everything lands on the bare homepage. The query string is dropped
            // deliberately.
            //
            // Passing it through is the usual convention, because a redirect that
            // eats ?gclid= or ?utm_source= costs you the attribution for that visit.
            // That reasoning does not apply here: /index.php took one pageview in the
            // ninety days to 2026-08-25 and no campaign parameter has ever been seen
            // on it. Nothing advertises this URL, so there is no attribution to lose,
            // and one clean destination is worth more than a parameter nobody sends.
            //
            // If /index.php ever starts appearing in campaign links, restore the
            // pass-through: read the RAW query off REQUEST_URI, never
            // $request->getQueryString(), which re-sorts the parameters and lands the
            // visitor on a URL they did not ask for.

            // Build the Location header from scheme+host directly. Do NOT use
            // redirect('/') or url('/') here: when the request arrives as /index.php
            // the framework's base URL already contains "/index.php", so the helper
            // resolves "/" back to "/index.php" and the response redirects to itself.
            // That is a real 50-hop loop, not a theoretical one - it was caught in
            // testing before this shipped.
            $target = $request->getSchemeAndHttpHost() . '/';

            return new \Illuminate\Http\RedirectResponse($target, 301);
        }

        return $next($request);
    }
}
