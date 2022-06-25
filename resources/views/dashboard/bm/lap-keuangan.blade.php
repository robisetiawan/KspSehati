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
                        <div class="card-header pb-0">
                            <h5>Cash Out</h5>
                        </div>
                        <div id="grafik" class="card-body"></div>
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
                            <table class="table table-bordered table-xxs text-center table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="row">Tanggal</th>
                                        <th scope="row">No Anggota</th>
                                        <th scope="row">Nama</th>
                                        <th scope="row">Jumlah</th>
                                        <th scope="row">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->pinjam->created_at->format('d M Y') }}</td>
                                            <td>{{ $order->anggota->no_anggota }}</td>
                                            <td>{{ $order->anggota->user->name }}</td>
                                            <td>@currency($order->pinjam->nilai_pinj)</td>
                                            <td>
                                                <button type="button" class="badege bg-success border-0"
                                                    data-bs-toggle="modal" data-bs-target="#cashout{{ $order->id }}"><i
                                                        class="fa fa-eye fa-lg" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="cashout{{ $order->id }}" tabindex="-1"
                                                aria-labelledby="cashoutLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="cashoutLabel">Cash Out
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card mb-1">

                                                                {{-- cardBody --}}
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <!-- ****************************************************************************************** -->
                                                                            <div class="row justify-content-md-center">
                                                                                <div class="col-sm-5">
                                                                                    <div class="row mb-1">
                                                                                        <label for="noorder"
                                                                                            class="col-sm-5 col-form-label text-end">No
                                                                                            Order</label>
                                                                                        <div class="col p-l-0">
                                                                                            <input
                                                                                                class="form-control form-control-sm @error('noorder ') is-invalid @enderror"
                                                                                                name="noorder"
                                                                                                type="text"
                                                                                                id="noorder"
                                                                                                value="{{ $order->no_order }}"
                                                                                                readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-5 p-l-0">
                                                                                    <input
                                                                                        class="form-control form-control-sm @error('nama_ang ') is-invalid @enderror"
                                                                                        name="nama_ang" type="text"
                                                                                        id="nama_ang"
                                                                                        value="{{ $order->anggota->user->name }}"
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
                                                                                value="{{ $order->anggota->id }}"
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
                                                                                <label for="nilai_pinj"
                                                                                    class="col-sm-6 col-form-label">Nilai
                                                                                    Pinjaman</label>
                                                                                <div class="col p-l-0">
                                                                                    <input
                                                                                        class="form-control form-control-sm @error('nilai_pinj') is-invalid @enderror"
                                                                                        name="nilai_pinj" type="text"
                                                                                        id="nilai_pinj"
                                                                                        value="@currency($order->pinjam->nilai_pinj)" readonly>
                                                                                    @error('nilai_pinj')
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
                                                                                        name="admin_total" type="text"
                                                                                        id="admin_total"
                                                                                        value="@currency($order->pinjam->admin_total)" readonly>
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
                                                                                        value="@currency($order->pinjam->pk_kem)" readonly>
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
                                                                                        name="persentase" type="text"
                                                                                        id="persentase"
                                                                                        value="{{ $order->pinjam->persentase }} %"
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
                                                                                        name="tipe_angs" id="tipe_angs"
                                                                                        disabled>
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
                                                                            {{-- <div class="row mb-1">
                                                                                <label class="col-sm-6 col-form-label"
                                                                                    for="jumlah_angs">Jml
                                                                                    Angs</label>
                                                                                <div class="col-sm-3 p-l-0">
                                                                                    <input
                                                                                        class="form-control form-control-sm @error('jumlah_angs') is-invalid @enderror"
                                                                                        name="jumlah_angs" type="number"
                                                                                        id="jumlah_angs"
                                                                                        value="{{ old('jumlah_angs', $order->pinjam->jumlah_angs) }}">
                                                                                    @error('jumlah_angs')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div> --}}
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
                                                                                        value="{{ old('periode', $order->pinjam->periode) }}"
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
                                                                                        value="{{ old('bunga', $order->pinjam->bunga) }} %"
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
                                                                                        value="@currency($order->pinjam->harga_acuan)"
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
                                                                                        value="@currency($order->pinjam->angsuran)" disabled>
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
                                                                                        value="@currency($order->pinjam->bunga_margin)"
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
                                                                                        value="@currency($order->pinjam->pk_marg)"
                                                                                        disabled />
                                                                                </div>
                                                                            </div>
                                                                            <!-- ****************************************************************************************** -->
                                                                            {{-- <div class="row mb-1">
                                                                                            <label
                                                                                                class="col-sm-6 col-form-label"
                                                                                                for="nama">
                                                                                                Pinjaman Terakhir</label>
                                                                                            <div class="col-sm-6 p-l-0">
                                                                                                <input type="text"
                                                                                                    class="form-control form-control-sm"
                                                                                                    id="colFormLabelSm"
                                                                                                    value="@currency($order->pinjam->nilai_pinj->latest()->firts())"
                                                                                                    disabled />
                                                                                            </div>
                                                                                        </div> --}}
                                                                            <!-- ****************************************************************************************** -->
                                                                            <div class="row mb-1">
                                                                                <label class="col-sm-6 col-form-label"
                                                                                    for="simp_pk">
                                                                                    Simpanan Pokok</label>
                                                                                <div class="col-sm-6 p-l-0">
                                                                                    <input type="text"
                                                                                        class="form-control form-control-sm"
                                                                                        id="simp_pk"
                                                                                        value="@currency($order->anggota->simpkok)"
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
                                                                                        value="@currency($order->pinjam->admin_total)"
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
                                                                                        value="@currency($order->pinjam->nilai_pinj)"
                                                                                        disabled />
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        {{-- EndRight Coloum --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- endCard --}}
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

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <!-- ***************************-->
                        <!-- ********* Cash In *********-->
                        <!-- ***************************-->

                        <div class="card-header pb-0">
                            <h5>Cash In</h5>
                        </div>
                        <div id="grafikcashin" class="card-body"></div>
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
                            <table class="table table-bordered table-xxs text-center table-striped" id="myTable2">
                                <thead>
                                    <tr>
                                        <th scope="row">Tanggal</th>
                                        <th scope="row">No Anggota</th>
                                        <th scope="row">Nama</th>
                                        <th scope="row">Jumlah</th>
                                        <th scope="row">Action</th>
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
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    {{-- end_dataTables --}}
    // {{-- dataTables --}}
    <script>
        $(document).ready(function() {
            $('#myTable2').DataTable();
        });
    </script>
    {{-- end_dataTables --}}
@endpush
@push('chart')
    <script src="/js/highcharts.js"></script>
    <script>
        var total = {{ $total }};
        var bulan = {!! $bulan !!};
        var cashin = {{ $masuk }};
        var moon = {!! $moon !!};
        Highcharts.chart('grafik', {
            title: {
                text: 'Laporan Keuangan'
            },
            xAxis: {
                categories: bulan
            },
            yAxis: {
                title: {
                    text: 'Nominal'
                },
                labels: {
                    format: 'Rp. {value}'
                }
                // accessibility: {
                //     rangeDescription: 'Range: 1000000 to 25000000'
                // }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Cash Out',
                color: '#dc3545',
                data: total
            }],

        });

        Highcharts.chart('grafikcashin', {
            title: {
                text: 'Laporan Keuangan'
            },
            xAxis: {
                categories: moon
            },
            yAxis: {
                title: {
                    text: 'Nominal'
                },
                labels: {
                    format: 'Rp. {value}'
                }
                // accessibility: {
                //     rangeDescription: 'Range: 1000000 to 25000000'
                // }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Cash In',
                color: '#008199',
                data: cashin
            }],

        });
    </script>
@endpush
