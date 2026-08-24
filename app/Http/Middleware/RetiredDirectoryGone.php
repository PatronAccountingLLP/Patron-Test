<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Directory Retirement Plan (2026-08-16).
 *
 * HSN only. The 410 here is a LIST, not a pattern, because Phase 3 - the
 * ~5,248 HSN pages that still earn impressions - has NOT been approved and
 * those pages must keep working. Only the codes in resources/retired are Gone.
 *
 * IFSC used to be handled here too, as a whole-directory pattern. It moved out
 * on 2026-08-24: a single /ifsc-code/{path?} route in routes/web.php now
 * answers 410 for every shape. Routing there rather than in middleware is what
 * fixed the bare hub and the 218 /ifsc-code/{bank} index pages, which returned
 * 404 because no route matched them and so the middleware never ran.
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
