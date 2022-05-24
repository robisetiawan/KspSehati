<div class="modal fade" id="editOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="col-sm-12 col-xl-6 xl-100">
                    <div class="card">
                        <div class="card-body f-12 pb-0">

                            <div class="text-center">
                                <ul class="nav nav-pills nav-tabs nav-primary justify-content-center nav-fill"
                                    id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-datapelanggan-tab" data-bs-toggle="pill"
                                            href="#pills-datapelanggan" role="tab" aria-controls="pills-datapelanggan"
                                            aria-selected="true">
                                            Data Pelanggan
                                            <div class="media"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="pills-dataorder-tab"
                                            data-bs-toggle="pill" href="#pills-dataorder" role="tab"
                                            aria-controls="pills-dataorder" aria-selected="false">Data
                                            Order</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="pills-kondisiunit-tab"
                                            data-bs-toggle="pill" href="#pills-kondisiunit" role="tab"
                                            aria-controls="pills-kondisiunit" aria-selected="false">Kondisi
                                            Unit</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="pills-rekaptransaksi-tab"
                                            data-bs-toggle="pill" href="#pills-rekaptransaksi" role="tab"
                                            aria-controls="pills-rekaptransaksi" aria-selected="false">Rekap
                                            Transaksi</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="pills-datatambahan-tab"
                                            data-bs-toggle="pill" href="#pills-datatambahan" role="tab"
                                            aria-controls="pills-datatambahan" aria-selected="false">Data
                                            Tambahan</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="pills-las-tab"
                                            data-bs-toggle="pill" href="#pills-las" role="tab" aria-controls="pills-las"
                                            aria-selected="false">LAS</a>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="card-footer p-0"></div> --}}
                            <!-- ***************************************************************************************** -->
                            <div class="tab-content  f-12" id="pills-tabContent">
                                <!-- *******************Data Pelanggan*******************-->
                                <div class="tab-pane fade show active" id="pills-datapelanggan" role="tabpanel"
                                    aria-labelledby="pills-datapelanggan-tab">
                                    <!-- isi -->
                                    <p>
                                        @include('fo.editorder.datapelanggan-VFO')
                                    </p>
                                    <!-- Endisi -->
                                </div>
                                <!-- *******************Data Order*******************-->
                                <div class="tab-pane fade" id="pills-dataorder" role="tabpanel"
                                    aria-labelledby="pills-dataorder-tab">
                                    <!-- isi -->
                                    <p>
                                        @include('fo.editorder.dataorder-VFO')
                                    </p>
                                    <!-- Endisi -->
                                </div>
                                <!-- *******************Kondisi Unit*******************-->
                                <div class="tab-pane fade" id="pills-kondisiunit" role="tabpanel"
                                    aria-labelledby="pills-kondisiunit-tab">
                                    <!-- isi -->
                                    <p>
                                        @include('fo.editorder.kondisiunit-VFO')
                                    </p>
                                    <!-- Endisi -->
                                </div>
                                <!-- *******************Rekap Transaksi*******************-->
                                <div class="tab-pane fade" id="pills-rekaptransaksi" role="tabpanel"
                                    aria-labelledby="pills-rekaptransaksi-tab">
                                    <!-- isi -->
                                    <p>
                                        @include('fo.editorder.rekaptransaksi-VFO')
                                    </p>
                                    <!-- Endisi -->
                                </div>
                                <!-- *******************Data Tambahan*******************-->
                                <div class="tab-pane fade" id="pills-datatambahan" role="tabpanel"
                                    aria-labelledby="pills-datatambahan-tab">
                                    <!-- isi -->
                                    <p>
                                        @include('fo.editorder.datatambahan-VFO')
                                    </p>
                                    <!-- Endisi -->
                                </div>

                                <!-- *******************LAS*******************-->
                                <div class="tab-pane fade" id="pills-las" role="tabpanel"
                                    aria-labelledby="pills-las-tab">
                                    <!-- isi -->
                                    <p>
                                        @include('fo.editorder.las-VFO')
                                    </p>
                                    <!-- Endisi -->
                                </div>
                                <!-- *************************************************************************-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
