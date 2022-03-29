@extends('fo.layout.template-VFO')

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Cetak Buku Anggota</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Cetak Buku Anggota</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="card">
            <div class="card-header pb-0 text-center">
                <h5>Buku Anggota</h5>
                <h6>Koperasi Sehati Makmur Abadi</h6>
            </div>
            <form class="form theme-form">
                <div class="card-body f-12">
                    <div class="row">
                        <div class="col">
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">No Anggota</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">No KTP</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-5">
                                    <input class="form-control digits" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-5">
                                    <input class="form-control m-input digits" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">RT</label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" />
                                </div>
                                <label class="col-sm-1 col-form-label">RW</label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Kelurahan</label>
                                <div class="col-sm-5">
                                    <input class="form-control m-input digits" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-5">
                                    <input class="form-control m-input digits" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Kab / Kota</label>
                                <div class="col-sm-5">
                                    <input class="form-control m-input digits" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Simpanan Pokok</label>
                                <div class="col-sm-3">
                                    <input class="form-control m-input digits" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Simpanan Wajib</label>
                                <div class="col-sm-3">
                                    <input class="form-control m-input digits" type="text" />
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->

                        </div>
                    </div>
                </div>
            </form>
            <div class="card-footer f-12">
                <div>
                    <a href="/print-buku-anggota">
                        <button class="btn btn-primary" type="submit">Cetak</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
