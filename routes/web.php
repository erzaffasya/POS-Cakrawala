<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SuratJalanController;
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
    return view('admin.index');
});

Route::resource('pelanggan', PelangganController::class);
Route::resource('produk', ProdukController::class);
Route::resource('penjualan', PenjualanController::class);
Route::resource('pembelian', PembelianController::class);
Route::resource('suratjalan', SuratJalanController::class);
Route::get('produk-grid', [ProdukController::class, 'grid'])->name('produk-grid');


require __DIR__.'/auth.php';
