@extends('admin.layout')
@section('informasiprakerin')

    {{-- <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> --}}

    <body>
        <div class="Judul">Informasi Prakerin</div>
        <button type="button" class="btn btn-primary mt-2 mb-4" data-toggle="modal" data-target="#modalTambah">
            <i class="fas fa-plus mr-2 ml-1"></i>
            Tambah Data
        </button>

        <!-- Awal Modal -->
        <div class="modal fade" id="modalTambah" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title" id="staticBackdropLabel"
                            style="color: #000000; font-size: 20px; font-weight: 700;">Tambah Informasi Prakerin</p>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <form method="POST" action="">
                        <div class="modal-body">

                            <div class="mb-3">
                                <label class="form-label" style="color: #000000;"">Nama Perusahan</label>
                                <input type="text" class="form-control" name="tfperusahaan"
                                    placeholder="Masukkan Nama Perusahaan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #000000;"">Deskripsi</label>
                                <textarea id="summernote" placeholder="Deskripsi Perusahaan" name="deskripsi"
                                    class="border rounded-0 form-control summernote"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" style="color: #000000;"">Posisi</label>
                                <input type="text" class="form-control" name="tfposisi"
                                    placeholder="Masukkan Jurusan Siswa">
                            </div>


                            <div class="mb-3" style="color: #000000;"">
                                <label class="form-label">Persyaratan</label>
                                <textarea id="summernote" placeholder="Persyaratan" name="persyaratan" class="border rounded-0 form-control summernote"></textarea>
                            </div>
                            <div class="mb-3" style="color: #000000;">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="tfemail" placeholder="name@example.com">
                            </div>
                            <div class="mb-3" style="color: #000000;"">
                                <label class="form-label">No. Telp</label>
                                <input type="text" class="form-control" name="tfnotelepon"
                                    placeholder="Masukkan No. Telepon">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #000000;"">Alamat Perusahaan</label>
                                <textarea class="form-control" rows="3" placeholder="Masukkan Alamat Perusahaan"></textarea>
                            </div>

                            {{-- <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div> --}}

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal" name="bsave"
                                style="background-color: #EF4F4F; color: #ffffff; font-size: 16px;">Reset</button>
                            <button type="submit" class="btn"
                                style="background-color: #44B158; color: #ffffff; font-size: 16px; font-family: Poppins;">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Akhir Modal -->
        <a href="{{ route('admin.trash.trashinfoprak') }}"><button type="button" class="btn mt-2 mb-4 ml-2"
            style="background-color: #fe5a48; color: #ffffff; font-size: 16px;">
            <i class="fas fa-trash mr-2 ml-1"></i>
            Trash</button></a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="sub-judul m-0">
                    List Informasi Prakerin
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
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
                                    <div class="editdata">
                                        <button type="button" class="btn">
                                            <a href="{{ route('admin.editinfoprak') }}"><i class="far fa-edit"
                                                    style="color: #000000"></i></a>
                                        </button>
                                    </div>
                                    <div class="hapusdata">
                                        <button type="button" class="btn" style="color: #000000" data-toggle="modal"
                                            data-target="#modalHapus">
                                            <i class="far fa-trash-alt"></i>
                                        </button>

                                        <div class="modal fade" id="modalHapus" role="dialog" tabindex="-1"
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
                                                        Apakah Anda yakin ingin menghapus data?</p>
                                                    <div class="modalfoot mt-3 mb-3"
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
                                    <div class="editdata">
                                        <button type="button" class="btn">
                                            <a href="{{ route('admin.editinfoprak') }}"><i class="far fa-edit"
                                                    style="color: #000000"></i></a>
                                        </button>
                                    </div>
                                    <div class="hapusdata">
                                        <button type="button" class="btn" style="color: #000000" data-toggle="modal"
                                            data-target="#modalHapus">
                                            <i class="far fa-trash-alt"></i>
                                        </button>

                                        <div class="modal fade" id="modalHapus" role="dialog" tabindex="-1"
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
                                                        Apakah Anda yakin ingin menghapus data?</p>
                                                    <div class="modalfoot mt-3 mb-3"
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
            </div>
        </div>
    </body>

@stop

@section('script')
    <script>
        $('#dataTable').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": 4
            }]
        });
    </script>

    <script>
        $('#summernote').summernote({
            // placeholder: 'Deskripsi Perusahaan', 'Persyaratan',
            tabsize: 2,
            height: 100
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endsection
