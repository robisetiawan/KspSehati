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
                            <li class="breadcrumb-item">Edit Anggota</li>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <form method="POST" action="/dashboard/anggotas/{{ $anggota->id }}" class="form theme-form"
                enctype="multipart/form-data">
                @method('PUT')
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
                                                                value="{{ old('name', $anggota->user->name) }}">
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
                                                                value={{ old('email', $anggota->user->email) }}>
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
                                                                name="password" type="password" id="password">
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
                                                                value="{{ old('image', $anggota->user->image) }}"
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
                                                            <input type="hidden" name="oldImage"
                                                                value="{{ $anggota->user->image }}">
                                                            @if ($anggota->user->image)
                                                                <img src="{{ asset('storage/' . $anggota->user->image) }}"
                                                                    class="p-l-2 img-preview img-fluid mb-3 col-sm-6 rounded">
                                                            @else
                                                                <img
                                                                    class="p-l-2 img-preview img-fluid mb-3 col-sm-6 rounded">
                                                            @endif

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
                                                                value="{{ old('nama_panggilan', $anggota->nama_panggilan) }}">
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
                                                                <option value="Laki-laki"
                                                                    {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                                                                    Laki-laki
                                                                </option>
                                                                <option value="Perempuan"
                                                                    {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
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
                                                                value="{{ old('tempat_lahir', $anggota->tempat_lahir) }}">
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
                                                                value="{{ old('tanggal_lahir', $anggota->tanggal_lahir) }}">
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
                                                                value="{{ old('nama_ibu', $anggota->nama_ibu) }}">
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
                                                                value="{{ old('telepon_rumah', $anggota->telepon_rumah) }}">
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
                                                                value="{{ old('telepon_seluler', $anggota->telepon_seluler) }}">
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
                                                                value="{{ old('telepon_kantor', $anggota->telepon_kantor) }}">
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
                                                                name="type_identitas" id="type_identitas" value="">
                                                                <option value="KTP"
                                                                    {{ old('type_identitas', $anggota->identity->type_identitas) == 'KTP' ? 'selected' : '' }}>
                                                                    KTP</option>
                                                                <option value="SIM"
                                                                    {{ old('type_identitas', $anggota->identity->type_identitas) == 'SIM' ? 'selected' : '' }}>
                                                                    SIM</option>
                                                                <option value="Domisili"
                                                                    {{ old('type_identitas', $anggota->identity->type_identitas) == 'Domisili' ? 'selected' : '' }}>
                                                                    Domisili</option>
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
                                                                name="no_identitas" type="text" id="no_identitas"
                                                                value="{{ old('no_identitas', $anggota->identity->no_identitas) }}">
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
                                                                name="warganegara" id="warganegara" value="">
                                                                <option value="WNI"
                                                                    {{ old('warganegara', $anggota->identity->warganegara) == 'WNI' ? 'selected' : '' }}>
                                                                    WNI
                                                                </option>
                                                                <option value="WNA"
                                                                    {{ old('warganegara', $anggota->identity->warganegara) == 'WNA' ? 'selected' : '' }}>
                                                                    WNA
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
                                                                name="agama" id="agama" value="">
                                                                <option value="Islam"
                                                                    {{ old('agama', $anggota->identity->agama) == 'Islam' ? 'selected' : '' }}>
                                                                    Islam
                                                                </option>
                                                                <option value="Kristen"
                                                                    {{ old('agama', $anggota->identity->agama) == 'Kristen' ? 'selected' : '' }}>
                                                                    Kristen
                                                                </option>
                                                                <option value="Katolik"
                                                                    {{ old('agama', $anggota->identity->agama) == 'Katolik' ? 'selected' : '' }}>
                                                                    Katolik
                                                                </option>
                                                                <option value="Hindu"
                                                                    {{ old('agama', $anggota->identity->agama) == 'Hindu' ? 'selected' : '' }}>
                                                                    Hindu
                                                                </option>
                                                                <option value="Buddha"
                                                                    {{ old('agama', $anggota->identity->agama) == 'Buddha' ? 'selected' : '' }}>
                                                                    Buddha
                                                                </option>
                                                                <option value="Khonghucu"
                                                                    {{ old('agama', $anggota->identity->agama) == 'Khonghucu' ? 'selected' : '' }}>
                                                                    Khonghucu
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
                                                                name="pendidikan" id="pendidikan" value="">
                                                                <option value="SD"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'SD' ? 'selected' : '' }}>
                                                                    SD
                                                                </option>
                                                                <option value="SD"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'SD' ? 'selected' : '' }}>
                                                                    SD</option>
                                                                <option value="SMP"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'SMP' ? 'selected' : '' }}>
                                                                    SMP</option>
                                                                <option value="SMA/SMK"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'SMA/SMK' ? 'selected' : '' }}>
                                                                    SMA/SMK</option>
                                                                <option value="Diploma 1"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'Diploma 1' ? 'selected' : '' }}>
                                                                    Diploma 1</option>
                                                                <option value="Diploma 2"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'Diploma 2' ? 'selected' : '' }}>
                                                                    Diploma 2</option>
                                                                <option value="Diploma 3"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'Diploma 3' ? 'selected' : '' }}>
                                                                    Diploma 3</option>
                                                                <option value="Diploma 4"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'Diploma 4' ? 'selected' : '' }}>
                                                                    Diploma 4</option>
                                                                <option value="Sarjana S1"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'Sarjana S1' ? 'selected' : '' }}>
                                                                    Sarjana S1</option>
                                                                <option value="Megister"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'Megister' ? 'selected' : '' }}>
                                                                    Megister</option>
                                                                <option value="Doktor"
                                                                    {{ old('pendidikan', $anggota->identity->pendidikan) == 'Doktor' ? 'selected' : '' }}>
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
                                                                value="{{ old('gelar', $anggota->identity->gelar) }}">
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
                                                                name="status_kawin" id="status_kawin" value="">
                                                                <option value="Kawin"
                                                                    {{ old('status_kawin', $anggota->identity->status_kawin) == 'Kawin' ? 'selected' : '' }}>
                                                                    Kawin
                                                                </option>
                                                                <option value="Belum Kawin"
                                                                    {{ old('status_kawin', $anggota->identity->status_kawin) == 'Belum Kawin' ? 'selected' : '' }}>
                                                                    Belum Kawin
                                                                </option>
                                                                <option value="Cerai"
                                                                    {{ old('status_kawin', $anggota->identity->status_kawin) == 'Cerai' ? 'selected' : '' }}>
                                                                    Cerai</option>
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
                                                                name="gol_darah" id="gol_darah" value="">
                                                                <option value="A"
                                                                    {{ old('gol_darah', $anggota->identity->gol_darah) == 'A' ? 'selected' : '' }}>
                                                                    A
                                                                </option>
                                                                <option value="B"
                                                                    {{ old('gol_darah', $anggota->identity->gol_darah) == 'B' ? 'selected' : '' }}>
                                                                    B
                                                                </option>
                                                                <option value="AB"
                                                                    {{ old('gol_darah', $anggota->identity->gol_darah) == 'AB' ? 'selected' : '' }}>
                                                                    AB
                                                                </option>
                                                                <option value="O"
                                                                    {{ old('gol_darah', $anggota->identity->gol_darah) == 'O' ? 'selected' : '' }}>
                                                                    O
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
                                                                name="status_rumah" id="status_rumah" value="">
                                                                <option value="Rumah Sendiri"
                                                                    {{ old('status_rumah', $anggota->identity->status_rumah) == 'Rumah Sendiri' ? 'selected' : '' }}>
                                                                    Rumah Sendiri
                                                                </option>
                                                                <option value="Rumah Orang tua"
                                                                    {{ old('status_rumah', $anggota->identity->status_rumah) == 'Rumah Orang tua' ? 'selected' : '' }}>
                                                                    Rumah Orang tua
                                                                </option>
                                                                <option value="Rumah Dinas"
                                                                    {{ old('status_rumah', $anggota->identity->status_rumah) == 'Rumah Dinas' ? 'selected' : '' }}>
                                                                    Rumah Dinas</option>
                                                                <option value="Rumah Sewa/Kontrak"
                                                                    {{ old('status_rumah', $anggota->identity->status_rumah) == 'Rumah Sewa/Kontrak' ? 'selected' : '' }}>
                                                                    Rumah Sewa/Kontrak
                                                                </option>
                                                                <option value="Kost"
                                                                    {{ old('status_rumah', $anggota->identity->status_rumah) == 'Kost' ? 'selected' : '' }}>
                                                                    Kost
                                                                </option>
                                                                <option value="Rumah Status Kredit"
                                                                    {{ old('status_rumah', $anggota->identity->status_rumah) == 'Rumah Status Kredit' ? 'selected' : '' }}>
                                                                    Rumah Status Kredit
                                                                </option>
                                                                <option value="Rumah Keluarga"
                                                                    {{ old('status_rumah', $anggota->identity->status_rumah) == 'Rumah Keluarga' ? 'selected' : '' }}>
                                                                    Rumah Keluarga
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
                                                                id="alamat">{{ old('alamat', $anggota->identity->alamat) }}</textarea>
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
                                                                value="{{ old('rt', $anggota->identity->rt) }}">
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
                                                                value="{{ old('rw', $anggota->identity->rw) }}">
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
                                                                value="{{ old('desa_kel', $anggota->identity->desa_kel) }}">
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
                                                                value="{{ old('kec', $anggota->identity->kec) }}">
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
                                                                value="{{ old('kab_kota', $anggota->identity->kab_kota) }}">
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
                                                                value="{{ old('provinsi', $anggota->identity->provinsi) }}">
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
                                                                value="{{ old('kode_pos', $anggota->identity->kode_pos) }}">
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
                                                                value="{{ old('pekerjaan', $anggota->profession->pekerjaan) }}">
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
                                                                value="{{ old('lama_kerja_tahun', $anggota->profession->lama_kerja_tahun) }}">
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
                                                                value="{{ old('lama_kerja_bulan', $anggota->profession->lama_kerja_bulan) }}">
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
                                                                value="{{ old('tanggungan', $anggota->profession->tanggungan) }}">
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
                                                                name="omset_dagang" type="text" id="omset_dagang"
                                                                value="{{ old('omset_dagang', $anggota->profession->omset_dagang) }}"
                                                                type-currency="IDR" placeholder="Rp ">
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
                                                                name="pendapatan" type="text" id="pendapatan"
                                                                value="{{ old('pendapatan', $anggota->profession->pendapatan) }}"
                                                                type-currency="IDR" placeholder="Rp ">
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
                                                                name="gaji" type="text" id="gaji"
                                                                value="{{ old('gaji', $anggota->profession->gaji) }}"
                                                                type-currency="IDR" placeholder="Rp ">
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
                                                                name="pendapatan_psg" type="text" id="pendapatan_psg"
                                                                value="{{ old('pendapatan_psg', $anggota->profession->pendapatan_psg) }}"
                                                                type-currency="IDR" placeholder="Rp ">
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
                                                                name="pendapatan_lain" type="text" id="pendapatan_lain"
                                                                value="{{ old('pendapatan_lain', $anggota->profession->pendapatan_lain) }}"
                                                                type-currency="IDR" placeholder="Rp ">
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
                                                                name="biaya_bulanan" type="text" id="biaya_bulanan"
                                                                value="{{ old('biaya_bulanan', $anggota->profession->biaya_bulanan) }}"
                                                                type-currency="IDR" placeholder="Rp ">
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
                                                                value="{{ old('nama', $anggota->adddata->nama) }}">
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
                                                                id="alamat_add">{{ old('alamat_add', $anggota->adddata->alamat_add) }}</textarea>
                                                            @error('alamat_add')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="rt_add">RT /
                                                            RW</label>
                                                        <label class="col-sm-4 col-form-label visually-hidden"
                                                            for="rw_add">rw_add</label>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rt_add') is-invalid @enderror"
                                                                name="rt_add" type="number" id="rt_add"
                                                                value="{{ old('rt_add', $anggota->adddata->rt_add) }}">
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
                                                                value="{{ old('rw_add', $anggota->adddata->rw_add) }}">
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
                                                                value="{{ old('desa_kel_add', $anggota->adddata->desa_kel_add) }}">
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
                                                                value="{{ old('kec_add', $anggota->adddata->kec_add) }}">
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
                                                                value="{{ old('kab_kota_add', $anggota->adddata->kab_kota_add) }}">
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
                                                                value="{{ old('provinsi_add', $anggota->adddata->provinsi_add) }}">
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
                                                                value="{{ old('kode_pos_add', $anggota->adddata->kode_pos_add) }}">
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
                                                                value="{{ old('telepon_rumah_add', $anggota->adddata->telepon_rumah_add) }}">
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
                                                                value="{{ old('telepon_seluler_add', $anggota->adddata->telepon_seluler_add) }}">
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
