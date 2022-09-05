<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProgramController;
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
// Route::get('/', function () {
//     echo "Selamat Datang";
// });
// Route::get('/about', function () {
//     return 'NIM : 1941720016 <br> Nama : Fitri Mutiara Devi <br> Kelas : WEB-B';
// });
// Route::get('/artikel/{id}', function ($id) {
//     echo 'Halaman Artikel dengan ID ' .$id;
// });

//Praktikum 2

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/article/{id}', [ArticleController::class, 'article']);

//Praktikum 3
//1. Menampilkan Halaman Awal Website
Route::get('/', [HomeController::class, 'index']);

// 2. Menampilkan Daftar Produk (Route Prefix)
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'friendskidsgames']);
    Route::get('/riri-story-books', [ProductController::class, 'riristorybooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkidssongs']);
});

// 3. Menampilkan Daftar Berita (Route Param)
Route::get('/news/{id?}', [NewsController::class, 'news']);

// 4. Menampilkan Daftar Program (Route Prefix)
Route::prefix('program')->group(function () {
    Route::get('/{string}', function ($string) {
        echo "Ini adalah halaman program $string <a href='https://www.educastudio.com/program/$string'><button>KLIK!</button></a>";
    });
});

// 5. About Us
Route::get('/about-us', [AboutUsController::class, 'about']);

// 6. Contact Us
Route::get('/contact-us', function () {
    return redirect("https://www.educastudio.com/contact-us");
});