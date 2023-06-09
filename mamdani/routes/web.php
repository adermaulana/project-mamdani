<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TesMinatController;
use App\Http\Controllers\PernyataanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index',[
        'title' => 'Rekomendasi Jurusan SMKN 8 Jeneponto'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index',[
        'title' => 'Admin Rekomendasi Jurusan SMKN 8 Jeneponto'
    ]);
})->middleware('auth');

//Login
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

//Registrasi
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

//Pernyataan
Route::resource('/dashboard/instrumen',PernyataanController::class)->middleware('auth');

//Jurusan
Route::resource('/dashboard/jurusan',JurusanController::class)->middleware('auth');

//Peserta
Route::resource('/dashboard/peserta',PesertaController::class)->middleware('auth');

//TesMinat
Route::resource('/dashboard/minat',TesMinatController::class)->middleware('auth');

//NilaiRapor
Route::resource('/dashboard/rapor',RaporController::class)->middleware('auth');
