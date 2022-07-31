<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*

Route::controller(ControllerFeed::class)->group(function (){
    Route::get("/feeds", [ControllerFeed::class, 'index'])->name('goFeeds');

    Route::get("listele", [ControllerFeed::class, 'showAll'])->name('listele');

    Route::get("listele/{id?}", [ControllerFeed::class, 'show'])->name('tekliGetir');
    Route::get("sil/{id?}", [ControllerFeed::class, 'delete'])->name('sil');
    Route::get("guncelle/{id?}/{yeniVeri?}", [ControllerFeed::class, 'update'])->name('guncelle');
    // PARAMETRE ALAN FONKSİYONLARDA BU ŞEKİLDE URL DEN VERİNCE FONKSİYONUN PARAMETRESİNE DÜŞÜYOR.
    Route::post("post", [ControllerFeed::class, 'add'])->name('veriEkle');

});

 */


