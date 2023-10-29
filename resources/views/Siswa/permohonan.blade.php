@extends ('siswa.layout')
@section('permohonan')

    <link href="{{ asset('assets/css/siswa/permohonan.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/siswa/layout.css') }}" rel="stylesheet">

    <div class="judul">
        <span style="color: #000000">Permohonan</span>
        <span style="color :#44B158">Prakerin</span>
    </div>

    <div class="container-fluid" style="padding-top: 20px; margin-bottom: 90px">
        <div class="row">
            <div class="col-6" style="padding-left : 200px; padding-right: 100px">
                <div class="row mb-4">
                    <div class="teks">
                        Isilah data berikut!
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="Nama" class="form-label">Nama Lengkap</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text" placeholder="Michel Jonas"
                        aria-label="readonly input example" readonly>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="NIS" class="form-label">NIS</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text" placeholder="220947"
                        aria-label="readonly input example" readonly>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="Jurusan" class="form-label">Jurusan</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text"
                        placeholder="Teknik Jaringan Komputer dan Telekomunikasi" aria-label="readonly input example"
                        readonly>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="Tempatprakerin" class="form-label">Tempat Prakerin</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text" placeholder="Tempat Prakerin"
                        aria-label="readonly input example" readonly>
                    </div>
                </div>
            </div>
            <div class="col-6" style="padding-left: 70px; padding-top: 51px; padding-right: 200px">
                <div class="row mb-4">
                    <label for="Alamat" class="form-label">Alamat Tempat Prakerin</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text" placeholder="Alamat Tempat Prakerin"
                        aria-label="readonly input example" readonly>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="email" class="form-label">Email Tempat Prakerin</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text" placeholder="Email Tempat Prakerin"
                        aria-label="readonly input example" readonly>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="nomorkontak" class="form-label">No. Telp Tempat Prakerin</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text"
                        placeholder="No. Telp Tempat Prakerin" aria-label="readonly input example" readonly>
                    </div>
                </div>
                <div class="btnpermohonan" style="justify-content: end; display: flex">
                    <button type="button" class="btn" style="background-color: #EF4F4F; color: #ffffff">Reset</button>
                    <button type="button" class="btn"
                        style="background-color: #44B158; color: #ffffff; margin-left: 10px">Submit</button>
                </div>



            </div>
        </div>


    </div>

@stop
