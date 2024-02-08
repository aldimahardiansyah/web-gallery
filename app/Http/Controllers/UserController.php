<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // buat method index untuk membuka tampilan manajemen admin
    public function index()
    {
        return view('admin.manajemen-admin.index', [
            'title' => 'Manajemen Admin'
        ]);
    }
}
