@extends('layout')
@section('detail')

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

        .container {

            margin-left: 4vw;
            /* padding: 8px 64px; */
        }

        .Judul {
            font-family: Poppins;
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            color: #000000;
        }

        .name {
            font-family: Poppins;
            font-weight: 900;
            font-size: 30px;

        }

        .img-fluid {
            width: 40vw;
            height: 50vh;
        }

        .keterangan {
            padding-top: 3vh;
            padding-left: 5.6vh;
            font-size: 16px;
            font-family: Poppins;
            text-align: justify;

        }

        .nama {
            font-weight: 600;
            font-size: 16px;
        }

        .ket {
            font-size: 8px;
            text-align: justify;

        }
    </style>

    <body>
        <div class="row" style="width: 100%; margin-bottom:10vh">
            <div class="Judul mb-4">
                <a href="{{ route('informasiprak') }}"><i
                        style="padding-left: 8.9vh; padding-right: 3vh; padding-top:13vh; color: #000000"
                        class="fas fa-arrow-left"></i></a>
                Informasi Prakerin
            </div>
            <div class="col-7">
                <div class="container">

                    <div class="name" style="padding-left: 5.6vh;">
                        PT EPSON
                        <br><img src="assets/img/gedungepson.jpg" class="img-fluid" alt="...">
                    </div>
                    <p class="keterangan mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod
                        tempor incididunt ut labore et
                        dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea
                        commodo consequat.</p>
                    <div class="posisi mb-3" style="padding-left: 5.6vh; font-family: Poppins;">
                        <p style="font-size: 26px; font-weight: 800; ">Posisi</p>
                        <p style="font-size: 16px;">
                            1. Cloud Computing
                            <br>2. Software Developer
                            <br>3. Data Analytic
                        </p>
                    </div>
                    <div class="persyaratan" style="padding-left: 5.6vh;  font-family: Poppins;">
                        <p style="font-size: 26px; font-weight: 800;">Persyaratan</p>
                        <p style="font-size: 16px; text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit,
                            <br>sed do eiusmod tempor incididunt ut labore et dolore
                            <br>magna aliqua. Ut enim ad minim veniam, quis nostrud
                            <br>exercitation ullamco laboris nisi ut aliquip ex ea
                            <br>commodo consequat.
                        </p>
                    </div>
                    <div class="kontak" style="padding-left: 5.6vh;  font-family: Poppins;">
                        <p style="font-size: 26px; font-weight: 800;">Alamat dan Kontak</p>
                        <p style="font-size: 16px;">
                            PT Epson Indonesia
                            <br>CIBIS Tower 9 3rd Floor
                            <br>CIBIS Business Park
                            <br>Jl. T B Simatupang No. 2 Jakarta Selatan 12560 Indonesia
                            <br>Tel: 62-21-808-66-766
                            <br>Fax: 62-21-808-66-799
                        </p>
                    </div>
                    <div class="btnpermohonan" style="padding-left:5.6vh; margin-top: 5vh;">
                        <button type="button" class="btn"
                            style="background-color: #445cb1; color: #ffffff;">Ajukan Permohonan</button>
                    </div>
                </div>
            </div>
            <div class="col-1">

            </div>
            <div class="col-4">
                <div class="card" style="border-radius: 16px; border-color: #000000;">
                    <div class="row mt-4">
                        <div class="col-3" style="display:flex; justify-content:center; align-items:center">
                            <img src="assets/img/epson.jpg" width="70" height="70" class="img-thumbnail"
                                alt="...">
                        </div>
                        <div class="col-7">
                            <a class="nama" href="{{ route('detailinfo') }}"
                                style="text-decoration: none; color: #000000;">PT EPSON</a>
                            <br>
                            <p class="ket">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod
                                tempor incididunt ut labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea
                                commodo consequat.</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3" style="display:flex; justify-content:center; align-items:center">
                            <img src="assets/img/epson.jpg" width="70" height="70" class="img-thumbnail"
                                alt="...">
                        </div>
                        <div class="col-7">
                            <a class="nama" href="{{ route('detailinfo') }}"
                                style="text-decoration: none; color: #000000;">PT EPSON</a>
                            <br>
                            <p class="ket">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod
                                tempor incididunt ut labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea
                                commodo consequat.</p>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-3" style="display:flex; justify-content:center; align-items:center">
                            <img src="assets/img/epson.jpg" width="70" height="70" class="img-thumbnail"
                                alt="...">
                        </div>
                        <div class="col-7">
                            <a class="nama" href="{{ route('detailinfo') }}"
                                style="text-decoration: none; color: #000000;">PT EPSON</a>
                            <br>
                            <p class="ket">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod
                                tempor incididunt ut labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea
                                commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@stop
