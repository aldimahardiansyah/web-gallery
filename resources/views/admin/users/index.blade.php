@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="/users/create" class="btn btn-primary mb-2">+ Admin</a>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Aldi Mahardiansyah</td>
                    <td>aldi@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
