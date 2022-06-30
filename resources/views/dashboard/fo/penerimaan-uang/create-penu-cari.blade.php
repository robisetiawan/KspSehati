@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Penerimaan Uang</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Penerimaan Uang</li>
                            <li class="breadcrumb-item">Tambah Data</li>
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
                <a href="/dashboard/penerimaan-uang" class="btn btn-pill btn-outline-primary btn-xs mb-3"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>

                <div class="row">
                    <div class="col-md-6">
                        <form action="/dashboard/penuang/search" method="GET">

                            <div class="input-group mb-3">
                                <label class="col-sm-4 col-form-label visually-hidden" for="id">No Anggota</label>
                                <input class="form-control" type="text" name="cari"
                                    placeholder="Cari Nama / No Order ..." value="{{ request('cari') }}" required>
                                <button class="btn btn-primary" type="submit" value="CARI"><i class="fa fa-arrow-right"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>

                    </div>
                </div>
                <form method="POST" action="/dashboard/penerimaan-uang" class="form theme-form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @forelse ($order as $order)
                            @if ($order->pinjam->sisa_angs == '0')
                                <div class="card-body f-12">
                                    <div class="row mb-3">
                                        <div class="col p-l-0">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="fa fa-check" aria-hidden="true"></i> Anggota sudah
                                                melunasi
                                                angsuran !!

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="card-body f-12">

                                    <div class="row">
                                        <div class="col-sm-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-sm-12 p-r-0">
                                                    <div class="card border-0">

                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="no_anggota">No
                                                                Anggota</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <input type="hidden" value="{{ $order->anggota->id }}"
                                                                    name="anggota_id">
                                                                <input type="hidden" name="pinjam_id"
                                                                    value="{{ $order->pinjam->id }}">
                                                                <input
                                                                    class="form-control form-control-sm @error('no_anggota') is-invalid @enderror"
                                                                    name="no_anggota" type="text" id="no_anggota"
                                                                    readonly
                                                                    value="{{ old('no_anggota', $order->anggota->no_anggota) }}">
                                                                @error('no_anggota')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="no_order">No
                                                                Order</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <input type="hidden" name="id"
                                                                    value="{{ $order->id }}">
                                                                <input
                                                                    class="form-control form-control-sm @error('no_order') is-invalid @enderror"
                                                                    name="no_order" type="text" id="no_order" readonly
                                                                    value="{{ old('no_order', $order->no_order) }}">
                                                                @error('no_order')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="trm_dr">Terima
                                                                dari</label>
                                                            <div class="col-sm-7 p-l-0">
                                                                <input type="text"
                                                                    class="form-control form-control-sm @error('trm_dr') is-invalid @enderror"
                                                                    id="trm_dr" name="trm_dr"
                                                                    value="{{ old('trm_dr', $order->anggota->user->name) }}" />
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label"
                                                                for="angsuran_ke">Angsuran Ke
                                                                -</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="hidden" name="periode"
                                                                    value="{{ $order->pinjam->periode }}">
                                                                <input type="number"
                                                                    class="form-control form-control-sm @error('angsuran_ke') is-invalid @enderror"
                                                                    id="angsuran_ke" name="angsuran_ke"
                                                                    value="{{ old('angsuran_ke', $order->pinjam->periode - $order->pinjam->sisa_angs + 1) }}"
                                                                    max="{{ $order->pinjam->periode }}"
                                                                    min="{{ $order->pinjam->periode - $order->pinjam->sisa_angs }}"
                                                                    readonly />
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <input type="text"
                                                                    class="form-control form-control-sm @error('periode') is-invalid @enderror"
                                                                    id="periode" name="periode"
                                                                    value="dari {{ $order->pinjam->periode }}"
                                                                    disabled />
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="created_at">Tgl
                                                                Pinjam</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="created_at" name="created_at"
                                                                    value="{{ $order->created_at->format('d M Y') }}"
                                                                    disabled />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="jt_tempo">Jatuh
                                                                Tempo</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="jt_tempo" name="jt_tempo"
                                                                    value="Tanggal {{ $order->created_at->format('d') }}"
                                                                    disabled />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xl-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card border-0">
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="card-body p-1">
                                                            <!-- **************************************************************************************************8******  -->
                                                            <div class="row mb-1">
                                                                <label class="col-sm-4 col-form-label"
                                                                    for="nama">Currency</label>
                                                                <div class="col-sm-2 p-l-0">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm"
                                                                        id="colFormLabelSm" value="IDR" disabled />
                                                                </div>
                                                            </div>
                                                            <!-- **************************************************************************************************8******  -->
                                                            <div class="row mb-1">
                                                                <label class="col-sm-4 col-form-label"
                                                                    for="pk_marg">Pinjaman</label>
                                                                <div class="col-sm-6 p-l-0">
                                                                    <input type="hidden" name="pk_marg"
                                                                        value="{{ $order->pinjam->pk_marg }}">
                                                                    <input
                                                                        class="form-control form-control-sm @error('pk_marg') is-invalid @enderror"
                                                                        name="pk_marg" type="text" id="pk_marg"
                                                                        value="@currency($order->pinjam->pk_marg)" disabled>
                                                                    @error('pk_marg')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <!-- **************************************************************************************************8******  -->
                                                            <div class="row mb-1">
                                                                <label class="col-sm-4 col-form-label" for="sisa_pj">Sisa
                                                                    Pinj</label>
                                                                <div class="col-sm-6 p-l-0">
                                                                    <input
                                                                        class="form-control form-control-sm @error('sisa_pj') is-invalid @enderror"
                                                                        name="sisa_pj" type="text" id="sisa_pj"
                                                                        value="Rp." disabled>
                                                                    @error('sisa_pj')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <!-- **************************************************************************************************8******  -->
                                                            <div class="row mb-1">
                                                                <label class="col-sm-4 col-form-label"
                                                                    for="nominal">Nominal</label>
                                                                <div class="col-sm-6 p-l-0">
                                                                    <input type="hidden"
                                                                        class="form-control form-control-sm @error('nominal') is-invalid @enderror"
                                                                        name="nominal" id="nominal"
                                                                        value="{{ $order->pinjam->angsuran }}">
                                                                    <input
                                                                        class="form-control form-control-sm @error('nominal') is-invalid @enderror"
                                                                        name="nominal" type="text" id="nominal"
                                                                        value="@currency($order->pinjam->angsuran)" disabled>
                                                                    @error('nominal')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <!-- **************************************************************************************************8******  -->
                                                            <div class="row mb-1">
                                                                <label class="col-sm-4 col-form-label" for="cr_bayar">Cara
                                                                    Bayar</label>
                                                                <div class="col-sm-4 p-l-0">
                                                                    <select
                                                                        class="form-select @error('cr_bayar') is-invalid @enderror"
                                                                        name="cr_bayar" id="cr_bayar">
                                                                        <option value="Tunai"
                                                                            {{ old('cr_bayar') == 'Tunai' ? 'selected' : '' }}>
                                                                            Tunai
                                                                        </option>
                                                                        <option value="Transfer"
                                                                            {{ old('cr_bayar') == 'Transfer' ? 'selected' : '' }}>
                                                                            Transfer
                                                                        </option>
                                                                    </select>
                                                                    @error('cr_byr')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <!-- **************************************************************************************************8******  -->
                                                            <div class="row mb-1">
                                                                <label class="col-sm-4 col-form-label" for="kd_bank">Kode
                                                                    Bank</label>
                                                                <div class="col-sm-3 p-l-0">
                                                                    <input type="number"
                                                                        class="form-control form-control-sm @error('kd_bank') is-invalid @enderror"
                                                                        id="kd_bank" name="kd_bank"
                                                                        value="{{ old('kd_bank') }}" />
                                                                    @error('kd_bank')
                                                                        <div class="invalid-feedback">
                                                                            Kode bank tidak boleh kosong
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <!-- **************************************************************************************************8******  -->
                                                            <div class="row mb-1">
                                                                <label class="col-sm-4 col-form-label" for="no_rek">No.
                                                                    Rek</label>
                                                                <div class="col-sm-7 p-l-0">
                                                                    <input type="number"
                                                                        class="form-control form-control-sm @error('no_rek') is-invalid @enderror"
                                                                        id="no_rek" name="no_rek"
                                                                        value="{{ old('no_rek') }}" />
                                                                    @error('no_rek')
                                                                        <div class="invalid-feedback">
                                                                            No rekening tidak boleh
                                                                            kosong
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <!-- **************************************************************************************************8******  -->


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end f-12">
                                    <div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            @endif
                            <!-- ************************************************************************************************* -->
                        @empty
                            <p class="text-center">Data tidak ditemukan !!!</p>
                        @endforelse

                    </div>

                </form>

                <!-- **************************************************************************************************8******  -->
            </div>

        </div>
    </div>
@endsection
