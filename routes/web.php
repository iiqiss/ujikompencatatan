<?php

use App\Http\Controllers\Pengelola2Contoller;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\SessionController;
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

Route::get('/tables', [PengelolaController::class, 'tables'])->name('tables');
Route::get('/tables/hubungi/{id_skpd}',[Pengelola2Contoller::class,'hubungi'])->name('pencatatan.hubungi');

Route::middleware(['inilogin'])->group(function (){

Route::post('/tables/submit', [PengelolaController::class, 'submit'])->name('pencatatan.submit');
Route::get('/tables/tambahtables',[PengelolaController::class,'tambah'])->name('pencatatan.tambah');
Route::post('/tables/enter', [Pengelola2Contoller::class, 'enter'])->name('pencatatan.enter');
Route::post('/tables/delete/{id_skpd}',[PengelolaController::class, 'delete'])->name('pencatatan.delete');
 });
Route::middleware(['initamu'])->group(function (){
Route::get('/tables/input/{id_skpd}',[PengelolaController::class,'input'])->name('pencatatan.input');
Route::post('/tables/klik/{id_skpd}', [PengelolaController::class, 'klik'])->name('pencatatan.klik');
Route::post('/tables/hubungi/{id_skpd}',[Pengelola2Contoller::class,'hubungi'])->name('pencatatan.hubungi');
Route::get('/tables/update/{id_skpd}',[PengelolaController::class,'update2'])->name('pencatatan.update');
Route::post('/update3/{id_skpd}', [PengelolaController::class, 'update3'])->name('pencatatan.update3');
 });
Route::get('/',[SessionController::class,'index']);
Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/sesi/logout',[SessionController::class,'logout']);
