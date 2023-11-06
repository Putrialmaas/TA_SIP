@extends('siswa.layout')
@section('jurnal')


    <link href="{{ asset('assets/css/siswa/jurnal.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/siswa/layout.css') }}" rel="stylesheet">

    <div class="judul">
        <span style="color: #000000">Pengisian</span>
        <span style="color :#44B158">Jurnal</span>
    </div>

    <div class="container-fluid" style="padding-top: 60px; padding-bottom: 90px">
        <div class="row">
            <div class="col-6" style="padding-left : 200px; padding-right: 100px">
                <div class="row mb-4">
                    <label for="Nama" class="form-label">Nama Siswa</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text" placeholder="Michel Jonas"
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
                    <label for="Guru" class="form-label">Guru Pembimbing</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text" placeholder="Johan, S.Kom."
                            aria-label="readonly input example" readonly>
                    </div>
                </div>
            </div>
            <div class="col-6" style="padding-left: 70px; padding-right: 200px">
                <div class="row mb-4">
                    <label for="date" class="form-label">Date</label>
                    <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                        <input class="form-control" type="text" readonly />
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                    </div>
                </div>

                <div class="row mb-4">
                    <label for="keterangan" class="form-label">Keterangan Kegiatan</label>
                    <div class="text-field">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="btnpermohonan" style="justify-content: end; display: flex">
                    <button type="button" class="btn" style="background-color: #EF4F4F; color: #ffffff">Reset</button>
                    <button type="button" class="btn"
                        style="background-color: #44B158; color: #ffffff; margin-left: 16px;">Submit</button>
                </div>



            </div>
        </div>


    </div>
@stop
