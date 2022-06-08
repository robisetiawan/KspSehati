@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Cetak Buku Anggota</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Cetak Buku Anggota</li>
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

            <div class="card-body f-12 pb-0">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-form-label">
                        <form action="/dashboard/cetak-buku-anggota/cari" method="GET">

                            <div class="input-group mb-3">
                                <label class="col-sm-4 col-form-label visually-hidden" for="id">No Anggota</label>
                                {{-- <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .."
                                    value="{{ old('cari') }}"> --}}
                                <input class="form-control" type="text" name="cari" placeholder="Nomor Anggota ..."
                                    value="{{ request('cari') }}">
                                <button class="btn btn-primary" type="submit" value="CARI"><i class="fa fa-arrow-right"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <form class="form theme-form">
                @forelse ($anggotas as $a)
                    <div class="card-body f-12">
                        <div class="row">
                            <div class="col">
                                <!-- *************** -->
                                <!-- *************** -->

                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">No Anggota</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="{{ $a->no_anggota }}" readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="{{ $a->user->name }}" readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">No KTP</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="{{ $a->identity->no_identitas }}"
                                            readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-5">
                                        <input class="form-control digits" type="text"
                                            value="{{ $a->profession->pekerjaan }}" readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-5">
                                        <input class="form-control m-input digits" type="text"
                                            value="{{ $a->identity->alamat }}" readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">RT</label>
                                    <div class="col-sm-2">
                                        <input class="form-control" type="text" value="{{ $a->identity->rt }}"
                                            readonly />
                                    </div>
                                    <label class="col-sm-1 col-form-label">RW</label>
                                    <div class="col-sm-2">
                                        <input class="form-control" type="text" value="{{ $a->identity->rw }}"
                                            readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Kelurahan</label>
                                    <div class="col-sm-5">
                                        <input class="form-control m-input digits" type="text"
                                            value="{{ $a->identity->desa_kel }}" readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Kecamatan</label>
                                    <div class="col-sm-5">
                                        <input class="form-control m-input digits" type="text"
                                            value="{{ $a->identity->kec }}" readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Kab / Kota</label>
                                    <div class="col-sm-5">
                                        <input class="form-control m-input digits" type="text"
                                            value="{{ $a->identity->kab_kota }}" readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Simpanan Pokok</label>
                                    <div class="col-sm-3">
                                        <input class="form-control m-input digits" type="text" value="@currency($a->simpkok)"
                                            readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label">Simpanan Wajib</label>
                                    <div class="col-sm-3">
                                        <input class="form-control m-input digits" type="text" value="@currency($a->simpwj)"
                                            readonly />
                                    </div>
                                </div>
                                <!-- *************** -->
                                <!-- *************** -->

                            </div>

                        </div>
                    </div>
                    <div class="card-footer f-12">
                        <div>
                            <a href="/dashboard/cetak-buku-anggota/cari/{{ $a->id }}"
                                class="btn btn-primary">Cetak</a>
                            {{-- <button class="btn btn-primary" type="submit">Cetak</button></a> --}}
                        </div>
                    </div>

                @empty
                    <p class="text-center">Anggota tidak ditemukan !!!</p>
                @endforelse
            </form>
        </div>
    </div>
@endsection
