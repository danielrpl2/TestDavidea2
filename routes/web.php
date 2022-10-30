<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;



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


Route::get('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class,'logout']);
Route::post('/postlogin', [AuthController::class,'postlogin']);


/*Kategori*/
Route::get('/kategori', [KategoriController::class,'index']);
Route::get('/kategori/tambah', [KategoriController::class,'tambah']);
Route::post('/kategori/simpan',[KategoriController::class,'simpan']);
Route::get('/kategori/hapus/{id}',[KategoriController::class,'hapus']);
Route::get('/kategori/ubah/{id}',[KategoriController::class,'ubah']);
Route::put('/kategori/update/{id}',[KategoriController::class,'update']);


/*Komentar*/
Route::get('/komentar', [KomentarController::class,'index']);
Route::get('/komentar/komentarpublic', [KomentarController::class,'komentarpublic']);
Route::get('/komentar/tambah', [KomentarController::class,'tambah']);
Route::post('/komentar/simpan',[KomentarController::class,'simpan']);
Route::get('/komentar/hapus/{id}',[KomentarController::class,'hapus']);
Route::get('/komentar/ubah/{id}',[KomentarController::class,'ubah']);
Route::put('/komentar/update/{id}',[KomentarController::class,'update']);

/*POstingan*/
Route::get('/postingan', [PostinganController::class,'index']);
Route::get('/postingan/tambah', [PostinganController::class,'tambah']);
Route::post('/postingan/simpan',[PostinganController::class,'simpan']);
Route::get('/postingan/hapus/{id}',[PostinganController::class,'hapus']);
Route::get('/postingan/ubah/{id}',[PostinganController::class,'ubah']);
Route::put('/postingan/update/{id}',[PostinganController::class,'update']);

Route::get('/home', [FrontendController::class,'indexHome']);
Route::get('/berita/tewas', [FrontendController::class,'indexTewas']);
Route::get('/berita/jember', [FrontendController::class,'indexJember']);
