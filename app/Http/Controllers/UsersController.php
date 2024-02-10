<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        // Dapatkan semua data admin dari database
        $users = User::all(); // SELECT * FROM users

        return view('admin.users.index', [
            'title' => 'Manajemen Admin',
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('admin.users.create', [
            'title' => 'Tambah Admin'
        ]);
    }

    public function store(Request $request)
    {
        // Simpan data form ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Kembalikan ke halaman manajemen admin
        return redirect('/users')->with('success', 'Berhasil menambahkan admin.');
    }
}
