@extends('dashboard.layouts.template')

@section('content')
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
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="table-responsive-sm card-body f-12">
                            {{-- <form method="POST" action="/dashboard/anggotas" class="form theme-form"
                                enctype="multipart/form-data">
                                @csrf

                                <input class="form-control form-control-sm @error('name') is-invalid @enderror" name="name"
                                    type="text" id="name" autofocus value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <button class="btn btn-primary mb-2" type="submit"><i class="fa fa-plus"
                                        aria-hidden="true"></i> Simpan</button>
                            </form> --}}

                            <a href="/dashboard/tambah" class="btn btn-primary mb-2"><i class="fa fa-plus"
                                    aria-hidden="true"></i> Tambah Simpanan</a>


                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            {{-- @if (session()->has('alert'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('alert') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif --}}
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
                                        <th class="text-center">Tanggal</th>
                                        <th class="text-center">No Anggota</th>
                                        <th class="text-center">Nama Anggota</th>
                                        <th class="text-center">Jumlah Simpanan</th>
                                        <th class="text-center">Nominal</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($simpanans as $s)
                                        <tr>
                                            {{-- <th>{{ $loop->iteration }}</th> --}}
                                            <td>{{ $s->created_at->format('d M Y') }}</td>
                                            <td>{{ $s->anggota->no_anggota }}</td>
                                            <td>{{ $s->anggota->user->name }}</td>
                                            <td>@currency($s->jmlh_simpwj) per {{ $s->created_at->format('d M') }}</td>
                                            <td>@currency($s->simp_wj)</td>
                                            <td>
                                                {{-- <a href="/dashboard/orders/{{ $s->id }}" class="badge bg-success"
                                                    data-bs-toggle="modal" data-bs-target="#editOrder">
                                                    <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                                                </a>
                                                <a href="/dashboard/orders/{{ $s->id }}" class="badge bg-primary"><i
                                                        class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                                                <a href="/dashboard/orders/{{ $s->id }}" class="badge bg-danger"><i
                                                        class="fa fa-trash-o fa-2x" aria-hidden="true"></i></span></a> --}}

                                                <div class="btn-group" role="group"
                                                    aria-label="Basic mixed styles example">
                                                    {{-- <a href="/dashboard/tambah-simpanan/{{ $s->id }}">
                                                        <button class="badge bg-success border-0"><i class="fa fa-eye fa-lg"
                                                                aria-hidden="true"></i></button>
                                                    </a> --}}

                                                    <a href="/dashboard/tambah-simpanan/{{ $s->id }}/edit">
                                                        <button class="badge bg-primary border-0"><i
                                                                class="fa fa-pencil fa-lg" aria-hidden="true"></i></button>
                                                    </a>

                                                    <form action="/dashboard/tambah-simpanan/{{ $s->id }}"
                                                        method="POST">
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
    <script src="/js/datatables.js"></script>
    {{-- end_dataTables --}}
@endpush
