<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */
    /**
     * A TLS-terminating platform proxy forwards the real scheme in X-Forwarded-Proto. With
     * no trusted proxy that header is ignored, the request looks like plain http, and
     * asset()/url() emit http:// links into an https:// page - which the browser blocks as
     * mixed content, leaving every page unstyled. The app is only reachable through the
     * proxy, so trusting it is the standard fix.
     */
    protected $proxies = '*';

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
}