<?php

use Illuminate\Support\Facades\Auth;
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
    return view('landingpage.home');
});
Route::view('tentangkami', 'landingpage.tentangkami');
Route::view('layanan', 'landingpage.layanan');
// Route::view('kontak', 'landingpage.kontak');
// Route::get('footer', 'LokasiController@index')->name('lokasi');
Route::resource('kontak', 'KontakController');

//Admin
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('lokasi', 'LokasiController');
        Route::resource('produk', 'ProdukController');
        Route::resource('kontak', 'KontakController');
    });

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
