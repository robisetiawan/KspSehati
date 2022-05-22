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
            <form method="POST" action="/dashboard/anggotas" class="form theme-form" enctype="multipart/form-data">
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
                                                                value="{{ old('name') }}">
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
                                                                value="{{ old('email') }}">
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
                                                        <div class="col" id="show_hide_password">
                                                            <input
                                                                class="form-control form-control-sm @error('password') is-invalid @enderror"
                                                                name="password" type="password" id="password"
                                                                value="{{ old('password') }}">
                                                            <div class="show-hide">
                                                                <a href=""><i class="fa fa-eye-slash mb-2"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
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
                                                            <img class="p-l-2 img-preview img-fluid mb-3 col-sm-6 rounded">
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
                                                                value="{{ old('nama_panggilan') }}">
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
                                                                name="jenis_kelamin" id="jenis_kelamin">
                                                                <option></option>
                                                                <option value="1"
                                                                    {{ old('jenis_kelamin') == '1' ? 'selected' : '' }}>
                                                                    Laki-Laki
                                                                </option>
                                                                <option value="2"
                                                                    {{ old('jenis_kelamin') == '2' ? 'selected' : '' }}>
                                                                    Perempuan
                                                                </option>
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
                                                            for="tanggal_lahir">tanggal_lahir</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('tempat_lahir') is-invalid @enderror"
                                                                name="tempat_lahir" type="text" id="tempat_lahir"
                                                                value="{{ old('tempat_lahir') }}">
                                                            @error('tempat_lahir')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror"
                                                                name="tanggal_lahir" type="date" id="tanggal_lahir">
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
                                                                name="nama_ibu" type="text" id="nama_ibu">
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
                                                                value="{{ old('telepon_rumah') }}">
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
                                                                value="{{ old('telepon_seluler') }}">
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
                                                                value="{{ old('telepon_kantor') }}">
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
                                                        <div class="col-sm-3">
                                                            <select
                                                                class="form-select @error('type_identitas') is-invalid @enderror"
                                                                name="type_identitas" id="type_identitas">
                                                                <option></option>
                                                                <option value="1"
                                                                    {{ old('type_identitas') == '1' ? 'selected' : '' }}>
                                                                    KTP</option>
                                                                <option value="2"
                                                                    {{ old('type_identitas') == '2' ? 'selected' : '' }}>
                                                                    KK</option>
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
                                                                value="{{ old('no_identitas') }}">
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
                                                        <div class="col-sm-3">
                                                            <select
                                                                class="form-select @error('warganegara') is-invalid @enderror"
                                                                name="warganegara" id="warganegara">
                                                                <option></option>
                                                                <option value="1"
                                                                    {{ old('warganegara') == '1' ? 'selected' : '' }}>WNI
                                                                </option>
                                                                <option value="2"
                                                                    {{ old('warganegara') == '2' ? 'selected' : '' }}>WNA
                                                                </option>
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
                                                        <div class="col-sm-4">
                                                            <select
                                                                class="form-select @error('agama') is-invalid @enderror"
                                                                name="agama" id="agama">
                                                                <option></option>
                                                                <option value="1"
                                                                    {{ old('agama') == '1' ? 'selected' : '' }}>Islam
                                                                </option>
                                                                <option value="2"
                                                                    {{ old('agama') == '2' ? 'selected' : '' }}>Kristen
                                                                </option>
                                                                <option value="3"
                                                                    {{ old('agama') == '3' ? 'selected' : '' }}>Katolik
                                                                </option>
                                                                <option value="4"
                                                                    {{ old('agama') == '4' ? 'selected' : '' }}>Hindu
                                                                </option>
                                                                <option value="5"
                                                                    {{ old('agama') == '5' ? 'selected' : '' }}>Buddha
                                                                </option>
                                                                <option value="6"
                                                                    {{ old('agama') == '6' ? 'selected' : '' }}>Khonghucu
                                                                </option>
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
                                                        <div class="col-sm-4">
                                                            <select
                                                                class="form-select @error('pendidikan') is-invalid @enderror"
                                                                name="pendidikan" id="pendidikan">
                                                                <option></option>
                                                                <option value="1"
                                                                    {{ old('pendidikan') == '1' ? 'selected' : '' }}>
                                                                    SD</option>
                                                                <option value="2"
                                                                    {{ old('pendidikan') == '2' ? 'selected' : '' }}>
                                                                    SMP</option>
                                                                <option value="3"
                                                                    {{ old('pendidikan') == '3' ? 'selected' : '' }}>
                                                                    SMA/SMK</option>
                                                                <option value="4"
                                                                    {{ old('pendidikan') == '4' ? 'selected' : '' }}>
                                                                    Diploma</option>
                                                                <option value="5"
                                                                    {{ old('pendidikan') == '5' ? 'selected' : '' }}>
                                                                    Sarjana</option>
                                                                <option value="6"
                                                                    {{ old('pendidikan') == '6' ? 'selected' : '' }}>
                                                                    Megister</option>
                                                                <option value="7"
                                                                    {{ old('pendidikan') == '7' ? 'selected' : '' }}>
                                                                    Spesialis</option>
                                                                <option value="8"
                                                                    {{ old('pendidikan') == '8' ? 'selected' : '' }}>
                                                                    Doktor</option>
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
                                                        <div class="col-sm-4">
                                                            <input
                                                                class="form-control form-control-sm @error('gelar') is-invalid @enderror"
                                                                name="gelar" type="text" id="gelar"
                                                                value="{{ old('gelar') }}">
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
                                                        <div class="col-sm-4">
                                                            <select
                                                                class="form-select @error('status_kawin') is-invalid @enderror"
                                                                name="status_kawin" id="status_kawin">
                                                                <option></option>
                                                                <option value="1"
                                                                    {{ old('status_kawin') == '1' ? 'selected' : '' }}>
                                                                    Kawin</option>
                                                                <option value="2"
                                                                    {{ old('status_kawin') == '2' ? 'selected' : '' }}>
                                                                    Belum Kawin</option>
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
                                                        <div class="col-sm-3">
                                                            <select
                                                                class="form-select @error('gol_darah') is-invalid @enderror"
                                                                name="gol_darah" id="gol_darah">
                                                                <option></option>
                                                                <option value="1"
                                                                    {{ old('gol_darah') == '1' ? 'selected' : '' }}>A
                                                                </option>
                                                                <option value="2"
                                                                    {{ old('gol_darah') == '2' ? 'selected' : '' }}>B
                                                                </option>
                                                                <option value="3"
                                                                    {{ old('gol_darah') == '3' ? 'selected' : '' }}>AB
                                                                </option>
                                                                <option value="4"
                                                                    {{ old('gol_darah') == '4' ? 'selected' : '' }}>O
                                                                </option>
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
                                                        <div class="col-sm-6">
                                                            <select
                                                                class="form-select @error('status_rumah') is-invalid @enderror"
                                                                name="status_rumah" id="status_rumah">
                                                                <option></option>
                                                                <option value="1"
                                                                    {{ old('status_rumah') == '1' ? 'selected' : '' }}>
                                                                    Rumah Sendiri</option>
                                                                <option value="2"
                                                                    {{ old('status_rumah') == '2' ? 'selected' : '' }}>
                                                                    Rumah Orang tua</option>
                                                                <option value="3"
                                                                    {{ old('status_rumah') == '3' ? 'selected' : '' }}>
                                                                    Kontrakan</option>
                                                                <option value="4"
                                                                    {{ old('status_rumah') == '4' ? 'selected' : '' }}>
                                                                    Sewa
                                                                </option>
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
                                                            <textarea class="form-control form-control-sm @error('alamat') is-invalid @enderror" name="alamat" type="text"
                                                                id="alamat">{{ old('alamat') }}</textarea>
                                                            @error('alamat')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="rt">RT / RW</label>
                                                        <label class="col-sm-4 col-form-label visually-hidden"
                                                            for="rw">Rw</label>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rt') is-invalid @enderror"
                                                                name="rt" type="number" id="rt"
                                                                value="{{ old('rt') }}">
                                                            @error('rt')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rw') is-invalid @enderror"
                                                                name="rw" type="number" id="rw"
                                                                value="{{ old('rw') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('desa_kel') is-invalid @enderror"
                                                                name="desa_kel" type="text" id="desa_kel"
                                                                value="{{ old('desa_kel') }}">
                                                            @error('desa_kel')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kec">Kec</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kec') is-invalid @enderror"
                                                                name="kec" type="text" id="kec"
                                                                value="{{ old('kec') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kab_kota') is-invalid @enderror"
                                                                name="kab_kota" type="text" id="kab_kota"
                                                                value="{{ old('kab_kota') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('provinsi') is-invalid @enderror"
                                                                name="provinsi" type="text" id="provinsi"
                                                                value="{{ old('provinsi') }}">
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
                                                        <div class="col-sm-4">
                                                            <input
                                                                class="form-control form-control-sm @error('kode_pos') is-invalid @enderror"
                                                                name="kode_pos" type="number" id="kode_pos"
                                                                value="{{ old('kode_pos') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('pekerjaan') is-invalid @enderror"
                                                                name="pekerjaan" type="text" id="pekerjaan"
                                                                value="{{ old('pekerjaan') }}">
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
                                                            Bekerja</label>
                                                        <label class="col-sm-4 col-form-label visually-hidden"
                                                            for="lama_kerja_bulan">lama_kerja_bulan</label>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('lama_kerja_tahun') is-invalid @enderror"
                                                                name="lama_kerja_tahun" type="number" placeholder="Tahun"
                                                                id="lama_kerja_tahun"
                                                                value="{{ old('lama_kerja_tahun') }}">
                                                            @error('lama_kerja_tahun')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('lama_kerja_bulan') is-invalid @enderror"
                                                                name="lama_kerja_bulan" type="number" placeholder="Bulan"
                                                                id="lama_kerja_bulan" max="11"
                                                                value="{{ old('lama_kerja_bulan') }}">
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
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('tanggungan') is-invalid @enderror"
                                                                name="tanggungan" type="number" id="tanggungan"
                                                                value="{{ old('tanggungan') }}">
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
                                                            Dagang</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('omset_dagang') is-invalid @enderror"
                                                                name="omset_dagang" type="number" id="omset_dagang"
                                                                value="Rp. {{ old('omset_dagang') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('pendapatan') is-invalid @enderror"
                                                                name="pendapatan" type="number" id="pendapatan"
                                                                value="Rp. {{ old('pendapatan') }}">
                                                            @error('pendapatan')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="gaji">Gaji</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('gaji') is-invalid @enderror"
                                                                name="gaji" type="number" id="gaji"
                                                                value="Rp. {{ old('pendapatan') }}">
                                                            @error('gaji')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="pendapatan_psg">Pendapatan Psg</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('pendapatan_psg') is-invalid @enderror"
                                                                name="pendapatan_psg" type="number" id="pendapatan_psg"
                                                                value="Rp. {{ old('pendapatan_psg') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('pendapatan_lain') is-invalid @enderror"
                                                                name="pendapatan_lain" type="number" id="pendapatan_lain"
                                                                value="Rp. {{ old('pendapatan_lain') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('biaya_bulanan') is-invalid @enderror"
                                                                name="biaya_bulanan" type="number" id="biaya_bulanan"
                                                                value="Rp. {{ old('biaya_bulanan') }}">
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
                                                                value="{{ old('nama') }}">
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
                                                            <textarea class="form-control form-control-sm @error('alamat_add') is-invalid @enderror" name="alamat_add" type="text"
                                                                id="alamat_add">{{ old('alamat_add') }}</textarea>
                                                            @error('alamat_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="rt_add">RT / RW</label>
                                                        <label class="col-sm-4 col-form-label visually-hidden"
                                                            for="rw_add">rw_add</label>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rt_add') is-invalid @enderror"
                                                                name="rt_add" type="number" id="rt_add"
                                                                value="{{ old('rt_add') }}">
                                                            @error('rt_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rw_add') is-invalid @enderror"
                                                                name="rw_add" type="number" id="rw_add"
                                                                value="{{ old('rw_add') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('desa_kel_add') is-invalid @enderror"
                                                                name="desa_kel_add" type="text" id="desa_kel_add"
                                                                value="{{ old('desa_kel_add') }}">
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
                                                            for="kec_add">Kecamatan</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kec_add') is-invalid @enderror"
                                                                name="kec_add" type="text" id="kec_add"
                                                                value="{{ old('kec_add') }}">
                                                            @error('kec_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kab_kota_add">Kabupaten
                                                            / Kota</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kab_kota_add') is-invalid @enderror"
                                                                name="kab_kota_add" type="text" id="kab_kota_add"
                                                                value="{{ old('kab_kota_add') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('provinsi_add') is-invalid @enderror"
                                                                name="provinsi_add" type="text" id="provinsi_add"
                                                                value="{{ old('provinsi_add') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kode_pos_add') is-invalid @enderror"
                                                                name="kode_pos_add" type="number" id="kode_pos_add"
                                                                value="{{ old('kode_pos_add') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_rumah_add') is-invalid @enderror"
                                                                name="telepon_rumah_add" type="number"
                                                                id="telepon_rumah_add"
                                                                value="{{ old('telepon_rumah_add') }}">
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
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_seluler_add') is-invalid @enderror"
                                                                name="telepon_seluler_add" type="number"
                                                                id="telepon_seluler_add"
                                                                value="{{ old('telepon_seluler_add') }}">
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

                            <div class="text-end">
                                <button class="btn btn-primary text-end" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>


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
