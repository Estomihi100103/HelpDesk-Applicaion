@extends('layouts.main')

@section('container')
    <div class="container mt-4 d-flex flex-column align-items-center">
        <div class="col-md-7 d-flex justify-content-center ">
            <div class="col-md-9 d-flex card mt-2">
                <div class="card-body">
                    <h3 class="text-center"style="font-weight: bold; font-style: italic;">Pengaturan</h3>
                    <form method="post" action="" class="mb-5 " enctype="multipart/form-data">

                        @csrf {{-- agar tidak ada error 419 page expired --}}
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <select class="form-select" id="provinsi">
                                <option selected>Pilih Provinsi</option>
                                <option value="web-programming">Sumatera Utara</option>
                                <option value="komputasi">Sulawesi Utara</option>
                                <option value="data-sains">Jakarta</option>
                                <option value="data-analis">Kalimantan Tengah</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota</label>
                            <select class="form-select" id="kota">
                                <option selected>Pilih Kota</option>
                                <option value="web-programming">Jakarta</option>
                                <option value="komputasi">Bandung</option>
                                <option value="data-sains">Surabaya</option>
                                <option value="data-analis">Medan</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <select class="form-select" id="kecamatan">
                                <option selected>Pilih Kecamatan</option>
                                <option value="web-programming">Menteng</option>
                                <option value="komputasi">Kemayoran</option>
                                <option value="data-sains">Cidadap</option>
                                <option value="data-analis">Coblong</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <select class="form-select" id="level">
                                <option selected>Pilih Level</option>
                                <option value="web-programming">Sekolah Dasar</option>
                                <option value="komputasi">Sekolah Atas</option>
                                <option value="data-analis">Perguruan Tinggi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror " id="name"
                                name="name"value="">
                            @error('name')
                                <div class="invalid-feedback is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror " id="email"
                                name="email"value="">
                            @error('email')
                                <div class="invalid-feedback is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror " id="nomor"
                                name="nomor"value="">
                            @error('nomor')
                                <div class="invalid-feedback is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror " id="alamat"
                                name="alamat"value="">
                            @error('alamat')
                                <div class="invalid-feedback is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="sekolah" class="form-label">Sekolah</label>
                            <input type="text" class="form-control @error('sekolah') is-invalid @enderror "
                                id="sekolah" name="sekolah"value="">
                            @error('sekolah')
                                <div class="invalid-feedback is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Selesai</button>
                        <a href="/about"class="btn btn-danger">Batal</a>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
