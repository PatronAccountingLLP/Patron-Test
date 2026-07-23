<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceLowercaseParameters
{
    public function handle(Request $request, Closure $next)
    {
        $route = $request->route();

        // If no route matched, skip
        if (!$route) {
            return $next($request);
        }

        foreach ($route->parameters() as $value) {
            if (is_string($value) && preg_match('/[A-Z]/', $value)) {
                abort(404);
            }
        }

        return $next($request);
    }
}
