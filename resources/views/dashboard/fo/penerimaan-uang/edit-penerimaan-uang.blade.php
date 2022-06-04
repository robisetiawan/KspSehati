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

            <form class="form theme-form">
                <div class="card-body f-12">
                    <div class="row">
                        <div class="col">


                            <div class="row">
                                <div class="col-sm-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-sm-12 p-r-0">
                                            <div class="card border-0">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <form class="theme-form">
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
                                                            <label class="col-sm-2 col-form-label" for="nama">Status</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Anggota</option>
                                                                    <option>02 - Pinjaman Jaminan Mobil</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Terima
                                                                dari</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="cr_byr">Cara
                                                                Bayar</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Tunai</option>
                                                                    <option>Transafer</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Kode
                                                                Bank</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">No.
                                                                Rek</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                    </form>
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
                                            <div class="card border-0">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <form class="theme-form">

                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="created_at">Tgl
                                                                Terima</label>
                                                            <div class="col p-l-0">
                                                                <input type="date" class="form-control form-control-sm"
                                                                    id="created_at" name="created_at"
                                                                    value="{{ $pene->created_at }}" />
                                                            </div>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" value="Cash-In" disabled />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Currency</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" value="IDR" disabled />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nominal">Nominal</label>
                                                            <div class="col-sm-6 p-l-0">
                                                                <input
                                                                    class="form-control form-control-sm @error('nominal') is-invalid @enderror"
                                                                    name="nominal" type="text" id="nominal"
                                                                    value="{{ old('nominal', $pene->nominal) }}">
                                                                @error('nominal')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->


                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


            </form>
            <div class="card-footer text-end f-12">
                <div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <input class="btn btn-light" type="reset" value="Cancel" />
                </div>
            </div>
        </div>
    </div>
@endsection
