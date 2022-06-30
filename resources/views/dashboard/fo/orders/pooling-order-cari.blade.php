@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Pooling Order</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Pooling Order</li>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="/dashboard/pooling-order/cari" method="GET">

                            <div class="input-group mb-3">
                                <label class="col-sm-4 col-form-label visually-hidden" for="id">No Anggota</label>
                                <input class="form-control" type="text" name="cari"
                                    placeholder="Masukan Nomor Anggota ..." value="{{ request('cari') }}" required>
                                <button class="btn btn-primary" type="submit" value="CARI"><i class="fa fa-arrow-right"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>
                        <small>* Masukan nama atau nomor anggota</small>
                    </div>
                </div>

                <form class="form theme-form" method="POST" action="/dashboard/orders" enctype="multipart/form-data">
                    @csrf
                    <div class="card mt-3">
                        <div class="card-body f-12">
                            @forelse ($anggotas as $a)
                                @if ($a->status == 'Nonaktif')
                                    <div class="row mb-3">
                                        <div class="col p-l-0">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Status Anggota
                                                sudah tidak aktif !!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row mb-3">
                                        <label class="col-sm-5 col-form-label visually-hidden" for="anggota_id">anggota_id
                                        </label>
                                        <div class="col p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('anggota_id') is-invalid @enderror"
                                                name="anggota_id" type="hidden" id="anggota_id"
                                                value="{{ old('anggota_id', $a->id) }}">
                                            @error('anggota_id')
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Anggota
                                                    sedang
                                                    dalam
                                                    proses order
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        {{-- Left Coloum --}}
                                        <div class="col">

                                            <!-- **************************************************************************************************8******  -->

                                            <div class=" row mb-1">
                                                <label class="col-sm-4 col-form-label" for="no_anggota">No Anggota</label>
                                                <div class="col p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('no_anggota ') is-invalid @enderror"
                                                        name="no_anggota" type="text" id="no_anggota"
                                                        value="{{ $a->no_anggota }}" disabled>
                                                    @error('no_anggota')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class=" row mb-1">
                                                <label class="col-sm-4 col-form-label" for="name">Nama</label>
                                                <div class="col p-l-0">
                                                    <input type="hidden" name="nama" value="{{ $a->user->name }}">
                                                    <input
                                                        class="form-control form-control-sm @error('name ') is-invalid @enderror"
                                                        name="name" type="text" id="name"
                                                        value="{{ $a->user->name }}" disabled>
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="barang">Buss
                                                    Unit</label>
                                                <div class="col-sm-4 p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('barang') is-invalid @enderror"
                                                        name="barang" type="text" id="barang"
                                                        value="{{ old('barang') }}">
                                                    @error('barang')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="buss_unit"></label>
                                                <div class="col p-l-0">
                                                    <select
                                                        class="form-select form-select-sm @error('buss_unit') is-invalid @enderror"
                                                        name="buss_unit" id="buss_unit">
                                                        <option></option>
                                                        <option value="01 - Pinjaman Jaminan Motor"
                                                            {{ old('buss_unit') == '01 - Pinjaman Jaminan Motor' ? 'selected' : '' }}>
                                                            01 - Pinjaman Jaminan Motor
                                                        </option>
                                                        <option value="02 - Pinjaman Jaminan Mobil"
                                                            {{ old('buss_unit') == '02 - Pinjaman Jaminan Mobil' ? 'selected' : '' }}>
                                                            02 - Pinjaman Jaminan Mobil
                                                        </option>
                                                    </select>
                                                    @error('buss_unit')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="tempat_lahir">TTL</label>
                                                <label class="col-sm-1 visually-hidden" for="tanggal_lahir"></label>
                                                <div class="col p-l-0">
                                                    <input type="text"
                                                        class="form-control form-control-sm @error('tempat_lahir ') is-invalid @enderror"
                                                        id="tempat_lahir" name="tempat_lahir"
                                                        value="{{ $a->tempat_lahir }}" disabled />
                                                </div>
                                                <div class="col-sm-3 p-l-0">
                                                    <input type="text"
                                                        class="form-control form-control-sm @error('tanggal_lahir ') is-invalid @enderror"
                                                        id="tanggal_lahir" name="tanggal_lahir"
                                                        value="{{ $a->tanggal_lahir }}" disabled />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class=" row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama_ibu">Nama Ibu</label>
                                                <div class="col p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('nama_ibu ') is-invalid @enderror"
                                                        name="nama_ibu" type="text" id="nama_ibu"
                                                        value="{{ $a->nama_ibu }}" disabled>
                                                    @error('nama_ibu')
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
                                                <div class="col p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('jenis_kelamin ') is-invalid @enderror"
                                                        name="jenis_kelamin" type="text" id="jenis_kelamin"
                                                        value="{{ $a->jenis_kelamin }}" disabled>
                                                    @error('jenis_kelamin')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="status_kawin">Status</label>
                                                <div class="col p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('status_kawin ') is-invalid @enderror"
                                                        name="status_kawin" type="text" id="status_kawin"
                                                        value="{{ $a->identity->status_kawin }}" disabled>
                                                    @error('status_kawin')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- ****************************************************************************************** -->

                                        </div>

                                        <div class="col">
                                            {{-- Right Coloum --}}

                                            <!-- **************************************************************************************************8******  -->
                                            {{-- @foreach ($identities as $i) --}}
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="type_identitas">Type
                                                    Identitas</label>
                                                <div class="col p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('type_identitas ') is-invalid @enderror"
                                                        name="type_identitas" type="text" id="type_identitas"
                                                        value="{{ $a->identity->type_identitas }}" disabled>
                                                    @error('type_identitas')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- @endforeach --}}
                                            <!-- **************************************************************************************************8******  -->
                                            <div class=" row mb-1">
                                                <label class="col-sm-4 col-form-label" for="no_identitas">No
                                                    Identitas</label>
                                                <div class="col p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('no_identitas ') is-invalid @enderror"
                                                        name="no_identitas" type="text" id="no_identitas"
                                                        value="{{ $a->identity->no_identitas }}" disabled>
                                                    @error('no_identitas')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class=" row mb-1">
                                                <label class="col-sm-4 col-form-label"
                                                    for="telepon_seluler">Telepon</label>
                                                <div class="col p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('telepon_seluler ') is-invalid @enderror"
                                                        name="telepon_seluler" type="text" id="telepon_seluler"
                                                        value="{{ $a->telepon_seluler }}" disabled>
                                                    @error('telepon_seluler')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class=" row mb-1">
                                                <label class="col-sm-4 col-form-label" for="pekerjaan">Pekerjaan</label>
                                                <div class="col p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('pekerjaan ') is-invalid @enderror"
                                                        name="pekerjaan" type="text" id="pekerjaan"
                                                        value="{{ $a->profession->pekerjaan }}" disabled>
                                                    @error('pekerjaan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="ada_jaminan">Jaminan</label>
                                                <div class="col p-l-0">
                                                    <select class="form-select @error('ada_jaminan') is-invalid @enderror"
                                                        name="ada_jaminan" id="ada_jaminan" disabled>
                                                        <option>Ada Jaminan</option>
                                                        {{-- <option value="Ada Jaminan"
                                                    {{ old('ada_jaminan') == 'Ada Jaminan' ? 'selected' : '' }}>
                                                    Ada Jaminan
                                                </option>
                                                <option value="Tanpa Jaminan"
                                                    {{ old('ada_jaminan') == 'Tanpa Jaminan' ? 'selected' : '' }}>
                                                    Tanpa Jaminan
                                                </option> --}}
                                                    </select>
                                                    @error('ada_jaminan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="no_polisi">No
                                                    Polisi</label>
                                                <div class="col p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('no_polisi') is-invalid @enderror"
                                                        name="no_polisi" type="text" id="no_polisi"
                                                        value="{{ old('no_polisi') }}">
                                                    @error('no_polisi')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="no_mesin">No
                                                    Mesin</label>
                                                <div class="col p-l-0">
                                                    <input
                                                        class="form-control form-control-sm @error('no_mesin') is-invalid @enderror"
                                                        name="no_mesin" type="text" id="no_mesin"
                                                        value="{{ old('no_mesin') }}">
                                                    @error('no_mesin')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="bpkb">BPKB</label>
                                                <div class="col p-l-0">
                                                    <select
                                                        class="form-select form-select-sm @error('bpkb') is-invalid @enderror"
                                                        name="bpkb" id="bpkb">
                                                        <option></option>
                                                        <option value="Atas Nama Sendiri"
                                                            {{ old('bpkb') == 'Atas Nama Sendiri' ? 'selected' : '' }}>
                                                            Atas Nama Sendiri
                                                        </option>
                                                        <option value="Atas Nama Orang Lain"
                                                            {{ old('bpkb') == 'Atas Nama Orang Lain' ? 'selected' : '' }}>
                                                            Atas Nama Orang Lain
                                                        </option>
                                                        <option value="Atas Nama Istri/Suami/Keluarga"
                                                            {{ old('bpkb') == 'Atas Nama Istri/Suami/Keluarga' ? 'selected' : '' }}>
                                                            Atas Nama Istri/Suami/Keluarga
                                                        </option>
                                                    </select>
                                                    @error('bpkb')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="stnk_ada">STNK Ada ?</label>
                                                <div class="col p-l-0">
                                                    <select class="form-select @error('stnk_ada') is-invalid @enderror"
                                                        name="stnk_ada" id="stnk_ada" disabled>
                                                        <option>Ada</option>
                                                    </select>
                                                    @error('stnk_ada')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- ****************************************************************************************** -->
                                        </div>
                                        {{-- EndRight Coloum --}}
                                    </div>
                                @endif
                            @empty
                                <p class="text-center">Anggota tidak ditemukan !!!</p>
                            @endforelse
                        </div>
                        {{-- cardFooter --}}
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        {{-- endCardFooter --}}
                    </div>
                    {{-- endCardBody --}}



                </form>
                {{-- endCard & end form anggota lama --}}

            </div>
        </div>
    </div>
@endsection
