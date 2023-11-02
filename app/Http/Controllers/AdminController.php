<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
