@extends('anggota.layout.template-VAg')

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
            </div>
        </div>

        <div class="card">
            <div class="card-header pb-0">
                <h5>Cetak Buku Anggota</h5>
            </div>
            <form class="form theme-form">
                <div class="card-body pt-3 f-12">
                    <div class="row">
                        <div class="col">
                            <!-- *************** -->
                            <!-- *************** -->

                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">No Anggota</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">No KTP</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">RT</label>
                                <div class="col-sm-2">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>
                                <label class="col-sm-1 col-form-label">RW</label>
                                <div class="col-sm-2">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Kelurahan</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Kab / Kota</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>
                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Simpanan Pokok</label>
                                <div class="col-sm-3">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
                                </div>


                            </div>
                            <!-- *************** -->
                            <!-- *************** -->
                            <div class="mb-1 row">
                                <label class="col-sm-2 col-form-label">Simpanan Wajib</label>
                                <div class="col-sm-3">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $title }}">
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
                    <button class="btn btn-primary" type="submit">Cetak</button>
                </div>
            </div>
        </div>
    </div>
@endsection
