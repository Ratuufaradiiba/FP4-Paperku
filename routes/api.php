<?php

use App\Http\Controllers\Api\Auth\AuthController as AuthAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JurnalController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\AuthController;





/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware(["auth:sanctum"])->group(function () {
    // -- CRUD REST API --Group
    Route::get('jurnal', [JurnalController::class, 'index']);
    Route::get('jurnal/{id}', [JurnalController::class, 'showJurnal']);
    Route::post('jurnal-create', [JurnalController::class, 'store']);
    Route::put('jurnal/{id}', [JurnalController::class, 'update']);
    Route::delete('jurnal/{id}', [JurnalController::class, 'destroy']);

    Route::get('kategori', [KategoriController::class, 'index']);
    Route::get('kategori/{id}', [KategoriController::class, 'showKategori']);
    Route::post('kategori-create', [KategoriController::class, 'store']);
    Route::put('kategori/{id}', [KategoriController::class, 'update']);
    Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);

    Route::get('profile', [ProfileController::class, 'index']);
    Route::get('profile/{id}', [ProfileController::class, 'showProfile']);
    Route::post('profile-create', [ProfileController::class, 'store']);
    Route::put('profile/{id}', [ProfileController::class, 'update']);
    Route::delete('profile/{id}', [ProfileController::class, 'destroy']);
});

// Auth User REST API
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
