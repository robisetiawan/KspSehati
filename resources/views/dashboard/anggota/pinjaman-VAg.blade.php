@extends('dashboard.layouts.template')

@section('content')
    <!-- content -->
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Pinjaman</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Pinjaman</li>
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



                        <div class="card-body pt-3 pb-1 f-12">
                            <div class="row">
                                <div class="col">
                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                    <div class="mb-1 row">
                                        <label class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": @currency($pinlatest->nilai_pinj)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive card-body pt-3 pb-1 f-12">
                            <table class="table table-bordered table-xxs text-center table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="row">Tanggal</th>
                                        <th scope="row">Angsuran</th>
                                        <th scope="row">Jumlah Angs</th>
                                        <th scope="row">Nilai Pinj</th>
                                        <th scope="row">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pinjams as $order)
                                        <tr>
                                            <td>{{ $order->created_at->format('d M Y') }}</td>
                                            <td>@currency($order->pinjam->angsuran)</td>
                                            <td>{{ $order->pinjam->jumlah_angs }}</td>
                                            <td>@currency($order->pinjam->nilai_pinj)</td>
                                            <td>
                                                <button type="button" class="badege bg-success border-0"
                                                    data-bs-toggle="modal" data-bs-target="#detail{{ $order->id }}"><i
                                                        class="fa fa-eye fa-lg" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="detail{{ $order->id }}" tabindex="-1"
                                                aria-labelledby="detailLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="detailLabel">Pinjaman
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

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
                                                                                        id="nilai_pinj" readonly
                                                                                        value="@currency($order->pinjam->nilai_pinj)"
                                                                                        type-currency="IDR"
                                                                                        placeholder="Rp ">
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
                                                                                        id="admin_total" readonly
                                                                                        value="@currency($order->pinjam->admin_total)"
                                                                                        type-currency="IDR"
                                                                                        placeholder="Rp ">
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
                                                                                        value="@currency($order->pinjam->pk_kem)" disabled>
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
                                                                                <div class="col-sm-2 p-l-0">
                                                                                    <input
                                                                                        class="form-control form-control-sm @error('persentase') is-invalid @enderror"
                                                                                        name="persentase" type="text"
                                                                                        id="persentase"
                                                                                        value="{{ $order->pinjam->persentase }} %"
                                                                                        disabled>
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
                                                                            <div class="row mb-1">
                                                                                <label class="col-sm-6 col-form-label"
                                                                                    for="jumlah_angs">Jml
                                                                                    Angs</label>
                                                                                <div class="col-sm-3 p-l-0">
                                                                                    <input
                                                                                        class="form-control form-control-sm @error('jumlah_angs') is-invalid @enderror"
                                                                                        name="jumlah_angs" type="number"
                                                                                        id="jumlah_angs" readonly
                                                                                        value="{{ old('jumlah_angs', $order->pinjam->jumlah_angs) }}">
                                                                                    @error('jumlah_angs')
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
                                                                                        id="periode" readonly
                                                                                        value="{{ old('periode', $order->pinjam->periode) }}">
                                                                                    @error('periode')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="col p-l-0">
                                                                                    <select
                                                                                        class="form-select form-select-sm @error('per_p') is-invalid @enderror"
                                                                                        name="per_p" id="per_p" disabled>
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
                                                                                <div class="col-sm-2 px-0">
                                                                                    <input
                                                                                        class="form-control form-control-sm @error('bunga') is-invalid @enderror"
                                                                                        name="bunga" type="text" id="bunga"
                                                                                        readonly
                                                                                        value="{{ old('bunga', $order->pinjam->bunga) }}">
                                                                                    @error('bunga')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                                <label class="col col-form-label p-l-1">
                                                                                    %
                                                                                </label>
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
