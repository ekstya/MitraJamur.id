<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalPanenController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\WorkshopController;

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

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post_login', [AuthController::class, 'post_login'])->name('post_login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/post_register', [AuthController::class, 'post_register'])->name('post_register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


                            ////////////// ----- USER ----- //////////////
//user
Route::get('/user/dashboard', [DashboardController::class, 'user_dashboard'])->name('user_dashboard')->middleware('auth');

//user-workshop
Route::get('/user/workshop', [WorkshopController::class, 'user_workshop'])->name('user_workshop')->middleware('auth');
Route::get('/user/workshop/detail/{id}', [WorkshopController::class, 'user_workshop_detail'])->name('user_workshop_detail')->middleware('auth');
Route::post('/user/workshop/daftar/{id}', [WorkshopController::class, 'user_workshop_daftar'])->name('user_workshop_daftar')->middleware('auth');

//user-produk
Route::get('/user/produk', [ProdukController::class, 'user_produk'])->name('user_produk')->middleware('auth');
Route::get('/user/produk/detail/{id}', [ProdukController::class, 'user_produk_detail'])->name('user_produk_detail')->middleware('auth');
Route::post('/user/produk/pesan/{id}', [ProdukController::class, 'user_produk_pesan'])->name('user_produk_pesan')->middleware('auth');

//user-pemesanan-partisipasi
Route::get('/user/pemesanan', [ProdukController::class, 'user_pemesanan'])->name('user_pemesanan')->middleware('auth');
Route::get('/user/pemesanan/konfirmasi/{pembelian_id}',[ProdukController::class, 'user_konfirmasi_pemesanan'])->middleware('auth');
Route::post('/user/pemesanan/konfirmasi/{pembelian_id}/post',[ProdukController::class, 'user_konfirmasi_pemesanan_post'])->middleware('auth');

Route::get('/user/partisipasi', [WorkshopController::class, 'user_partisipasi'])->name('user_partisipasi')->middleware('auth');
Route::get('/user/partisipasi/konfirmasi/{pendaftaran_workshop_id}',[WorkshopController::class, 'user_konfirmasi_partisipasi'])->middleware('auth');
Route::post('/user/partisipasi/konfirmasi/{pendaftaran_workshop_id}/post',[WorkshopController::class, 'user_konfirmasi_partisipasi_post'])->middleware('auth');





                            ////////////// ----- ADMIN ----- //////////////
Route::get('/admin/dashboard', [DashboardController::class, 'admin_dashboard'])->name('admin_dashboard');

//admin-produk
Route::get('/admin/produk', [ProdukController::class, 'admin_produk'])->name('admin_produk');
Route::get('/admin/produk/create', [ProdukController::class, 'admin_produk_create'])->name('admin_produk_create');
Route::post('/admin/produk/insert', [ProdukController::class, 'admin_produk_insert'])->name('admin_produk_insert');
Route::get('/admin/produk/edit/{id}', [ProdukController::class, 'admin_produk_edit'])->name('admin_produk_edit');
Route::post('/admin/produk/update/{id}', [ProdukController::class, 'admin_produk_update'])->name('admin_produk_update');
Route::get('/admin/produk/detail/{id}', [ProdukController::class, 'admin_produk_detail'])->name('admin_produk_detail');

//admin-workshop
Route::get('/admin/workshop', [WorkshopController::class, 'admin_workshop'])->name('admin_workshop');
Route::get('/admin/workshop/create', [WorkshopController::class, 'admin_workshop_create'])->name('admin_workshop_create');
Route::post('/admin/workshop/insert', [WorkshopController::class, 'admin_workshop_insert'])->name('admin_workshop_insert');
Route::get('/admin/workshop/edit/{id}', [WorkshopController::class, 'admin_workshop_edit'])->name('admin_workshop_edit');
Route::post('/admin/workshop/update/{id}', [WorkshopController::class, 'admin_workshop_update'])->name('admin_workshop_update');
Route::get('/admin/workshop/detail/{id}', [WorkshopController::class, 'admin_workshop_detail'])->name('admin_workshop_detail');

//admin-pemesanan
Route::get('/admin/pemesanan', [PemesananController::class, 'admin_index'])->middleware('auth');
Route::get('/admin/pemesanan/pembelian', [PemesananController::class, 'index_pembelian'])->middleware('auth');
Route::get('/admin/pemesanan/pembelian/konfirmasi/{pembelian_id}', [PemesananController::class, 'index_pembelian_konfirmasi'])->middleware('auth');
Route::post('/admin/pemesanan/pembelian/konfirmasi/{pembelian_id}/terima/post', [PemesananController::class, 'index_pembelian_konfirmasi_terima'])->middleware('auth');
Route::post('/admin/pemesanan/pembelian/konfirmasi/{pembelian_id}/tolak/post', [PemesananController::class, 'index_pembelian_konfirmasi_tolak'])->middleware('auth');
Route::get('/admin/pemesanan/pendaftaran', [PemesananController::class, 'index_pendaftaran'])->middleware('auth');
Route::get('/admin/pemesanan/pendaftaran/konfirmasi/{pendaftaran_workshop_id}', [PemesananController::class, 'index_pendaftaran_konfirmasi'])->middleware('auth');
Route::post('/admin/pemesanan/pendaftaran/konfirmasi/{pendaftaran_workshop_id}/terima/post', [PemesananController::class, 'index_pendaftaran_konfirmasi_terima'])->middleware('auth');
Route::post('/admin/pemesanan/pendaftaran/konfirmasi/{pendaftaran_workshop_id}/tolak/post', [PemesananController::class, 'index_pendaftaran_konfirmasi_tolak'])->middleware('auth');

//admin-laporan
Route::get('/admin/laporan',[LaporanController::class, 'index'])->middleware('auth');
Route::get('/admin/laporan/pembelian',[LaporanController::class, 'laporan_pembelian'])->middleware('auth');
Route::get('/admin/laporan/pendaftaran',[LaporanController::class, 'laporan_pendaftaran'])->middleware('auth');

//admmin-jadwal_panen
Route::get('/admin/jadwal_panen', [JadwalPanenController::class, 'index'])->middleware('auth');
Route::get('/admin/jadwal_panen/create', [JadwalPanenController::class, 'create'])->middleware('auth');
Route::post('/admin/jadwal_panen/insert', [JadwalPanenController::class, 'insert'])->middleware('auth');
Route::get('/admin/jadwal_panen/edit/{id}', [JadwalPanenController::class, 'edit'])->middleware('auth');
Route::post('/admin/jadwal_panen/update/{id}', [JadwalPanenController::class, 'update'])->middleware('auth');
Route::get('/admin/jadwal_panen/delete/{id}', [JadwalPanenController::class, 'delete'])->middleware('auth');

//admin-customer
Route::get('/admin/customer', [CustomerController::class, 'index'])->middleware('auth');

//profil
Route::get('/profil',[ProfilController::class, 'index'])->middleware('auth');
Route::post('/profil/{id}/update',[ProfilController::class, 'update'])->middleware('auth');