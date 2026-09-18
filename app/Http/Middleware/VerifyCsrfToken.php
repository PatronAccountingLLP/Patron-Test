<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        // The site-wide enquiry form. It sits on ~1,960 public, cacheable pages,
        // so a token served from cache would be stale by the time someone fills
        // the form in - and a 419 there loses the enquiry, which is precisely
        // what LeadCaptureController exists to stop. The route takes no action
        // on behalf of a logged-in user, so there is nothing for CSRF to protect.
        'lead-capture',
    ];
}