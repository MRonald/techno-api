<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewProductController;
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

Route::group([
    'prefix' => '/v1',
], function () {
    Route::apiResource('/products', ProductController::class);
    Route::apiResource('/products-review', ReviewProductController::class);
});
