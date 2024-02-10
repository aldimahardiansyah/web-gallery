@extends('admin.layout')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="/users/store" method="post">
             
            <div class="form-group">
                <label for="name">Nama :</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary mx-auto d-block">Simpan</button>
        </form>
    </div>
</div>
@endsection