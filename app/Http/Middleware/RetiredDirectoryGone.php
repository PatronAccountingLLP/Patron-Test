<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Directory Retirement Plan (2026-08-16), phases 1 and 2.
 *
 * Phase 1 - the pages nobody has ever seen: every IFSC branch page with no
 *           impressions, plus the HSN codes listed in resources/retired.
 * Phase 2 - the rest of IFSC.
 *
 * Phases 1 and 2 together are the whole /ifsc-code/ directory, so IFSC is a
 * pattern rule. HSN is a list, because Phase 3 (the ~5.2k HSN pages that still
 * earn impressions) has NOT been approved and those pages must keep working.
 *
 * 410 rather than 404: it states the removal is permanent, so Google retires
 * the URL faster and retries less. Laravel renders resources/views/errors/410.
 */
class RetiredDirectoryGone
{
    /** @var array<string,true>|null lazily loaded, ~8k keys */
    private static ?array $retiredHsn = null;

    /**
     * Maintenance endpoints that are not indexable and are left reachable so
     * ops tooling does not break when the public pages go.
     */
    private const EXEMPT = ['update-slug'];

    public function handle(Request $request, Closure $next)
    {
        $segments = $request->segments();
        $directory = $segments[0] ?? null;
        $second = $segments[1] ?? null;

        if ($second !== null && in_array($second, self::EXEMPT, true)) {
            return $next($request);
        }

        // Phase 1 + Phase 2: the entire IFSC estate, 169,871 URLs.
        if ($directory === 'ifsc-code') {
            abort(410);
        }

        // Phase 1: only the HSN codes with no impressions and no organic sessions.
        if ($directory === 'hsn-code' && $second !== null && $this->isRetiredHsn($second)) {
            abort(410);
        }

        return $next($request);
    }

    private function isRetiredHsn(string $code): bool
    {
        if (self::$retiredHsn === null) {
            self::$retiredHsn = require resource_path('retired/hsn-410-codes.php');
        }

        return isset(self::$retiredHsn[$code]);
    }
}
