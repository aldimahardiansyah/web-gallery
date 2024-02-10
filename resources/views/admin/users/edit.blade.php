@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/users/{{ $user->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama :</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                </div>

                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password">
                    <small>Kosongkan jika tidak ingin mengubah password.</small>
                </div>

                <button type="submit" class="btn btn-primary mx-auto d-block">Simpan</button>
            </form>
        </div>
    </div>
@endsection
