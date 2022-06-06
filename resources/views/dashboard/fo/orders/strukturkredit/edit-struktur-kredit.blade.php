<div class="container-fluid mt-3 px-0">
    <div class="row">
        <div class="col">
            {{-- Card --}}
            {{-- <form class="form theme-form"> --}}
            <div class="card mb-1">

                {{-- cardBody --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <!-- ****************************************************************************************** -->
                            <div class="row justify-content-md-center">
                                <div class="col-sm-5">
                                    <div class="row mb-1">
                                        <label for="noorder" class="col-sm-5 col-form-label text-end">No Order</label>
                                        <div class="col p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('noorder ') is-invalid @enderror"
                                                name="noorder" type="text" id="noorder" value="{{ $order->no_order }}"
                                                readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 p-l-0">
                                    <input class="form-control form-control-sm @error('nama_ang ') is-invalid @enderror"
                                        name="nama_ang" type="text" id="nama_ang"
                                        value="{{ $order->anggota->user->name }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <form class="form theme-form" method="POST" action="/dashboard/pinjaman"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @forelse ($orderrders as $order) --}}
            <div class="card">
                <div class="card-body f-12">
                    @error('anggota_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class=" row mb-1">
                        <label class="col-sm-4 col-form-label visually-hidden" for="anggota_id">No
                            Anggota</label>
                        <div class="col p-l-0">
                            <input class="form-control form-control-sm @error('anggota_id ') is-invalid @enderror"
                                name="anggota_id" type="hidden" id="anggota_id" value="{{ $order->anggota->id }}"
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
                                <label for="nilai_pinj" class="col-sm-5 col-form-label">Nilai
                                    Pinjaman</label>
                                <div class="col p-l-0">
                                    <input
                                        class="form-control form-control-sm @error('nilai_pinj') is-invalid @enderror"
                                        name="nilai_pinj" type="text" id="nilai_pinj"
                                        value="{{ old('nilai_pinj', $order->pinjam->nilai_pinj) }}"
                                        type-currency="IDR" placeholder="Rp ">
                                    @error('nilai_pinj')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label class="col-sm-5 col-form-label" for="admin_total">Admin
                                    Total</label>
                                <div class="col-sm-5 p-l-0">
                                    <input
                                        class="form-control form-control-sm @error('admin_total') is-invalid @enderror"
                                        name="admin_total" type="text" id="admin_total"
                                        value="{{ old('admin_total', $order->pinjam->admin_total) }}"
                                        type-currency="IDR" placeholder="Rp ">
                                    @error('admin_total')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label for="pk_kem" class="col-sm-5 col-form-label">Pokok
                                    Pengembalian</label>
                                <div class="col p-l-0">
                                    <input class="form-control form-control-sm @error('pk_kem') is-invalid @enderror"
                                        name="pk_kem" type="text" id="pk_kem" value="@currency($order->pinjam->pk_kem)" disabled>
                                    @error('pk_kem')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label for="persentase" class="col-sm-5 col-form-label">Persentase</label>
                                <div class="col-sm-2 p-l-0">
                                    <input
                                        class="form-control form-control-sm @error('persentase') is-invalid @enderror"
                                        name="persentase" type="text" id="persentase"
                                        value="{{ $order->pinjam->persentase }} %" disabled>
                                    @error('persentase')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label for="tipe_angs" class="col-sm-5 col-form-label">Tipe
                                    Angsuran</label>
                                <div class="col-sm-4 p-l-0">
                                    <select class="form-select form-select-sm @error('tipe_angs') is-invalid @enderror"
                                        name="tipe_angs" id="tipe_angs" disabled>
                                        <option value="Tetap" {{ old('tipe_angs') == 'Tetap' ? 'selected' : '' }}>
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
                                <label class="col-sm-5 col-form-label" for="jumlah_angs">Jml
                                    Angs</label>
                                <div class="col-sm-3 p-l-0">
                                    <input
                                        class="form-control form-control-sm @error('jumlah_angs') is-invalid @enderror"
                                        name="jumlah_angs" type="number" id="jumlah_angs"
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
                                <label class="col-sm-5 col-form-label" for="periode">Periode
                                </label>
                                <label class="col-sm-5 col-form-label visually-hidden" for="per_p">Per
                                </label>
                                <div class="col-sm-2 p-l-0">
                                    <input class="form-control form-control-sm @error('periode') is-invalid @enderror"
                                        name="periode" type="text" id="periode"
                                        value="{{ old('periode', $order->pinjam->periode) }}">
                                    @error('periode')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col p-l-0">
                                    <select class="form-select form-select-sm @error('per_p') is-invalid @enderror"
                                        name="per_p" id="per_p" disabled>
                                        <option value="Bulan" {{ old('per_p') == 'Bulan' ? 'selected' : '' }}>
                                            Bulan
                                        </option>
                                        <option value="Tahun" {{ old('per_p') == 'Tahun' ? 'selected' : '' }}>
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
                                <label class="col-sm-5 col-form-label" for="angsuran">Angsuran
                                </label>
                                <div class="col-sm-4 p-l-0">
                                    <input class="form-control form-control-sm @error('angsuran') is-invalid @enderror"
                                        name="angsuran" type="text" id="angsuran" value="@currency($order->pinjam->angsuran)" disabled>
                                    @error('angsuran')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label class="col-sm-5 col-form-label" for="bunga">Bunga
                                </label>
                                <div class="col-sm-2 px-0">
                                    <input class="form-control form-control-sm @error('bunga') is-invalid @enderror"
                                        name="bunga" type="text" id="bunga"
                                        value="{{ old('bunga', $order->pinjam->bunga) }}">
                                    @error('bunga')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label class="col col-form-label p-l-1"> %
                                </label>
                            </div>


                            <!-- ****************************************************************************************** -->

                        </div>

                        <div class="col">
                            {{-- Right Coloum --}}
                            <div class="row mb-1">
                                <label class="col-sm-6 col-form-label" for="nama">
                                    Harga Acuan Pinjaman</label>
                                <div class="col-sm-6 p-l-0">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="@currency($order->pinjam->harga_acuan)" disabled />
                                </div>
                            </div>
                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label class="col-sm-6 col-form-label" for="nama">
                                    Bunga Margin</label>
                                <div class="col-sm-6 p-l-0">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="@currency($order->pinjam->bunga_margin)" disabled />
                                </div>
                            </div>
                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label class="col-sm-6 col-form-label" for="nama">
                                    Pokok + Margin</label>
                                <div class="col-sm-6 p-l-0">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="@currency($order->pinjam->pk_marg)" disabled />
                                </div>
                            </div>
                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label class="col-sm-6 col-form-label" for="nama">
                                    Pinjaman Terakhir</label>
                                <div class="col-sm-6 p-l-0">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="@currency($pinlatest->nilai_pinj)" disabled />
                                </div>
                            </div>
                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label class="col-sm-6 col-form-label" for="simp_pk">
                                    Simpanan Pokok</label>
                                <div class="col-sm-6 p-l-0">
                                    <input type="text" class="form-control form-control-sm" id="simp_pk"
                                        value="@currency($order->anggota->simpkok)" disabled />
                                </div>
                            </div>
                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label class="col-sm-6 col-form-label" for="nama">
                                    Admin</label>
                                <div class="col-sm-6 p-l-0">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="@currency($order->pinjam->admin_total)" disabled />
                                </div>
                            </div>
                            <!-- ****************************************************************************************** -->
                            <div class="row mb-1">
                                <label class="col-sm-6 col-form-label" for="nama">
                                    Nilai yang diterima</label>
                                <div class="col-sm-6 p-l-0">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="@currency($order->pinjam->nilai_pinj)" disabled />
                                </div>
                            </div>

                        </div>

                        {{-- EndRight Coloum --}}
                    </div>
                </div>
            </div>
            {{-- endCard --}}
        </div>
    </div>
</div>
