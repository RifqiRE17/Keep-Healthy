<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
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

Route::get('/',function(){
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'dashboard']);



// route untuk mitra
// ========================================================================
Route::get('/mitra/register', [MitraController::class, 'formAddMitra']);
Route::post('/mitra/register', [MitraController::class, 'registerMitra']);
Route::get('/mitra/delete/{id}', [MitraController::class, 'deleteMitra']);
Route::get('/dashboard/mitra', [MitraController::class, 'index']);
