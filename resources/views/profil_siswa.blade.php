@extends('layouts.app')
@section('title')
Data Siswa 
@endsection

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card w-75">
        <div class="card-header">
            <h3>Profil Siswa</h3>
        </div>
        <div class="card-body">
            @can('isAdmin')
            <a href="{{route('siswa.index')}}" class="btn btn-dark">Kembali</a>
            @endcan
            <div class="row text-center">
                <div class="col-md-12">
                    <h4>
                        Nama
                        : {{$siswa->nama}}
                    </h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <h4>
                        Nis
                        : {{$siswa->nis}}
                    </h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <h4>
                        Tanggal Lahir
                        : {{$siswa->tgl_lahir}}
                    </h4>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection