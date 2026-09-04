<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/search-posts', [SearchController::class, 'searchPosts']);
Route::get('/search-pages', [SearchController::class, 'searchPages']);

// WhatsApp Subscription Route
Route::post('/whatsapp-subscription', [FrontendController::class, 'whatsappSubscription']);

/*
 | Radar publishes pages here — regulatory updates and GST case laws.
 |
 | Signed, not tokened: this creates and replaces PUBLIC pages, and a bearer token in a query
 | string is written into every access log between there and here. See VerifyRadarSignature.
 |
 | Rate limited well above what the publisher does (a cron pushes a handful twice a day) and far
 | below what a loop could: a signed request is still a request that writes a row.
 */
Route::post('/radar/publish', [\App\Http\Controllers\Api\RadarPublishController::class, 'store'])
    ->middleware(['radar_signed', 'throttle:60,1'])
    ->name('radar.publish');
