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
