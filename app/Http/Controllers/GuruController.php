<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view('guru.dashboard');
    }

    public function siswabimbingan()
    {
        return view('guru.siswabimbingan');
    }

    public function nilailaporan()
    {
        return view('guru.nilailaporan');
    }
}
