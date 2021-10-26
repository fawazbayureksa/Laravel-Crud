@extends('layouts.app')
@section('title')
SMA 404 - Edit Data
@endsection

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Ubah Data User</h3>
        </div>
        <div class="card-body">
            <a href="{{route('user.index')}}" class="btn btn-dark">Kembali</a>
            <form action="{{route('user.update',$user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" value="{{$user->name}}" class="form-control my-2" id="">
                    Role <input type="text" name="role" value="{{$user->role}}" id="" class="form-control my-2">
                    Email <input type="email" value="{{$user->email}}" name="email" class="form-control my-2" id="">
                </ul>
                <input type="submit" value="Ubah-Data" class="btn btn-warning">
            </form>
        </div>
    </div>
</div>

@endsection
