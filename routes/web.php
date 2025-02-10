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

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front.beranda');

Route::get('/survei', [App\Http\Controllers\FrontController::class, 'surveiIntro'])->name('front.survei-intro');
Route::get('/survei/registrasi', [App\Http\Controllers\FrontController::class, 'surveiReg'])->name('front.survei-reg');
Route::get('/survei/dass-21', [App\Http\Controllers\FrontController::class, 'surveiDass'])->name('front.survei-dass-21');
Route::get('/survei/hasil', [App\Http\Controllers\FrontController::class, 'surveiHasil'])->name('front.survei-hasil');
Route::get('/konseling/registrasi', [App\Http\Controllers\FrontController::class, 'konselingReg'])->name('front.konseling-reg');
Route::get('/konseling/keluhan/{id}', [App\Http\Controllers\FrontController::class, 'konselingKeluhan'])->name('front.konseling-keluhan');
Route::get('/konseling/jadwal/{id}', [App\Http\Controllers\FrontController::class, 'konselingJadwal'])->name('front.konseling-jadwal');
Route::get('/konseling/final/{id}', [App\Http\Controllers\FrontController::class, 'konselingFinal'])->name('front.konseling-final');


Route::post('/survei/cek-nik', [App\Http\Controllers\FrontController::class, 'cekNik'])->name('front.cek-nik');
Route::post('/survei/store-reg', [App\Http\Controllers\FrontController::class, 'storeReg'])->name('front.store-reg');
Route::post('/survei/store-dass', [App\Http\Controllers\FrontController::class, 'storeDass'])->name('front.store-dass');
Route::post('/konseling/store-keluhan', [App\Http\Controllers\FrontController::class, 'konselingKeluhanStore'])->name('front.konseling-keluhan-store');
Route::post('/konseling/store-jadwal', [App\Http\Controllers\FrontController::class, 'konselingJadwalStore'])->name('front.konseling-jadwal-store');

Route::get('/konseling/store-reg/{id}', [App\Http\Controllers\FrontController::class, 'konselingStoreReg'])->name('front.konseling-store-reg');
Route::post('/validasi-otp', [App\Http\Controllers\FrontController::class, 'validasiOtp'])->name('front.validasi-otp');

Route::get('/jadwal/psikolog/{id}', [App\Http\Controllers\FrontController::class, 'jadwalPsikolog'])->name('front.jadwal-psikolog');

Auth::routes();

Route::group([
    'middleware' => ['auth', 'web']
    ], 
    function () {
    Route::prefix('admin')->group(function () {


        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::prefix('home-psikolog')->group(function () {
            Route::get('/', [App\Http\Controllers\HomePsikologController::class, 'index'])->name('home-psikolog');
            Route::get('/konseling/{id}', [App\Http\Controllers\HomePsikologController::class, 'konseling'])->name('backend.konseling');
            Route::get('/konseling/laporan-detail/{id}', [App\Http\Controllers\HomePsikologController::class, 'laporanDetail'])->name('backend.laporan-detail');
            Route::get('/konseling/evaluasi/{id}', [App\Http\Controllers\HomePsikologController::class, 'formEvaluasi'])->name('backend.evaluasi');
        });
        
        Route::resource('psikologs', App\Http\Controllers\PsikologController::class);
        Route::resource('masyarakats', App\Http\Controllers\MasyarakatController::class);
        Route::resource('dassPertanyaans', App\Http\Controllers\dassPertanyaanController::class);
        Route::resource('dasshasils', App\Http\Controllers\dasshasilController::class);
        Route::resource('keluhans', App\Http\Controllers\keluhanController::class);
        Route::resource('jadwals', App\Http\Controllers\jadwalController::class);
        Route::resource('masalahs', App\Http\Controllers\MasalahController::class);
        Route::resource('konselings', App\Http\Controllers\KonselingController::class);
        Route::resource('konseling-masalahs', App\Http\Controllers\KonselingMasalahController::class);
    });
});


Route::get('/test', [App\Http\Controllers\FrontController::class, 'testHalaman']);
Route::get('/notif', [App\Http\Controllers\FrontController::class, 'testNotif']);

