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
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="card">

            <div class="card-body f-12">
                <div class="btn-group mb-3">
                    <a href="/dashboard/penerimaan-uang" class="btn btn-pill btn-outline-primary btn-xs mb-3"><i
                            class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>

                    <a href="/dashboard/penerimaan-uang/{{ $pene->id }}/edit">
                        <button class="btn btn-pill btn-outline-success btn-xs mb-3 mx-1"><i class="fa fa-pencil fa-lg"
                                aria-hidden="true"></i> Edit</button>
                    </a>

                    <form action="/dashboard/penerimaan-uang/{{ $pene->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-pill btn-outline-danger btn-xs mb-3"
                            onclick="return confirm('Are you sure !!')"><i class="fa fa-times fa-lg" aria-hidden="true"></i>
                            Delete</button>
                    </form>
                </div>
                <form method="POST" action="/dashboard/penerimaan-uang" class="form theme-form"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf



                    <div class="row">
                        <div class="col-sm-12 col-xl-6">
                            <div class="row">
                                <div class="col-sm-12 p-r-0">
                                    <div class="card border-0">
                                        <!-- **************************************************************************************************8******  -->
                                        <!-- **************************************************************************************************8******  -->
                                        <div class="row mb-1">
                                            <label class="col-sm-3 col-form-label" for="no_terima">No
                                                Terima</label>
                                            <div class="col-sm-4 p-l-0">
                                                <input
                                                    class="form-control form-control-sm @error('no_terima') is-invalid @enderror"
                                                    name="no_terima" type="text" id="no_terima" readonly
                                                    value="{{ old('no_terima', $pene->no_terima) }}">
                                                @error('no_terima')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- **************************************************************************************************8******  -->
                                        <div class="row mb-1">
                                            <label class="col-sm-3 col-form-label" for="no_anggota">No
                                                Anggota</label>
                                            <div class="col-sm-4 p-l-0">
                                                <input
                                                    class="form-control form-control-sm @error('no_anggota') is-invalid @enderror"
                                                    name="no_anggota" type="text" id="no_anggota" readonly
                                                    value="{{ old('no_anggota', $pene->order->anggota->no_anggota) }}">
                                                @error('no_anggota')
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
                                            <label class="col-sm-3 col-form-label" for="trm_dr">Terima
                                                dari</label>
                                            <div class="col-sm-7 p-l-0">
                                                <input type="text"
                                                    class="form-control form-control-sm @error('trm_dr') is-invalid @enderror"
                                                    id="trm_dr" name="trm_dr"
                                                    value="{{ old('trm_dr', $pene->order->anggota->user->name) }}"
                                                    readonly />
                                            </div>

                                        </div>
                                        <!-- **************************************************************************************************8******  -->
                                        <div class="row mb-1">
                                            <label class="col-sm-3 col-form-label" for="angsuran_ke">Angsuran Ke -</label>
                                            <div class="col-sm-2 p-l-0">
                                                <input type="number"
                                                    class="form-control form-control-sm @error('angsuran_ke') is-invalid @enderror"
                                                    id="angsuran_ke" name="angsuran_ke"
                                                    value="{{ old('angsuran_ke', $pene->angsuran_ke) }}"
                                                    max="{{ $pene->order->pinjam->periode }}" min="1" readonly />
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text"
                                                    class="form-control form-control-sm @error('periode') is-invalid @enderror"
                                                    id="periode" name="periode"
                                                    value="dari {{ $pene->order->pinjam->periode }}" disabled />
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

                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-3 col-form-label" for="created_at">Tgl
                                                    Terima</label>
                                                <div class="col-sm-4 p-l-0">
                                                    <input type="text" class="form-control form-control-sm" id="created_at"
                                                        name="created_at"
                                                        value="{{ $pene->updated_at->format('d M Y') }}" disabled />
                                                </div>
                                                <div class="col-sm-3 p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" value="Cash-In" disabled />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-3 col-form-label" for="nama">Currency</label>
                                                <div class="col-sm-2 p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" value="IDR" disabled />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->

                                            <div class="row mb-1">
                                                <label class="col-sm-3 col-form-label" for="nominal">Nominal</label>
                                                <div class="col-sm-6 p-l-0">
                                                    <input type="hidden"
                                                        class="form-control form-control-sm @error('nominal') is-invalid @enderror"
                                                        name="nominal" id="nominal" value="@currency($pene->order->pinjam->angsuran)">
                                                    <input
                                                        class="form-control form-control-sm @error('nominal') is-invalid @enderror"
                                                        name="nominal" type="text" id="nominal" value="@currency($pene->order->pinjam->angsuran)"
                                                        disabled>
                                                    @error('nominal')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-3 col-form-label" for="cr_bayar">Cara
                                                    Bayar</label>
                                                <div class="col-sm-4 p-l-0">
                                                    <select class="form-select @error('cr_bayar') is-invalid @enderror"
                                                        name="cr_bayar" id="cr_bayar" disabled>
                                                        <option value="Tunai"
                                                            {{ old('cr_bayar', $pene->cr_bayar) == 'Tunai' ? 'selected' : '' }}>
                                                            Tunai
                                                        </option>
                                                        <option value="Transfer"
                                                            {{ old('cr_bayar', $pene->cr_bayar) == 'Transfer' ? 'selected' : '' }}>
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
                                                <label class="col-sm-3 col-form-label" for="kd_bank">Kode
                                                    Bank</label>
                                                <div class="col-sm-3 p-l-0">
                                                    <input type="number"
                                                        class="form-control form-control-sm @error('kd_bank') is-invalid @enderror"
                                                        id="kd_bank" name="kd_bank"
                                                        value="{{ old('kd_bank', $pene->kd_bank) }}" readonly />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-3 col-form-label" for="no_rek">No.
                                                    Rek</label>
                                                <div class="col-sm-7 p-l-0">
                                                    <input type="number"
                                                        class="form-control form-control-sm @error('no_rek') is-invalid @enderror"
                                                        id="no_rek" name="no_rek"
                                                        value="{{ old('no_rek', $pene->no_rek) }}" readonly />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ************************************************************************************************* -->
            </div>
            </form>
            <div class="card-footer text-end f-12">
                <div>
                    <a href="/dashboard/penerimaan-uang/{{ $pene->id }}/cetak" class="btn btn-primary">Cetak</a>
                </div>
            </div>

        </div>
    </div>
@endsection
