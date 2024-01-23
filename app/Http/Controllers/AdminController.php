<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;



class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function permohonan()
    {
        return view('admin.permohonan');
    }

    public function datasiswa()
    {
        return view('admin.datasiswa');
    }

    public function dataguru()
    {
        return view('admin.dataguru');
    }

    public function datatempatprakerin()
    {
        return view('admin.datatempatprakerin');
    }

    public function datapembagianpembimbing()
    {
        return view('admin.datapembagianpembimbing');
    }

    public function informasiprakerin()
    {
        return view('admin.informasiprakerin');
    }

    public function editinfoprak()
    {
        return view('admin.editinfoprak');
    }

    public function trashsiswa()
    {
        return view('admin.trash.trashsiswa');
    }

    public function trashguru()
    {
        return view('admin.trash.trashguru');
    }

    public function trashpembagian()
    {
        return view('admin.trash.trashpembagian');
    }

    public function trashinfoprak()
    {
        return view('admin.trash.trashinfoprak');
    }

    public function exportPdfPermohonan()
    {
        // $data = [
        //     // Data yang ingin Anda masukkan ke dalam PDF
        //     'title' => 'Contoh PDF',
        //     'content' => 'Isi PDF disini...',
        // ];

        // $pdf = PDF::loadView('admin.pdf.suratpermohonan', $data);

        // return $pdf->stream('document.pdf');

        return view('admin.pdf.suratpermohonan');
    }
}
