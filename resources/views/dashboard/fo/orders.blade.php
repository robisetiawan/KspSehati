@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Order</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Order</li>
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

                        <div class="table-responsive-sm card-body f-12">
                            <table class="table table-bordered table-xxs text-center table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col">No</th> --}}
                                        <th scope="col">No Order</th>
                                        <th scope="col">Tanggal Order</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">UB</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($orders as $o)
                                        <tr>
                                            {{-- <th>{{ $loop->iteration }}</th> --}}
                                            <td>{{ $o->no_order }}</td>
                                            <td>{{ $o->created_at->format('d M Y') }}</td>
                                            <td>{{ $o->anggota->user->name }}</td>
                                            <td>Motor</td>
                                            <td>
                                                <a href="/dashboard/orders/{{ $o->id }}" class="badge bg-success">
                                                    <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                                                </a>
                                                <a href="/dashboard/orders/{{ $o->id }}" class="badge bg-primary"><i
                                                        class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                                                <a href="/dashboard/orders/{{ $o->id }}" class="badge bg-danger"><i
                                                        class="fa fa-trash-o fa-2x" aria-hidden="true"></i></span></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <table class="table table-bordered table-xxs text-center mt-5">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No Order</th>
                                        <th scope="col">Tanggal Order</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">UB</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>82647284728</td>
                                        <td>12-03-2021</td>
                                        <td>AB</td>
                                        <td>Motor</td>
                                        <td>Jl.Asdsad</td>
                                        <td><button type="button" class="badge bg-primary bg-sm border-0"
                                                data-bs-toggle="modal" data-bs-target="#editOrder">
                                                <i class="fa fa-pencil fa-2x"></i>
                                            </button>
                                            <button type="button" class="badge bg-danger bg-sm border-0"
                                                data-bs-toggle="modal" data-bs-target="#editOrder">
                                                <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
                                            </button>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- Modal -->
                        @include('fo.edit-order-VFO')
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
