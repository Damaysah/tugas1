<?php

use Illuminate\Support\Facades\Route;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about',[
        "nama" => "Damaysah Kiki",
        "email" => "damaysah@gmail.com",
        "gambar" => "profile-img.jpg"
    ]);
});

Route::get('/nama', function () {
    return ('Damaysah Kiki');
});

Route::get('/nim', function () {
    return ('21.31.0011');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/detail/{id}', [ArtikelController::class, 'detail'])->name('artikel.detail');