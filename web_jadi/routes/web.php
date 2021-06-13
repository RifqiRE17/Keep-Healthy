<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Mitra\MitraController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome1');
});

Route::get('admin', function () {
    return view('main');
});


Route::get('/data-gambar','UploadgambarController@index')->name('data-gambar');
Route::get('/create-gambar','UploadgambarController@create')->name('create-gambar');
Route::post('/simpan-gambar','UploadgambarController@store')->name('simpan-gambar');
Route::get('/edit-gambar/{id}', 'UploadgambarController@edit')->name('edit-gambar');
Route::post('/update-gambar/{id}', 'UploadgambarController@update')->name('update-gambar');
Route::get('/delete-gambar/{id}', 'UploadgambarController@destroy')->name('delete-gambar');


Route::get('/data-user','UploaduserController@index')->name('data-user');
Route::get('/create-user','UploaduserController@create')->name('create-user');
Route::post('/simpan-user','UploaduserController@store')->name('simpan-user');
Route::get('/edit-user/{id}', 'UploaduserController@edit')->name('edit-user');
Route::post('/update-user/{id}', 'UploaduserController@update')->name('update-user');
Route::get('/delete-user/{id}', 'UploaduserController@destroy')->name('delete-user');


Route::get('/data-toilet','UploadtoiletController@index')->name('data-toilet');
Route::get('/create-toilet','UploadtoiletController@create')->name('create-toilet');
Route::post('/simpan-toilet','UploadtoiletController@store')->name('simpan-toilet');
Route::get('/edit-toilet/{id}', 'UploadtoiletController@edit')->name('edit-toilet');
Route::post('/update-toilet/{id}', 'UploadtoiletController@update')->name('update-toilet');
Route::get('/delete-toilet/{id}', 'UploadtoiletController@destroy')->name('delete-toilet');


Route::get('/data-mobil','UploadmobilController@index')->name('data-mobil');
Route::get('/create-mobil','UploadmobilController@create')->name('create-mobil');
Route::post('/simpan-mobil','UploadmobilController@store')->name('simpan-mobil');
Route::get('/edit-mobil/{id}', 'UploadmobilController@edit')->name('edit-mobil');
Route::post('/update-mobil/{id}', 'UploadmobilController@update')->name('update-mobil');
Route::get('/delete-mobil/{id}', 'UploadmobilController@destroy')->name('delete-mobil');


Route::get('/data-umum','UploadumumController@index')->name('data-umum');
Route::get('/create-umum','UploadumumController@create')->name('create-umum');
Route::post('/simpan-umum','UploadumumController@store')->name('simpan-umum');
Route::get('/edit-umum/{id}', 'UploadumumController@edit')->name('edit-umum');
Route::post('/update-umum/{id}', 'UploadumumController@update')->name('update-umum');
Route::get('/delete-umum/{id}', 'UploadumumController@destroy')->name('delete-umum');


Route::get('/data-baju','UploadbajuController@index')->name('data-baju');
Route::get('/create-baju','UploadbajuController@create')->name('create-baju');
Route::post('/simpan-baju','UploadbajuController@store')->name('simpan-baju');
Route::get('/edit-baju/{id}', 'UploadbajuController@edit')->name('edit-baju');
Route::post('/update-baju/{id}', 'UploadbajuController@update')->name('update-baju');
Route::get('/delete-baju/{id}', 'UploadbajuController@destroy')->name('delete-baju');


Route::get('/data-rumah','UploadrumahController@index')->name('data-rumah');
Route::get('/create-rumah','UploadrumahController@create')->name('create-rumah');
Route::post('/simpan-rumah','UploadrumahController@store')->name('simpan-rumah');
Route::get('/edit-rumah/{id}', 'UploadrumahController@edit')->name('edit-rumah');
Route::post('/update-rumah/{id}', 'UploadrumahController@update')->name('update-rumah');
Route::get('/delete-rumah/{id}', 'UploadrumahController@destroy')->name('delete-rumah');


Route::get('/data-motor','UploadmotorController@index')->name('data-motor');
Route::get('/create-motor','UploadmotorController@create')->name('create-motor');
Route::post('/simpan-motor','UploadmotorController@store')->name('simpan-motor');
Route::get('/edit-motor/{id}', 'UploadmotorController@edit')->name('edit-motor');
Route::post('/update-motor/{id}', 'UploadmotorController@update')->name('update-motor');
Route::get('/delete-motor/{id}', 'UploadmotorController@destroy')->name('delete-motor');


Route::get('/data-sepatu','UploadsepatuController@index')->name('data-sepatu');
Route::get('/create-sepatu','UploadsepatuController@create')->name('create-sepatu');
Route::post('/simpan-sepatu','UploadsepatuController@store')->name('simpan-sepatu');
Route::get('/edit-sepatu/{id}', 'UploadsepatuController@edit')->name('edit-sepatu');
Route::post('/update-sepatu/{id}', 'UploadsepatuController@update')->name('update-sepatu');
Route::get('/delete-sepatu/{id}', 'UploadsepatuController@destroy')->name('delete-sepatu');


Route::get('/data-kantor','UploadkantorController@index')->name('data-kantor');
Route::get('/create-kantor','UploadkantorController@create')->name('create-kantor');
Route::post('/simpan-kantor','UploadkantorController@store')->name('simpan-kantor');
Route::get('/edit-kantor/{id}', 'UploadkantorController@edit')->name('edit-kantor');
Route::post('/update-kantor/{id}', 'UploadkantorController@update')->name('update-kantor');
Route::get('/delete-kantor/{id}', 'UploadkantorController@destroy')->name('delete-kantor');


Route::get('/data-artikel','UploadartikelController@index')->name('data-artikel');
Route::get('/create-artikel','UploadartikelController@create')->name('create-artikel');
Route::post('/simpan-artikel','UploadartikelController@store')->name('simpan-artikel');
Route::get('/edit-artikel/{id}', 'UploadartikelController@edit')->name('edit-artikel');
Route::post('/update-artikel/{id}', 'UploadartikelController@update')->name('update-artikel');
Route::get('/delete-artikel/{id}', 'UploadartikelController@destroy')->name('delete-artikel');
