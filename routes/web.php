<?php

use App\Http\Controllers\DashAdController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\ProfileuserController;
use Illuminate\Support\Facades\Auth;


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


Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/postdetail/{id}', [PagesController::class, 'postdetail'])->name('postdetail');
Route::get('/authordetail/{id}', [PagesController::class, 'authordetail'])->name('authordetail');
Route::get('/kategori/{id}', [PagesController::class, 'filter_kategori'])->name('filter_kategori');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/upload', [PagesController::class, 'upload'])->name('upload')->middleware('auth');
Route::post('/download', [PagesController::class, 'download'])->name('download');
Route::get('/kelola_user', [PagesController::class, 'kelola_user'])->name('kelola_user');
Route::get('/jurnal/search', [PagesController::class, 'search'])->name('jurnal.search');
Route::get('/profileuser', [ProfileuserController::class, 'profileuser'])->name('profileuser');
Route::get('/kelola_user/{id}', [PagesController::class, 'kelola_user'])->name('kelola_user');
Route::post('/profileuser', [ProfileuserController::class, 'updateProfile'])->name('updateProfile');
Route::post('/upload', [PagesController::class, 'upload_jurnal'])->name('upload.jurnal');
Route::get('/jurnal/{id}/edit', [PagesController::class, 'editJurnal'])->name('edit.jurnal');
Route::delete('/jurnal/{id}', [PagesController::class, 'deleteJurnal'])->name('delete.jurnal');

// PEMBELAJARAN REST API MANUAL JSON
// ----- Route::get('/api-jurnal', [PagesController::class, 'apiJurnal']);
// ----- Route::get('/api-jurnal/{id}', [PagesController::class, 'apiJurnalDetail']);
// ----- Route::get('/api-kategori', [PagesController::class, 'apiKategori']);
// ----- Route::get('/api-kategori/{id}', [PagesController::class, 'apiKategoriDetail']);
// ----- Route::get('/api-profile', [PagesController::class, 'apiProfile']); // AUTHORS BUKAN USERS
// ----- Route::get('/api-profile/{id}', [PagesController::class, 'apiProfileDetail']); // AUTHORS BUKAN USERS


// Route group
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
    // Untuk memanggil fungsi CRUD menggunakan ROUTE RESOURCE
    Route::get('/', [DashAdController::class, 'index']);
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('author', ProfileController::class);
    Route::resource('jurnal', JurnalController::class);
    Route::resource('kelola_user', KelolaUserController::class);
    Route::resource('upload', UploadController::class);


    //memanggil fungsi export to excel
    Route::get('jurnal-excel', [JurnalController::class, 'JurnalExcel'])->name('jurnal.excel');
    //memanggil fungsi  export To PDF
    Route::get('jurnal-pdf', [JurnalController::class, 'jurnalPDF'])->name('jurnal.PDF');
    Route::get('kategori-pdf', [KategoriController::class, 'kategoriPDF'])->name('jurnal.kategoriPDF');
    Route::get('profile-pdf', [ProfileController::class, 'profilePDF'])->name('jurnal.profilePDF');

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

Route::get('/after_register', function () {
    return view('frontend.pages.after_register', [
        'title' => 'After Register'
    ]);
});

// Route::get('/profile_user', function () {
//     return view('frontend.pages.profile_user');
// });


Route::get('/access_denied', function () {
    return view('frontend.layouts.partials.acces_denied', [
        'title' => 'Akses di Tolak'
    ]);
})->middleware('auth')->name('denied');
