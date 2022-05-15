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
                                                            <label class="col-sm-3 col-form-label" for="nama">No
                                                                Terima</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" readonly />
                                                            </div>
                                                            <label class="col-sm-2 col-form-label" for="nama">Tipe
                                                                Trx</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Angsuran-CF</option>
                                                                    <option>02 - Pinjaman Jaminan Mobil</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">No
                                                                Anggota</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" autofocus />
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
                                                            <label class="col-sm-3 col-form-label" for="nama">Cara
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
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">BBranch</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
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
                                                            <label class="col-sm-3 col-form-label" for="nama">Tgl
                                                                Terima</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">No
                                                                Dokumen</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">No.
                                                                invoice</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Currency</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <label class="col-sm-3 col-form-label" for="nama">Rate</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>

                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Tipe
                                                                Ast</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <label class="col-sm-3 col-form-label" for="nama">Coa</label>
                                                            <div class="col-sm-3 p-l-0">
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
