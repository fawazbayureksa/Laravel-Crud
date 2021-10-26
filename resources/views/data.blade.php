@extends('layouts.app')
@section('title') 
    Camp404-Data Siswa
@endsection
@section('content')
      <section id="table">
          <div class="row justify-content-center mt-2">
              <div class="col-md-4">
                <h1>Data Sisswa</h1>
                <table class="table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Tanggal lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fawwaz Bayureksa</td>
                            <td>101</td>
                            <td>2000-06-04</td>
                        </tr>
                        <tr>
                            <td>Nasrullah</td>
                            <td>102</td>
                            <td>1999-07-20</td>
                        </tr>
                    </tbody>
                </table>
              </div>
          </div>
      </section>
@endsection