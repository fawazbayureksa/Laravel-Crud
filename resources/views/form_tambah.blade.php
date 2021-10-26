@extends('layouts.app')
@section('title')
SMA 404 - Tambah Data
@endsection

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Tambah Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route('siswa.index')}}" class="btn btn-dark">Kembali</a>
            <form action="{{route('siswa.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="nama" class="form-control my-2" id="">
                    Nis <input type="text" name="nis" id="" class="form-control my-2">
                    Tanggal Lahir <input type="date" name="tgl_lahir" class="form-control my-2" id="">
                </ul>
                <input type="submit" value="Simpan-Data" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

@endsection
