@extends('layout')
@section('informasiprak')

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

        .jumbotron {
            /* margin-top: 75px; */
            padding: 8px 64px;
            font-family: Poppins;
            font-size: 28px;
            font-style: normal;
            font-weight: bold;
            line-height: normal;
            letter-spacing: 0.5px;
            background-image: url("/assets/img/bgjumbotron.jpg");
            background-color: rgb(94, 94, 94);
            background-blend-mode: multiply;
            position: relative;
            background-size: cover;
            color: white;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            margin-bottom: 8vh;
        }


        .jumbotron .lead {
            margin-top: 20px;
            font-weight: light;
            font-size: 14px;

        }

        .jumbotron .display-4 {
            font-weight: 800;
            font-size: 36px;
            line-height: normal;

        }

        .col-8 {
            font-family: Poppins;
        }

        .name {
            font-weight: 800;
            font-size: 26px;

        }
    </style>

    <body>
        <div class="jumbotron">
            <h1 class="display-4">
                Informasi Prakerin
            </h1>
            <p class="lead">Informasi lowongan Praktik Kerja Industri dari beberapa Dunia Industri
                <br>atau Dunia Usaha yang bekerja sama dengan SMK Negeri 1 Adiwerna
            </p>
        </div>

        {{-- Card Kegiatan Prakerin --}}


        <div class="row" style="width: 100%">
            <div class="col-3 mb-4" style="display:flex; justify-content:center; align-items:center">
                <img src="assets/img/epson.jpg" width="140" height="140" class="img-thumbnail" alt="...">
            </div>
            <div class="col-8 mb-4">
                <a class="name mt-2" href="{{ route('detailinfo') }}" style="text-decoration: none; color: #000000;">PT
                    EPSON</a>
                <br>
                <p class="keterangan mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</p>
            </div>
        </div>
        <div class="row" style="width: 100%">
            <div class="col-3 mb-4" style="display:flex; justify-content:center; align-items:center">
                <img src="assets/img/epson.jpg" width="140" height="140" class="img-thumbnail" alt="...">
            </div>
            <div class="col-8 mb-4">
                <a class="name mt-2" href="{{ route('detailinfo') }}" style="text-decoration: none; color: #000000;">PT
                    EPSON</a>
                <br>
                <p class="keterangan mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</p>
            </div>
        </div>
        <div class="row" style="width: 100%">
            <div class="col-3 mb-4" style="display:flex; justify-content:center; align-items:center">
                <img src="assets/img/epson.jpg" width="140" height="140" class="img-thumbnail" alt="...">
            </div>
            <div class="col-8 mb-4">
                <a class="name mt-2" href="{{ route('detailinfo') }}" style="text-decoration: none; color: #000000;">PT
                    EPSON</a>
                <br>
                <p class="keterangan mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</p>
            </div>
        </div>
    </body>

@stop
