@extends('admin.layout')
@section('datapembagianpembimbing')

    {{-- <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> --}}

    <body>
        <div class="Judul">Data Pembagian Guru Pembimbing</div>
        <button type="button" class="btn btn-primary mt-2 mb-4" data-toggle="modal" data-target="#modalTambah">
            <i class="fas fa-plus mr-2 ml-1"></i>
            Tambah Data
        </button>

        <!-- Awal Modal -->
        <div class="modal fade" id="modalTambah" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title" id="staticBackdropLabel"
                            style="color: #000000; font-size: 20px; font-weight: 700;">Form Pembagian Pembimbing</p>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <form method="POST" action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" style="color: #000000;"">Nama Siswa</label>
                                <input type="text" class="form-control" name="tfnama" placeholder="Masukkan Nama Siswa">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #000000;"">Jurusan</label>
                                <input type="text" class="form-control" name="tfjurusan" placeholder="Masukkan Jurusan Siswa" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #000000;"">Tempat Prakerin</label>
                                <input type="text" class="form-control" name="tftempatprakerin" placeholder="Masukkan Tempat Prakerin">
                            </div>
                            <div class="mb-3" style="color: #000000;"">
                                <label class="form-label">Guru Pembimbing</label>
                                <input type="text" class="form-control" name="tfnamaguru"
                                    placeholder="Masukkan Nama Guru">
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

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="sub-judul m-0">
                    Data Pembagian Guru Pembimbing
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>Siswa Yang Dibimbing</th>
                                <th>Tempat Prakerin</th>
                                <th>Guru Pembimbing</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt ml-4"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt ml-4"></i>
                                </td>

                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt ml-4"></i>
                                </td>

                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt ml-4"></i>
                                </td>

                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <i class="far fa-edit"></i>
                                    <i class="far fa-trash-alt ml-4"></i>
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
@endsection
