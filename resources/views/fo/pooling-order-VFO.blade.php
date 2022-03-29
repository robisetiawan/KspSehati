@extends('fo.layout.template-VFO')

@section('content')
    <div class="page-body">
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
                                                            <label class="col-sm-3 col-form-label" for="nama">Buss
                                                                Unit</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Motor</option>
                                                                    <option>Mobil</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>01 - Pinjaman Jaminan Motor</option>
                                                                    <option>02 - Pinjaman Jaminan Mobil</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">No
                                                                Order</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Konsumen</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">TTL</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <div class="col-sm-4 p-l-0">
                                                                <input type="date" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->

                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Nama
                                                                Ibu</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Jenis
                                                                Kelamin</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Laki-Laki</option>
                                                                    <option>Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Status</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Kawin</option>
                                                                    <option>Belum Kawin </option>
                                                                </select>
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
                                                            <label class="col-sm-3 col-form-label" for="nama">Type
                                                                Identitas</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>KTP</option>
                                                                    <option>Kartu Keluarga</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">No
                                                                Identitas</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Telepon</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Pekerjaan</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>

                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Jaminan</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Referensi</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">No
                                                                Polisi</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">No
                                                                Mesin</label>
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
