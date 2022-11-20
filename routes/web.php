<?php

use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfileController;

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
//     return view('frontend.pages.home');
// })->name('home');
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/postdetail', [PagesController::class, 'postdetail'])->name('postdetail');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/upload', [PagesController::class, 'upload'])->name('upload');


Route::get('/backend', function () {
    return view('admin.home', [
        "title" => "Dashboard Admin",
        "active" => "Home"
    ]);
});

Route::get('/login2', function () {
    return view('admin.sign-in');
});

Route::get('/regis', function () {
    return view('admin.sign-up');
});

Route::get('/tables', function () {
    return view('admin.tables', [
        "title" => "Tables",
        "active" => "tables"
    ]);
});
Route::get('/profile', function () {
    return view('admin.profile', [
        "title" => "Users",
        "active" => "Profile"
    ]);
});
// Untuk memanggil fungsi CRUD menggunakan ROUTE RESOURCE
Route::resource('pengguna', PenggunaController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('author', ProfileController::class);
Route::resource('jurnal', JurnalController::class);

Auth::routes(); // login bawaan laravel, gapapa ada warning ga masalah!!!

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//memanggil fungsi export to excel
Route::get('jurnal-excel', [JurnalController::class, 'JurnalExcel']);