<?php

use App\Http\Controllers\UsersController;
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

Route::get('/users', [UsersController::class, 'index']);

Route::get('/users/create', [UsersController::class, 'create']);

Route::post('/users/store', [UsersController::class, 'store']);

// Route untuk menampilkan form edit admin
Route::get('/users/{id}/edit', [UsersController::class, 'edit']);

// Route untuk mengupdate data admin
Route::put('users/{id}', [UsersController::class, 'update']);

// Route untuk menghapus data admin
Route::get('users/{id}/destroy', [UsersController::class, 'destroy']);
