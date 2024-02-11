<?php

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

// Route untuk menampilkan dashboard admin
Route::get('/admin', function () {
    return view('admin.dashboard.index', [
        'title' => 'Dashboard',
    ]);
});

// Route untuk menampilkan halaman manajemen admin
Route::get('/users', [UserController::class, 'index']);

// Route untuk menampilkan form tambah admin
Route::get('/users/create', [UserController::class, 'create']);

// Route untuk menyimpan data admin yang baru
Route::post('/users', [UserController::class, 'store']);

// Route untuk menampilkan form edit admin
Route::get('/users/{id}/edit', [UserController::class, 'edit']);

// Route untuk menyimpan update admin
Route::put('/users/{id}', [UserController::class, 'update']);

// Route untuk menghapus data admin
Route::delete('/users/{id}', [UserController::class, 'destroy']);
