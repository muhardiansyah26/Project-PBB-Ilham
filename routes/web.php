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
    return view('home', [
        "title" => "Pembayaran",
        "name" => "Pajak Bumi Bangunan"
    ]);
});

// Route::get('/information', function () {
//     return view('information', [
//         "title" => "Informasi",
//         "name" => "Tentang Kami"
//     ]);
// });

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami",
        "name" => "Tentang Kami"
    ]);
});

Route::get('create', function () {
    return view('create', [
        "title" => "Coba",
        "name" => "Coba"
    ]);
});
Route::resource('information', \App\Http\Controllers\PostController::class);