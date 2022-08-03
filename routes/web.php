<?php

use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\FeedController;
use App\Http\Controllers\Frontend\HakkimizdaController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\SignUpController;
use Illuminate\Support\Facades\Route;



Route::view('/', "pages.main")->name("anasayfa");


Route::controller(HakkimizdaController::class)->group(function (){
    Route::get("/about", [HakkimizdaController::class, 'index'])->name('goAbout');
});

Route::controller(FeedController::class)->group(function (){
    Route::get("/feeds", [FeedController::class, 'index'])->name('goFeeds');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/token/create', [DashboardController::class, 'showTokenForm'])->name('token.showForm');
    Route::post('/token/create', [DashboardController::class, 'createToken'])->name('token.create');
    Route::post('/token/delete/{token}', [DashboardController::class, 'deleteToken'])->name('token.delete');
});
require __DIR__.'/auth.php';
