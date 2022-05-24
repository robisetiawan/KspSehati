@extends('fo.layout.template-VFO')

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
                            <table class="table table-bordered table-xxs text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No Anggota</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">TTL</th>
                                        <th scope="col">Telepon</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($anggotas as $a)
                                    <tbody>
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $a->id }}</td>
                                            <td>{{ $a->nama }}</td>
                                            <td>{{ $a->tempat_lahir }}, {{ $a->tanggal_lahir }}</td>
                                            <td>{{ $a->telepon_seluler }}</td>
                                            <td>
                                                <button type="button" class="badge bg-success bg-sm border-0"
                                                    data-bs-toggle="modal" data-bs-target="#editOrder">
                                                    <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="badge bg-primary bg-sm border-0"
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
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
