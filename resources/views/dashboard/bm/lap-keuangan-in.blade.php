@extends('dashboard.layouts.template')

@section('content')
    <!-- content -->
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Laporan Keuangan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Laporan Keuangan</li>
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
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item nav-success">
                                <a class="nav-link {{ $title === 'Lap Uang Masuk' ? 'active' : '' }}" aria-current="page"
                                    href="/dashboard/lap-keuangan/in">Cash In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $title === 'Lap Uang Keluar' ? 'active' : '' }}" aria-current="page"
                                    href="/dashboard/lap-keuangan/in/out">Cash
                                    Out</a>
                            </li>
                        </ul>
                        {{-- <div class="card-header pb-0">
                            <h5>Cash Out</h5>
                        </div> --}}
                        <div class="row pb-0 card-body justify-content-md-center">
                            <div class="col-sm-3">
                                <label class="form-label">Start Date</label>
                                <input class="form-control" onchange="filterData()" type="date" id="startdate"
                                    placeholder="Start Date">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">End Date</label>
                                <input class="form-control" onchange="filterData()" type="date" id="enddate"
                                    placeholder="End Date">
                            </div>
                        </div>
                        <canvas id="myChart" class="card-body"></canvas>
                        <!-- ***************************-->
                        <!-- ********* Cash Out ********-->
                        <!-- ***************************-->
                        <div class="table-responsive card-body pt-3 pb-1 f-12">
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
                                        <th class="text-center">Tanggal</th>
                                        <th class="text-center">No Anggota</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cashin as $c)
                                        <tr>
                                            <td>{{ $c->created_at->format('d M Y') }}</td>
                                            <td>
                                                @if ($c->penerimaan_uang_id !== null && $c->simpanan_id == null)
                                                    {{ $c->penerimaan_uang->order->anggota->no_anggota }}
                                                @elseif ($c->simpanan_id !== null && $c->penerimaan_uang_id == null)
                                                    {{ $c->simpanan->anggota->no_anggota }}
                                                @else
                                                @endif
                                            </td>
                                            <td>
                                                @if ($c->penerimaan_uang_id !== null && $c->simpanan_id == null)
                                                    {{ $c->penerimaan_uang->order->anggota->user->name }}
                                                @elseif ($c->simpanan_id !== null && $c->penerimaan_uang_id == null)
                                                    {{ $c->simpanan->anggota->user->name }}
                                                @else
                                                @endif
                                            </td>
                                            <td>@currency($c->total)</td>
                                            <!-- Button trigger modal -->
                                            <td>
                                                <button type="button" class="badege bg-success border-0"
                                                    data-bs-toggle="modal" data-bs-target="#detail{{ $c->id }}"><i
                                                        class="fa fa-eye fa-lg" aria-hidden="true"></i>
                                                </button>
                                            </td>

                                            <!-- Modal -->
                                            <div class="modal fade" id="detail{{ $c->id }}" tabindex="-1"
                                                aria-labelledby="detailLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="detailLabel">Cash In -
                                                                @if ($c->penerimaan_uang_id !== null && $c->simpanan_id == null)
                                                                    Pinjaman
                                                                @elseif ($c->simpanan_id !== null && $c->penerimaan_uang_id == null)
                                                                    Simpanan
                                                                @else
                                                                @endif
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @if ($c->penerimaan_uang_id !== null && $c->simpanan_id == null)
                                                                {{-- ========== --}}
                                                                <div class="card mb-0">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-xl-6">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 p-r-0">
                                                                                        <div class="card border-0">
                                                                                            <!-- **************************************************************************************************8******  -->
                                                                                            <!-- **************************************************************************************************8******  -->
                                                                                            <div class="row mb-1">
                                                                                                <label
                                                                                                    class="col-sm-4 col-form-label"
                                                                                                    for="no_terima">No
                                                                                                    Terima</label>
                                                                                                <div
                                                                                                    class="col-sm-4 p-l-0">
                                                                                                    <input
                                                                                                        class="form-control form-control-sm @error('no_terima') is-invalid @enderror"
                                                                                                        name="no_terima"
                                                                                                        type="text"
                                                                                                        id="no_terima"
                                                                                                        readonly
                                                                                                        value="{{ old('no_terima', $c->penerimaan_uang->no_terima) }}">
                                                                                                    @error('no_terima')
                                                                                                        <div
                                                                                                            class="invalid-feedback">
                                                                                                            {{ $message }}
                                                                                                        </div>
                                                                                                    @enderror
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- **************************************************************************************************8******  -->
                                                                                            <div class="row mb-1">
                                                                                                <label
                                                                                                    class="col-sm-4 col-form-label"
                                                                                                    for="no_anggota">No
                                                                                                    Anggota</label>
                                                                                                <div
                                                                                                    class="col-sm-4 p-l-0">
                                                                                                    <input
                                                                                                        class="form-control form-control-sm @error('no_anggota') is-invalid @enderror"
                                                                                                        name="no_anggota"
                                                                                                        type="text"
                                                                                                        id="no_anggota"
                                                                                                        readonly
                                                                                                        value="{{ old('no_anggota', $c->penerimaan_uang->order->anggota->no_anggota) }}">
                                                                                                    @error('no_anggota')
                                                                                                        <div
                                                                                                            class="invalid-feedback">
                                                                                                            {{ $message }}
                                                                                                        </div>
                                                                                                    @enderror
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- **************************************************************************************************8******  -->
                                                                                            <div class="row mb-1">
                                                                                                <label
                                                                                                    class="col-sm-4 col-form-label"
                                                                                                    for="trm_dr">Terima
                                                                                                    dari</label>
                                                                                                <div
                                                                                                    class="col-sm-7 p-l-0">
                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm @error('trm_dr') is-invalid @enderror"
                                                                                                        id="trm_dr"
                                                                                                        name="trm_dr"
                                                                                                        value="{{ old('trm_dr', $c->penerimaan_uang->order->anggota->user->name) }}"
                                                                                                        readonly />
                                                                                                </div>

                                                                                            </div>
                                                                                            <!-- **************************************************************************************************8******  -->
                                                                                            <div class="row mb-1">
                                                                                                <label
                                                                                                    class="col-sm-4 col-form-label"
                                                                                                    for="angsuran_ke">Angsuran
                                                                                                    Ke
                                                                                                    -</label>
                                                                                                <div
                                                                                                    class="col-sm-2 p-l-0">
                                                                                                    <input type="number"
                                                                                                        class="form-control form-control-sm @error('angsuran_ke') is-invalid @enderror"
                                                                                                        id="angsuran_ke"
                                                                                                        name="angsuran_ke"
                                                                                                        value="{{ old('angsuran_ke', $c->penerimaan_uang->angsuran_ke) }}"
                                                                                                        max="{{ $c->penerimaan_uang->order->pinjam->periode }}"
                                                                                                        min="1"
                                                                                                        readonly />
                                                                                                </div>
                                                                                                <div class="col-sm-4">
                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm @error('periode') is-invalid @enderror"
                                                                                                        id="periode"
                                                                                                        name="periode"
                                                                                                        value="dari {{ $c->penerimaan_uang->order->pinjam->periode }}"
                                                                                                        disabled />
                                                                                                </div>

                                                                                            </div>
                                                                                            <!-- **************************************************************************************************8******  -->
                                                                                            <div class="row mb-1">
                                                                                                <label
                                                                                                    class="col-sm-4 col-form-label"
                                                                                                    for="created_at">Tgl
                                                                                                    Terima</label>
                                                                                                <div
                                                                                                    class="col-sm-4 p-l-0">
                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm"
                                                                                                        id="created_at"
                                                                                                        name="created_at"
                                                                                                        value="{{ $c->penerimaan_uang->updated_at->format('d M Y') }}"
                                                                                                        disabled />
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-sm-3 p-l-0">
                                                                                                    <input type="text"
                                                                                                        class="form-control form-control-sm"
                                                                                                        id="colFormLabelSm"
                                                                                                        value="Cash-In"
                                                                                                        disabled />
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- **************************************************************************************************8******  -->

                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xl-6">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="card border-0">
                                                                                            <!-- **************************************************************************************************8******  -->
                                                                                            <div class="card-body p-1">
                                                                                                <!-- **************************************************************************************************8******  -->


                                                                                                <!-- **************************************************************************************************8******  -->
                                                                                                <div class="row mb-1">
                                                                                                    <label
                                                                                                        class="col-sm-4 col-form-label"
                                                                                                        for="nama">Currency</label>
                                                                                                    <div
                                                                                                        class="col-sm-2 p-l-0">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control form-control-sm"
                                                                                                            id="colFormLabelSm"
                                                                                                            value="IDR"
                                                                                                            disabled />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- **************************************************************************************************8******  -->
                                                                                                <div class="row mb-1">
                                                                                                    <label
                                                                                                        class="col-sm-4 col-form-label"
                                                                                                        for="pk_marg">Pinjaman</label>
                                                                                                    <div
                                                                                                        class="col-sm-6 p-l-0">
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="pk_marg"
                                                                                                            value="{{ $c->penerimaan_uang->order->pinjam->pk_marg }}">
                                                                                                        <input
                                                                                                            class="form-control form-control-sm @error('pk_marg') is-invalid @enderror"
                                                                                                            name="pk_marg"
                                                                                                            type="text"
                                                                                                            id="pk_marg"
                                                                                                            value="@currency($c->penerimaan_uang->order->pinjam->pk_marg)"
                                                                                                            disabled>
                                                                                                        @error('pk_marg')
                                                                                                            <div
                                                                                                                class="invalid-feedback">
                                                                                                                {{ $message }}
                                                                                                            </div>
                                                                                                        @enderror
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- **************************************************************************************************8******  -->
                                                                                                <div class="row mb-1">
                                                                                                    <label
                                                                                                        class="col-sm-4 col-form-label"
                                                                                                        for="sisa_pj">Sisa
                                                                                                        Pinj</label>
                                                                                                    <div
                                                                                                        class="col-sm-6 p-l-0">
                                                                                                        <input
                                                                                                            class="form-control form-control-sm @error('sisa_pj') is-invalid @enderror"
                                                                                                            name="sisa_pj"
                                                                                                            type="text"
                                                                                                            id="sisa_pj"
                                                                                                            value="@currency($c->penerimaan_uang->sisa_pj)"
                                                                                                            disabled>
                                                                                                        @error('sisa_pj')
                                                                                                            <div
                                                                                                                class="invalid-feedback">
                                                                                                                {{ $message }}
                                                                                                            </div>
                                                                                                        @enderror
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- **************************************************************************************************8******  -->

                                                                                                <div class="row mb-1">
                                                                                                    <label
                                                                                                        class="col-sm-4 col-form-label"
                                                                                                        for="nominal">Nominal</label>
                                                                                                    <div
                                                                                                        class="col-sm-6 p-l-0">
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            class="form-control form-control-sm @error('nominal') is-invalid @enderror"
                                                                                                            name="nominal"
                                                                                                            id="nominal"
                                                                                                            value="@currency($c->penerimaan_uang->order->pinjam->angsuran)">
                                                                                                        <input
                                                                                                            class="form-control form-control-sm @error('nominal') is-invalid @enderror"
                                                                                                            name="nominal"
                                                                                                            type="text"
                                                                                                            id="nominal"
                                                                                                            value="@currency($c->penerimaan_uang->order->pinjam->angsuran)"
                                                                                                            disabled>
                                                                                                        @error('nominal')
                                                                                                            <div
                                                                                                                class="invalid-feedback">
                                                                                                                {{ $message }}
                                                                                                            </div>
                                                                                                        @enderror
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- **************************************************************************************************8******  -->
                                                                                                <div class="row mb-1">
                                                                                                    <label
                                                                                                        class="col-sm-4 col-form-label"
                                                                                                        for="cr_bayar">Cara
                                                                                                        Bayar</label>
                                                                                                    <div
                                                                                                        class="col-sm-4 p-l-0">
                                                                                                        <select
                                                                                                            class="form-select @error('cr_bayar') is-invalid @enderror"
                                                                                                            name="cr_bayar"
                                                                                                            id="cr_bayar"
                                                                                                            disabled>
                                                                                                            <option
                                                                                                                value="Tunai"
                                                                                                                {{ old('cr_bayar', $c->penerimaan_uang->cr_bayar) == 'Tunai' ? 'selected' : '' }}>
                                                                                                                Tunai
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="Transfer"
                                                                                                                {{ old('cr_bayar', $c->penerimaan_uang->cr_bayar) == 'Transfer' ? 'selected' : '' }}>
                                                                                                                Transfer
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        @error('cr_byr')
                                                                                                            <div
                                                                                                                class="invalid-feedback">
                                                                                                                {{ $message }}
                                                                                                            </div>
                                                                                                        @enderror
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- **************************************************************************************************8******  -->
                                                                                                @if ($c->penerimaan_uang->cr_bayar === 'Transfer')
                                                                                                    <div class="row mb-1">
                                                                                                        <label
                                                                                                            class="col-sm-4 col-form-label"
                                                                                                            for="kd_bank">Kode
                                                                                                            Bank</label>
                                                                                                        <div
                                                                                                            class="col-sm-3 p-l-0">
                                                                                                            <input
                                                                                                                type="number"
                                                                                                                class="form-control form-control-sm @error('kd_bank') is-invalid @enderror"
                                                                                                                id="kd_bank"
                                                                                                                name="kd_bank"
                                                                                                                value="{{ old('kd_bank', $c->penerimaan_uang->kd_bank) }}"
                                                                                                                readonly />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- **************************************************************************************************8******  -->
                                                                                                    <div class="row mb-1">
                                                                                                        <label
                                                                                                            class="col-sm-4 col-form-label"
                                                                                                            for="no_rek">No.
                                                                                                            Rek</label>
                                                                                                        <div
                                                                                                            class="col-sm-7 p-l-0">
                                                                                                            <input
                                                                                                                type="number"
                                                                                                                class="form-control form-control-sm @error('no_rek') is-invalid @enderror"
                                                                                                                id="no_rek"
                                                                                                                name="no_rek"
                                                                                                                value="{{ old('no_rek', $c->penerimaan_uang->no_rek) }}"
                                                                                                                readonly />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- **************************************************************************************************8******  -->
                                                                                                @else
                                                                                                @endif

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- ========== --}}
                                                            @elseif ($c->simpanan_id !== null && $c->penerimaan_uang_id == null)
                                                                <div class="card mb-0">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-12 p-r-0">
                                                                                <div class="card border-0">
                                                                                    <!-- **************************************************************************************************8******  -->
                                                                                    <!-- **************************************************************************************************8******  -->
                                                                                    <div class="row mb-1">
                                                                                        <label
                                                                                            class="col-sm-4 col-form-label"
                                                                                            for="no_anggota">No
                                                                                            Anggota</label>
                                                                                        <div class="col-sm-2 p-l-0">
                                                                                            <input type="hidden"
                                                                                                name="id_anggota"
                                                                                                value="{{ $c->simpanan->anggota->id }}">
                                                                                            <input
                                                                                                class="form-control form-control-sm @error('no_anggota') is-invalid @enderror"
                                                                                                name="no_anggota"
                                                                                                type="text"
                                                                                                id="no_anggota" readonly
                                                                                                value="{{ old('no_anggota', $c->simpanan->anggota->no_anggota) }}">
                                                                                            @error('no_anggota')
                                                                                                <div class="invalid-feedback">
                                                                                                    {{ $message }}
                                                                                                </div>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- **************************************************************************************************8******  -->
                                                                                    <div class="row mb-1">
                                                                                        <label
                                                                                            class="col-sm-4 col-form-label"
                                                                                            for="created_at">Tgl
                                                                                            Simpan</label>
                                                                                        <div class="col-sm-2 p-l-0">
                                                                                            <input
                                                                                                class="form-control form-control-sm @error('created_at') is-invalid @enderror"
                                                                                                name="created_at"
                                                                                                type="text"
                                                                                                id="created_at" readonly
                                                                                                value="{{ old('created_at', $c->simpanan->created_at->format('d M Y')) }}">
                                                                                            @error('created_at')
                                                                                                <div class="invalid-feedback">
                                                                                                    {{ $message }}
                                                                                                </div>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- **************************************************************************************************8******  -->
                                                                                    <div class="row mb-1">
                                                                                        <label
                                                                                            class="col-sm-4 col-form-label"
                                                                                            for="name">Nama</label>
                                                                                        <div class="col-sm-4 p-l-0">
                                                                                            <input type="text"
                                                                                                class="form-control form-control-sm @error('name') is-invalid @enderror"
                                                                                                id="name"
                                                                                                name="name" readonly
                                                                                                value="{{ old('name', $c->simpanan->anggota->user->name) }}" />
                                                                                        </div>

                                                                                    </div>
                                                                                    <!-- **************************************************************************************************8******  -->
                                                                                    <div class="row mb-1">
                                                                                        <label
                                                                                            class="col-sm-4 col-form-label"
                                                                                            for="simpwj">Jmlh Simpanan
                                                                                            Terbaru</label>
                                                                                        <div class="col-sm-2 p-l-0">
                                                                                            <input
                                                                                                class="form-control form-control-sm @error('simpwj') is-invalid @enderror"
                                                                                                name="simpwj"
                                                                                                type="text"
                                                                                                id="simpwj"
                                                                                                value="@currency($c->simpanan->anggota->simpwj)"
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
                                                                                        <label
                                                                                            class="col-sm-4 col-form-label"
                                                                                            for="jmlh_simpwj">Jmlh Simpanan
                                                                                            per
                                                                                            {{ $c->simpanan->created_at->format('d M') }}</label>
                                                                                        <div class="col-sm-2 p-l-0">
                                                                                            <input
                                                                                                class="form-control form-control-sm @error('jmlh_simpwj') is-invalid @enderror"
                                                                                                name="jmlh_simpwj"
                                                                                                type="text"
                                                                                                id="jmlh_simpwj"
                                                                                                value="@currency($c->simpanan->jmlh_simpwj)"
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
                                                                                        <label
                                                                                            class="col-sm-4 col-form-label"
                                                                                            for="simp_wj">Tambah
                                                                                            Simpanan</label>
                                                                                        <div class="col-sm-2 p-l-0">
                                                                                            <input
                                                                                                class="form-control form-control-sm @error('simp_wj') is-invalid @enderror"
                                                                                                name="simp_wj"
                                                                                                type="text"
                                                                                                id="simp_wj" readonly
                                                                                                value="@currency($c->simpanan->simp_wj)"
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
                                                            @else
                                                            @endif
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
@endsection
@push('scripts')
    // {{-- dataTables --}}
    <script src="/js/datatables.js"></script>
    {{-- end_dataTables --}}
@endpush
@push('chart')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var cashin = {{ $masuk }};
        var month = {!! $moon !!};
        const data = {
            labels: month,
            datasets: [{
                label: 'Cash In',
                data: cashin,
                backgroundColor: '#1b4c43',
                borderColor: '#1b4c43',
                borderWidth: 3
            }]
        };

        // config
        const config = {
            type: 'line',
            data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // render init block
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

        function filterData() {
            const month2 = [...month];
            console.log(month2);
            const startdate = document.getElementById('startdate');
            const enddate = document.getElementById('enddate');

            //get index number in array
            const indexstartdate = month2.indexOf(startdate.value);
            const indexenddate = month2.indexOf(enddate.value);
            console.log(indexstartdate);

            // slice the array only showing the selected section / slice
            const filterDate = month2.slice(indexstartdate, indexenddate + 1);

            //replace the labels in the chart
            myChart.config.data.labels = filterDate;
            myChart.update();
        }
    </script>
@endpush
