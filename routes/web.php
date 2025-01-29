<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front.beranda');

Route::get('/survei', [App\Http\Controllers\FrontController::class, 'surveiIntro'])->name('front.survei-intro');
Route::get('/survei/registrasi', [App\Http\Controllers\FrontController::class, 'surveiReg'])->name('front.survei-reg');
Route::get('/survei/dass-21', [App\Http\Controllers\FrontController::class, 'surveiDass'])->name('front.survei-dass-21');
Route::get('/survei/hasil', [App\Http\Controllers\FrontController::class, 'surveiHasil'])->name('front.survei-hasil');
Route::get('/konseling/registrasi', [App\Http\Controllers\FrontController::class, 'konselingReg'])->name('front.konseling-reg');
Route::get('/konseling/keluhan/{id}', [App\Http\Controllers\FrontController::class, 'konselingKeluhan'])->name('front.konseling-keluhan');

Route::post('/survei/cek-nik', [App\Http\Controllers\FrontController::class, 'cekNik'])->name('front.cek-nik');
Route::post('/survei/store-reg', [App\Http\Controllers\FrontController::class, 'storeReg'])->name('front.store-reg');
Route::post('/survei/store-dass', [App\Http\Controllers\FrontController::class, 'storeDass'])->name('front.store-dass');

Route::get('/konseling/store-reg/{id}', [App\Http\Controllers\FrontController::class, 'konselingStoreReg'])->name('front.konseling-store-reg');
Route::post('/validasi-otp', [App\Http\Controllers\FrontController::class, 'validasiOtp'])->name('front.validasi-otp');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('psikologs', App\Http\Controllers\PsikologController::class);
    Route::resource('masyarakats', App\Http\Controllers\MasyarakatController::class);
    Route::resource('dassPertanyaans', App\Http\Controllers\dassPertanyaanController::class);
});


Route::get('/notif', [App\Http\Controllers\FrontController::class, 'testNotif']);
Route::resource('dasshasils', App\Http\Controllers\dasshasilController::class);