<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\VenueController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('venue')->group(function () {
    Route::get('/', [VenueController::class,'index']);
    Route::get('/{id}', [VenueController::class,'show']);
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class,'index']);
});

Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class,'index']);
});

Route::get('/result',[ResultController::class,'result']);
