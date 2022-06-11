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
                            <li class="breadcrumb-item">Detail Anggota</li>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
                    </div>
                </div>
            </div>
        </div>

        <div class="card">

            {{-- <form method="POST" action="/dashboard/anggotas" class="form theme-form" enctype="multipart/form-data">
                @csrf --}}

            <div class="card-body f-12">
                <div class="row">
                    <div class="col">

                        <div class="btn-group">
                            <a href="/dashboard/anggotas">
                                <button class="btn btn-pill btn-outline-primary btn-xs mb-3"><i class="fa fa-arrow-left"
                                        aria-hidden="true"></i> Back</button>
                            </a>

                            <a href="/dashboard/anggotas/{{ $anggotas->id }}/edit">
                                <button class="btn btn-pill btn-outline-success btn-xs mb-3 mx-1"><i
                                        class="fa fa-pencil fa-lg" aria-hidden="true"></i> Edit</button>
                            </a>

                            <form action="/dashboard/anggotas/{{ $anggotas->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-pill btn-outline-danger btn-xs mb-3"
                                    onclick="return confirm('Are you sure !!')"><i class="fa fa-times fa-lg"
                                        aria-hidden="true"></i> Delete</button>
                            </form>
                        </div>

                        <form method="POST" action="/dashboard/anggotas" class="form theme-form"
                            enctype="multipart/form-data">
                            @csrf
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



                                                    <!-- **************************************************************************************************8******  -->

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="email">Email</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('email') is-invalid @enderror"
                                                                name="email" type="email" id="email"
                                                                value="{{ $anggotas->user->email }}" readonly>
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="image">Image</label>
                                                        <div class="col">
                                                            @if ($anggotas->user->image)
                                                                {{-- <img src="{{ asset('storage/' . $anggotas->user->image) }}"
                                                                    class="card-img-top mt-3"> --}}
                                                                <div style="overflow: hidden">
                                                                    <img class="rounded"
                                                                        src="{{ asset('storage/' . $anggotas->user->image) }}"
                                                                        width="200px" height="200px" />
                                                                </div>
                                                            @else
                                                                <img src="{{ asset('templates/assets/images/dashboard/2.png ') }}"
                                                                    class="rounded" width="200px" height="200px">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- ************************************************************************************************* -->
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
                                                        <label class="col-sm-4 col-form-label" for="no_anggota">No
                                                            Anggota</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('no_anggota') is-invalid @enderror"
                                                                name="no_anggota" type="text" id="no_anggota"
                                                                value="{{ $anggotas->no_anggota }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="name">Nama</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('name') is-invalid @enderror"
                                                                name="name" type="text" id="name"
                                                                value="{{ $anggotas->user->name }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="nama_panggilan">Nama
                                                            Panggilan</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('nama_panggilan') is-invalid @enderror"
                                                                name="nama_panggilan" type="text" id="nama_panggilan"
                                                                value="{{ $anggotas->nama_panggilan }}" readonly>
                                                        </div>
                                                    </div>

                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="jenis_kelamin">Jenis
                                                            Kelamin</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('jenis_kelamin') is-invalid @enderror"
                                                                name="jenis_kelamin" type="text" id="jenis_kelamin"
                                                                value="{{ $anggotas->jenis_kelamin }}" readonly>
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
                                                                value="{{ $anggotas->tempat_lahir }}" readonly>
                                                        </div>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror"
                                                                name="tanggal_lahir" type="text" id="tanggal_lahir"
                                                                value="{{ $anggotas->tanggal_lahir }}" readonly>
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->

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
                                                        <label class="col-sm-4 col-form-label" for="nama_ibu">Nama
                                                            Ibu</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('nama_ibu') is-invalid @enderror"
                                                                name="nama_ibu" type="text" id="nama_ibu"
                                                                value="{{ $anggotas->nama_ibu }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="telepon_rumah">Telepon
                                                            Rumah</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_rumah') is-invalid @enderror"
                                                                name="telepon_rumah" type="text" id="telepon_rumah"
                                                                value="{{ $anggotas->telepon_rumah }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="telepon_seluler">Telepon
                                                            Seluler</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_rumah') is-invalid @enderror"
                                                                name="telepon_rumah" type="text" id="telepon_rumah"
                                                                value="{{ $anggotas->telepon_rumah }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="telepon_kantor">Telepon
                                                            Kantor</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_kantor') is-invalid @enderror"
                                                                name="telepon_kantor" type="text" id="telepon_kantor"
                                                                value="{{ $anggotas->telepon_kantor }}" readonly>
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
                                                            <input
                                                                class="form-control form-control-sm @error('type_identitas') is-invalid @enderror"
                                                                name="type_identitas" type="text" id="type_identitas"
                                                                value="{{ $anggotas->identity->type_identitas }}"
                                                                readonly>
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
                                                                value="{{ $anggotas->identity->no_identitas }}" readonly>
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="warganegara">Warganegara</label>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('warganegara') is-invalid @enderror"
                                                                name="warganegara" type="text" id="warganegara"
                                                                value="{{ $anggotas->identity->warganegara }}" readonly>
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="agama">Agama</label>
                                                        <div class="col-sm-4">
                                                            <input
                                                                class="form-control form-control-sm @error('agama') is-invalid @enderror"
                                                                name="agama" type="text" id="agama"
                                                                value="{{ $anggotas->identity->agama }}" readonly>
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="pendidikan">Pendidikan</label>
                                                        <div class="col-sm-4">
                                                            <input
                                                                class="form-control form-control-sm @error('pendidikan') is-invalid @enderror"
                                                                name="pendidikan" type="text" id="pendidikan"
                                                                value="{{ $anggotas->identity->pendidikan }}" readonly>
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="gelar">Gelar</label>
                                                        <div class="col-sm-4">
                                                            <input
                                                                class="form-control form-control-sm @error('gelar') is-invalid @enderror"
                                                                name="gelar" type="text" id="gelar"
                                                                value="{{ $anggotas->identity->gelar }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="status_kawin">Status
                                                            Kawin</label>
                                                        <div class="col-sm-4">
                                                            <input
                                                                class="form-control form-control-sm @error('status_kawin') is-invalid @enderror"
                                                                name="status_kawin" type="text" id="status_kawin"
                                                                value="{{ $anggotas->identity->status_kawin }}" readonly>
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="gol_darah">Gol
                                                            Darah</label>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('gol_darah') is-invalid @enderror"
                                                                name="gol_darah" type="text" id="gol_darah"
                                                                value="{{ $anggotas->identity->gol_darah }}" readonly>
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
                                                            <input
                                                                class="form-control form-control-sm @error('status_rumah') is-invalid @enderror"
                                                                name="status_rumah" type="text" id="status_rumah"
                                                                value="{{ $anggotas->identity->status_rumah }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="alamat">Alamat</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('alamat') is-invalid @enderror"
                                                                name="alamat" type="text" id="alamat"
                                                                value="{{ $anggotas->identity->alamat }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="rt">RT / RW</label>
                                                        <label class="col-sm-4 col-form-label visually-hidden"
                                                            for="rw">Rw</label>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rt') is-invalid @enderror"
                                                                name="rt" type="text" id="rt"
                                                                value="{{ $anggotas->identity->rt }}" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rw') is-invalid @enderror"
                                                                name="rw" type="text" id="rw"
                                                                value="{{ $anggotas->identity->rw }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="desa_kel">Desa/Kel</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('desa_kel') is-invalid @enderror"
                                                                name="desa_kel" type="text" id="desa_kel"
                                                                value="{{ $anggotas->identity->desa_kel }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kec">Kec</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kec') is-invalid @enderror"
                                                                name="kec" type="text" id="kec"
                                                                value="{{ $anggotas->identity->kec }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="kab_kota">Kab/Kota</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kab_kota') is-invalid @enderror"
                                                                name="kab_kota" type="text" id="kab_kota"
                                                                value="{{ $anggotas->identity->kab_kota }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="provinsi">Provinsi</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('provinsi') is-invalid @enderror"
                                                                name="provinsi" type="text" id="provinsi"
                                                                value="{{ $anggotas->identity->provinsi }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kode_pos">Kode
                                                            Pos</label>
                                                        <div class="col-sm-4">
                                                            <input
                                                                class="form-control form-control-sm @error('kode_pos') is-invalid @enderror"
                                                                name="kode_pos" type="text" id="kode_pos"
                                                                value="{{ $anggotas->identity->kode_pos }}" readonly>
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
                                                                value="{{ $anggotas->profession->pekerjaan }}" readonly>
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
                                                                name="lama_kerja_tahun" type="text" id="lama_kerja_tahun"
                                                                value="{{ $anggotas->profession->lama_kerja_tahun }}"
                                                                readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('lama_kerja_bulan') is-invalid @enderror"
                                                                name="lama_kerja_bulan" type="text" id="lama_kerja_bulan"
                                                                value="{{ $anggotas->profession->lama_kerja_bulan }}"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="tanggungan">Tanggungan</label>
                                                        <div class="col-sm-2">
                                                            <input
                                                                class="form-control form-control-sm @error('tanggungan') is-invalid @enderror"
                                                                name="tanggungan" type="text" id="tanggungan"
                                                                value="{{ $anggotas->profession->tanggungan }}" readonly>
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
                                                                value="@currency($anggotas->profession->omset_dagang)" readonly>
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
                                                                value="@currency($anggotas->profession->pendapatan)" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="gaji">Gaji</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('gaji') is-invalid @enderror"
                                                                name="gaji" type="text" id="gaji" value="@currency($anggotas->profession->gaji)"
                                                                readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="pendapatan_psg">Pendapatan Psg</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('pendapatan_psg') is-invalid @enderror"
                                                                name="pendapatan_psg" type="text" id="pendapatan_psg"
                                                                value="@currency($anggotas->profession->pendapatan_psg)" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="pendapatan_lain">Pendapatan Lain</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('pendapatan_lain') is-invalid @enderror"
                                                                name="pendapatan_lain" type="text" id="pendapatan_lain"
                                                                value="@currency($anggotas->profession->pendapatan_lain)" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="biaya_bulanan">Biaya
                                                            Bulanan</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('biaya_bulanan') is-invalid @enderror"
                                                                name="biaya_bulanan" type="text" id="biaya_bulanan"
                                                                value="@currency($anggotas->profession->biaya_bulanan)" readonly>
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
                                                                value="{{ $anggotas->adddata->nama }}" readonly>
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
                                                                value="{{ $anggotas->adddata->alamat_add }}" readonly>
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
                                                                name="rt_add" type="text" id="rt_add"
                                                                value="{{ $anggotas->adddata->rt_add }}" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rw_add') is-invalid @enderror"
                                                                name="rw_add" type="text" id="rw_add"
                                                                value="{{ $anggotas->adddata->rw_add }}" readonly>
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
                                                                value="{{ $anggotas->adddata->desa_kel_add }}" readonly>
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
                                                                value="{{ $anggotas->adddata->kec_add }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kab_kota_add">Kabupaten
                                                            / Kota</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kab_kota_add') is-invalid @enderror"
                                                                name="kab_kota_add" type="text" id="kab_kota_add"
                                                                value="{{ $anggotas->adddata->kab_kota_add }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="provinsi_add">Provinsi</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('provinsi_add') is-invalid @enderror"
                                                                name="provinsi_add" type="text" id="provinsi_add"
                                                                value="{{ $anggotas->adddata->provinsi_add }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kode_pos_add">Kode
                                                            Pos</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kode_pos_add') is-invalid @enderror"
                                                                name="kode_pos_add" type="text" id="kode_pos_add"
                                                                value="{{ $anggotas->adddata->kode_pos_add }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="telepon_rumah_add">Telepon Rumah</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_rumah_add') is-invalid @enderror"
                                                                name="telepon_rumah_add" type="text" id="telepon_rumah_add"
                                                                value="{{ $anggotas->adddata->telepon_rumah_add }}"
                                                                readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="telepon_seluler_add">Telepon seluler</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('telepon_seluler_add') is-invalid @enderror"
                                                                name="telepon_seluler_add" type="text"
                                                                id="telepon_seluler_add"
                                                                value="{{ $anggotas->adddata->telepon_seluler_add }}"
                                                                readonly>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- Simpanan --}}
                            <div class="container-fluid mb-2 border">
                                <div class="card-header p-1 mt-2">
                                    <h6> <i class="fa fa-user-md" aria-hidden="true"></i>
                                        Data Simpanan</h6>
                                </div>
                                <div class="row mx-2 my-3">
                                    <div class="col px-0">
                                        <!-- ***************************-->
                                        <!-- ***************************-->
                                        <div class="row mb-1">
                                            <label class="col-sm-2 col-form-label" for="simpkok">Simpanan Pokok</label>
                                            <div class="col-sm-3">
                                                <input
                                                    class="form-control form-control-sm @error('simpkok') is-invalid @enderror"
                                                    name="simpkok" type="text" id="simpkok" value="@currency($anggotas->simpkok)"
                                                    readonly>
                                            </div>
                                        </div>
                                        <!-- ***************************-->
                                        <!-- ***************************-->
                                        <div class="row mb-1">
                                            <label class="col-sm-2 col-form-label" for="simpanan">Simpanan Wajib</label>
                                            <div class="col-sm-3">
                                                <input
                                                    class="form-control form-control-sm @error('simpanan') is-invalid @enderror"
                                                    name="simpanan" type="text" id="simpanan" value="@currency($anggotas->simpwj)"
                                                    readonly>
                                            </div>
                                            {{-- Modal --}}
                                            <!-- Button trigger modal -->
                                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    Launch demo modal
                                                </button> --}}
                                            <div class="col-sm-2 p-l-0">
                                                <a href="#" class="btn btn-success btn-sm border-0 px-2"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa fa-eye fa-lg">
                                                    </i>
                                                </a>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">History
                                                Simpanan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <livewire:simpanan-table> --}}
                                            @livewire('simpanan-table', ['anggota' => $anggotas->id])
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- endModal --}}

                            {{-- Pinjaman --}}
                            <div class="container-fluid mb-2 border">
                                <div class="card-header p-1 mt-2">
                                    <h6> <i class="fa fa-user-md" aria-hidden="true"></i>
                                        Data Pinjaman</h6>
                                </div>
                                <div class="row mx-2 my-3">
                                    <div class="col px-0">
                                        <!-- ***************************-->
                                        <!-- ***************************-->
                                        <div class="mb-1 row">
                                            <label class="col-sm-2 col-form-label" for="pinlatest">Pinjaman
                                                Terakhir</label>
                                            <div class="col-sm-3">
                                                <input
                                                    class="form-control form-control-sm @error('pinlatest') is-invalid @enderror"
                                                    name="pinlatest" type="text" id="pinlatest" value="@currency($pinlatest->nilai_pinj)"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label class="col-sm-2 col-form-label" for="pinlatest">Pinjaman
                                                Terakhir</label>
                                            <div class="col-sm-3">
                                                <input
                                                    class="form-control form-control-sm @error('pinlatest') is-invalid @enderror"
                                                    name="pinlatest" type="text" id="pinlatest" value="@currency($pinlatest->nilai_pinj)"
                                                    readonly>
                                            </div>
                                            <div class="col-sm-2 p-l-0">
                                                <a href="#" class="btn btn-success btn-sm border-0 px-2"
                                                    data-bs-toggle="modal" data-bs-target="#pinjam">
                                                    <i class="fa fa-eye fa-lg">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="pinjam" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">History
                                                Pinjaman</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @livewire('pinjam-table', ['anggota' => $anggotas->id])
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- endModal --}}

                        </form>


                    </div>
                </div>
            </div>


            {{-- </form> --}}
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
@push('scripts')
    // {{-- dataTables --}}
    <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
    </script>
    {{-- end_dataTables --}}
@endpush
