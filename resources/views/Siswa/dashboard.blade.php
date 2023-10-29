@extends('siswa.layout')
@section('dashboard')

    <link href="{{ asset('assets/css/siswa/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/siswa/layout.css') }}" rel="stylesheet">

    <div class="cont-1 container-fluid" style="margin-top: 90px">
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="ms-2 bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
            </svg>
            <div style="margin-left: 20px">
                Selamat datang, Michael Jonas di Sistem Informasi Prakerin!
            </div>
            <button class="btn btn-close" aria-label="Close" style="margin-left: auto;"></button>
        </div>
    </div>


    <div class="container-fluid" style="padding-top: 10px">
        <div class="row ms-auto">
            <div class="col-8">
                <div class="row mb-2">
                    <div class="card" style="padding: 0;">
                        <div class="card-body" style="padding: 0;">
                            <div class="row" style="padding: 0 12px;">
                                <div class="col-1 text-center"
                                    style="background-color: #D9D9D9; border-top-left-radius: 5px; border-bottom-left-radius: 5px; display: flex; align-items: center; justify-content: center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#25316D"
                                        class="bi bi-calendar-week" viewBox="0 0 16 16">
                                        <path
                                            d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg>
                                </div>
                                <div class="col-11" style="padding: 16px 16px;">
                                    20 Januari 2024 - 18 Juli 2024
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="card" style="padding: 0;">
                        <div class="card-body" style="padding: 0;">
                            <div class="row" style="padding: 0 12px;">
                                <div class="col-1 text-center"
                                    style="background-color: #D9D9D9; border-top-left-radius: 5px; border-bottom-left-radius: 5px; display: flex; align-items: center; justify-content: center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#25316D"
                                        class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    </svg>
                                </div>
                                <div class="col-11" style="padding: 16px 16px;">
                                    Guru Pembimbing
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="card" style="padding: 0;">
                        <div class="card-body" style="padding: 0;">
                            <div class="row" style="padding: 0 12px;">
                                <div class="col-1 text-center"
                                    style="background-color: #D9D9D9; border-top-left-radius: 5px; border-bottom-left-radius: 5px; display: flex; align-items: center; justify-content: center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#25316D"
                                        class="bi bi-buildings-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z" />
                                    </svg>
                                </div>
                                <div class="col-11" style="padding: 16px 16px;">
                                    Tempat Pelaksaan Prakerin
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="card" style="padding: 0;">
                        <div class="card-body" style="padding: 0;">
                            <div class="row" style="padding: 0 12px;">
                                <div class="col-1 text-center"
                                    style="background-color: #D9D9D9; border-top-left-radius: 5px; border-bottom-left-radius: 5px; display: flex; align-items: center; justify-content: center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#25316D"
                                        class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                    </svg>
                                </div>
                                <div class="col-11" style="padding: 16px 16px;">
                                    Siswa mencari tempat untuk pelaksanaan Prakerin, kemudian mengajukan surat
                                    Permohonan Prakerin yang ditujukan kepada Perusahaan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="isi-profil" style="padding-left: 14px; padding-right: 14px; padding-bottom: 12px">
                            <div class="row mb-2">
                                <div class="col-6">
                                    <div class="text-start">
                                        Profil
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <a href="/edit-profil   ">
                                            Edit Profil
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="assets/img/user1.jpg" width="90" height="120" alt="user">
                                </div>
                                <div class="col-8" style="padding-top: 20px; padding-left: 0px;">
                                    Michel Jonas
                                    <br>20189
                                    <br>micheljonas@gmail.com
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p class="card-text text-center mt-1">
                            Teknik Jaringan Komputer dan Telekomunikasi
                            <br>SMK Negeri 1 Adiwerna
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="judulcard mb-5 mt-5">
        Informasi
    </div>
    <div class="card-group">
        <div class="col-4">
            <div class="card ms-4 shadow">
                <div class="card-body">
                    <p class="card-title">
                        Permohonan Prakerin
                    </p>
                    <p align="justify" class="card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card ms-4 shadow">
                <div class="card-body">
                    <p class="card-title">
                        Pengisian Jurnal
                    </p>
                    <p align="justify" class="card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card ms-4 me-4 shadow">
                <div class="card-body">
                    <p class="card-title">
                        Pengumpulan Laporan
                    </p>
                    <p align="justify" class="card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo.</p>
                </div>
            </div>
        </div>
    </div>
@stop
