<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home(){
        return view('home');
    }
    public function info_kegiatan(){
        return view('info');
    }
    public function data_siswa(){
        return view('data');
    }

}
