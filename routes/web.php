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
Route::get('/keluhan', [App\Http\Controllers\FrontController::class, 'keluhan'])->name('front.keluhan');

Auth::routes();

Route::resource('psikologs', App\Http\Controllers\PsikologController::class);
Route::resource('masyarakats', App\Http\Controllers\MasyarakatController::class);