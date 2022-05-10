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
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="table-responsive card-body pt-3 f-12">
                            <a href="/dashboard/anggotas/create" class="btn btn-primary mb-2">Tambah anggota</a>
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <table class="table table-bordered table-xxs text-center table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col">No</th> --}}
                                        <th scope="col">No Anggota</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">TTL</th>
                                        <th scope="col">Telepon</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anggotas as $a)
                                        <tr>
                                            {{-- <th>{{ $loop->iteration }}</th> --}}
                                            <td>{{ $a->id }}</td>
                                            <td>{{ $a->user->name }}</td>
                                            <td>{{ $a->tempat_lahir }}, {{ $a->tanggal_lahir }}</td>
                                            <td>{{ $a->telepon_seluler }}</td>
                                            <td>

                                                <div class="d-inline">
                                                    <a href="/dashboard/anggotas/{{ $a->id }}"
                                                        class="badge bg-success">
                                                        <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="d-inline">
                                                    <a href="/dashboard/anggotas/{{ $a->id }}"
                                                        class="badge bg-primary"><i class="fa fa-pencil fa-2x"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                                <form action="/dashboard/anggotas/{{ $a->id }}" method="POST"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge bg-danger border-0"
                                                        onclick="return confirm('Are you sure !!')"><i
                                                            class="fa fa-trash-o fa-1" aria-hidden="true"></i></button>
                                                </form>
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
