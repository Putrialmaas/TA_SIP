@extends('admin.layout')
@section('editinfoprak')

    <body>
        <div class="Judul mb-4">
            <a href="{{ route('admin.informasiprakerin') }}"><i style="padding-right: 2vh; color: #000000"
                    class="fas fa-chevron-left"></i></a>
            Edit Informasi Prakerin
        </div>
        <div class="card shadow" style="margin-top: 4vh">
            <div class="card-header py-3">
                <p class="sub-judul m-0">
                    Edit Data
                </p>
            </div>
            <form method="POST" action="">
                <div class="card-body mt-3 mb-3">
                    <div class="row mr-4 ml-4">
                        <div class="col-6" style="padding-right: 100px">
                            <div class="row mb-4">
                                <label class="form-label" style="color: #000000;"">Nama Perusahan</label>
                                <input type="text" class="form-control" name="tfperusahaan"
                                    placeholder="Masukkan Nama Perusahaan">
                            </div>
                            <div class="row mb-4">
                                <label class="form-label" style="color: #000000;"">Deskripsi</label>
                                <textarea id="summernote" placeholder="Deskripsi Perusahaan" name="deskripsi"
                                    class="border rounded-0 form-control summernote"></textarea>
                            </div>
                            <div class="row mb-4">
                                <label class="form-label" style="color: #000000;"">Posisi</label>
                                <input type="text" class="form-control" name="tfposisi"
                                    placeholder="Masukkan Jurusan Siswa">
                            </div>
                            <div class="row mb-4">
                                <label class="form-label">Persyaratan</label>
                                <textarea id="summernote" placeholder="Persyaratan" name="persyaratan" class="border rounded-0 form-control summernote"></textarea>
                            </div>
                        </div>
                        <div class="col-6" style="padding-left:100px">
                            <div class="row mb-4">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="tfemail" placeholder="name@example.com">
                            </div>
                            <div class="row mb-4">
                                <label class="form-label">No. Telp</label>
                                <input type="text" class="form-control" name="tfnotelepon"
                                    placeholder="Masukkan No. Telepon">
                            </div>
                            <div class="row mb-4">
                                <label class="form-label" style="color: #000000;"">Alamat Perusahaan</label>
                                <textarea class="form-control" rows="3" placeholder="Masukkan Alamat Perusahaan"></textarea>
                            </div>
                            <div class="btnedit" style="justify-content: end; display: flex">
                                <button type="button" class="btn" id="resetButton2"
                                    style="background-color: #EF4F4F; color: #ffffff">Reset</button>
                                <button type="submit" class="btn"
                                    style="background-color: #44B158; color: #ffffff; margin-left: 16px;">save
                                    Change</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </body>

@stop

@section('script')

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
