@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Orders</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Orders</li>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
                    </div>
                </div>
            </div>
        </div>

        <div class="card">

            <form method="POST" action="/dashboard/orders/{{ $order->id }}" class="form theme-form"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf


                <div class="col-sm-12 col-xl-6 xl-100">

                    <div class="card-body f-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <a href="/dashboard/orders" class="btn btn-pill btn-outline-primary btn-xs mb-3"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="contact-tab" data-bs-toggle="tab"
                                    href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Order</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="profile-tabs" data-bs-toggle="tab"
                                    href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i
                                        class="fa fa-file-text-o" aria-hidden="true"></i>Struktur Kredit
                                    by Angsuran</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade active show" id="contact" role="tabpanel"
                                aria-labelledby="contact-tab">
                                {{-- 0000000000000000000000000000000000000000000000000000000000000000000000 --}}
                                <div class="f-12 pb-0 mt-3">

                                    <div class="text-center">
                                        <ul class="nav nav-pills nav-tabs nav-primary justify-content-center nav-fill"
                                            id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-datapelanggan-tab"
                                                    data-bs-toggle="pill" href="#pills-datapelanggan" role="tab"
                                                    aria-controls="pills-datapelanggan" aria-selected="true">
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
                                            <li class="nav-item"><a class="nav-link"
                                                    id="pills-rekaptransaksi-tab" data-bs-toggle="pill"
                                                    href="#pills-rekaptransaksi" role="tab"
                                                    aria-controls="pills-rekaptransaksi" aria-selected="false">Rekap
                                                    Transaksi</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" id="pills-datatambahan-tab"
                                                    data-bs-toggle="pill" href="#pills-datatambahan" role="tab"
                                                    aria-controls="pills-datatambahan" aria-selected="false">Data
                                                    Tambahan</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" id="pills-las-tab"
                                                    data-bs-toggle="pill" href="#pills-las" role="tab"
                                                    aria-controls="pills-las" aria-selected="false">LAS</a>
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
                                                @include('dashboard.fo.orders.editorder.datapelanggan-VFO')
                                            </p>
                                            <!-- Endisi -->
                                        </div>
                                        <!-- *******************Data Order*******************-->
                                        <div class="tab-pane fade" id="pills-dataorder" role="tabpanel"
                                            aria-labelledby="pills-dataorder-tab">
                                            <!-- isi -->
                                            <p>
                                                @include('dashboard.fo.orders.editorder.dataorder-VFO')
                                            </p>
                                            <!-- Endisi -->
                                        </div>
                                        <!-- *******************Kondisi Unit*******************-->
                                        <div class="tab-pane fade" id="pills-kondisiunit" role="tabpanel"
                                            aria-labelledby="pills-kondisiunit-tab">
                                            <!-- isi -->
                                            <p>
                                                @include('dashboard.fo.orders.editorder.kondisiunit-VFO')
                                            </p>
                                            <!-- Endisi -->
                                        </div>
                                        <!-- *******************Rekap Transaksi*******************-->
                                        <div class="tab-pane fade" id="pills-rekaptransaksi" role="tabpanel"
                                            aria-labelledby="pills-rekaptransaksi-tab">
                                            <!-- isi -->
                                            <p>
                                                @include('dashboard.fo.orders.editorder.rekaptransaksi-VFO')
                                            </p>
                                            <!-- Endisi -->
                                        </div>
                                        <!-- *******************Data Tambahan*******************-->
                                        <div class="tab-pane fade" id="pills-datatambahan" role="tabpanel"
                                            aria-labelledby="pills-datatambahan-tab">
                                            <!-- isi -->
                                            <p>
                                                @include('dashboard.fo.orders.editorder.datatambahan-VFO')
                                            </p>
                                            <!-- Endisi -->
                                        </div>

                                        <!-- *******************LAS*******************-->
                                        <div class="tab-pane fade" id="pills-las" role="tabpanel"
                                            aria-labelledby="pills-las-tab">
                                            <!-- isi -->
                                            <p>
                                                @include('dashboard.fo.orders.editorder.las-VFO')
                                            </p>
                                            <!-- Endisi -->
                                        </div>
                                        <!-- *************************************************************************-->
                                    </div>
                                </div>
                                {{-- 00000000000000000000000000000000 End 00000000000000000000000000000000 --}}
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                @include('dashboard.fo.orders.strukturkredit.edit-struktur-kredit')
                            </div>
                        </div>


                        {{-- cardFooter --}}
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            {{-- <input class="btn btn-light" type="reset" value="Cancel" /> --}}
                        </div>
                        {{-- endCardFooter --}}
                    </div>


            </form>
        </div>

    </div>
@endsection
