<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Adds the response security headers the site was serving none of.
 *
 * nginx serves the site and its config is not in this repo, so these have to be
 * set in PHP to be reviewable and deployable the same way everything else is.
 * That means they only reach responses Laravel renders - static files served
 * straight off disk by nginx do not get them. Covering those too is an nginx
 * job, separately.
 *
 * Each header is set only when absent, so a route that needs its own value
 * (an embeddable widget wanting a different frame policy, say) can set one and
 * keep it.
 */
class SecurityHeaders
{
    /**
     * Where the pages actually load things from, measured off the live HTML
     * rather than assumed. Keep in sync when a new third party is added, or
     * its resources are blocked with no visible error beyond the console.
     */
    private const SCRIPT_SRC = [
        'https://cdn.jsdelivr.net',
        'https://code.jquery.com',
        'https://news.google.com',
        'https://www.googletagmanager.com',
        'https://tagmanager.google.com',
        'https://www.google-analytics.com',
        'https://*.google-analytics.com',
        'https://www.google.com',
        'https://www.gstatic.com',
        'https://bigin.zoho.in',
        'https://*.zoho.in',
        'https://*.zohostatic.in',
        // Google Ads. These never appear in the HTML - the GTM container
        // (GTM-M6G3R8G) loads them at runtime, so they are read out of the
        // container itself rather than the page.
        'https://www.googleadservices.com',
        'https://adservice.google.com',
        'https://pagead2.googlesyndication.com',
        'https://*.googlesyndication.com',
        'https://*.g.doubleclick.net',
        'https://*.doubleclick.net',
    ];

    private const STYLE_SRC = [
        'https://cdn.jsdelivr.net',
        // Font Awesome 6.4.0, loaded by the /accounting-standards pages only.
        'https://cdnjs.cloudflare.com',
        'https://fonts.googleapis.com',
        'https://tagmanager.google.com',
        'https://*.zohostatic.in',
    ];

    private const FONT_SRC = [
        'https://fonts.gstatic.com',
        'https://cdn.jsdelivr.net',
        // Font Awesome's stylesheet pulls its icon fonts from the same host.
        'https://cdnjs.cloudflare.com',
    ];

    private const FRAME_SRC = [
        'https://www.googletagmanager.com',
        'https://www.google.com',
        'https://bigin.zoho.in',
        'https://www.youtube.com',
        'https://www.youtube-nocookie.com',
        // The conversion linker drops an iframe on these.
        'https://td.doubleclick.net',
        'https://*.doubleclick.net',
        'https://www.googleadservices.com',
    ];

    private const CONNECT_SRC = [
        'https://www.google-analytics.com',
        'https://*.google-analytics.com',
        'https://*.analytics.google.com',
        'https://*.googletagmanager.com',
        'https://bigin.zoho.in',
        // Conversion and remarketing beacons fired by the GTM container.
        'https://www.googleadservices.com',
        'https://adservice.google.com',
        'https://pagead2.googlesyndication.com',
        'https://*.googlesyndication.com',
        'https://*.doubleclick.net',
        'https://cct.google',
        'https://*.google.com',
    ];

    /** The Bigin webform the enquiry forms post to. */
    private const FORM_ACTION = [
        'https://bigin.zoho.in',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $headers = [
            // Trust the Content-Type we send; do not sniff a different one.
            'X-Content-Type-Options' => 'nosniff',

            // SAMEORIGIN rather than DENY: /tools frames its own bundle, and
            // DENY would break the tools hub.
            'X-Frame-Options' => 'SAMEORIGIN',

            // Send the full URL to ourselves, only the origin cross-site, and
            // nothing at all when downgrading to http.
            'Referrer-Policy' => 'strict-origin-when-cross-origin',

            // Nothing on the site asks for these.
            'Permissions-Policy' => 'camera=(), microphone=(), geolocation=(), payment=(), usb=()',
        ];

        // HSTS is the one header here that cannot be taken back: once a browser
        // sees it, it refuses http for this host until max-age expires. It ships
        // deliberately short so a mistake ages out in minutes, and only over
        // https (browsers ignore it on http anyway). Raise HSTS_MAX_AGE once
        // every host on the domain is confirmed https-only. includeSubDomains
        // and preload are left off until then - both widen the blast radius.
        if ($request->secure()) {
            $headers['Strict-Transport-Security'] =
                'max-age=' . (int) env('HSTS_MAX_AGE', 300);
        }

        $headers[$this->cspHeaderName()] = $this->contentSecurityPolicy();

        foreach ($headers as $name => $value) {
            if (! $response->headers->has($name)) {
                $response->headers->set($name, $value);
            }
        }

        return $response;
    }

    /**
     * Report-Only sends the policy without enforcing it, which is how to find
     * out what a policy would break before it breaks it. Note that an audit
     * looking for Content-Security-Policy will not count the Report-Only
     * header - it is the rehearsal, not the fix.
     */
    private function cspHeaderName(): string
    {
        return env('CSP_REPORT_ONLY', false)
            ? 'Content-Security-Policy-Report-Only'
            : 'Content-Security-Policy';
    }

    private function contentSecurityPolicy(): string
    {
        // 'unsafe-inline' is not a nice thing to need. The pages carry roughly
        // a dozen inline <script> blocks each, so a policy without it would
        // have to nonce every one of them - a separate piece of work. Even with
        // it, this still blocks script injected from an origin not listed
        // below, which is the attack actually worth stopping here.
        $directives = [
            "default-src 'self'",
            "base-uri 'self'",
            "object-src 'none'",
            "frame-ancestors 'self'",
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' " . implode(' ', self::SCRIPT_SRC),
            "style-src 'self' 'unsafe-inline' " . implode(' ', self::STYLE_SRC),
            "font-src 'self' data: " . implode(' ', self::FONT_SRC),

            // Images come from a long tail of hosts (stock photography, Google
            // pixels, placeholders). Allowing any https image is a deliberate
            // trade: an image cannot execute, so the risk is small next to the
            // breakage a tight list would cause.
            "img-src 'self' data: blob: https:",

            "connect-src 'self' " . implode(' ', self::CONNECT_SRC),
            "frame-src 'self' " . implode(' ', self::FRAME_SRC),
            "form-action 'self' " . implode(' ', self::FORM_ACTION),
            'upgrade-insecure-requests',
        ];

        return implode('; ', $directives);
    }
}
