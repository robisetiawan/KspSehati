@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col">
                        <h3>Penerimaan Uang</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Penerimaan Uang</li>
                            <li class="breadcrumb-item">Simpanan</li>
                            <li class="breadcrumb-item">Edit Simpanan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="card">

            <form method="POST" action="/dashboard/tambah-simpanan/{{ $simpanan->id }}" class="form theme-form"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body f-12">


                    <a href="/dashboard/tambah-simpanan" class="btn btn-pill btn-outline-primary btn-xs mb-3"><i
                            class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    <div class="row">
                        <div class="col-sm-12 p-r-0">
                            <div class="card border-0">
                                <!-- **************************************************************************************************8******  -->
                                <!-- **************************************************************************************************8******  -->
                                <div class="row mb-1">
                                    <label class="col-sm-3 col-form-label" for="no_anggota">No
                                        Anggota</label>
                                    <div class="col-sm-2 p-l-0">
                                        <input type="hidden" name="id_anggota" value="{{ $simpanan->anggota->id }}">
                                        <input
                                            class="form-control form-control-sm @error('no_anggota') is-invalid @enderror"
                                            name="no_anggota" type="text" id="no_anggota" readonly
                                            value="{{ old('no_anggota', $simpanan->anggota->no_anggota) }}">
                                        @error('no_anggota')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- **************************************************************************************************8******  -->
                                <div class="row mb-1">
                                    <label class="col-sm-3 col-form-label" for="created_at">Tgl Simpan</label>
                                    <div class="col-sm-2 p-l-0">
                                        <input
                                            class="form-control form-control-sm @error('created_at') is-invalid @enderror"
                                            name="created_at" type="text" id="created_at" readonly
                                            value="{{ old('created_at', $simpanan->created_at->format('d M Y')) }}">
                                        @error('created_at')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- <label class="col-sm-2 col-form-label" for="nama">Status</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Anggota</option>
                                                                    <option>02 - Pinjaman Jaminan Mobil</option>
                                                                </select>
                                                            </div> --}}
                                </div>
                                <!-- **************************************************************************************************8******  -->
                                <div class="row mb-1">
                                    <label class="col-sm-3 col-form-label" for="name">Nama</label>
                                    <div class="col-sm-4 p-l-0">
                                        <input type="text"
                                            class="form-control form-control-sm @error('name') is-invalid @enderror"
                                            id="name" name="name" readonly
                                            value="{{ old('name', $simpanan->anggota->user->name) }}" />
                                    </div>

                                </div>
                                <!-- **************************************************************************************************8******  -->
                                <div class="row mb-1">
                                    <label class="col-sm-3 col-form-label" for="simpwj">Jmlh Simpanan
                                        Terbaru</label>
                                    <div class="col-sm-2 p-l-0">
                                        <input class="form-control form-control-sm @error('simpwj') is-invalid @enderror"
                                            name="simpwj" type="text" id="simpwj" value="@currency($simpanan->anggota->simpwj)" readonly>
                                        @error('simpwj')
                                            <div class="invalid-feedback">
                                                Jumlah simpanan tidak boleh kosong
                                            </div>
                                        @enderror
                                        <div class="col-sm-4">

                                        </div>
                                    </div>
                                </div>
                                <!-- **************************************************************************************************8******  -->
                                <div class="row mb-1">
                                    <label class="col-sm-3 col-form-label" for="jmlh_simpwj">Jmlh Simpanan per
                                        {{ $simpanan->created_at->format('d M') }}</label>
                                    <div class="col-sm-2 p-l-0">
                                        <input
                                            class="form-control form-control-sm @error('jmlh_simpwj') is-invalid @enderror"
                                            name="jmlh_simpwj" type="text" id="jmlh_simpwj" value="@currency($simpanan->jmlh_simpwj)"
                                            readonly>
                                        @error('jmlh_simpwj')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- **************************************************************************************************8******  -->
                                <div class="row mb-1">
                                    <label class="col-sm-3 col-form-label" for="simp_wj">Tambah Simpanan</label>
                                    <div class="col-sm-2 p-l-0">
                                        <input class="form-control form-control-sm @error('simp_wj') is-invalid @enderror"
                                            name="simp_wj" type="text" id="simp_wj"
                                            value="{{ old('simp_wj', $simpanan->simp_wj) }}" type-currency="IDR"
                                            placeholder="Rp ">
                                        @error('simp_wj')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- **************************************************************************************************8******  -->

                            </div>

                        </div>
                    </div>

                    <!-- ************************************************************************************************* -->
                </div>
                <div class="card-footer text-end f-12">
                    <div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-light" type="reset">Cancel</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
