<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupResource;
use App\Http\Controllers\ControllerFeed;
use App\Http\Controllers\ControllerCategory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*

Route::get('/', function () {
    return view('login');
});

 */

/*

Route::get('/signup', [Feed::class, 'signUp'])->name('signup');
 */

Route::view('/', "pages/signup")->name("anasayfa");

Route::controller(SignupResource::class)->group(function () {
    Route::get('signup', [SignupResource::class, 'index'])->name('signup');
    Route::post('signup', [SignupResource::class, 'qwer'])->name('kaydol');

});


    Route::controller(ControllerFeed::class)->group(function (){
    Route::get("listele", [ControllerFeed::class, 'showAll'])->name('listele');
    Route::post("listele/{id?}", [ControllerFeed::class, 'show'])->name('tekliGetir');
    Route::get("sil/{id?}", [ControllerFeed::class, 'delete'])->name('sil');
    Route::get("guncelle/{id?}/{yeniVeri?}", [ControllerFeed::class, 'update'])->name('guncelle');
    // PARAMETRE ALAN FONKSİYONLARDA BU ŞEKİLDE URL DEN VERİNCE FONKSİYONUN PARAMETRESİNE DÜŞÜYOR.

    Route::post("post", [ControllerFeed::class, 'add'])->name('veriEkle');

});

Route::controller(ControllerCategory::class)->group(function (){
    Route::get("kategoriListele", [ControllerCategory::class, 'showAll'])->name('kategoriListele');

    Route::get("kategoriListele/{id?}", [ControllerCategory::class, 'show'])->name('kategoriTekliGetir');
    Route::get("kategoriSil/{id?}", [ControllerCategory::class, 'delete'])->name('kategoriSil');
    Route::get("kategoriGuncelle/{id?}/{yeniVeri?}", [ControllerCategory::class, 'update'])->name('kategoriGuncelle');
    // PARAMETRE ALAN FONKSİYONLARDA BU ŞEKİLDE URL DEN VERİNCE FONKSİYONUN PARAMETRESİNE DÜŞÜYOR.

    Route::post("post", [ControllerCategory::class, 'add'])->name('kategoriVeriEkle');


});

Route::get("aaa/{id?}", [\App\Http\Controllers\ControllerFeature::class, 'deneme']);
