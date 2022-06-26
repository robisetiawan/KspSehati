@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Bpkb Masuk</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Bpkb Masuk</li>
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
                            <a href="/dashboard/bpkbm/tambah" class="btn btn-primary mb-2"><i class="fa fa-plus"
                                    aria-hidden="true"></i> Tambah Data</a>

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
                                        {{-- <th scope="col">No Order</th> --}}
                                        <th scope="col">Tanggal Masuk</th>
                                        <th scope="col">Penyerah</th>
                                        <th scope="col">Diterima Oleh</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bpkbms as $b)
                                        <tr>
                                            <td class="align-middle">{{ $b->created_at->format('d M Y') }}</td>
                                            <td class="align-middle">{{ $b->penyerah }}</td>
                                            <td class="align-middle">{{ $b->dtrm_olh }}</td>

                                            @if ($b->status === 'Belum Diserahkan Ke Pemilik')
                                                <td class="align-middle">
                                                    <span class="badge rounded-pill bg-danger ">{{ $b->status }}</span>
                                                </td>
                                            @elseif ($b->status === 'Sudah Diserahkan Ke Pemilik')
                                                <td class="align-middle">
                                                    <span class="badge rounded-pill bg-success ">{{ $b->status }}</span>
                                                </td>
                                            @else
                                            @endif

                                            <td class="align-middle">
                                                <img id="image" src="{{ asset('storage/' . $b->foto) }}"
                                                    onclick="window.open(this.src)" class="card-img-top rounded"
                                                    style="max-height: 100px; width:auto">
                                            </td>
                                            <td class="align-middle">
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic mixed styles example">
                                                    <a href="/dashboard/bpkb-masuk/{{ $b->id }}">
                                                        <button class="badge bg-success border-0"><i class="fa fa-eye fa-lg"
                                                                aria-hidden="true"></i></button>
                                                    </a>

                                                    <a href="/dashboard/bpkb-masuk/{{ $b->id }}/edit">
                                                        <button class="badge bg-primary border-0"><i
                                                                class="fa fa-pencil fa-lg" aria-hidden="true"></i></button>
                                                    </a>

                                                    <form action="/dashboard/bpkb-masuk/{{ $b->id }}" method="POST">
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
            $('#myTable').DataTable({
                order: true
            });
        });
    </script>
    {{-- end_dataTables --}}
@endpush
