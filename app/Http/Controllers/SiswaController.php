<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa.dashboard');
    }

    public function permohonan() 
    {
        return view('siswa.permohonan');
    }

    public function jurnal() 
    {
        return view('siswa.jurnal');
    }

    public function laporan() 
    {
        return view('siswa.laporan');
    }

    public function pengaturan() 
    {
        return view('siswa.pengaturan');
    }
}
