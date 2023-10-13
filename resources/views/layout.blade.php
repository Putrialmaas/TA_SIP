<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM PRAKERIN SMKN 1 ADIWERNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/welcome.css">

</head>

<body>

    {{-- navigation bar --}}
    <nav class="navbar fixed-top justify-content-between navbar-expand-lg">
        <div class="logo">
            <a class="navbar-brand-two d-inline-block ml-1" href="#">
                <img src="assets/img/logosmk.png" alt="Logo" width="40" height="40" class="logo-navbar" />
            </a>
            <a class="navbar-brand href="#">SEKOLAH MENENGAH KEJURUAN
                <br>NEGERI 1 ADIWERNA</a>
        </div>
        <a href="{{ route('login') }}">
            <button type="button" class="d-flex btn btn-outline-light">Login</button>
        </a>
        
    </nav>

    <div class="isi">
        @yield('content')
    </div>

    {{-- Footer --}}
    <div class="footer">
        <div class="logo">
            <div class="logo-footer">
                <img src="assets/img/logosmk.png" alt="Logo" class="logo-image-size" />
            </div>
            <div style="width: 50%; height: 100%; margin-right: auto;">
                <div class="contact">
                    <p class="judul">SMKN 1 ADIWERNA</p>
                    <ul class="list-unstyled">
                        <li>
                            <div class="icon-contact">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span class="contact-text">Jl. Raya II PO Box 24 Adiwerna Tegal, Indonesia</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-contact">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="contact-text">mail@smkn1adw.sch.id</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-contact">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-phone">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                <span class="contact-text">Telp. (0283) 443768</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="maps">
                <a href="https://maps.app.goo.gl/qY8YSmcHdRYQUUFr7">
                    <img src="assets/img/maps_sekolah.png" alt="Foto" class="maps-image-size" />
                </a>
            </div>
        </div>
    </div>
    <div class="cpr">
        <div class="d-flex justify-content-center style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="copyright">
                © 2023 SMK NEGERI 1 ADIWERNA
            </div>
        </div>
    </div>
    </section>
</body>

</html>
