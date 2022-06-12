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
                                    @foreach ($anggotas as $a)
                                        <tr>
                                            <td>{{ $a->no_anggota }}</td>
                                            <td>{{ $a->created_at->format('d M Y') }}</td>
                                            <td>{{ $a->user->name }}</td>
                                            <td>Rp. 1000.000</td>
                                            <td>Rp. 500.000</td>
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    {{-- end_dataTables --}}
@endpush
