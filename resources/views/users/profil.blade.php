@extends('layouts.main')

@section('container')
    <div class="container mt-4 d-flex flex-column align-items-center">

        <div class="col-md-7 d-flex justify-content-center ">
            <div class="card mt-2">
                <div class="card-body">
                    <h3 class="text-center"style="font-weight: bold; font-style: italic;">Profil akun</h3>
                    <!-- Apply 'text-center' class to center the h1 -->
                    <dl class="row m-4">
                        <dt class="col-sm-5"style="font-style: italic;">Nama</dt>
                        <dd class="col-sm-9"style="font-style: italic;">Sevia Rajagukguk</dd>

                        <dt class="col-5"style="font-style: italic;">Email</dt>
                        <dd class="col-sm-9"style="font-style: italic;">SeviaRajagukguk@gmail.com</dd>

                        <dt class="col-sm-5"style="font-style: italic;">Nomor Telepon</dt>
                        <dd class="col-sm-9"style="font-style: italic;">0897654321</dd>


                        <dt class="col-sm-5"style="font-style: italic;">Alamat</dt>
                        <dd class="col-sm-9"style="font-style: italic;">Lorem ipsum dolor sit amet.</dd>

                        <dt class="col-sm-5"style="font-style: italic;">Sekolah</dt>
                        <dd class="col-sm-9"style="font-style: italic;">SMP Negeri 2 Bobon</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="card mt-4 col-md-7">
            <div class="card-body">
                <h3 class="text-center"style="font-weight: bold; font-style: italic;">keterangan</h3>
                <!-- Apply 'text-center' class to center the h1 -->
                <dl class="row m-4">
                    <dt class="col-sm-5 "style="font-style: italic;">Provinsi</dt>
                    <dd class="col-sm-9"style="font-style: italic;">Sumatera Utara</dd>

                    <dt class="col-5"style="font-style: italic;">Kota</dt>
                    <dd class="col-sm-9"style="font-style: italic;">Medan</dd>

                    <dt class="col-sm-5"style="font-style: italic;">Kecamatan</dt>
                    <dd class="col-sm-9"style="font-style: italic;">Medan Area</dd>

                    <dt class="col-sm-5"style="font-style: italic;">Level</dt>
                    <dd class="col-sm-9"style="font-style: italic;">Sekolah Dasar</dd>

                </dl>
            </div>
        </div>

    </div>
@endsection
