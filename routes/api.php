<?php

use App\Http\Controllers\API\AjukanInformasiController;
use App\Models\Pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TanamansController;
use App\Http\Controllers\API\PupuksController;
use App\Http\Controllers\API\Budidaya\PemantauansController;
use App\Http\Controllers\API\Budidaya\IrigasiController;
use App\Http\Controllers\API\Budidaya\PanenController;
use App\Http\Controllers\API\Budidaya\PascaPanenController;
use App\Http\Controllers\API\Budidaya\PenanamanController;
use App\Http\Controllers\API\Budidaya\PersiapanLahanController;
use App\Http\Controllers\API\Budidaya\RotasiTanamanController;
use App\Http\Controllers\PostController;
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

Route::resource('tanaman', TanamansController::class);

Route::resource('pupuk', PupuksController::class);

Route::resource('pemantauan', PemantauansController::class);

Route::resource('irigasi', IrigasiController::class);

Route::resource('panen', PanenController::class);

Route::resource('pascapanen', PascaPanenController::class);

Route::resource('penanaman', PenanamanController::class);

Route::resource('persiapan', PersiapanLahanController::class);

Route::resource('rotasitanaman', RotasiTanamanController::class);

Route::apiResource('ajukanInformasi', AjukanInformasiController::class);

Route::middleware(['firebase.auth'])->group(function () {
    Route::post('/posts', [PostController::class, 'store']);
});

;