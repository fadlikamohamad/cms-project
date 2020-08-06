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

Route::get('/', 'GuestController@portfolio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/cari', 'HomeController@cari');

Route::get('/admin/cari', 'HomeController@adminCari');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/detail/{id}', 'HomeController@detail');

Route::get('/artikel/tambah', 'ArtikelController@tambah');

Route::post('/artikel/store', 'ArtikelController@store');

Route::get('/artikel/edit/{id}', 'ArtikelController@edit');

Route::put('/artikel/update/{id}', 'ArtikelController@update');

Route::get('/artikel/hapus/{id}', 'ArtikelController@hapus');