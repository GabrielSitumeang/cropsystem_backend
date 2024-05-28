<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\HamaController;
use App\Http\Controllers\IrigasiController;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\PascaPanenController;
use App\Http\Controllers\PemantauanController;
use App\Http\Controllers\PenanamanController;
use App\Http\Controllers\PersiapanLahanController;
use App\Http\Controllers\RotasiTanamanController;
use App\Http\Controllers\AjukanInformasiController;

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
    return view('home/home');
});

Route::resource('/tanaman', TanamanController::class);

Route::resource('/pupuk', PupukController::class);

Route::resource('/hama', HamaController::class);

Route::resource('/rotasi', RotasiTanamanController::class);

Route::resource('/pemantauan', PemantauanController::class);

Route::resource('/persiapan', PersiapanLahanController::class);

Route::resource('/penanaman', PenanamanController::class);

Route::resource('/irigasi', IrigasiController::class);

Route::resource('/panen', PanenController::class);

Route::resource('/pascapanen', PascaPanenController::class);

Route::resource('/ajukan', AjukanInformasiController::class);
