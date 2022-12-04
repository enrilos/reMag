<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProductController::class)->prefix('products')->group(function () {
    Route::get('/', 'all');
    Route::get('/{column}/{value}', 'getBy')->where(['column' => '[A-Za-z]+']);
    Route::get('/{id}', 'get')->where('id', '[0-9]+');
});
