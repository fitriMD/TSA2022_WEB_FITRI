<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::resource('posts', PostController::class);

// Route::controller(PostController::class) -> group(function()
// {
//     Route::get('posts', 'index');
//     Route::get('posts/{id}', 'show');
// });

//Praktikum 1  
Route::get('/', function () {
    echo "Selamat Datang";
});
Route::get('/about', function () {
    return 'NIM : 1941720016 <br> Nama : Fitri Mutiara Devi <br> Kelas : WEB-B';
});
Route::get('/artikel/{id}', function ($id) {
    echo 'Halaman Artikel dengan ID ' .$id;
});
