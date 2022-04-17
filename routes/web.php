<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

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

Route::get('/', [MasterController::class, 'Landing'])->name('Landing');

Route::middleware(['Login'])->group(function() {
    Route::get('/Register', [MasterController::class, 'Register'])->name('Register');
    Route::post('/AuthRegister', [MasterController::class, 'AuthRegister'])->name('AuthRegister');
    Route::get('/Login', [MasterController::class, 'Login'])->name('Login');
    Route::post('/AuthLogin', [MasterController::class, 'AuthLogin'])->name('AuthLogin');
});
Route::get('/Logout', [MasterController::class, 'Logout'])->name('Logout');

Route::middleware(['LoginAdmin'])->prefix('Admin')->group(function() { 
    Route::get('/Home', [MasterController::class, 'Admin'])->name('Admin');
    Route::get('/Product', [MasterController::class, 'Product'])->name('Product');
    Route::post('/TambahProduk', [MasterController::class, 'TambahProduk'])->name('TambahProduk');
    Route::post('/EditProduk', [MasterController::class, 'EditProduk'])->name('EditProduk');
    Route::post('/HapusProduk', [MasterController::class, 'HapusProduk'])->name('HapusProduk');
    Route::get('/Workshop', [MasterController::class, 'Workshop'])->name('Workshop');
    Route::post('/TambahWorkshop', [MasterController::class, 'TambahWorkshop'])->name('TambahWorkshop');
    Route::post('/EditWorkshop', [MasterController::class, 'EditWorkshop'])->name('EditWorkshop');
    Route::post('/Participant', [MasterController::class, 'Participant'])->name('Participant');
    Route::post('/HapusWorkshop', [MasterController::class, 'HapusWorkshop'])->name('HapusWorkshop');
});

Route::middleware(['LoginCustomer'])->prefix('Customer')->group(function() { 
    Route::get('/Home', [MasterController::class, 'Customer'])->name('Customer');
    Route::get('/ViewProduct', [MasterController::class, 'ViewProduct'])->name('ViewProduct');
    Route::get('/DetailProduct/{id}', [MasterController::class, 'DetailProduct'])->name('DetailProduct');
    Route::get('/ViewWorkshop', [MasterController::class, 'ViewWorkshop'])->name('ViewWorkshop');
    Route::get('/DetailWorkshop/{id}', [MasterController::class, 'DetailWorkshop'])->name('DetailWorkshop');
});