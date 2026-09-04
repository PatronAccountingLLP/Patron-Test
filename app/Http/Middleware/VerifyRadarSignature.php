<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * The door Radar publishes through.
 *
 * ── WHY A SIGNATURE AND NOT A TOKEN ───────────────────────────────────────────────────────────
 *
 * This request creates and replaces PUBLIC pages on the firm's own website. A bearer token in a
 * query string is written into every access log, proxy log and error report between there and
 * here; a header carrying an HMAC of the body is not, and it also proves the body arrived
 * unaltered rather than merely that the sender knew a password.
 *
 *   X-Radar-Timestamp: 1757000000
 *   X-Radar-Signature: hex(hmac_sha256(timestamp + "\n" + raw body, RADAR_PUBLISH_SECRET))
 *
 * The timestamp is inside the signed material, so it cannot be edited to extend a replay window,
 * and requests more than five minutes either side of now are refused: a captured request is then
 * useful for five minutes rather than for ever.
 *
 * NO SECRET, NO SERVICE. A missing RADAR_PUBLISH_SECRET refuses everything rather than falling
 * back to accepting anything, which is the failure mode that turns a config mistake into an open
 * endpoint that publishes whatever is posted to it.
 */
class VerifyRadarSignature
{
    /** How far out of step the two clocks may be. */
    private const SKEW_SECONDS = 300;

    public function handle(Request $request, Closure $next): Response
    {
        $secret = (string) config('radar.publish_secret', '');
        if ($secret === '') {
            return response()->json([
                'ok'    => false,
                'error' => 'RADAR_PUBLISH_SECRET is not set on the website, so nothing can be published.',
            ], 503);
        }

        $ts  = (string) $request->header('X-Radar-Timestamp', '');
        $sig = (string) $request->header('X-Radar-Signature', '');
        if ($ts === '' || $sig === '') {
            return response()->json(['ok' => false, 'error' => 'Unsigned request.'], 401);
        }
        if (!ctype_digit($ts) || abs(time() - (int) $ts) > self::SKEW_SECONDS) {
            return response()->json([
                'ok'    => false,
                'error' => 'Stale or misdated request. Check the clock on the sending machine.',
            ], 401);
        }

        // hash_equals, not ===: a normal string comparison returns as soon as two bytes differ, and
        // the time it took is a measurement of how much of the signature was right.
        $expected = hash_hmac('sha256', $ts . "\n" . $request->getContent(), $secret);
        if (!hash_equals($expected, $sig)) {
            return response()->json(['ok' => false, 'error' => 'Bad signature.'], 401);
        }

        return $next($request);
    }
}
