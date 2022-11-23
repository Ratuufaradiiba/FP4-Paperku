<?php

use App\Http\Controllers\DashAdController;
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


Auth::routes(); // login bawaan laravel
// Route::get('/', function () {
//     return view('frontend.pages.home');
// })->name('home');
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/home', [PagesController::class, 'index'])->name('home');
// Pak nasrul home ini diganti home1

Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/postdetail', [PagesController::class, 'postdetail'])->name('postdetail');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/upload', [PagesController::class, 'upload'])->name('upload');
Route::post('/download', [PagesController::class, 'download'])->name('download');


// Route group
Route::middleware('auth')->prefix('admin')->group(function () {
    // Untuk memanggil fungsi CRUD menggunakan ROUTE RESOURCE
    Route::get('/', [DashAdController::class, 'index']);
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('author', ProfileController::class);
    Route::resource('jurnal', JurnalController::class);

    //memanggil fungsi export to excel
    Route::get('jurnal-excel', [JurnalController::class, 'JurnalExcel']);

    //memanggil fungsi  export To PDF
    Route::get('jurnal-pdf', [JurnalController::class, 'jurnalPDF']);
    Route::get('kategori-pdf', [KategoriController::class, 'kategoriPDF']);
    Route::get('profile-pdf', [ProfileController::class, 'profilePDF']);

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
});
