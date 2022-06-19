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

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>* {{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> --}}

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="contact-tab" data-bs-toggle="tab"
                                    href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Order</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="profile-tabs" data-bs-toggle="tab" href="#profile"
                                    role="tab" aria-controls="profile" aria-selected="false"><i
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

                                                <!-- ************************************************************************************************* -->
                                                <!-- ************************************************************************************************* -->
                                                {{-- foto Berkas --}}
                                            <div class="row my-1">
                                                <div class="col">Foto Berkas</div>
                                                <div class="col">
                                                    <input type="file" class="form-control form-control-sm"
                                                        name="berkas[]" multiple>
                                                </div>
                                                <div class="col py-1">
                                                    <button type="button" class="badge bg-success border-0"
                                                        data-bs-toggle="modal" data-bs-target="#berkas">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> Show
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="berkas" tabindex="-1"
                                                aria-labelledby="berkasLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="berkasLabel">Foto Berkas</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" class="text-center">No</th>
                                                                        <th scope="col" class="text-center">Foto</th>
                                                                        <th scope="col" class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse ($berkas as $b)
                                                                        <tr>
                                                                            <th class="text-center align-middle">
                                                                                {{ $loop->iteration }}</th>
                                                                            <td class="text-center align-middle">
                                                                                <img id="image"
                                                                                    src="/berkas_order/{{ $b->berkas }}"
                                                                                    onclick="window.open(this.src)"
                                                                                    class="card-img-top"
                                                                                    style="max-height: 100px; width:auto">
                                                                            </td>
                                                                            <td class="text-center align-middle">
                                                                                <a href="/download/berkas/{{ $b->berkas }}"
                                                                                    class="link-success"><i
                                                                                        class="fa fa-download fa-lg"
                                                                                        aria-hidden="true"> Download
                                                                                    </i></a> |
                                                                                <a href="/hapus_berkas/{{ $b->id }}"
                                                                                    class="link-danger"><i
                                                                                        class="fa fa-trash fa-lg"
                                                                                        aria-hidden="true"
                                                                                        onclick="return confirm('Are you sure !!')">
                                                                                        Hapus</i></a>
                                                                            </td>
                                                                        </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td colspan="3" class="text-center">Belum
                                                                                ada
                                                                                Foto</td>
                                                                        </tr>
                                                                    @endforelse
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end MOdal --}}
                                            {{-- end Foto Berkas --}}

                                            <!-- ************************************************************************************************* -->
                                            <!-- ************************************************************************************************* -->

                                            {{-- foto Fisik --}}
                                            <div class="row my-1">
                                                <div class="col">Foto Nasabah & Fisik Jaminan</div>
                                                <div class="col">
                                                    <input type="file" class="form-control form-control-sm"
                                                        name="fisik[]" multiple>
                                                </div>
                                                <div class="col py-1">
                                                    <button type="button" class="badge bg-success border-0"
                                                        data-bs-toggle="modal" data-bs-target="#fisik">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> Show
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="fisik" tabindex="-1"
                                                aria-labelledby="fisikLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="fisikLabel">Foto fisik</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">No</th>
                                                                        <th scope="col">Foto</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse ($fisiks as $f)
                                                                        <tr>
                                                                            <th class="text-center align-middle">
                                                                                {{ $loop->iteration }}</th>
                                                                            <td class="text-center align-middle">
                                                                                <img id="image"
                                                                                    src="/fisik_order/{{ $f->fisik_image }}"
                                                                                    onclick="window.open(this.src)"
                                                                                    class="card-img-top"
                                                                                    style="max-height: 100px; width:auto">
                                                                            </td>
                                                                            <td class="text-center align-middle">
                                                                                <a href="/download/fisik/{{ $f->fisik_image }}"
                                                                                    class="link-success"><i
                                                                                        class="fa fa-download fa-lg"
                                                                                        aria-hidden="true"> Download
                                                                                    </i></a> |
                                                                                <a href="/hapus_fisik/{{ $f->id }}"
                                                                                    class="link-danger"><i
                                                                                        class="fa fa-trash fa-lg"
                                                                                        aria-hidden="true"
                                                                                        onclick="return confirm('Are you sure !!')">
                                                                                        Hapus</i></a>
                                                                            </td>
                                                                        </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td colspan="3" class="text-center">Belum
                                                                                ada
                                                                                Foto</td>
                                                                        </tr>
                                                                    @endforelse
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end MOdal --}}
                                            {{-- end F_fisik --}}

                                            <!-- ************************************************************************************************* -->
                                            <!-- ************************************************************************************************* -->

                                            {{-- foto Surat2 --}}
                                            <div class="row my-1">
                                                <div class="col">Foto Surat</div>
                                                <div class="col">
                                                    <input type="file" class="form-control form-control-sm"
                                                        name="surat[]" multiple>
                                                </div>
                                                <div class="col py-1">
                                                    <button type="button" class="badge bg-success border-0"
                                                        data-bs-toggle="modal" data-bs-target="#surat">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> Show
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="surat" tabindex="-1"
                                                aria-labelledby="suratLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="suratLabel">Foto surat</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">No</th>
                                                                        <th scope="col">Foto</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse ($surats as $s)
                                                                        <tr>
                                                                            <th class="text-center align-middle">
                                                                                {{ $loop->iteration }}</th>
                                                                            <td class="text-center align-middle">
                                                                                <img id="image"
                                                                                    src="/surat_order/{{ $s->surat_image }}"
                                                                                    onclick="window.open(this.src)"
                                                                                    class="card-img-top"
                                                                                    style="max-height: 100px; width:auto">
                                                                            </td>
                                                                            <td class="text-center align-middle">
                                                                                <a href="/download/surat/{{ $s->surat_image }}"
                                                                                    class="link-success"><i
                                                                                        class="fa fa-download fa-lg"
                                                                                        aria-hidden="true"> Download
                                                                                    </i></a> |
                                                                                <a href="/hapus_surat/{{ $s->id }}"
                                                                                    class="link-danger"><i
                                                                                        class="fa fa-trash fa-lg"
                                                                                        aria-hidden="true"
                                                                                        onclick="return confirm('Are you sure !!')">
                                                                                        Hapus</i></a>
                                                                            </td>
                                                                        </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td colspan="3" class="text-center">Belum
                                                                                ada Foto</td>
                                                                        </tr>
                                                                    @endforelse
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end MOdal --}}
                                            {{-- end surat --}}


                                        </div>

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
