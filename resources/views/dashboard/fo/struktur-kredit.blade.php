@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Struktur Kredit By Angsuran</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Struktur Kredit By Angsuran</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    {{-- Card --}}
                    <form class="form theme-form">
                        <div class="card mb-1">

                            {{-- cardBody --}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <!-- ****************************************************************************************** -->
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <form action="/dashboard/pooling-order/cari" method="GET">

                                                    <div class="input-group mb-3">
                                                        <label class="col-sm-4 col-form-label visually-hidden" for="id">No
                                                            Order</label>
                                                        <input class="form-control" type="text" name="cari"
                                                            placeholder="Nomor Order ..." value="{{ old('cari') }}">
                                                        <button class="btn btn-primary" type="submit" value="CARI"><i
                                                                class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="col">
                                                <label for="nama"
                                                    class="col-sm-2 col-form-label visually-hidden">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    placeholder="Nama" aria-label="Nama">

                                            </div>
                                        </div>


                                        <!-- ****************************************************************************************** -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body f-12">
                                <div class="row">
                                    {{-- Left Coloum --}}
                                    <div class="col">
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label for="nilai_pinj" class="col-sm-5 col-form-label">Nilai Pinjaman</label>
                                            <div class="col p-l-0">
                                                <input type="number" class="form-control form-control-sm" id="nilai_pinj">
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label for="pk_kembali" class="col-sm-5 col-form-label">Pokok
                                                Pengembalian</label>
                                            <div class="col p-l-0">
                                                <input type="number" class="form-control form-control-sm" id="pk_kembali">
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label for="tp_angs" class="col-sm-5 col-form-label">Tipe Angsuran</label>
                                            <div class="col p-l-0">
                                                <select class="form-select form-select-sm">
                                                    <option>Tetap</option>
                                                    <option>musiman</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label for="tp_angs" class="col-sm-5 col-form-label">Advance /
                                                Arrear</label>
                                            <div class="col p-l-0">
                                                <select class="form-select form-select-sm">
                                                    <option>Arrear</option>
                                                    <option>Advance</option>
                                                </select>
                                            </div>
                                            <label for="tp_angs" class="col-sm-2 col-form-label">SK
                                                Rate</label>
                                            <div class="col p-l-0">
                                                <select class="form-select form-select-sm">
                                                    <option>Arrear</option>
                                                    <option>Advance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="nama">Jml
                                                Angs</label>
                                            <div class="col p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="nama">Periode
                                            </label>
                                            <div class="col-sm-2 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                            <div class="col p-l-0">
                                                <select class="form-select form-select-sm">
                                                    <option>Bulan</option>
                                                    <option>Tahun</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="nama">Angsuran / Kategori
                                            </label>
                                            <div class="col-sm-3 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                            <label class="col col-form-label visually-hidden" for="nama">Kategori
                                            </label>
                                            <div class="col p-l-0">
                                                <select class="form-select form-select-sm">
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="nama">Admin
                                                Total</label>
                                            <div class="col-sm-3 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="nama">Jml
                                                Angs</label>
                                            <div class="col-sm-3 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="nama">
                                                Provisi (%)</label>
                                            <div class="col-sm-3 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="nama">
                                                % Asuransi (%)</label>
                                            <div class="col-sm-3 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="nama">
                                                Biaya Transfer</label>
                                            <div class="col-sm-3 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="nama">
                                                Bunga Margin Eff (%)</label>
                                            <div class="col-sm-3 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="nama">
                                                Bunga Margin Flat (%)</label>
                                            <div class="col-sm-3 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->

                                    </div>

                                    <div class="col">
                                        {{-- Right Coloum --}}
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Harga Acuan Pinjaman</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Bunga Margin</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Pokok + Margin</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Angsuran Terakhir</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Bng / Margin Eff Actual (%)</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Bng / Margin Flat Actual (%)</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Asuransi</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Provisi</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Cad Promo</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Simpanan Pokok</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Admin</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
                                        <!-- ****************************************************************************************** -->
                                        <div class="row mb-1">
                                            <label class="col-sm-6 col-form-label" for="nama">
                                                Nilai yang diterima</label>
                                            <div class="col-sm-6 p-l-0">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" />
                                            </div>
                                        </div>
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
                    {{-- endCard --}}
                </div>
            </div>
        </div>

    </div>

    <!-- ********************************************************************************************************  -->
@endsection
