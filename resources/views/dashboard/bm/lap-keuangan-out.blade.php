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
                            <li class="nav-item">
                                <a class="nav-link {{ $title === 'Lap Uang Masuk' ? 'active' : '' }}" aria-current="page"
                                    href="/dashboard/lap-keuangan/in">Cash In</a>
                            </li>
                            <li class="nav-item nav-danger">
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

                        {{-- <div class="card-body pt-3 pb-1 f-12">
                            <div class="row">
                                <div class="col">
                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                    <div class="mb-1 row">
                                        <label class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": {{ $title }}">
                                        </div>
                                        <label class="col-sm-2 col-form-label">Periode Pinjaman</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": {{ $title }}">
                                        </div>
                                    </div>
                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                </div>
                            </div>
                        </div> --}}

                        <div class="table-responsive card-body pt-3 pb-1 f-12">
                            {{-- Chart --}}
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
                            {{-- endChart --}}
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
                                    @foreach ($cashout as $cashout)
                                        <tr>
                                            <td>{{ $cashout->created_at->format('d M Y') }}</td>
                                            <td>
                                                @if ($cashout->pinjam_id !== null && $cashout->agberhenti_id == null)
                                                    {{ $cashout->pinjam->anggota->no_anggota }}
                                                @elseif ($cashout->agberhenti_id !== null && $cashout->pinjam_id == null)
                                                    {{ $cashout->agberhenti->anggota->no_anggota }}
                                                @else
                                                @endif
                                            </td>
                                            <td>
                                                @if ($cashout->pinjam_id !== null && $cashout->agberhenti_id == null)
                                                    {{ $cashout->pinjam->anggota->nama_panggilan }}
                                                @elseif ($cashout->agberhenti_id !== null && $cashout->pinjam_id == null)
                                                    {{ $cashout->agberhenti->anggota->nama_panggilan }}
                                                @else
                                                @endif
                                            </td>
                                            <td>@currency($cashout->total)</td>
                                            <td>
                                                <button type="button" class="badege bg-success border-0"
                                                    data-bs-toggle="modal" data-bs-target="#cashout{{ $cashout->id }}"><i
                                                        class="fa fa-eye fa-lg" aria-hidden="true"></i>
                                                </button>
                                            </td>

                                            <div class="modal fade" id="cashout{{ $cashout->id }}" aria-hidden="true"
                                                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalToggleLabel">Pinjaman
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            {{-- Uang keluar melalui pinjaman --}}
                                                            @if ($cashout->pinjam_id !== null && $cashout->agberhenti_id == null)
                                                                <div class="card mb-1">

                                                                    {{-- cardBody --}}
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row justify-content-md-center">
                                                                                    <div class="col-sm-5">
                                                                                        <div class="row mb-1">
                                                                                            <label for="noanggota"
                                                                                                class="col-sm-5 col-form-label text-end">No
                                                                                                Anggota</label>
                                                                                            <div class="col p-l-0">
                                                                                                <input
                                                                                                    class="form-control form-control-sm @error('noanggota ') is-invalid @enderror"
                                                                                                    name="noanggota"
                                                                                                    type="text"
                                                                                                    id="noanggota"
                                                                                                    value="{{ $cashout->pinjam->anggota->no_anggota }}"
                                                                                                    readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-5 p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('nama_ang ') is-invalid @enderror"
                                                                                            name="nama_ang" type="text"
                                                                                            id="nama_ang"
                                                                                            value="{{ $cashout->pinjam->anggota->nama_panggilan }}"
                                                                                            readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card mb-0">
                                                                    <div class="card-body f-12">
                                                                        @error('anggota_id')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                        <div class=" row mb-1">
                                                                            <label
                                                                                class="col-sm-4 col-form-label visually-hidden"
                                                                                for="anggota_id">No
                                                                                Anggota</label>
                                                                            <div class="col p-l-0">
                                                                                <input
                                                                                    class="form-control form-control-sm @error('anggota_id ') is-invalid @enderror"
                                                                                    name="anggota_id" type="hidden"
                                                                                    id="anggota_id"
                                                                                    value="{{ $cashout->pinjam->anggota->id }}"
                                                                                    readonly>
                                                                                @error('anggota_id')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <!-- ****************************************************************************************** -->
                                                                        <div class="row">
                                                                            {{-- Left Coloum --}}
                                                                            <div class="col">

                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label for="total"
                                                                                        class="col-sm-6 col-form-label">Nilai
                                                                                        Pinjaman</label>
                                                                                    <div class="col p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('total') is-invalid @enderror"
                                                                                            name="total" type="text"
                                                                                            id="total"
                                                                                            value="@currency($cashout->total)"
                                                                                            readonly>
                                                                                        @error('total')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-6 col-form-label"
                                                                                        for="admin_total">Admin
                                                                                        Total</label>
                                                                                    <div class="col-sm-5 p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('admin_total') is-invalid @enderror"
                                                                                            name="admin_total"
                                                                                            type="text"
                                                                                            id="admin_total"
                                                                                            value="@currency($cashout->pinjam->admin_total)"
                                                                                            readonly>
                                                                                        @error('admin_total')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>

                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label for="pk_kem"
                                                                                        class="col-sm-6 col-form-label">Pokok
                                                                                        Pengembalian</label>
                                                                                    <div class="col p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('pk_kem') is-invalid @enderror"
                                                                                            name="pk_kem" type="text"
                                                                                            id="pk_kem"
                                                                                            value="@currency($cashout->pinjam->pk_kem)"
                                                                                            readonly>
                                                                                        @error('pk_kem')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label for="persentase"
                                                                                        class="col-sm-6 col-form-label">Persentase</label>
                                                                                    <div class="col-sm-3 p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('persentase') is-invalid @enderror"
                                                                                            name="persentase"
                                                                                            type="text" id="persentase"
                                                                                            value="{{ $cashout->pinjam->persentase }} %"
                                                                                            readonly>
                                                                                        @error('persentase')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>

                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label for="tipe_angs"
                                                                                        class="col-sm-6 col-form-label">Tipe
                                                                                        Angsuran</label>
                                                                                    <div class="col-sm-4 p-l-0">
                                                                                        <select
                                                                                            class="form-select form-select-sm @error('tipe_angs') is-invalid @enderror"
                                                                                            name="tipe_angs"
                                                                                            id="tipe_angs" disabled>
                                                                                            <option value="Tetap"
                                                                                                {{ old('tipe_angs') == 'Tetap' ? 'selected' : '' }}>
                                                                                                Tetap
                                                                                            </option>
                                                                                            <option value="Musiman"
                                                                                                {{ old('tipe_angs') == 'Musiman' ? 'selected' : '' }}>
                                                                                                Musiman
                                                                                            </option>
                                                                                        </select>
                                                                                        @error('tipe_angs')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-6 col-form-label"
                                                                                        for="periode">Periode
                                                                                    </label>
                                                                                    <label
                                                                                        class="col-sm-6 col-form-label visually-hidden"
                                                                                        for="per_p">Per
                                                                                    </label>
                                                                                    <div class="col-sm-2 p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('periode') is-invalid @enderror"
                                                                                            name="periode" type="text"
                                                                                            id="periode"
                                                                                            value="{{ old('periode', $cashout->pinjam->periode) }}"
                                                                                            readonly>
                                                                                        @error('periode')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="col p-l-0">
                                                                                        <select
                                                                                            class="form-select form-select-sm @error('per_p') is-invalid @enderror"
                                                                                            name="per_p" id="per_p"
                                                                                            disabled>
                                                                                            <option value="Bulan"
                                                                                                {{ old('per_p') == 'Bulan' ? 'selected' : '' }}>
                                                                                                Bulan
                                                                                            </option>
                                                                                            <option value="Tahun"
                                                                                                {{ old('per_p') == 'Tahun' ? 'selected' : '' }}>
                                                                                                Tahun
                                                                                            </option>
                                                                                        </select>
                                                                                        @error('per_p')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-6 col-form-label"
                                                                                        for="bunga">Bunga
                                                                                    </label>
                                                                                    <div class="col-sm-3 px-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('bunga') is-invalid @enderror"
                                                                                            name="bunga" type="text"
                                                                                            id="bunga"
                                                                                            value="{{ old('bunga', $cashout->pinjam->bunga) }} %"
                                                                                            readonly>
                                                                                        @error('bunga')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>


                                                                                <!-- ****************************************************************************************** -->

                                                                            </div>

                                                                            <div class="col">
                                                                                {{-- Right Coloum --}}
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-6 col-form-label"
                                                                                        for="nama">
                                                                                        Harga Acuan Pinjaman</label>
                                                                                    <div class="col-sm-6 p-l-0">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm"
                                                                                            id="colFormLabelSm"
                                                                                            value="@currency($cashout->pinjam->harga_acuan)"
                                                                                            disabled />
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-6 col-form-label"
                                                                                        for="angsuran">Angsuran
                                                                                    </label>
                                                                                    <div class="col-sm-4 p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('angsuran') is-invalid @enderror"
                                                                                            name="angsuran" type="text"
                                                                                            id="angsuran"
                                                                                            value="@currency($cashout->pinjam->angsuran)"
                                                                                            disabled>
                                                                                        @error('angsuran')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-6 col-form-label"
                                                                                        for="nama">
                                                                                        Bunga Margin</label>
                                                                                    <div class="col-sm-6 p-l-0">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm"
                                                                                            id="colFormLabelSm"
                                                                                            value="@currency($cashout->pinjam->bunga_margin)"
                                                                                            disabled />
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-6 col-form-label"
                                                                                        for="nama">
                                                                                        Pokok + Margin</label>
                                                                                    <div class="col-sm-6 p-l-0">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm"
                                                                                            id="colFormLabelSm"
                                                                                            value="@currency($cashout->pinjam->pk_marg)"
                                                                                            disabled />
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-6 col-form-label"
                                                                                        for="simp_pk">
                                                                                        Simpanan Pokok</label>
                                                                                    <div class="col-sm-6 p-l-0">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm"
                                                                                            id="simp_pk"
                                                                                            value="@currency($cashout->pinjam->anggota->simpkok)"
                                                                                            disabled />
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-6 col-form-label"
                                                                                        for="nama">
                                                                                        Admin</label>
                                                                                    <div class="col-sm-6 p-l-0">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm"
                                                                                            id="colFormLabelSm"
                                                                                            value="@currency($cashout->pinjam->admin_total)"
                                                                                            disabled />
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label class="col-sm-6 col-form-label"
                                                                                        for="nama">
                                                                                        Nilai yang diterima</label>
                                                                                    <div class="col-sm-6 p-l-0">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm"
                                                                                            id="colFormLabelSm"
                                                                                            value="@currency($cashout->pinjam->nilai_pinj)"
                                                                                            disabled />
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                            {{-- EndRight Coloum --}}
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                {{-- Uang Keluar melalui Anggota berhenti --}}
                                                            @elseif ($cashout->agberhenti_id !== null && $cashout->pinjam_id == null)
                                                                <div class="card mb-1">
                                                                    {{-- cardBody --}}
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row justify-content-md-center">
                                                                                    <div class="col-sm-5">
                                                                                        <div class="row mb-1">
                                                                                            <label for="noanggota"
                                                                                                class="col-sm-5 col-form-label text-end">No
                                                                                                Anggota</label>
                                                                                            <div class="col p-l-0">
                                                                                                <input
                                                                                                    class="form-control form-control-sm @error('noanggota ') is-invalid @enderror"
                                                                                                    name="noanggota"
                                                                                                    type="text"
                                                                                                    id="noanggota"
                                                                                                    value="{{ $cashout->agberhenti->anggota->no_anggota }}"
                                                                                                    readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-5 p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('nama_ang ') is-invalid @enderror"
                                                                                            name="nama_ang" type="text"
                                                                                            id="nama_ang"
                                                                                            value="{{ $cashout->agberhenti->anggota->nama_panggilan }}"
                                                                                            readonly>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card mb-0">
                                                                    <div class="card-body f-12">
                                                                        @error('anggota_id')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                        <div class=" row mb-1">
                                                                            <label
                                                                                class="col-sm-4 col-form-label visually-hidden"
                                                                                for="anggota_id">No
                                                                                Anggota</label>
                                                                            <div class="col p-l-0">
                                                                                <input
                                                                                    class="form-control form-control-sm @error('anggota_id ') is-invalid @enderror"
                                                                                    name="anggota_id" type="hidden"
                                                                                    id="anggota_id"
                                                                                    value="{{ $cashout->agberhenti->anggota->id }}"
                                                                                    readonly>
                                                                                @error('anggota_id')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <!-- ****************************************************************************************** -->
                                                                        <div class="row">
                                                                            {{-- Left Coloum --}}
                                                                            <div class="col">
                                                                                <div class="row mb-1">
                                                                                    <label for="nama_ibu"
                                                                                        class="col-sm-6 col-form-label">Nama
                                                                                        Ibu</label>
                                                                                    <div class="col p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('nama_ibu') is-invalid @enderror"
                                                                                            name="nama_ibu" type="text"
                                                                                            id="nama_ibu"
                                                                                            value="{{ $cashout->agberhenti->anggota->nama_ibu }}"
                                                                                            readonly>
                                                                                        @error('nama_ibu')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label for="simpkok"
                                                                                        class="col-sm-6 col-form-label">Simpanan
                                                                                        Pokok</label>
                                                                                    <div class="col p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('simpkok') is-invalid @enderror"
                                                                                            name="simpkok" type="text"
                                                                                            id="simpkok"
                                                                                            value="@currency($cashout->agberhenti->anggota->simpkok)"
                                                                                            readonly>
                                                                                        @error('simpkok')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label for="simpwj"
                                                                                        class="col-sm-6 col-form-label">Simpanan
                                                                                        Wajib</label>
                                                                                    <div class="col p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('simpwj') is-invalid @enderror"
                                                                                            name="simpwj" type="text"
                                                                                            id="simpwj"
                                                                                            value="@currency($cashout->agberhenti->anggota->simpwj)"
                                                                                            readonly>
                                                                                        @error('simpwj')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>

                                                                                <hr>
                                                                                <!-- ****************************************************************************************** -->
                                                                                <div class="row mb-1">
                                                                                    <label for="total"
                                                                                        class="col-sm-6 col-form-label">Total
                                                                                        Kembali</label>
                                                                                    <div class="col p-l-0">
                                                                                        <input
                                                                                            class="form-control form-control-sm @error('total') is-invalid @enderror"
                                                                                            name="total" type="text"
                                                                                            id="total"
                                                                                            value="@currency($cashout->total)"
                                                                                            readonly>
                                                                                        @error('total')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ****************************************************************************************** -->

                                                                            </div>

                                                                            {{-- EndRight Coloum --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                            @endif

                                                            {{-- endCard --}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            @if ($cashout->pinjam_id !== null && $cashout->agberhenti_id == null)
                                                                <button class="btn btn-primary"
                                                                    data-bs-target="#history{{ $cashout->id }}"
                                                                    data-bs-toggle="modal" data-bs-dismiss="modal"
                                                                    aria-label="Close">History Angsuran</button>
                                                            @elseif ($cashout->agberhenti_id !== null && $cashout->pinjam_id == null)
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            @else
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="history{{ $cashout->id }}" aria-hidden="true"
                                                aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                                <div
                                                    class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalToggleLabel2">History
                                                                Angsuran
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                @forelse ($penu->where('order_id', $cashout->order_id) as $p)
                                                                    <div class="col-sm-6">
                                                                        <div class="card">
                                                                            <div class="card-header py-3">
                                                                                <h6>Angsuran ke
                                                                                    {{ $p->angsuran_ke }}
                                                                                </h6>
                                                                            </div>
                                                                            <hr class="my-0">
                                                                            <div class="card-body pt-1">
                                                                                <p class="card-text">
                                                                                <div class="row g-3 align-items-center">
                                                                                    {{-- ==================================== --}}
                                                                                    <div class="col">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-5">
                                                                                                <label for="inputPassword6"
                                                                                                    class="col-form-label">Tanggal
                                                                                                    Terima</label>
                                                                                            </div>
                                                                                            <div class="col-auto">
                                                                                                <input type="text"
                                                                                                    id="inputPassword6"
                                                                                                    class="form-control-plaintext"
                                                                                                    readonly
                                                                                                    value=": {{ $p->created_at->format('d M Y') }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- ==================================== --}}
                                                                                        <div class="row">
                                                                                            <div class="col-sm-5">
                                                                                                <label for="inputPassword6"
                                                                                                    class="col-form-label">No
                                                                                                    Terima</label>
                                                                                            </div>
                                                                                            <div class="col-auto">
                                                                                                <input type="text"
                                                                                                    id="inputPassword6"
                                                                                                    class="form-control-plaintext"
                                                                                                    readonly
                                                                                                    value=": {{ $p->no_terima }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- ==================================== --}}
                                                                                        <div class="row">
                                                                                            <div class="col-sm-5">
                                                                                                <label for="inputPassword6"
                                                                                                    class="col-form-label">Nominal</label>
                                                                                            </div>
                                                                                            <div class="col-auto">
                                                                                                <input type="text"
                                                                                                    id="inputPassword6"
                                                                                                    class="form-control-plaintext"
                                                                                                    readonly
                                                                                                    value=": @currency($p->nominal)">
                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- ==================================== --}}
                                                                                        <div class="row">
                                                                                            <div class="col-sm-5">
                                                                                                <label for="inputPassword6"
                                                                                                    class="col-form-label">Terima
                                                                                                    Dari</label>
                                                                                            </div>
                                                                                            <div class="col-auto">
                                                                                                <input type="text"
                                                                                                    id="inputPassword6"
                                                                                                    class="form-control-plaintext"
                                                                                                    readonly
                                                                                                    value=": {{ $p->trm_dr }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- ==================================== --}}
                                                                                        <div class="row">
                                                                                            <div class="col-sm-5">
                                                                                                <label for="inputPassword6"
                                                                                                    class="col-form-label">Cara
                                                                                                    Bayar</label>
                                                                                            </div>
                                                                                            <div class="col-auto">
                                                                                                <input type="text"
                                                                                                    id="inputPassword6"
                                                                                                    class="form-control-plaintext"
                                                                                                    readonly
                                                                                                    value=": {{ $p->cr_bayar }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- ==================================== --}}
                                                                                        <div class="row">
                                                                                            <div class="col-sm-5">
                                                                                                <label for="inputPassword6"
                                                                                                    class="col-form-label">Sisa
                                                                                                    Pinj</label>
                                                                                            </div>
                                                                                            <div class="col-auto">
                                                                                                <input type="text"
                                                                                                    id="inputPassword6"
                                                                                                    class="form-control-plaintext"
                                                                                                    readonly
                                                                                                    value=": @currency($p->sisa_pj)">
                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- ==================================== --}}
                                                                                    </div>
                                                                                </div>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @empty
                                                                    <strong class="text-center">Belum ada angsuran
                                                                        !!!</strong>
                                                                @endforelse
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary"
                                                                data-bs-target="#cashout{{ $cashout->id }}"
                                                                data-bs-toggle="modal" data-bs-dismiss="modal"
                                                                aria-label="Close">Pinjaman</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        var total = {{ $total }};
        var bulan = {!! $bulan !!};
        const data = {
            labels: bulan,
            datasets: [{
                label: 'Cash Out',
                data: total,
                backgroundColor: '#d22d3d',
                borderColor: '#d22d3d',
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
            const bulan2 = [...bulan];
            console.log(bulan2);
            const startdate = document.getElementById('startdate');
            const enddate = document.getElementById('enddate');

            //get index number in array
            const indexstartdate = bulan2.indexOf(startdate.value);
            const indexenddate = bulan2.indexOf(enddate.value);
            console.log(indexstartdate);

            // slice the array only showing the selected section / slice
            const filterDate = bulan2.slice(indexstartdate, indexenddate + 1);

            //replace the labels in the chart
            myChart.config.data.labels = filterDate;
            myChart.update();
        }
    </script>
@endpush
