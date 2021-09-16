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
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/matakuliah/{nama}','MatakuliahController@index');
Route::get('/formulir','MatakuliahController@formulir');
Route::post('/formulir/proses','MatakuliahController@proses');
