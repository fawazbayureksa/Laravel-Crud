@extends('layouts.app')
@section('title')
Data User
@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead> 
                        <tr>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $s)
                        <tr>
                            <td>{{$s->name}}</td>
                            <td>{{$s->role}}</td>
                            <td>{{$s->email}}</td>
                            <td>
                                <ul class="nav">
                                    <a href="{{route ('user.edit',$s->id)}}" class="btn btn-warning mx-2 mb-2">Edit</a>
                                    <form action="{{route ('user.destroy',$s->id)}}" method="post">
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
    </div>
@endsection
