<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

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
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/backend', function () {
    return view('admin.home', [
        "title" => "Dashboard Admin",
        "active" => "home"
    ]);
});

Route::get('/login', function () {
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
        "active" => "profile"
    ]);
});
// Untuk memanggil fungsi CRUD menggunakan ROUTE RESOURCE
Route::resource('pengguna', PenggunaController::class);