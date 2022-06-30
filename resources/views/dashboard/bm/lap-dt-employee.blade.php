@extends('dashboard.layouts.template')

@section('content')
    <!-- content -->
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Laporan Data Karyawan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Laporan Data Karyawan</li>
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


                            <div class="card-body">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            href="#pills-home" role="tab" aria-controls="pills-home"
                                            aria-selected="true">
                                            All
                                            <div class="media"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            href="#pills-profile" role="tab" aria-controls="pills-profile"
                                            aria-selected="false">Per Bulan</a></li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        {{-- =========================================================== --}}
                                        <p class="mb-0 m-t-30">
                                        <table class="table table-bordered table-xxs text-center table-striped"
                                            id="myTable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Rangking</th>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Anggota yg dibawa</th>
                                                    <th class="text-center">No Telepon</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <input type="hidden" value="{{ $no = 0 }}"> --}}
                                                @foreach ($emp as $no => $a)
                                                    <input type="hidden" value="{{ $no++ }}">
                                                    <tr>
                                                        <td class="align-items-center">
                                                            @if ($no == 1)
                                                                <i class="fa fa-trophy fa-fw fa-2x" aria-hidden="true"
                                                                    style="color:rgb(255, 174, 0);"></i>
                                                                {{ $no }}
                                                            @elseif($no == 2)
                                                                <i class="fa fa-trophy fa-fw fa-lg" aria-hidden="true"
                                                                    style="color:silver;"></i>
                                                                {{ $no }}
                                                            @elseif ($no == 3)
                                                                <i class="fa fa-trophy fa-fw" aria-hidden="true"
                                                                    style="color:brown;"></i>
                                                                {{ $no }}
                                                            @else
                                                                {{ $no }}
                                                            @endif
                                                        </td>
                                                        <td>{{ $a->nama }}</td>
                                                        <td><a
                                                                href="/dashboard/lap-dt-employee/bawa_ag/{{ $a->id }}">{{ $a->bawa_ag }}</a>
                                                        </td>
                                                        <td>{{ $a->no_tel }}</td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic mixed styles example">
                                                                <a href="/dashboard/lap-dt-employee/{{ $a->id }}">
                                                                    <button class="badge bg-success border-0"><i
                                                                            class="fa fa-eye fa-lg"
                                                                            aria-hidden="true"></i></button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        </p>
                                        {{-- =========================================================== --}}
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">

                                        {{-- =========================================================== --}}
                                        <p class="mb-0 m-t-30">
                                        <div class="row mt-3">
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="Start Date"
                                                        aria-label="Start Date" aria-describedby="basic-addon1"
                                                        id="min" name="min">

                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="End Date"
                                                        aria-label="End Date" aria-describedby="basic-addon1" id="max"
                                                        name="max">
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-bordered table-xxs text-center table-striped"
                                            id="myTable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Tgl Gbng</th>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Anggota yg dibawa</th>
                                                    <th class="text-center">No Telepon</th>
                                                    {{-- <th class="text-center">Action</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <input type="hidden" value="{{ $no = 0 }}"> --}}
                                                @foreach ($penc as $p)
                                                    <tr>
                                                        <td>{{ $p->created_at->format('d M Y') }}</td>
                                                        <td>{{ $p->employee->nama }}</td>
                                                        <td>{{ $p->employee->bawa_ag }}</td>
                                                        <td>{{ $p->employee->no_tel }}</td>
                                                        {{-- <td>
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic mixed styles example">
                                                                <a href="/dashboard/lap-dt-employee/{{ $a->id }}">
                                                                    <button class="badge bg-success border-0"><i
                                                                            class="fa fa-eye fa-lg"
                                                                            aria-hidden="true"></i></button>
                                                                </a>
                                                            </div>
                                                        </td> --}}
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        </p>
                                        {{-- =========================================================== --}}

                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- Modal -->
                        @include('bm.detail-ag-VBM')
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
