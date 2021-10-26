@extends('layouts.app')
@section('title')
SMA 404 - Edit Data
@endsection

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Tambah Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route('siswa.index')}}" class="btn btn-dark">Kembali</a>
            <form action="{{route('siswa.update',$siswa->id)}}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="nama" value="{{$siswa->nama}}" class="form-control my-2" id="">
                    Nis <input type="text" name="nis" value="{{$siswa->nis}}" id="" class="form-control my-2">
                    Tanggal Lahir <input type="date" value="{{$siswa->tgl_lahir}}" name="tgl_lahir" class="form-control my-2" id="">
                </ul>
                <input type="submit" value="Ubah-Data" class="btn btn-warning">
            </form>
        </div>
    </div>
</div>

@endsection
