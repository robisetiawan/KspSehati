@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Anggota</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Anggota</li>
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
                            <a href="/dashboard/anggotas/create" class="btn btn-primary mb-2"><i class="fa fa-plus"
                                    aria-hidden="true"></i> Tambah anggota</a>

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
                                        {{-- <th scope="col">No</th> --}}
                                        <th class="text-center">Tgl Gabung</th>
                                        <th class="text-center">No Anggota</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">TTL</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anggotas as $a)
                                        <tr>
                                            {{-- Nonaktif --}}
                                            @if ($a->status === 'Nonaktif')
                                                <td class="align-middle" style="background-color: #f8d7da;">
                                                    {{ $a->created_at->format('d M Y') }}
                                                </td>
                                                <td class="align-middle" style="background-color: #f8d7da;">
                                                    {{ $a->no_anggota }}</td>
                                                <td class="align-middle" style="background-color: #f8d7da;">
                                                    {{ $a->nama_panggilan }}</td>
                                                <td class="align-middle" style="background-color: #f8d7da;">
                                                    {{ $a->tempat_lahir }},
                                                    {{ $a->tanggal_lahir }}
                                                </td>
                                                @if ($a->status === 'Nonaktif')
                                                    <td class="align-middle" style="background-color: #f8d7da;">
                                                        <span
                                                            class="badge rounded-pill bg-danger ">{{ $a->status }}</span>
                                                    </td>
                                                @elseif ($a->status === 'Aktif')
                                                    <td class="align-middle" style="background-color: #f8d7da;">
                                                        <span
                                                            class="badge rounded-pill bg-success ">{{ $a->status }}</span>
                                                    </td>
                                                @else
                                                @endif
                                                <td class="align-middle" style="background-color: #f8d7da;">
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic mixed styles example">
                                                        <a href="/dashboard/anggotas/{{ $a->id }}">
                                                            <button class="badge bg-success border-0"><i
                                                                    class="fa fa-eye fa-lg" aria-hidden="true"></i></button>
                                                        </a>

                                                        <a href="/dashboard/anggotas/{{ $a->id }}/edit">
                                                            <button class="badge bg-primary border-0"><i
                                                                    class="fa fa-pencil fa-lg"
                                                                    aria-hidden="true"></i></button>
                                                        </a>

                                                        <form action="/dashboard/anggotas/{{ $a->id }}"
                                                            method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="badge bg-danger border-0"
                                                                onclick="return confirm('Are you sure !!')"><i
                                                                    class="fa fa-times fa-lg"
                                                                    aria-hidden="true"></i></button>
                                                        </form>
                                                    </div>
                                                </td>

                                                {{-- Aktif --}}
                                            @elseif ($a->status === 'Aktif')
                                                <td class="align-middle">{{ $a->created_at->format('d M Y') }}</td>
                                                <td class="align-middle">{{ $a->no_anggota }}</td>
                                                <td class="align-middle">{{ $a->nama_panggilan }}</td>
                                                <td class="align-middle">{{ $a->tempat_lahir }},
                                                    {{ $a->tanggal_lahir }}</td>
                                                @if ($a->status === 'Nonaktif')
                                                    <td class="align-middle">
                                                        <span
                                                            class="badge rounded-pill bg-danger ">{{ $a->status }}</span>
                                                    </td>
                                                @elseif ($a->status === 'Aktif')
                                                    <td class="align-middle">
                                                        <span
                                                            class="badge rounded-pill bg-success ">{{ $a->status }}</span>
                                                    </td>
                                                @else
                                                @endif
                                                <td class="align-middle">
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic mixed styles example">
                                                        <a href="/dashboard/anggotas/{{ $a->id }}">
                                                            <button class="badge bg-success border-0"><i
                                                                    class="fa fa-eye fa-lg"
                                                                    aria-hidden="true"></i></button>
                                                        </a>

                                                        <a href="/dashboard/anggotas/{{ $a->id }}/edit">
                                                            <button class="badge bg-primary border-0"><i
                                                                    class="fa fa-pencil fa-lg"
                                                                    aria-hidden="true"></i></button>
                                                        </a>

                                                        <form action="/dashboard/anggotas/{{ $a->id }}"
                                                            method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="badge bg-danger border-0"
                                                                onclick="return confirm('Are you sure !!')"><i
                                                                    class="fa fa-times fa-lg"
                                                                    aria-hidden="true"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            @else
                                            @endif



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
    {{-- <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                order: true
            });
        });
    </script> --}}
    <script src="/js/datatables.js"></script>
    {{-- end_dataTables --}}
@endpush
