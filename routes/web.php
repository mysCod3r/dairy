<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerSignUp;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerHakkimizda;
use App\Http\Controllers\ControllerFeed;


Route::view('/', "pages.main")->name("anasayfa");


Route::controller(ControllerHakkimizda::class)->group(function (){
    Route::get("/about", [ControllerHakkimizda::class, 'index'])->name('goAbout');

});


Route::controller(ControllerFeed::class)->group(function (){
    Route::get("/feeds", [ControllerFeed::class, 'showAll'])->name('goFeeds');


});



Route::controller(ControllerSignUp::class)->group(function () {
    Route::get('signup', [ControllerSignUp::class, 'index'])->name('goSignUp');
    Route::post('signup/deneme', [ControllerSignUp::class, 'store'])->name('deneme');

});

Route::controller(ControllerLogin::class)->group(function () {
    Route::get('login', [ControllerLogin::class, 'index'])->name('goLogin');

});
