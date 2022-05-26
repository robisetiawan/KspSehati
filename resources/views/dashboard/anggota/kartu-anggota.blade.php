{{-- @dd($anggotas) --}}
@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Kartu Anggota</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Kartu Anggota</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="card">
            <div class="card-header pb-0 text-center">
                <h5>Buku Anggota</h5>
                <h6>Koperasi Sehati Makmur Abadi</h6>
            </div>
            <form class="form theme-form">
                @foreach ($anggotas as $anggota)
                    <div class="card-body pt-3 f-12">
                        <div class="row">
                            <div class="col">
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">No Anggota</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->no_anggota }}">
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->user->name }}">
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">No KTP</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->identity->no_identitas }}">
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->profession->pekerjaan }}">
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->identity->alamat }}">
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">RT / RW</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->identity->rt }} / {{ $anggota->identity->rw }}">
                                    </div>

                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Desa / Kelurahan</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->identity->desa_kel }}">
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Kecamatan</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->identity->kec }}">
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Kab / Kota</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->identity->kab_kota }}">
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Simpanan Pokok</label>
                                    <div class="col-sm-3">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->nama_panggilan }}">
                                    </div>


                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Simpanan Wajib</label>
                                    <div class="col-sm-3">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value=": {{ $anggota->nama_panggilan }}">
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->

                            </div>
                        </div>
                    </div>
                    <div class="card-footer f-12">
                        <div>
                            <a href="/dashboard/cetak-buku-anggota/cari/{{ $anggota->id }}"
                                class="btn btn-primary">Cetak</a>
                            {{-- <button class="btn btn-primary" type="submit">Cetak</button></a> --}}
                        </div>
                    </div>
                @endforeach
            </form>
        </div>
    </div>
@endsection
