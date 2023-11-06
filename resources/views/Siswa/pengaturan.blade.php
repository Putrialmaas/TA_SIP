@extends ('siswa.layout')
@section('pengaturan')
    <link href="{{ asset('assets/css/siswa/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/siswa/pengaturan.css') }}" rel="stylesheet">

    <div class="judul mb-5">
        <span style="color: #000000">Edit</span>
        <span style="color :#44B158">Profil</span>
    </div>

    <div class="container-fluid" style="padding-top: 20px; margin-bottom: 90px">
        <div class="row">
            <div class="col-4">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" name="oldImage" value="">
                        <label for="imageUpload"><i class="fa fa-pencil-alt"></i></label>

                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url({{ asset('storage/') }});">
                        </div>

                        <div id="imagePreview" class="rounded-circle avatar avatar font-weight-bold"
                            style="background-image: url(''); font-size: 60px; height: 180px; width: 180px;"
                            data-initial="">
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-4" style="padding-right: 70px">

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

            </div>
            <div class="col-4" style="padding-right: 70px">
                <div class="row mb-4">
                    <label for="Alamat" class="form-label">No. Telp</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text"
                            placeholder="Masukkan No. Telepon" aria-label="readonly input example">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="email" class="form-label">Email</label>
                    <div class="text-field">
                        <input class="form-control" style="font-size: 14px;" type="text" placeholder="Masukkan Email"
                            aria-label="readonly input example">
                    </div>
                </div>

                <div class="btnpermohonan" style="justify-content: end; display: flex; padding-top:100px">
                    <button type="button" class="btn" style="background-color: #EF4F4F; color: #ffffff">Reset</button>
                    <button type="button" class="btn"
                        style="background-color: #44B158; color: #ffffff; margin-left: 10px">Save Change</button>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('script')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                    $('#imagePreview').removeAttr('data-initial');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>
@endsection