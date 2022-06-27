@extends('dashboard.layouts.template')

@section('content')
    <!-- content -->
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Laporan Data Anggota</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Laporan Data Anggota</li>
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

                        <div class="table-responsive card-body f-12">
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-o"
                                                aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Start Date"
                                            aria-label="Start Date" aria-describedby="basic-addon1" id="min"
                                            name="min">

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-o"
                                                aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="End Date"
                                            aria-label="End Date" aria-describedby="basic-addon1" id="max"
                                            name="max">
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered table-xxs text-center table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">Tanggal Gabung</th>
                                        <th class="text-center">No Anggota</th>
                                        <th class="text-center">Nama Anggota</th>
                                        <th class="text-center">No Telp</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anggotas as $a)
                                        <tr>
                                            <td>{{ $a->created_at->format('d M Y') }}</td>
                                            <td>{{ $a->no_anggota }}</td>
                                            <td>{{ $a->user->name }}</td>
                                            <td>{{ $a->telepon_seluler }}</td>
                                            <td>
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic mixed styles example">
                                                    <a href="/dashboard/lap-dt-ag/{{ $a->id }}">
                                                        <button class="badge bg-success border-0"><i class="fa fa-eye fa-lg"
                                                                aria-hidden="true"></i></button>
                                                    </a>
                                                </div>
                                                {{-- <button type="button" class="btn btn-pill btn-primary btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#detailAnggota">
                                                    Detail
                                                </button> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal -->
                        {{-- @include('bm.detail-ag-VBM') --}}
                        <!-- endModal -->


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    // {{-- dataTables --}}
    <script src="/js/datatables.js"></script>
    {{-- end_dataTables --}}
@endpush
