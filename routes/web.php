<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\KasController;


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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Index Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::post('/pegawai/pegawai_store',[PegawaiController::class, 'pegawai_store']);
Route::get('/pegawai/pegawai_tambah', [PegawaiController::class, 'pegawai_tambah']);
Route::get('/pegawai/pegawai_edit/{id_pegawai}',[PegawaiController::class, 'pegawai_edit']);
Route::post('/pegawai/pegawai_update',[PegawaiController::class, 'pegawai_update']);
Route::get('/pegawai/pegawai_hapus/{id_pegawai}',[PegawaiController::class,'pegawai_hapus']);
Route::get('/pegawai/pegawai_cetak',[PegawaiController::class,'pegawai_cetak']);

//Index Customer
Route::get('/customer', [CustomerController::class, 'index2']);
Route::post('/customer/customer_store',[CustomerController::class, 'customer_store']);
Route::get('/customer/customer_tambah', [CustomerController::class, 'customer_tambah']);
Route::get('/customer/customer_edit/{id_customer}',[CustomerController::class, 'customer_edit']);
Route::post('/customer/customer_update',[CustomerController::class, 'customer_update']);
Route::get('/customer/customer_hapus/{id_customer}',[CustomerController::class,'customer_hapus']);
Route::get('/customer/customer_cetak',[CustomerController::class,'customer_cetak']);

//Index Suplier
Route::get('/suplier', [SuplierController::class, 'index3']);
Route::post('/suplier/suplier_store',[SuplierController::class, 'suplier_store']);
Route::get('/suplier/suplier_tambah', [SuplierController::class, 'suplier_tambah']);
Route::get('/suplier/suplier_edit/{id_suplier}',[SuplierController::class, 'suplier_edit']);
Route::post('/suplier/suplier_update',[SuplierController::class, 'suplier_update']);
Route::get('/suplier/suplier_hapus/{id_suplier}',[SuplierController::class,'suplier_hapus']);
Route::get('/suplier/suplier_cetak',[SuplierController::class,'suplier_cetak']);

//Index Pembelian
Route::get('/pembelian', [PembelianController::class, 'index4']);
Route::post('/pembelian/pembelian_store',[PembelianController::class, 'pembelian_store']);
Route::get('/pembelian/pembelian_tambah', [PembelianController::class, 'pembelian_tambah']);
Route::get('/pembelian/pembelian_edit/{id_pembelian}',[PembelianController::class, 'pembelian_edit']);
Route::post('/pembelian/pembelian_update',[PembelianController::class, 'pembelian_update']);
Route::get('/pembelian/pembelian_hapus/{id_pembelian}',[PembelianController::class,'pembelian_hapus']);
Route::get('/pembelian/pembelian_cetak',[PembelianController::class,'pembelian_cetak']);

//Index Penjualan
Route::get('/penjualan', [PenjualanController::class, 'index5']);
Route::post('/penjualan/penjualan_store',[PenjualanController::class, 'penjualan_store']);
Route::get('/penjualan/penjualan_tambah', [PenjualanController::class, 'penjualan_tambah']);
Route::get('/penjualan/penjualan_edit/{id_penjualan}',[PenjualanController::class, 'penjualan_edit']);
Route::post('/penjualan/penjualan_update',[PenjualanController::class, 'penjualan_update']);
Route::get('/penjualan/penjualan_hapus/{id_penjualan}',[PenjualanController::class,'penjualan_hapus']);
Route::get('/penjualan/penjualan_cetak',[PenjualanController::class,'penjualan_cetak']);

//Index barang
Route::get('/barang', [BarangController::class, 'index6']);
Route::post('/barang/barang_store',[BarangController::class, 'barang_store']);
Route::get('/barang/barang_tambah', [BarangController::class, 'barang_tambah']);
Route::get('/barang/barang_edit/{id_barang}',[BarangController::class, 'barang_edit']);
Route::post('/barang/barang_update',[BarangController::class, 'barang_update']);
Route::get('/barang/barang_hapus/{id_barang}',[BarangController::class,'barang_hapus']);
Route::get('/barang/barang_cetak',[BarangController::class,'barang_cetak']);

//Index Pemasukan
Route::get('/pemasukan', [PemasukanController::class, 'index7']);
Route::post('/pemasukan/pemasukan_store',[PemasukanController::class, 'pemasukan_store']);
Route::get('/pemasukan/pemasukan_tambah', [PemasukanController::class, 'pemasukan_tambah']);
Route::get('/pemasukan/pemasukan_edit/{id_pemasukan}',[PemasukanController::class, 'pemasukan_edit']);
Route::post('/pemasukan/pemasukan_update',[PemasukanController::class, 'pemasukan_update']);
Route::get('/pemasukan/pemasukan_hapus/{id_pemasukan}',[PemasukanController::class,'pemasukan_hapus']);
Route::get('/pemasukan/pemasukan_cetak',[PemasukanController::class,'pemasukan_cetak']);

//Index Pengeluaran
Route::get('/pengeluaran', [PengeluaranController::class, 'index8']);
Route::post('/pengeluaran/pengeluaran_store',[PengeluaranController::class, 'pengeluaran_store']);
Route::get('/pengeluaran/pengeluaran_tambah', [PengeluaranController::class, 'pengeluaran_tambah']);
Route::get('/pengeluaran/pengeluaran_edit/{id_pengeluaran}',[PengeluaranController::class, 'pengeluaran_edit']);
Route::post('/pengeluaran/pengeluaran_update',[PengeluaranController::class, 'pengeluaran_update']);
Route::get('/pengeluaran/pengeluaran_hapus/{id_pengeluaran}',[PengeluaranController::class,'pengeluaran_hapus']);
Route::get('/pengeluaran/pengeluaran_cetak',[PengeluaranController::class,'pengeluaran_cetak']);

//Index Kas dan Bank
Route::get('/kas', [KasController::class, 'index9']);
Route::post('/kas/kas_store',[KasController::class, 'kas_store']);
Route::get('/kas/kas_tambah', [KasController::class, 'kas_tambah']);
Route::get('/kas/kas_edit/{kode_unik}',[KasController::class, 'kas_edit']);
Route::post('/kas/kas_update',[KasController::class, 'kas_update']);
Route::get('/kas/kas_hapus/{kode_unik}',[KasController::class,'kas_hapus']);
Route::get('/kas/kas_cetak',[KasController::class,'kas_cetak']);