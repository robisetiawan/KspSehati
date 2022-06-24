@extends('dashboard.layouts.template')

@section('content')
    <!-- content -->
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col">
                        <h3>Laporan Data Karyawan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Laporan Data Karyawan</li>
                            <li class="breadcrumb-item">Detail Karyawan</li>
                            <li class="breadcrumb-item">Anggota</li>
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
                        <div class="card-header pb-0">
                            <div class="card-body py-0">
                                <h3>Anggota dari {{ $emp->nama }}</h3>
                            </div>
                        </div>
                        <div class="card-body pt-0">

                            <div class="table-responsive card-body f-12">
                                <div class="btn-group">
                                    <a href="/dashboard/lap-dt-employee">
                                        <button class="btn btn-pill btn-outline-primary btn-xs mb-3"><i
                                                class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                                    </a>
                                </div>
                                <table class="table table-bordered table-xxs text-center table-striped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No Anggota</th>
                                            <th scope="col">Tanggal Gabung</th>
                                            <th scope="col">Nama Anggota</th>
                                            <th scope="col">Simpanan</th>
                                            <th scope="col">Pinjaman</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($anggota as $order)
                                            <tr>
                                                <td>{{ $order->anggota->no_anggota }}</td>
                                                <td>{{ $order->anggota->created_at->format('d M Y') }}</td>
                                                <td>{{ $order->anggota->user->name }}</td>
                                                <td>@currency($order->anggota->simpwj + $order->simpkok)</td>
                                                <td>@currency($order->anggota->nilai_pinj)</td>
                                                <td>
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic mixed styles example">
                                                        <a
                                                            href="/dashboard/lap-dt-employee/detail_ag/{{ $emp->id }}/{{ $order->anggota->id }}">
                                                            <button class="badge bg-success border-0"><i
                                                                    class="fa fa-eye fa-lg" aria-hidden="true"></i></button>
                                                        </a>
                                                    </div>
                                                    {{-- <button type="button" class="btn btn-pill btn-primary btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#detailAnggota">
                                                    Detail
                                                </button> --}}
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-warning" role="alert">
                                                <strong>CMO belum membawa anggota !!!</strong>
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    {{-- end_dataTables --}}
@endpush
