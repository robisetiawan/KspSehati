@extends('dashboard.layouts.template')

@section('content')
    <!-- content -->
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Simpanan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Simpanan</li>
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
                        {{-- <div class="card-header pb-0">
                            <h5>Simpanan</h5>
                        </div> --}}

                        <div class="card-body pt-3 pb-1 f-12">
                            <div class="row">
                                <div class="col">

                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                    <div class="mb-1 row">
                                        <label class="col-sm-2 col-form-label">Jumlah Simpanan</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": Rp. {{ $title }}">
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

                                        <th scope="row">Tanggal</th>
                                        <th scope="row">Jumlah Simpanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>12-12-2022</td>
                                        <td>Rp. 230.000</td>

                                    </tr>
                                    <tr>
                                        <td>12-03-2022</td>
                                        <td>Rp. 230.000</td>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- EndContent -->
@endsection
@push('scripts')
    // {{-- dataTables --}}
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    {{-- end_dataTables --}}
@endpush
