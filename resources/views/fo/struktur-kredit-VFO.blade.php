@extends('fo.layout.template-VFO')

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
            </div>
        </div>


        <div class="card">
            <div class="card-header pb-0">
                <h5>Struktur Kredit by Angsuran</h5>
            </div>

            <form class="form theme-form">
                <div class="card-body pt-3 f-12">
                    <div class="row">
                        <div class="col">

                            <div class="row">
                                <div class="col-sm-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-sm-12 p-r-0">
                                            <div class="card border-0 mb-0">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <form class="theme-form">
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">No.
                                                                Order</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- *************** -->
                            <!-- *************** -->

                            <div class="row">
                                <div class="col-sm-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-sm-12 p-r-0">
                                            <div class="card border-0">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <form class="theme-form">
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">Nilai
                                                                Pinjaman</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">Pokok
                                                                Pengembalian</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>

                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">Tipe
                                                                Angsuran </label>
                                                            <div class="col-sm-8 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Tetap</option>
                                                                    <option>musiman</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">Advance /
                                                                Arrear</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <select class="form-select form-select-sm f-12">
                                                                    <option>Arrear</option>
                                                                    <option>Advance</option>
                                                                </select>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label" for="nama">SK
                                                                Rate</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Arrear</option>
                                                                    <option>Advance</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">Jml
                                                                Angs</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">Periode
                                                            </label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <div class="col-sm-3 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Bulan</option>
                                                                    <option>Tahun</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">Angsuran
                                                            </label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <label class="col-sm-2 col-form-label" for="nama">Kategori
                                                            </label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option></option>
                                                                    <option></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">Admin
                                                                Total</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">Jml
                                                                Angs</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Provisi (%)</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                % Asuransi (%)</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Biaya Transfer</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Bunga Margin Eff (%)</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Bunga Margin Flat (%)</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
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

                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Harga Acuan Pinjaman</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Bunga Margin</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Pokok + Margin</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Angsuran Terakhir</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Bng / Margin Eff Actual (%)</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Bng / Margin Flat Actual (%)</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Asuransi</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Provisi</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Cad Promo</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Simpanan Pokok</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Admin</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- *************** -->
                                                        <!-- *************** -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-4 col-form-label" for="nama">
                                                                Nilai yang diterima</label>
                                                            <div class="col-sm-5 p-l-0">
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
