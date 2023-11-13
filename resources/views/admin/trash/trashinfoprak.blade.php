@extends('admin.layout')
@section('trashinfoprak')


    <body>
        <div class="Judul">
            <a href="{{ route('admin.informasiprakerin') }}"><i style="padding-right: 2vh; color: #000000"
                    class="fas fa-chevron-left"></i></a>
            Trash Informasi Prakerin
        </div>
        <div class="card shadow mb-4" style="margin-top: 4vh">
            <div class="card-header py-3">
                <p class="sub-judul m-0">
                    List Data
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>Select</td>
                                <th>Nama Perusahaan</th>
                                <th>Deskripsi</th>
                                <th>Posisi</th>
                                <th>Persyaratan</th>
                                <th>Email</th>
                                <th>No. Telepon</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="select" id="selectitem">
                                        <label class="form-check-label" for="selectitem"></label>
                                    </div>
                                </td>
                                <td>PT Epson</td>
                                <td>Lorem ipsum dolor sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim.</td>
                                <td>Cloud Computing Engineer
                                    <br>Software Development
                                </td>
                                <td>Jurusan TKJ
                                    <br>Laki-laki
                                    <br>Memiliki basic kali linux
                                </td>
                                <td>epson@gmail.com</td>
                                <td>089789078907</td>
                                <td>jl. kenanga baru no. 3</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <div class="restore">
                                        <button type="button" class="btn" style="color: #FEC048;" data-toggle="modal"
                                            data-target="#modalRestore">
                                            <i class="fas fa-undo-alt"></i>
                                        </button>

                                        <div class="modal fade" id="modalRestore" role="dialog" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body"
                                                        style="display: flex; align-items:center; justify-content:center; text-align:center; ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                            height="50" style="color:#44B158" fill="currentColor"
                                                            class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                                            <path
                                                                d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                                        </svg>
                                                    </div>
                                                    <p
                                                        style="display: flex; align-items:center; justify-content:center; text-align:center; font-weight:600; font-size:20px">
                                                        Data berhasil dipulihkan</p>
                                                    <div class="modalfoot  mb-3"
                                                        style="display:flex; justify-content: center; align-items:center;">
                                                        <button type="button" class="btn" data-dismiss="modal"
                                                            style="background-color: #A4A6B9; color: #ffffff; font-size: 16px;">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hapuspermanen">
                                        <button type="button" class="btn" style="color: #EF4F4F" data-toggle="modal"
                                            data-target="#modalHapuspermanen">
                                            <i class="far fa-trash-alt"></i>
                                        </button>

                                        <div class="modal fade" id="modalHapuspermanen" role="dialog" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body"
                                                        style="display: flex; align-items:center; justify-content:center; text-align:center; ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                            height="50" style="color:#EF4F4F" fill="currentColor"
                                                            class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                            <path
                                                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                                        </svg>
                                                    </div>
                                                    <p
                                                        style="display: flex; align-items:center; justify-content:center; text-align:center; font-weight:600; font-size:20px">
                                                        Hapus data terpilih secara permanen?</p>
                                                    <div class="modalfoot mt-1 mb-3"
                                                        style="display:flex; justify-content: center; align-items:center;">
                                                        <button type="button" class="btn mr-2" data-dismiss="modal"
                                                            style="background-color: #EF4F4F; color: #ffffff; font-size: 16px;">Tidak</button>
                                                        <button type="submit" class="btn ml-2"
                                                            style="background-color: #44B158; color: #ffffff; font-size: 16px; font-family: Poppins;">Ya,
                                                            Hapus Saja!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="select" id="selectitem">
                                        <label class="form-check-label" for="selectitem"></label>
                                    </div>
                                </td>
                                <td>PT Epson</td>
                                <td>Lorem ipsum dolor sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim.</td>
                                <td>Cloud Computing Engineer
                                    <br>Software Development
                                </td>
                                <td>Jurusan TKJ
                                    <br>Laki-laki
                                    <br>Memiliki basic kali linux
                                </td>
                                <td>epson@gmail.com</td>
                                <td>089789078907</td>
                                <td>jl. kenanga baru no. 3</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <div class="restore">
                                        <button type="button" class="btn" style="color: #FEC048;" data-toggle="modal"
                                            data-target="#modalRestore">
                                            <i class="fas fa-undo-alt"></i>
                                        </button>

                                        <div class="modal fade" id="modalRestore" role="dialog" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body"
                                                        style="display: flex; align-items:center; justify-content:center; text-align:center; ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                            height="50" style="color:#44B158" fill="currentColor"
                                                            class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                                            <path
                                                                d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                                        </svg>
                                                    </div>
                                                    <p
                                                        style="display: flex; align-items:center; justify-content:center; text-align:center; font-weight:600; font-size:20px">
                                                        Data berhasil dipulihkan</p>
                                                    <div class="modalfoot  mb-3"
                                                        style="display:flex; justify-content: center; align-items:center;">
                                                        <button type="button" class="btn" data-dismiss="modal"
                                                            style="background-color: #A4A6B9; color: #ffffff; font-size: 16px;">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hapuspermanen">
                                        <button type="button" class="btn" style="color: #EF4F4F" data-toggle="modal"
                                            data-target="#modalHapuspermanen">
                                            <i class="far fa-trash-alt"></i>
                                        </button>

                                        <div class="modal fade" id="modalHapuspermanen" role="dialog" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body"
                                                        style="display: flex; align-items:center; justify-content:center; text-align:center; ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                            height="50" style="color:#EF4F4F" fill="currentColor"
                                                            class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                            <path
                                                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                                        </svg>
                                                    </div>
                                                    <p
                                                        style="display: flex; align-items:center; justify-content:center; text-align:center; font-weight:600; font-size:20px">
                                                        Hapus data terpilih secara permanen?</p>
                                                    <div class="modalfoot mt-1 mb-3"
                                                        style="display:flex; justify-content: center; align-items:center;">
                                                        <button type="button" class="btn mr-2" data-dismiss="modal"
                                                            style="background-color: #EF4F4F; color: #ffffff; font-size: 16px;">Tidak</button>
                                                        <button type="submit" class="btn ml-2"
                                                            style="background-color: #44B158; color: #ffffff; font-size: 16px; font-family: Poppins;">Ya,
                                                            Hapus Saja!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="terpilih">
                    <button type="button" class="btn mt-3"
                        style="background-color: #FEC048; color: #ffffff; font-size: 16px;" data-toggle="modal"
                        data-target="#modalRestoreitem">Restore Item</button>

                    <div class="modal fade" id="modalRestoreitem" role="dialog" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body"
                                    style="display: flex; align-items:center; justify-content:center; text-align:center; ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        style="color:#44B158" fill="currentColor" class="bi bi-check2-circle"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                        <path
                                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                    </svg>
                                </div>
                                <p
                                    style="display: flex; align-items:center; justify-content:center; text-align:center; font-weight:600; font-size:20px">
                                    Data berhasil dipulihkan</p>
                                <div class="modalfoot  mb-3"
                                    style="display:flex; justify-content: center; align-items:center;">
                                    <button type="button" class="btn" data-dismiss="modal"
                                        style="background-color: #A4A6B9; color: #ffffff; font-size: 16px;">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn mt-3 ml-2"
                        style="background-color: #EF4F4F; color: #ffffff; font-size: 16px;" data-toggle="modal"
                        data-target="#modalHapusitem">Delete Item</button>

                    <div class="modal fade" id="modalHapusitem" role="dialog" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body"
                                    style="display: flex; align-items:center; justify-content:center; text-align:center; ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        style="color:#EF4F4F" fill="currentColor" class="bi bi-exclamation-circle"
                                        viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                    </svg>
                                </div>
                                <p
                                    style="display: flex; align-items:center; justify-content:center; text-align:center; font-weight:600; font-size:20px">
                                    Hapus data terpilih secara permanen?</p>
                                <div class="modalfoot mt-1 mb-3"
                                    style="display:flex; justify-content: center; align-items:center;">
                                    <button type="button" class="btn mr-2" data-dismiss="modal"
                                        style="background-color: #EF4F4F; color: #ffffff; font-size: 16px;">Tidak</button>
                                    <button type="submit" class="btn ml-2"
                                        style="background-color: #44B158; color: #ffffff; font-size: 16px; font-family: Poppins;">Ya,
                                        Hapus Saja!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@stop

@section('script')
    <script>
        $('#dataTable').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [0, 8]
            }]
        });
    </script>
@endsection
