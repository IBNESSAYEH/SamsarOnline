<?php

use App\Http\Controllers\Api\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {

    Route::post("/logout", [ApiAuthController::class, "logout"]);
    Route::get('/currentUSer', [ApiAuthController::class, 'currentUSer']);
});
Route::post("/login", [ApiAuthController::class, "login"]);
Route::post("/register", [ApiAuthController::class, "register"]);


Route::get('/csrf-token', function () {
    return response()->json(['csrfToken' => csrf_token()]);
});
