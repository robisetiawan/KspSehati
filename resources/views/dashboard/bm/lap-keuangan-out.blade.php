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
                            <li class="nav-item">
                                <a class="nav-link {{ $title === 'Lap Uang Keluar' ? 'active' : '' }}" aria-current="page"
                                    href="/dashboard/lap-keuangan/in/out">Cash
                                    Out</a>
                            </li>
                        </ul>
                        {{-- <div class="card-header pb-0">
                            <h5>Cash Out</h5>
                        </div> --}}
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


    </div>
@endsection
@push('scripts')
    // {{-- dataTables --}}
    <script src="/js/datatables.js"></script>
    {{-- end_dataTables --}}
@endpush
@push('chart')
    <script src="/js/highcharts.js"></script>
    <script>
        var total = {{ $total }};
        var bulan = {!! $bulan !!};
        Highcharts.chart('grafik', {
            title: {
                text: 'Cash Out'
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
    </script>
@endpush
