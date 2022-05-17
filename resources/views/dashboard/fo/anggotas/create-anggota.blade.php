@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Anggota</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Anggota</li>
                            <li class="breadcrumb-item">Tambah Anggota</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <form method="POST" action="/dashboard/anggotas" class="form theme-form">
                @csrf

                <div class="card-body f-12">
                    <div class="row">
                        <div class="col">

                            <a href="/dashboard/anggotas" class="btn btn-pill btn-outline-primary btn-xs mb-3"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>

                            {{-- Users --}}
                            <div class="container-fluid mb-2 border">
                                <div class="card-header p-1 mt-2">
                                    <h6> <i class="fa fa-lock" aria-hidden="true"></i>
                                        Account</h6>
                                </div>
                                <div class="row rounded">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12 p-r-0">

                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <!-- **************************************************************************************************8******  -->

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="name">Nama</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('name') is-invalid @enderror"
                                                                name="name" type="text" id="name" autofocus
                                                                value={{ old('name') }}>
                                                            @error('name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- **************************************************************************************************8******  -->

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="email">Email</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('email') is-invalid @enderror"
                                                                name="email" type="email" id="email"
                                                                value={{ old('email') }}>
                                                            @error('email')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="password">Password</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('password') is-invalid @enderror"
                                                                name="password" type="password" id="password">
                                                            @error('password')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="image">Image</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('image') is-invalid @enderror"
                                                                name="image" type="file" id="image"
                                                                onchange="previewImage()">
                                                            @error('image')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- ************************************************************************************************* -->
                                    <!-- ************************************************************************************************* -->

                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1">
                                                    <!-- **************************************************************************************************8******  -->

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label">Priview Image</label>
                                                        <div class="col">
                                                            <img class="p-l-2 img-preview img-fluid mb-3 col-sm-6">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Anggota --}}
                            <div class="container-fluid mb-2 border">
                                <div class="card-header p-1 mt-2">
                                    <h6> <i class="fa fa-users" aria-hidden="true"></i>
                                        Data Anggota</h6>
                                </div>

                                <div class="row rounded">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12 p-r-0">

                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <!-- **************************************************************************************************8******  -->

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="nama_panggilan">Nama
                                                            Panggilan</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('nama_panggilan') is-invalid @enderror"
                                                                name="nama_panggilan" type="text" id="nama_panggilan"
                                                                value={{ old('nama_panggilan') }}>
                                                            @error('nama_panggilan')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="jenis_kelamin">Jenis
                                                            Kelamin</label>
                                                        <div class="col">
                                                            <select
                                                                class="form-select @error('jenis_kelamin') is-invalid @enderror"
                                                                name="jenis_kelamin" id="jenis_kelamin"
                                                                value={{ old('jenis_kelamin') }}>
                                                                <option selected>Pilih Jenis Kelamin</option>
                                                                <option>Laki-Laki</option>
                                                                <option>Perempuan</option>
                                                            </select>
                                                            @error('jenis_kelamin')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="tempat_lahir">TTL</label>
                                                        <label class="col-sm-4 col-form-label visually-hidden"
                                                            for="tanggal_lahir">TTL</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('tempat_lahir') is-invalid @enderror"
                                                                name="tempat_lahir" type="text" id="tempat_lahir"
                                                                value={{ old('tempat_lahir') }}>
                                                            @error('tempat_lahir')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror"
                                                                name="tanggal_lahir" type="date" id="tanggal_lahir"
                                                                value={{ old('tanggal_lahir') }}>
                                                            @error('tanggal_lahir')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="nama_ibu">Nama
                                                            Ibu</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('nama_ibu') is-invalid @enderror"
                                                                name="nama_ibu" type="text" id="nama_ibu"
                                                                value={{ old('nama_ibu') }}>
                                                            @error('nama_ibu')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <!-- ************************************************************************************************* -->
                                    <!-- ************************************************************************************************* -->

                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="telepon_rumah">Telepon
                                                            Rumah</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_rumah') is-invalid @enderror"
                                                                name="telepon_rumah" type="number" id="telepon_rumah"
                                                                value={{ old('telepon_rumah') }}>
                                                            @error('telepon_rumah')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="telepon_seluler">Telepon
                                                            Seluler</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_seluler') is-invalid @enderror"
                                                                name="telepon_seluler" type="number" id="telepon_seluler"
                                                                value={{ old('telepon_seluler') }}>
                                                            @error('telepon_seluler')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="telepon_kantor">Telepon
                                                            Kantor</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_kantor') is-invalid @enderror"
                                                                name="telepon_kantor" type="number" id="telepon_kantor"
                                                                value={{ old('telepon_kantor') }}>
                                                            @error('telepon_kantor')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- Data Identitas --}}
                            <div class="container-fluid mb-2 border">
                                <div class="card-header p-1 mt-2">
                                    <h6> <i class="fa fa-address-card" aria-hidden="true"></i>
                                        Data Identitas</h6>
                                </div>
                                <div class="row rounded">

                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12 p-r-0">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="type_identitas">Type
                                                            Identitas</label>
                                                        <div class="col">
                                                            <select
                                                                class="form-select @error('type_identitas') is-invalid @enderror"
                                                                name="type_identitas" id="type_identitas"
                                                                value={{ old('type_identitas') }}>
                                                                <option selected>Pilih Type Identitas</option>
                                                                <option>KTP</option>
                                                                <option>KK</option>
                                                            </select>
                                                            @error('type_identitas')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="no_identitas">No
                                                            Identitas</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('no_identitas') is-invalid @enderror"
                                                                name="no_identitas" type="number" id="no_identitas"
                                                                value={{ old('no_identitas') }}>
                                                            @error('no_identitas')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="warganegara">Warganegara</label>
                                                        <div class="col">
                                                            <select
                                                                class="form-select @error('warganegara') is-invalid @enderror"
                                                                name="warganegara" id="warganegara"
                                                                value={{ old('warganegara') }}>
                                                                <option selected>Pilih Jenis Kelamin</option>
                                                                <option>WNI</option>
                                                                <option>WNA</option>
                                                            </select>
                                                            @error('warganegara')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="agama">Agama</label>
                                                        <div class="col">
                                                            <select
                                                                class="form-select @error('agama') is-invalid @enderror"
                                                                name="agama" id="agama" value={{ old('agama') }}>
                                                                <option selected>Pilih Jenis Kelamin</option>
                                                                <option>Islam</option>
                                                                <option>Kristen</option>
                                                                <option>Katolik</option>
                                                                <option>Hindu</option>
                                                                <option>Buddha</option>
                                                                <option>Khonghucu</option>
                                                            </select>
                                                            @error('agama')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="pendidikan">Pendidikan</label>
                                                        <div class="col">
                                                            <select
                                                                class="form-select @error('pendidikan') is-invalid @enderror"
                                                                name="pendidikan" id="pendidikan"
                                                                value={{ old('pendidikan') }}>
                                                                <option selected>Pilih Jenis Kelamin</option>
                                                                <option>SD</option>
                                                                <option>SMP</option>
                                                                <option>SMA/SMK</option>
                                                                <option>Diploma</option>
                                                                <option>Sarjana</option>
                                                                <option>Megister</option>
                                                                <option>Spesialis</option>
                                                                <option>Doktor</option>
                                                            </select>
                                                            @error('pendidikan')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="gelar">Gelar</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('gelar') is-invalid @enderror"
                                                                name="gelar" type="text" id="gelar"
                                                                value={{ old('gelar') }}>
                                                            @error('gelar')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="status_kawin">Status
                                                            Kawin</label>
                                                        <div class="col">
                                                            <select
                                                                class="form-select @error('status_kawin') is-invalid @enderror"
                                                                name="status_kawin" id="status_kawin"
                                                                value={{ old('status_kawin') }}>
                                                                <option selected>Pilih Jenis Kelamin</option>
                                                                <option>Kawin</option>
                                                                <option>Belum Kawin</option>
                                                            </select>
                                                            @error('status_kawin')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="gol_darah">Gol
                                                            Darah</label>
                                                        <div class="col">
                                                            <select
                                                                class="form-select @error('gol_darah') is-invalid @enderror"
                                                                name="gol_darah" id="gol_darah"
                                                                value={{ old('gol_darah') }}>
                                                                <option selected>Pilih Jenis Kelamin</option>
                                                                <option>A</option>
                                                                <option>B</option>
                                                                <option>AB</option>
                                                                <option>O</option>
                                                            </select>
                                                            @error('gol_darah')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- ************************************************************************************************* -->

                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="status_rumah">Status
                                                            Rumah</label>
                                                        <div class="col">
                                                            <select
                                                                class="form-select @error('status_rumah') is-invalid @enderror"
                                                                name="status_rumah" id="status_rumah"
                                                                value={{ old('status_rumah') }}>
                                                                <option selected>Pilih Jenis Kelamin</option>
                                                                <option>Rumah Sendiri</option>
                                                                <option>Rumah Orang tua</option>
                                                                <option>Kontrakan</option>
                                                                <option>Sewa</option>
                                                            </select>
                                                            @error('status_rumah')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="alamat">Alamat</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('alamat') is-invalid @enderror"
                                                                name="alamat" type="text" id="alamat"
                                                                value={{ old('alamat') }}>
                                                            @error('alamat')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="rt">RT</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('rt') is-invalid @enderror"
                                                                name="rt" type="number" id="rt" value={{ old('rt') }}>
                                                            @error('rt')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="rw">Rw</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('rw') is-invalid @enderror"
                                                                name="rw" type="number" id="rw" value={{ old('rw') }}>
                                                            @error('rw')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="desa_kel">Desa/Kel</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('desa_kel') is-invalid @enderror"
                                                                name="desa_kel" type="text" id="desa_kel"
                                                                value={{ old('desa_kel') }}>
                                                            @error('desa_kel')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kec">Kec</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('kec') is-invalid @enderror"
                                                                name="kec" type="text" id="kec" value={{ old('kec') }}>
                                                            @error('kec')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="kab_kota">Kab/Kota</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('kab_kota') is-invalid @enderror"
                                                                name="kab_kota" type="text" id="kab_kota"
                                                                value={{ old('kab_kota') }}>
                                                            @error('kab_kota')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="provinsi">Provinsi</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('provinsi') is-invalid @enderror"
                                                                name="provinsi" type="text" id="provinsi"
                                                                value={{ old('provinsi') }}>
                                                            @error('provinsi')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kode_pos">Kode
                                                            Pos</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('kode_pos') is-invalid @enderror"
                                                                name="kode_pos" type="number" id="kode_pos"
                                                                value={{ old('kode_pos') }}>
                                                            @error('kode_pos')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- Data Pekerjaan --}}
                            <div class="container-fluid mb-2 border">
                                <div class="card-header p-1 mt-2">
                                    <h6> <i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Data Pekerjaan</h6>
                                </div>
                                <div class="row rounded">

                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12 p-r-0">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="pekerjaan">Pekerjaan</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('pekerjaan') is-invalid @enderror"
                                                                name="pekerjaan" type="text" id="pekerjaan"
                                                                value={{ old('pekerjaan') }}>
                                                            @error('pekerjaan')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="lama_kerja_tahun">Lama
                                                            Kerja Tahun</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('lama_kerja_tahun') is-invalid @enderror"
                                                                name="lama_kerja_tahun" type="number" id="lama_kerja_tahun"
                                                                value={{ old('lama_kerja_tahun') }}>
                                                            @error('lama_kerja_tahun')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="lama_kerja_bulan">lama_kerja_bulan</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('lama_kerja_bulan') is-invalid @enderror"
                                                                name="lama_kerja_bulan" type="number" id="lama_kerja_bulan"
                                                                max="11" value={{ old('lama_kerja_bulan') }}>
                                                            @error('lama_kerja_bulan')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="tanggungan">Tanggungan</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('tanggungan') is-invalid @enderror"
                                                                name="tanggungan" type="number" id="tanggungan"
                                                                value={{ old('tanggungan') }}>
                                                            @error('tanggungan')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="omset_dagang">Omset
                                                            DAgang</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('omset_dagang') is-invalid @enderror"
                                                                name="omset_dagang" type="number" id="omset_dagang"
                                                                value={{ old('omset_dagang') }}>
                                                            @error('omset_dagang')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- ************************************************************************************************* -->
                                    <!-- ************************************************************************************************* -->

                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="pendapatan">Pendapatan</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('pendapatan') is-invalid @enderror"
                                                                name="pendapatan" type="number" id="pendapatan"
                                                                value={{ old('pendapatan') }}>
                                                            @error('pendapatan')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="gaji">Gaji</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('gaji') is-invalid @enderror"
                                                                name="gaji" type="number" id="gaji"
                                                                value={{ old('gaji') }}>
                                                            @error('gaji')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="pendapatan_psg">Pendapatan Pasangan</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('pendapatan_psg') is-invalid @enderror"
                                                                name="pendapatan_psg" type="number" id="pendapatan_psg"
                                                                value={{ old('pendapatan_psg') }}>
                                                            @error('pendapatan_psg')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="pendapatan_lain">Pendapatan Lain</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('pendapatan_lain') is-invalid @enderror"
                                                                name="pendapatan_lain" type="number" id="pendapatan_lain"
                                                                value={{ old('pendapatan_lain') }}>
                                                            @error('pendapatan_lain')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="biaya_bulanan">Biaya
                                                            Bulanan</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('biaya_bulanan') is-invalid @enderror"
                                                                name="biaya_bulanan" type="number" id="biaya_bulanan"
                                                                value={{ old('biaya_bulanan') }}>
                                                            @error('biaya_bulanan')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- Data Tambahan --}}
                            <div class="container-fluid mb-2 border">
                                <div class="card-header p-1 mt-2">
                                    <h6> <i class="fa fa-user-md" aria-hidden="true"></i>
                                        Data Tambahan</h6>
                                </div>
                                <div class="row rounded">

                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12 p-r-0">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="nama">Nama</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('nama') is-invalid @enderror"
                                                                name="nama" type="text" id="nama"
                                                                value={{ old('nama') }}>
                                                            @error('nama')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="alamat_add">Alamat</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('alamat_add') is-invalid @enderror"
                                                                name="alamat_add" type="text" id="alamat_add"
                                                                value={{ old('alamat_add') }}>
                                                            @error('alamat_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="rt_add">rt_add</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('rt_add') is-invalid @enderror"
                                                                name="rt_add" type="number" id="rt_add"
                                                                value={{ old('rt_add') }}>
                                                            @error('rt_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="rw_add">rw_add</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('rw_add') is-invalid @enderror"
                                                                name="rw_add" type="number" id="rw_add"
                                                                value={{ old('title') }}>
                                                            @error('rw_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="desa_kel_add">Desa
                                                            Kel</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('desa_kel_add') is-invalid @enderror"
                                                                name="desa_kel_add" type="text" id="desa_kel_add"
                                                                value={{ old('desa_kel_add') }}>
                                                            @error('desa_kel_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- ************************************************************************************************* -->
                                    <!-- ************************************************************************************************* -->

                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="kec_add">kec_add</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('kec_add') is-invalid @enderror"
                                                                name="kec_add" type="text" id="kec_add"
                                                                value={{ old('kec_add') }}>
                                                            @error('kec_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="kab_kota_add">kab_kota_add</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('kab_kota_add') is-invalid @enderror"
                                                                name="kab_kota_add" type="text" id="kab_kota_add"
                                                                value={{ old('kab_kota_add') }}>
                                                            @error('kab_kota_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="provinsi_add">Provinsi</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('provinsi_add') is-invalid @enderror"
                                                                name="provinsi_add" type="text" id="provinsi_add"
                                                                value={{ old('provinsi_add') }}>
                                                            @error('provinsi_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kode_pos_add">Kode
                                                            Pos</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('kode_pos_add') is-invalid @enderror"
                                                                name="kode_pos_add" type="number" id="kode_pos_add"
                                                                value={{ old('kode_pos_add') }}>
                                                            @error('kode_pos_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="telepon_rumah_add">Telepon Rumah</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_rumah_add') is-invalid @enderror"
                                                                name="telepon_rumah_add" type="number"
                                                                id="telepon_rumah_add"
                                                                value={{ old('telepon_rumah_add') }}>
                                                            @error('telepon_rumah_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="telepon_seluler_add">Telepon seluler</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_seluler_add') is-invalid @enderror"
                                                                name="telepon_seluler_add" type="number"
                                                                id="telepon_seluler_add"
                                                                value={{ old('telepon_seluler_add') }}>
                                                            @error('telepon_seluler_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Submit</button>

            </form>
        </div>
    </div>

    <script>
        // preview image
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
