@extends('layouts.app')
@section('title')
Data Siswa 
@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{route('siswa.create')}}" class="btn btn-primary my-2">Tambah Data Siswa</a>
                <table class="table table-bordered table-striped">
                    <thead> 
                        <tr>
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Tanggal Lahir</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswa as $s)
                        <tr>
                            <td>{{$s->nama}}</td>
                            <td>{{$s->nis}}</td>
                            <td>{{$s->tgl_lahir}}</td>
                            <td>
                                <ul class="nav">
                                    <a href="{{route ('siswa.show',$s->id)}}" class="btn btn-success mx-2">Show</a>
                                    <a href="{{route ('siswa.edit',$s->id)}}" class="btn btn-warning mx-2">Edit</a>
                                    <form action="{{route ('siswa.destroy',$s->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mx-2">Delete</button>
                                    </form>
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
