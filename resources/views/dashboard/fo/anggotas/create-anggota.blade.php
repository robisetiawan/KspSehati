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

                            <div class="container-fluid">
                                <a href="/dashboard/anggotas" class="btn btn-pill btn-outline-primary btn-xs mb-3"><i
                                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                                <div class="row border rounded">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12 p-r-0">
                                                <div class="card border-0 my-3">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="card-body p-1 ">
                                                        <!-- **************************************************************************************************8******  -->

                                                        {{-- <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="id">No
                                                                Anggota</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="id" id="id">
                                                            </div>
                                                        </div> --}}

                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label"
                                                                for="identity_id">Identity Id</label>
                                                            <div class="col">
                                                                <input type="number" class="form-control form-control-sm"
                                                                    name="identity_id" id="identity_id">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label"
                                                                for="profession_id">Profession Id</label>
                                                            <div class="col">
                                                                <input type="number" class="form-control form-control-sm"
                                                                    name="profession_id" id="profession_id">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="adddata_id">Adddata
                                                                Id</label>
                                                            <div class="col">
                                                                <input type="number" class="form-control form-control-sm"
                                                                    name="adddata_id" id="adddata_id">
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        {{-- <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="name">Nama</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="name" id="name">
                                                            </div>
                                                        </div> --}}
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label"
                                                                for="nama_panggilan">Panggilan</label>
                                                            <div class="col">
                                                                <input type="text"
                                                                    class="form-control form-control-sm @error('nama_panggilan') is-invalid @enderror"
                                                                    name="nama_panggilan" id="nama_panggilan"
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
                                                            <label class="col-sm-4 col-form-label" for="email">Email</label>
                                                            <div class="col">
                                                                <input type="text"
                                                                    class="form-control form-control-sm @error('email') is-invalid @enderror"
                                                                    name="email" id="email" value="{{ old('email') }}">
                                                                @error('email')
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
                                                                <select name="jenis_kelamin" id="jenis_kelamin"
                                                                    class="form-select">
                                                                    <option selected>Pilih Jenis Kelamin</option>
                                                                    <option value="Laki-laki">
                                                                        Laki-laki</option>
                                                                    <option value="Perempuan">
                                                                        Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label"
                                                                for="tempat_lahit">TTL</label>
                                                            <label class="col-sm-4 col-form-label visually-hidden"
                                                                for="tanggal_lahit">TTL</label>
                                                            <div class="col">
                                                                <input type="text"
                                                                    class="form-control form-control-sm @error('tempat_lahir') is-invalid @enderror"
                                                                    name="tempat_lahir" id="tempat_lahir"
                                                                    value="{{ old('tempat_lahir') }}">
                                                                @error('tempat_lahir')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col">
                                                                <input type="date"
                                                                    class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror"
                                                                    name="tanggal_lahir" id="tanggal_lahir"
                                                                    value="{{ old('tanggal_lahir') }}">
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
                                                                <input type="text"
                                                                    class="form-control form-control-sm @error('nama_ibu') is-invalid @enderror"
                                                                    name="nama_ibu" id="nama_ibu"
                                                                    value="{{ old('nama_ibu') }}">
                                                                @error('nama_ibu')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="telepon_rumah">Telp
                                                                Rumah</label>
                                                            <div class="col">
                                                                <input type="number"
                                                                    class="form-control form-control-sm @error('telepon_rumah') is-invalid @enderror"
                                                                    name="telepon_rumah" id="telepon_rumah" minlength="10"
                                                                    maxlength="12" value="{{ old('telepon_rumah') }}">
                                                                @error('telepon_rumah')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label"
                                                                for="telepon_seluler">Telp Seluler</label>
                                                            <div class="col">
                                                                <input type="number"
                                                                    class="form-control form-control-sm @error('telepon_seluler') is-invalid @enderror"
                                                                    name="telepon_seluler" id="telepon_seluler"
                                                                    value="{{ old('telepon_seluler') }}">
                                                                @error('telepon_seluler')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="telepon_kantor">Telp
                                                                Kantor</label>
                                                            <div class="col">
                                                                <input type="number"
                                                                    class="form-control form-control-sm @error('telepon_kantor') is-invalid @enderror"
                                                                    name="telepon_kantor" id="telepon_kantor"
                                                                    value="{{ old('telepon_kantor') }}">
                                                                @error('telepon_kantor')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <!-- **************************************************************************************************8******  -->

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ************************************************************************************************* -->
                                    <!-- ************************************************************************************************* -->
                                    {{-- <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card border-0 my-3">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="card-body p-1">
                                                        <!-- **************************************************************************************************8******  -->
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Type
                                                                Identitas</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    value=": {{ $anggotas->identity->type_identitas }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            {{-- <div class="container-fluid my-2">
                                <div class="row border rounded">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12 p-r-0">

                                                <div class="card border-0 my-3">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="card-body p-1">
                                                        <!-- **************************************************************************************************8******  -->
                                                        <!-- **************************************************************************************************8******  -->
                                                        <h6>Data Identitas</h6>
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Type
                                                                Identitas</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->type_identitas }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">No Identitas</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->no_identitas }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Warganegara</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->warganegara }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Agama</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->agama }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Gol Darah</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->gol_darah }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Pendidikan</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->pendidikan }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Gelar</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->gelar }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label"
                                                                for="nama">Pendidikan</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>SD</option>
                                                                    <option>SMP</option>
                                                                    <option>SMA/SMK</option>
                                                                    <option>Diploma 1</option>
                                                                    <option>Diploma 2</option>
                                                                    <option>Diploma 3</option>
                                                                    <option>Diploma 4</option>
                                                                    <option>Sarjana S1</option>
                                                                    <option>Master</option>
                                                                    <option>Doktor</option>
                                                                </select>
                                                            </div>
                                                        </div> --}}
                            {{-- <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Status Kawin</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->status_kawin }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Status Rumah</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->status_rumah }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">Status
                                                                Rumah</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Rumah Sendiri</option>
                                                                    <option>Rumah Orang Tua</option>
                                                                    <option>Rumah Dinas</option>
                                                                    <option>Rumah Sewa/Kontrak</option>
                                                                    <option>Kost</option>
                                                                    <option>Rumah Status Kredit</option>
                                                                    <option>Rumah Keluarga</option>
                                                                </select>
                                                            </div>
                                                        </div> --}}
                            <!-- **************************************************************************************************8******  -->
                            {{-- </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                            {{-- <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card border-0 my-3">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="card-body p-1 ">

                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Alamat</label>
                                                            <div class="col">
                                                                <input type="textarea" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->alamat }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">RT/RW</label>
                                                            <div class="col">
                                                                <input type="textarea" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->rt }}/{{ $anggotas->identity->rw }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Desa/Kel</label>
                                                            <div class="col">
                                                                <input type="textarea" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->desa_kel }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Kecamatan</label>
                                                            <div class="col">
                                                                <input type="textarea" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->kec }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Kab/Kota</label>
                                                            <div class="col">
                                                                <input type="textarea" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->kab_kota }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Provinsi</label>
                                                            <div class="col">
                                                                <input type="textarea" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->provinsi }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Kode Pos</label>
                                                            <div class="col">
                                                                <input type="textarea" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->identity->kode_pos }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                            {{-- </div>
                            </div> --}}

                            {{-- <div class="container-fluid">
                                <div class="row border rounded">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12 p-r-0">
                                                <div class="card border-0 my-3">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="card-body p-1 ">
                                                        <!-- **************************************************************************************************8******  -->
                                                        <h6>Data Pekerjaan</h6>
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Pekerjaan</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext" name="id"
                                                                    value=": {{ $anggotas->profession->pekerjaan }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>

                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="name">Lama
                                                                Kerja</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    name="name"
                                                                    value=": {{ $anggotas->profession->lama_kerja_tahun }} Tahun {{ $anggotas->profession->lama_kerja_bulan }} Bulan"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label"
                                                                for="nama_panggilan">Tanggungan</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    name="nama_panggilan"
                                                                    value=": {{ $anggotas->profession->tanggungan }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label"
                                                                for="jenis_kelamin">Pendapatan</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    name="jenis_kelamin"
                                                                    value=": Rp.{{ $anggotas->profession->pendapatan }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>

                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="email">Omset
                                                                Dagang</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    name="email"
                                                                    value=": Rp.{{ $anggotas->profession->omset_dagang }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Gaji</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": Rp.{{ $anggotas->profession->gaji }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Pendapatan
                                                                Psg</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": Rp.{{ $anggotas->profession->pendapatan_psg }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Pendapatan
                                                                Lain</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": Rp.{{ $anggotas->profession->pendapatan_lain }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Biaya
                                                                Bulanan</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": Rp.{{ $anggotas->profession->biaya_bulanan }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>

                                                        <!-- **************************************************************************************************8******  -->

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
                                                <div class="card border-0 my-3">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="card-body p-1">
                                                        <!-- **************************************************************************************************8******  -->
                                                        <h6>Kerabat dalam kondisi darurat</h6>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Nama</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->adddata->nama }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Alamat</label>
                                                            <div class="col">
                                                                <input type="textarea" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->adddata->alamat }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">RT/RW</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->adddata->rt }}/{{ $anggotas->adddata->rw }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Desa/Kel</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->adddata->desa_kel }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Kecamatan</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->adddata->kec }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Kab/Kota</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->adddata->kab_kota }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Provinsi</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->adddata->provinsi }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Kode Pos</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->adddata->kode_pos }}" readonly
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Telepon
                                                                Rumah</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->adddata->telepon_rumah }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label">Telepon
                                                                Seluler</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control-plaintext"
                                                                    value=": {{ $anggotas->adddata->telepon_seluler }}"
                                                                    readonly disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection