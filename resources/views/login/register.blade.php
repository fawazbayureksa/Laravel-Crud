@extends('template')
@section('title') 
    Camp404-Register
@endsection
@section('content')
 <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control mb-3" name="nama">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control mb-3" name="email">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control mb-3" name="password">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Confirm Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control mb-3" name="kpassword">
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection