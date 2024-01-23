@extends('guru.layout')
@section('monitoring')

    <body>

        <div class="Judul mb-4">Surat Monitoring</div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="sub-judul m-0">
                    Data Siswa Bimbingan
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Tempat Prakerin</th>
                                <th>No. Telp</th>
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
                                <td>121</td>
                                <td>Putri Almaas Auliasari</td>
                                <td>PT EPSON</td>
                                <td>085456544569</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <i class="fas fa-print"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="select" id="selectitem">
                                        <label class="form-check-label" for="selectitem"></label>
                                    </div>
                                </td>
                                <td>122</td>
                                <td>Galih Bayu Prakoso</td>
                                <td>PT CISCO</td>
                                <td>086912364589</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <i class="fas fa-print"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="select" id="selectitem">
                                        <label class="form-check-label" for="selectitem"></label>
                                    </div>
                                </td>
                                <td>123</td>
                                <td>Kirani Juli Andini</td>
                                <td>PT ANIMASI MULTIMEDIA</td>
                                <td>086712364589</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <i class="fas fa-print"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="select" id="selectitem">
                                        <label class="form-check-label" for="selectitem"></label>
                                    </div>
                                </td>
                                <td>124</td>
                                <td>Aleeya Auzara Himmatana</td>
                                <td>CV ALANA JAYA</td>
                                <td>082345617569</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <i class="fas fa-print"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="select" id="selectitem">
                                        <label class="form-check-label" for="selectitem"></label>
                                    </div>
                                </td>
                                <td>125</td>
                                <td>Putri Almira Ainurrizqi</td>
                                <td>CV ROEMAH KOMPUTER</td>
                                <td>082145783245</td>
                                <td style="display: flex; justify-content: center; align-item:center;">
                                    <i class="fas fa-print"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cetakitem">
                    <button type="button" class="btn mt-3"
                        style="background-color: #4f4e4c; color: #ffffff; font-size: 16px;" data-toggle="modal"
                        data-target="#modalCetakitem">Print Item</button>

                    <div class="modal fade" id="modalCetakitem" role="dialog" tabindex="-1"
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
                "targets": [0, 5]
            }]
        });
    </script>
@endsection