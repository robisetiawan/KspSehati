@extends('dashboard.layouts.template')

@section('content')
    <!-- content -->
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Laporan Keuangan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Laporan Keuangan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <!-- ***************************-->
                        <!-- ********* Cash Out ********-->
                        <!-- ***************************-->

                        <div class="card-header pb-0">
                            <h5>Cash Out</h5>
                        </div>

                        <div class="card-body pt-3 pb-1 f-12">
                            <div class="row">
                                <div class="col">
                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                    <div class="mb-1 row">
                                        <label class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": {{ $title }}">
                                        </div>
                                        <label class="col-sm-2 col-form-label">Periode Pinjaman</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": {{ $title }}">
                                        </div>
                                    </div>
                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive card-body pt-3 pb-1 f-12">
                            <table class="table table-bordered table-xxs text-center table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="row">No</th>
                                        <th scope="row">Tanggal</th>
                                        <th scope="row">No Anggota</th>
                                        <th scope="row">Nama</th>
                                        <th scope="row">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>12-12-2022</td>
                                        <td>122314211</td>
                                        <td>Anton</td>
                                        <td>Rp. 2.000.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>12-03-2022</td>
                                        <td>81261867381</td>
                                        <td>Sudin</td>
                                        <td>Rp. 2.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <!-- ***************************-->
                        <!-- ********* Cash In *********-->
                        <!-- ***************************-->

                        <div class="card-header pb-0">
                            <h5>Cash In</h5>
                        </div>

                        <div class="card-body pt-3 pb-1 f-12">
                            <div class="row">
                                <div class="col">
                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                    <div class="mb-1 row">
                                        <label class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": {{ $title }}">
                                        </div>
                                        <label class="col-sm-2 col-form-label">Periode Pinjaman</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": {{ $title }}">
                                        </div>
                                    </div>
                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive card-body pt-3 pb-1 f-12">
                            <table class="table table-bordered table-xxs text-center table-striped" id="myTable2">
                                <thead>
                                    <tr>
                                        <th scope="row">No</th>
                                        <th scope="row">Tanggal</th>
                                        <th scope="row">No Anggota</th>
                                        <th scope="row">Nama</th>
                                        <th scope="row">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>12-12-2022</td>
                                        <td>122314211</td>
                                        <td>Anton</td>
                                        <td>Rp. 2.000.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>12-03-2022</td>
                                        <td>81261867381</td>
                                        <td>Sudin</td>
                                        <td>Rp. 2.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
    // {{-- dataTables --}}
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    {{-- end_dataTables --}}
    // {{-- dataTables --}}
    <script>
        $(document).ready(function() {
            $('#myTable2').DataTable();
        });
    </script>
    {{-- end_dataTables --}}
@endpush
