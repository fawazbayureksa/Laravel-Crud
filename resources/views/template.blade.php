<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/style.css')}}" rel="stylesheet" type="text/css">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-md fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Camp404</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('/home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/datasiswa')}}">Data Siswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('info_kegiatan')}}">Info Kegiatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('manajemen_user')}}">Manajemen User</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
      @yield('content')



    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>