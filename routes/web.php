<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Transaksi_detailController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});
Route::get('welcome', [HomeController::class,'index']);

/*ADMIN*/
Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/tambah', [AdminController::class,'tambah']);
Route::post('/admin/simpan',[AdminController::class,'simpan']);
Route::get('/admin/hapus/{id}',[AdminController::class,'hapus']);
Route::get('/admin/ubah/{id}',[AdminController::class,'ubah']);
Route::put('/admin/update/{id}',[AdminController::class,'update']);



/*BARANG*/
Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/tambah',[BarangController::class,'tambah']);
Route::post('/barang/simpan',[BarangController::class,'simpan']);
Route::get('/barang/hapus/{id}',[BarangController::class,'hapus']);
Route::get('/barang/ubah/{id}',[BarangController::class,'ubah']);
Route::put('/barang/update/{id}',[BarangController::class,'update']);



/*JENIS*/
Route::get('/jenis', [JenisController::class,'index']);
Route::get('/jenis/tambah', [JenisController::class,'tambah']);
Route::post('/jenis/simpan',[JenisController::class,'simpan']);
Route::get('/jenis/hapus/{id}',[JenisController::class,'hapus']);
Route::get('/jenis/ubah/{id}',[JenisController::class,'ubah']);
Route::put('/jenis/update/{id}',[JenisController::class,'update']);



/*SUPPLIER*/
Route::get('/supplier', [SupplierController::class,'index']);
Route::get('/supplier/tambah', [SupplierController::class,'tambah']);
Route::post('/supplier/simpan',[SupplierController::class,'simpan']);
Route::get('/supplier/hapus/{id}',[SupplierController::class,'hapus']);
Route::get('/supplier/ubah/{id}',[SupplierController::class,'ubah']);
Route::put('/supplier/update/{id}',[SupplierController::class,'update']);



/*TRANSAKSI*/
Route::get('/transaksi', [TransaksiController::class,'index']);
Route::get('/transaksi/tambah', [TransaksiController::class,'tambah']);
Route::post('/transaksi/simpan',[TransaksiController::class,'simpan']);
Route::get('/transaksi/hapus/{id}',[TransaksiController::class,'hapus']);
Route::get('/transaksi/ubah/{id}',[TransaksiController::class,'ubah']);
Route::put('/transaksi/update/{id}',[TransaksiController::class,'update']);



/*TRANSAKSI DETAIL*/
Route::get('/transaksi_detail', [Transaksi_detailController::class,'index']);
Route::get('/transaksi_detail/tambah', [Transaksi_detailController::class,'tambah']);
Route::post('/transaksi_detail/simpan',[Transaksi_detailController::class,'simpan']);
Route::get('/transaksi_detail/hapus/{id}',[Transaksi_detailController::class,'hapus']);
Route::get('/transaksi_detail/ubah/{id}',[Transaksi_detailController::class,'ubah']);
Route::put('/transaksi_detail/update/{id}',[Transaksi_detailController::class,'update']);


Route::get('/transaksi_detail/detail/{id}', [Transaksi_detailController::class,'index']);



