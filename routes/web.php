<?php

use App\Http\Controllers\ceksertiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Models\event;
use App\Http\Controllers\sertifikatController;
use App\Http\Controllers\pesertacontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $event = event::All();
    return view('home', ['event' => $event]);
});

Route::get('/dashboard', [EventController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tentangkami', function(){
    return view('yoyo.tentangkami');
})->name('tentangkami');

Route::get('/cekserti/{id_event}', 'App\Http\Controllers\ceksertiController@index');
Route::post('/cekserti', 'App\Http\Controllers\ceksertiController@ceksertif')->name('cekserti');
Route::get('/ceksertipanitia/{id_event}', 'App\Http\Controllers\ceksertipanitiacontroller@index');
Route::post('/ceksertipanitia', 'App\Http\Controllers\ceksertipanitiacontroller@ceksertif')->name('ceksertipanitia');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/event', EventController::class)->middleware(['auth', 'verified']);

Route::resource('/template', sertifikatController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

Route::get('/editsertifikat', function () {
    return view('verio.formeditserti');
});

Route::get('/serti', function () {
    return view('certificate');
});

Route::get('/downloadserti', function () {
    return view('sertifikatfix');
});

// Importer un fichier Excel
Route::post("simple-excel/import", "App\Http\Controllers\pesertacontroller@import")->name('excel.import');

Route::post("finalisasi/import", "App\Http\Controllers\importfinalisasicontroller@import")->name('finalisasi.import');
// Route::get('/createsertifikat', function () {
//     return view('verio.formcreateserti');
// });

 Route::get('/csv', function () {
     return view('nico.csv');
 });

Route::get('/finalisasi', function () {
    return view('nico.finalisasi');
});

