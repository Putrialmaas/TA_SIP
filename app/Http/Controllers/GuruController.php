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

    public function pengumpulan()
    {
        return view('guru.pengumpulan');
    }

    public function monitoring()
    {
        return view('guru.monitoring');
    }

    public function penarikan()
    {
        return view('guru.penarikan');
    }

    public function exportPdfPenarikan()
    {
        // $data = [
        //     // Data yang ingin Anda masukkan ke dalam PDF
        //     'title' => 'Contoh PDF',
        //     'content' => 'Isi PDF disini...',
        // ];

        // $pdf = PDF::loadView('admin.pdf.suratpermohonan', $data);

        // return $pdf->stream('document.pdf');

        return view('guru.pdf.suratpenarikan');
    }
}

