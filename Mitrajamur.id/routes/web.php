<?php

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
    return view('landing');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('admin', function () {
    return view('admin/dashboard');
});

Route::get('customer', function () {
    return view('customer/home');
});

Route::get('product', function () {
    return view('admin/product');
});

Route::get('workshop', function () {
    return view('admin/workshop');
});

Route::get('addProduct', function () {
    return view('admin/addProduct');
});

Route::get('addWorkshop', function () {
    return view('admin/addWorkshop');
});

Route::get('editWorkshop', function () {
    return view('admin/editWorkshop');
});

Route::get('editProduct', function () {
    return view('admin/editProduct');
});