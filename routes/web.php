<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home');
});

Route::view('/beranda', 'beranda');

Route::view('/pengalaman-kuliah', 'pengalaman-kuliah');

Route::get('/profil/{nama}', function ($nama) {
    return view('profil', ['nama' => $nama]);
});

Route::get('/data', [App\Http\Controllers\PersonController::class, 'index']);
