@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Karyawan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Karyawan</li>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="table-responsive card-body py-3 f-12">
                            <a href="/dashboard/employee/create" class="btn btn-primary mb-2"><i class="fa fa-plus"
                                    aria-hidden="true"></i> Tambah karyawan</a>

                            {{-- <a href="/export-data-anggota" class="btn btn-success mb-2"><i class="fa fa-file-excel-o"
                                    aria-hidden="true"></i> Excel</a> --}}
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            {{-- <livewire:anggota-table> --}}
                            <table class="table table-bordered table-xxs text-center table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col">No</th> --}}
                                        <th scope="col">No Karyawan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">TTL</th>
                                        <th scope="col">Telepon</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $e)
                                        <tr>
                                            {{-- <th>{{ $loop->iteration }}</th> --}}
                                            <td>{{ $e->no_employee }}</td>
                                            <td>{{ $e->nama }}</td>
                                            <td>{{ $e->tmpt_lhr }}, {{ $e->tgl_lhr }}</td>
                                            <td>{{ $e->no_tel }}</td>
                                            <td>
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic mixed styles example">
                                                    <a href="/dashboard/employee/{{ $e->id }}">
                                                        <button class="badge bg-success border-0"><i class="fa fa-eye fa-lg"
                                                                aria-hidden="true"></i></button>
                                                    </a>

                                                    <a href="/dashboard/employee/{{ $e->id }}/edit">
                                                        <button class="badge bg-primary border-0"><i
                                                                class="fa fa-pencil fa-lg" aria-hidden="true"></i></button>
                                                    </a>

                                                    <form action="/dashboard/employee/{{ $e->id }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0"
                                                            onclick="return confirm('Are you sure !!')"><i
                                                                class="fa fa-times fa-lg" aria-hidden="true"></i></button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
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
@endpush