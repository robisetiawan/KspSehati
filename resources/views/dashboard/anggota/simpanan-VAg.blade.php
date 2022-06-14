@extends('dashboard.layouts.template')

@section('content')
    <!-- content -->
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
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        {{-- <div class="card-header pb-0">
                            <h5>Simpanan</h5>
                        </div> --}}

                        <div class="card-body pt-3 pb-1 f-12">
                            <div class="row">
                                <div class="col">

                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                    <div class="mb-1 row">
                                        <label class="col-sm-2 col-form-label">Simpanan Pokok</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": @currency($anggotas->simpkok)">
                                        </div>
                                    </div>
                                    <div class="mb-1 row">
                                        <label class="col-sm-2 col-form-label">Simpanan Wajib</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": @currency($anggotas->simpwj)">
                                        </div>
                                    </div>
                                    <!-- ***************************-->
                                    <!-- ***************************-->

                                </div>
                            </div>
                        </div>

                        <div class="table-responsive card-body pt-3 pb-1 f-12">
                            <table class="table table-bordered table-xxs text-center table-striped" id="myTable">
                                <thead>
                                    <tr>

                                        <th scope="row">Tanggal</th>
                                        <th scope="row">Jumlah Simpanan</th>
                                        <th scope="row">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($simpans as $s)
                                        <tr>
                                            <td>{{ $s->created_at->format('d M Y') }}</td>
                                            <td>@currency($s->simp_wj)</td>
                                            <td>
                                                <button type="button" class="badege bg-success border-0"
                                                    data-bs-toggle="modal" data-bs-target="#detail{{ $s->id }}"><i
                                                        class="fa fa-eye fa-lg" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="detail{{ $s->id }}" tabindex="-1"
                                                aria-labelledby="detailLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="detailLabel">Simpanan
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card mb-0">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 p-r-0">
                                                                            <div class="card border-0">
                                                                                <!-- **************************************************************************************************8******  -->
                                                                                <!-- **************************************************************************************************8******  -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-4 col-form-label"
                                                                                        for="no_anggota">No
                                                                                        Anggota</label>
                                                                                    <div class="col-sm-2 p-l-0">
                                                                                        <input type="hidden"
                                                                                            name="id_anggota"
                                                                                            value="{{ $s->anggota->id }}">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('no_anggota') is-invalid @enderror"
                                                                                            name="no_anggota" type="text"
                                                                                            id="no_anggota" readonly
                                                                                            value="{{ old('no_anggota', $s->anggota->no_anggota) }}">
                                                                                        @error('no_anggota')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- **************************************************************************************************8******  -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-4 col-form-label"
                                                                                        for="created_at">Tgl
                                                                                        Simpan</label>
                                                                                    <div class="col-sm-2 p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('created_at') is-invalid @enderror"
                                                                                            name="created_at" type="text"
                                                                                            id="created_at" readonly
                                                                                            value="{{ old('created_at', $s->created_at->format('d M Y')) }}">
                                                                                        @error('created_at')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- **************************************************************************************************8******  -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-4 col-form-label"
                                                                                        for="name">Nama</label>
                                                                                    <div class="col-sm-4 p-l-0">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm @error('name') is-invalid @enderror"
                                                                                            id="name" name="name" readonly
                                                                                            value="{{ old('name', $s->anggota->user->name) }}" />
                                                                                    </div>

                                                                                </div>
                                                                                <!-- **************************************************************************************************8******  -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-4 col-form-label"
                                                                                        for="simpwj">Jmlh Simpanan
                                                                                        Terbaru</label>
                                                                                    <div class="col-sm-2 p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('simpwj') is-invalid @enderror"
                                                                                            name="simpwj" type="text"
                                                                                            id="simpwj"
                                                                                            value="@currency($s->anggota->simpwj)"
                                                                                            readonly>
                                                                                        @error('simpwj')
                                                                                            <div class="invalid-feedback">
                                                                                                Jumlah simpanan tidak boleh
                                                                                                kosong
                                                                                            </div>
                                                                                        @enderror
                                                                                        <div class="col-sm-4">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- **************************************************************************************************8******  -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-4 col-form-label"
                                                                                        for="jmlh_simpwj">Jmlh Simpanan
                                                                                        per
                                                                                        {{ $s->created_at->format('d M') }}</label>
                                                                                    <div class="col-sm-2 p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('jmlh_simpwj') is-invalid @enderror"
                                                                                            name="jmlh_simpwj" type="text"
                                                                                            id="jmlh_simpwj"
                                                                                            value="@currency($s->jmlh_simpwj)"
                                                                                            readonly>
                                                                                        @error('jmlh_simpwj')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- **************************************************************************************************8******  -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-4 col-form-label"
                                                                                        for="simp_wj">Tambah
                                                                                        Simpanan</label>
                                                                                    <div class="col-sm-2 p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('simp_wj') is-invalid @enderror"
                                                                                            name="simp_wj" type="text"
                                                                                            id="simp_wj" readonly
                                                                                            value="@currency($s->simp_wj)"
                                                                                            type-currency="IDR"
                                                                                            placeholder="Rp ">
                                                                                        @error('simp_wj')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- **************************************************************************************************8******  -->

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- endModal --}}
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
    <!-- EndContent -->
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
