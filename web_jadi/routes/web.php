<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Mitra\MitraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;


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

Route::get('/dashboard', [DashboardController::class,'dashboard']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', function () {
    return view('main');
});

Route::get('/data-gambar','UploadgambarController@index')->name('data-gambar');
Route::get('/create-gambar','UploadgambarController@create')->name('create-gambar');
Route::post('/simpan-gambar','UploadgambarController@store')->name('simpan-gambar');
Route::get('/edit-gambar/{id}', 'UploadgambarController@edit')->name('edit-gambar');
Route::post('/update-gambar/{id}', 'UploadgambarController@update')->name('update-gambar');
Route::get('/delete-gambar/{id}', 'UploadgambarController@destroy')->name('delete-gambar');
Route::get('/create-gambar','UploadgambarController@show')->name('create-gambar');


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


Route::get('/data-artikel','UploadartikelsController@index')->name('data-artikel');
Route::get('/create-artikel','UploadartikelsController@create')->name('create-artikel');
Route::post('/simpan-artikel','UploadartikelsController@store')->name('simpan-artikel');
Route::get('/edit-artikel/{id}', 'UploadartikelsController@edit')->name('edit-artikel');
Route::post('/update-artikel/{id}', 'UploadartikelsController@update')->name('update-artikel');
Route::get('/delete-artikel/{id}', 'UploadartikelsController@destroy')->name('delete-artikel');

// route untuk mitra
// ========================================================================
Route::get('/mitra/register', [MitraController::class, 'formAddMitra']);
Route::post('/mitra/register', [MitraController::class, 'registerMitra']);
Route::get('/mitra/delete/{id}', [MitraController::class, 'deleteMitra']);
Route::get('/dashboard/mitra', [MitraController::class, 'index']);
Route::get('/mitra/register',[MitraController::class,'show']);



    // Route::get('/', function () {
    //     return view('welcome1');
    // });
    
    // Route::get('admin', function () {
    //     return view('welcome1');
    // });



    // route Artikel 
    Route::get('Artikel/artikel', [ArtikelController::class, 'artikel']);
    // eoute Single artikel
    Route::get('/single/{namaartikel}', [ArtikelController::class, 'single']);
    // Route Read More Artikel
    // Route::get('/Artikel/artikel/{post}', 'ArtikelController@readmore');

   
//Profil
Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

//kategori
Route::get('/data-kategori', 'KategoriController@index')->name('data-kategori');
Route::get('/buat-kategori','KategoriController@create')->name('buat-kategori');
Route::post('/simpan-kategori','KategoriController@store')->name('simpan-kategori');
Route::get('/edit-kategori/{id}', 'KategoriController@edit')->name('edit-kategori');
Route::post('/update-kategori/{id}', 'KategoriController@update')->name('update-kategori');
Route::get('/delete-kategori/{id}', 'KategoriController@destroy')->name('delete-kategori');

// Katalog
Route::get('layouts/katalog', 'KatalogController@index');





    // route untuk pembagian login
// ========================================================================
Route::group(['middleware' => ['auth','CekLevel:admin']], function() {
    Route::get('/admin','AdminController@index')->name('admin');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
