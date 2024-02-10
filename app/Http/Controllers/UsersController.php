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

    // method untuk menampilkan form edit admin
    public function edit($id)
    {
        // Cari admin berdasarkan id
        $user = User::find($id);

        // Tampilkan form edit admin
        return view('admin.users.edit', [
            'title' => 'Edit Admin',
            'user' => $user,
        ]);
    }

    // method untuk mengupdate data admin
    public function update(Request $request, $id)
    {
        // Cari admin berdasarkan id
        $user = User::find($id);

        // Update data admin
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Kembalikan ke halaman manajemen admin
        return redirect('/users')->with('success', 'Berhasil mengedit data admin.');
    }

    // method untuk menghapus data admin
    public function destroy($id)
    {
        // Hapus data admin berdasarkan id
        User::destroy($id);

        // Kembalikan ke halaman manajemen admin
        return redirect('/users')->with('success', 'Berhasil menghapus data admin.');
    }
}
