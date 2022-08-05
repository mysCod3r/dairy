<?php

use App\Http\Controllers\Backend\BackendFeedCategoryController;
use App\Http\Controllers\Backend\BackendFeedController;
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

Route::middleware('auth:sanctum')->group(function (){
});

    Route::apiResource('feedcategory', BackendFeedCategoryController::class);

    Route::controller(BackendFeedController::class)->group(function (){
        Route::get('feed','index');
        Route::post('feed','store');
        Route::get('feed/{feed}','show');
        Route::put('feed/{feed}','update');
        Route::delete('feed/{feed}','destroy');
        Route::get('feed/by-category/{category}','byCategory');
    });


