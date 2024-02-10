<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/admin', function () {
    return view('admin.dashboard.index', [
        'title' => 'Dashboard'
    ]);
});

// Route untuk halaman manajemen admin
Route::get('/users', [UserController::class, 'index']);

// Route untuk menampilkan form tambah admin
Route::get('/users/create', [UserController::class, 'create']);

// Route untuk menyimpan data admin baru
Route::post('/users/store', [UserController::class, 'store']);

// Route untuk menampilkan form edit admin
Route::get('/users/{id}/edit', [UserController::class, 'edit']);

// Route untuk menyimpan perubahan data admin
Route::put('/users/{id}/update', [UserController::class, 'update']);

// Route untuk menghapus data admin
Route::get('/users/{id}/destroy', [UserController::class, 'destroy']);

// Route untuk menampilkan halaman login
Route::get('/login', [AuthController::class, 'showFormLogin']);
