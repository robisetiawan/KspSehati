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
                                <input class="form-control" type="text" name="cari" placeholder="Nomor Anggota ..."
                                    value="{{ old('cari') }}">
                                <button class="btn btn-primary" type="submit" value="CARI"><i class="fa fa-arrow-right"
                                        aria-hidden="true"></i></button>
                            </div>

                        </form>

                    </div>
                </div>

                <form class="form theme-form">

                    <div class="card">
                        <div class="card-body f-12">
                            <div class="row">
                                {{-- Left Coloum --}}
                                <div class="col">
                                    <!-- **************************************************************************************************8******  -->
                                    <div class=" row mb-1">
                                        <label class="col-sm-4 col-form-label" for="id">No Anggota</label>
                                        <div class="col p-l-0">
                                            <input class="form-control form-control-sm @error('id ') is-invalid @enderror"
                                                name="id" type="text" id="id" readonly>
                                            @error('id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- **************************************************************************************************8******  -->
                                    {{-- <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">No
                                                    Order</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" readonly value="{{ $title }}" />
                                                </div>

                                            </div> --}}
                                    <!-- **************************************************************************************************8******  -->
                                    <div class=" row mb-1">
                                        <label class="col-sm-4 col-form-label" for="name">Nama</label>
                                        <div class="col p-l-0">
                                            <input class="form-control form-control-sm @error('name ') is-invalid @enderror"
                                                name="name" type="text" id="name" readonly>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="buss_unit">Buss
                                            Unit</label>
                                        <div class="col-sm-4 p-l-0">
                                            <input type="text"
                                                class="form-control form-control-sm
                                                        @error('buss_unit ') is-invalid @enderror"
                                                name="buss_unit" id="buss_unit" />
                                            @error('buss_unit')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col p-l-0">
                                            <select class="form-select form-select-sm">
                                                <option></option>
                                                <option>01 - Pinjaman Jaminan Motor</option>
                                                <option>02 - Pinjaman Jaminan Mobil</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="tempat_lahir">TTL</label>
                                        <label class="col-sm-1 visually-hidden" for="tanggal_lahir"></label>
                                        <div class="col p-l-0">
                                            <input type="text"
                                                class="form-control form-control-sm @error('tempat_lahir ') is-invalid @enderror"
                                                id="tempat_lahir" name="tempat_lahir" readonly />
                                        </div>
                                        <div class="col-sm-3 p-l-0">
                                            <input type="text"
                                                class="form-control form-control-sm @error('tanggal_lahir ') is-invalid @enderror"
                                                id="tanggal_lahir" name="tanggal_lahir" readonly />
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class=" row mb-1">
                                        <label class="col-sm-4 col-form-label" for="nama_ibu">Nama Ibu</label>
                                        <div class="col p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('nama_ibu ') is-invalid @enderror"
                                                name="nama_ibu" type="text" id="nama_ibu" readonly>
                                            @error('nama_ibu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="nama">Jenis
                                            Kelamin</label>
                                        <div class="col p-l-0">
                                            <select class="form-select form-select-sm">
                                                <option></option>
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="nama">Status</label>
                                        <div class="col p-l-0">
                                            <select class="form-select form-select-sm">
                                                <option></option>
                                                <option>Kawin</option>
                                                <option>Belum Kawin </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- ****************************************************************************************** -->

                                </div>

                                <div class="col">
                                    {{-- Right Coloum --}}

                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="nama">Type
                                            Identitas</label>
                                        <div class="col p-l-0">
                                            <select class="form-select form-select-sm" readonly>
                                                <option></option>
                                                <option>KTP</option>
                                                <option>Kartu Keluarga</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class=" row mb-1">
                                        <label class="col-sm-4 col-form-label" for="no_identitas">No
                                            Identitas</label>
                                        <div class="col p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('no_identitas ') is-invalid @enderror"
                                                name="no_identitas" type="number" id="no_identitas" readonly>
                                            @error('no_identitas')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class=" row mb-1">
                                        <label class="col-sm-4 col-form-label" for="telepon_seluler">Telepon</label>
                                        <div class="col p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('telepon_seluler ') is-invalid @enderror"
                                                name="telepon_seluler" type="text" id="telepon_seluler" readonly>
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
                                                name="pekerjaan" type="text" id="pekerjaan" readonly>
                                            @error('pekerjaan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="nama">Jaminan</label>
                                        <div class="col p-l-0">
                                            <select class="form-select form-select-sm">
                                                <option></option>
                                                <option>Ada Jaminan</option>
                                                <option>Tidak Ada Jaminan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    {{-- <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Referensi</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                            </div> --}}
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="nama">No
                                            Polisi</label>
                                        <div class="col p-l-0">
                                            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" />
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="nama">No
                                            Mesin</label>
                                        <div class="col p-l-0">
                                            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" />
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="bpkb">BPKB</label>
                                        <div class="col p-l-0">
                                            <select class="form-select form-select-sm @error('bpkb') is-invalid @enderror"
                                                name="bpkb" id="bpkb">
                                                <option></option>
                                                <option value="Atas nama sendiri"
                                                    {{ old('bpkb') == 'Atas nama sendiri' ? 'selected' : '' }}>
                                                    Atas nama sendiri
                                                </option>
                                                <option value="Atas nama orang lain"
                                                    {{ old('bpkb') == 'Atas nama orang lain' ? 'selected' : '' }}>
                                                    Atas nama orang lain
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
                                            <select
                                                class="form-select form-select-sm @error('stnk_ada') is-invalid @enderror"
                                                name="stnk_ada" id="stnk_ada">
                                                <option></option>
                                                <option value="Ada" {{ old('stnk_ada') == 'Ada' ? 'selected' : '' }}>
                                                    Ada
                                                </option>
                                                <option value="Tidak ada"
                                                    {{ old('stnk_ada') == 'Tidak ada' ? 'selected' : '' }}>
                                                    Tidak ada
                                                </option>
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
                        </div>
                        {{-- cardFooter --}}
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <input class="btn btn-light" type="reset" value="Cancel" />
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
