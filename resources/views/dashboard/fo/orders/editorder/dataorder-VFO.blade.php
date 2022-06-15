<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xl-6">
            <div class="row">
                <div class="col-sm-12 p-r-0">

                    <div class="card border-0">
                        <!-- **************************************************************************************************8******  -->
                        <div class="card-body p-1 ">

                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="no_order">No
                                    Order</label>
                                <div class="col">
                                    <input class="form-control form-control-sm @error('no_order') is-invalid @enderror"
                                        name="no_order" type="text" id="no_order" readonly
                                        value="{{ old('no_order', $order->no_order) }}">
                                    @error('no_order')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="no_identitas">No
                                    Identitas</label>
                                <div class="col">
                                    <input
                                        class="form-control form-control-sm @error('no_identitas') is-invalid @enderror"
                                        name="no_identitas" type="number" id="no_identitas"
                                        value="{{ old('no_identitas', $order->anggota->identity->no_identitas) }}">
                                    @error('no_identitas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div> --}}
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="pekerjaan">Pekerjaan</label>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm @error('pekerjaan') is-invalid @enderror"
                                        name="pekerjaan" type="text" id="pekerjaan"
                                        value="{{ old('pekerjaan', $order->anggota->profession->pekerjaan) }}">
                                    @error('pekerjaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="ada_jaminan">Ada Jaminan</label>
                                <div class="col-sm-6">
                                    <select class="form-select" disabled>
                                        <option value="Ada Jaminan">
                                            Ada Jaminan
                                        </option>
                                        <option value="Tanpa Jaminan">
                                            Tanpa Jaminan
                                        </option>
                                    </select>
                                    @error('ada_jaminan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            {{-- <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="gelar">Gelar</label>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm @error('gelar') is-invalid @enderror"
                                        name="gelar" type="text" id="gelar"
                                        value="{{ old('gelar', $order->anggota->identity->gelar) }}">
                                    @error('gelar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div> --}}
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="kepemilikan">Kepemilikan</label>
                                <div class="col-sm-6">
                                    <select class="form-select @error('kepemilikan') is-invalid @enderror"
                                        name="kepemilikan" id="kepemilikan" value="">
                                        <option></option>
                                        <option value="Milik Sendiri"
                                            {{ old('kepemilikan', $order->jaminan->kepemilikan) == 'Milik Sendiri' ? 'selected' : '' }}>
                                            Milik Sendiri
                                        </option>
                                        <option value="Milik Suami"
                                            {{ old('kepemilikan', $order->jaminan->kepemilikan) == 'Milik Suami' ? 'selected' : '' }}>
                                            Milik Suami
                                        </option>
                                        <option value="Milik Istri"
                                            {{ old('kepemilikan', $order->jaminan->kepemilikan) == 'Milik Istri' ? 'selected' : '' }}>
                                            Milik Istri
                                        </option>
                                        <option value="Milik Keluarga"
                                            {{ old('kepemilikan', $order->jaminan->kepemilikan) == 'Milik Keluarga' ? 'selected' : '' }}>
                                            Milik Keluarga
                                        </option>
                                        <option value="Milik Orang Lain"
                                            {{ old('kepemilikan', $order->jaminan->kepemilikan) == 'Milik Orang Lain' ? 'selected' : '' }}>
                                            Milik Orang Lain
                                        </option>
                                    </select>
                                    @error('kepemilikan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="nama">Kepemilikan</label>
                                <div class="col-sm-4 p-l-0">
                                    <select class="form-select form-select-sm">
                                        <option>Milik Sendiri</option>
                                        <option>Milik Suami</option>
                                        <option>Milik Istri</option>
                                        <option>Milik Keluarga</option>
                                        <option>Milik Orang lain</option>
                                    </select>
                                </div>
                            </div> --}}
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="lama_kerja_tahun">Lama
                                    Bekerja</label>
                                <label class="col-sm-4 col-form-label visually-hidden"
                                    for="lama_kerja_bulan">lama_kerja_bulan</label>
                                <div class="col-sm-3">
                                    <input
                                        class="form-control form-control-sm @error('lama_kerja_tahun') is-invalid @enderror"
                                        name="lama_kerja_tahun" type="number" placeholder="Tahun" id="lama_kerja_tahun"
                                        value="{{ old('lama_kerja_tahun', $order->anggota->profession->lama_kerja_tahun) }}">
                                    @error('lama_kerja_tahun')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <input
                                        class="form-control form-control-sm @error('lama_kerja_bulan') is-invalid @enderror"
                                        name="lama_kerja_bulan" type="number" placeholder="Bulan" id="lama_kerja_bulan"
                                        max="11"
                                        value="{{ old('lama_kerja_bulan', $order->anggota->profession->lama_kerja_bulan) }}">
                                    @error('lama_kerja_bulan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="tanggungan">Tanggungan</label>
                                <div class="col-sm-3">
                                    <input
                                        class="form-control form-control-sm @error('tanggungan') is-invalid @enderror"
                                        name="tanggungan" type="number" id="tanggungan"
                                        value="{{ old('tanggungan', $order->anggota->profession->tanggungan) }}">
                                    @error('tanggungan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="omset_dagang">Omset
                                    Dagang</label>
                                <div class="col-sm-6">
                                    <input
                                        class="form-control form-control-sm @error('omset_dagang') is-invalid @enderror"
                                        name="omset_dagang" type="text" id="omset_dagang"
                                        value="{{ old('omset_dagang', $order->anggota->profession->omset_dagang) }}"
                                        type-currency="IDR" placeholder="Rp ">
                                    @error('omset_dagang')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="pendapatan">Pendapatan</label>
                                <div class="col-sm-6">
                                    <input
                                        class="form-control form-control-sm @error('pendapatan') is-invalid @enderror"
                                        name="pendapatan" type="text" id="pendapatan"
                                        value="{{ old('pendapatan', $order->anggota->profession->pendapatan) }}"
                                        type-currency="IDR" placeholder="Rp ">
                                    @error('pendapatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="gaji">Gaji</label>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm @error('gaji') is-invalid @enderror"
                                        name="gaji" type="text" id="gaji"
                                        value="{{ old('gaji', $order->anggota->profession->gaji) }}"
                                        type-currency="IDR" placeholder="Rp ">
                                    @error('gaji')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="pendapatan_psg">Pendapatan Psg</label>
                                <div class="col-sm-6">
                                    <input
                                        class="form-control form-control-sm @error('pendapatan_psg') is-invalid @enderror"
                                        name="pendapatan_psg" type="text" id="pendapatan_psg"
                                        value="{{ old('pendapatan_psg', $order->anggota->profession->pendapatan_psg) }}"
                                        type-currency="IDR" placeholder="Rp ">
                                    @error('pendapatan_psg')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="pendapatan_lain">Pendapatan Lain</label>
                                <div class="col-sm-6">
                                    <input
                                        class="form-control form-control-sm @error('pendapatan_lain') is-invalid @enderror"
                                        name="pendapatan_lain" type="text" id="pendapatan_lain"
                                        value="{{ old('pendapatan_lain', $order->anggota->profession->pendapatan_lain) }}"
                                        type-currency="IDR" placeholder="Rp ">
                                    @error('pendapatan_lain')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="biaya_bulanan">Biaya
                                    Bulanan</label>
                                <div class="col-sm-6">
                                    <input
                                        class="form-control form-control-sm @error('biaya_bulanan') is-invalid @enderror"
                                        name="biaya_bulanan" type="text" id="biaya_bulanan"
                                        value="{{ old('biaya_bulanan', $order->anggota->profession->biaya_bulanan) }}"
                                        type-currency="IDR" placeholder="Rp ">
                                    @error('biaya_bulanan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            {{-- <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="nama">Src Of Order</label>
                                <div class="col-sm-3 p-l-0">
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm" />
                                </div>
                                <div class="col-sm-5 p-l-0">
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm" />
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="nama">Src Of Booking</label>
                                <div class="col-sm-3 p-l-0">
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm" />
                                </div>
                                <div class="col-sm-5 p-l-0">
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm" />
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="nama">Outlet Ms</label>
                                <div class="col-sm-3 p-l-0">
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm" />
                                </div>
                                <div class="col-sm-5 p-l-0">
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm" />
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="nama">Mitra Sehati</label>
                                <div class="col-sm-4 p-l-0">
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm" />
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="nama">Nama Mitra</label>
                                <div class="col-sm-8 p-l-0">
                                    <input type="number" class="form-control form-control-sm" id="colFormLabelSm" />
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  --> --}}


                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- ************************************************************************************************* -->
        <!-- ************************************************************************************************* -->

        <div class="col-sm-12 col-xl-6">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-0">
                        <!-- **************************************************************************************************8******  -->
                        <div class="card-body p-1">
                            <!-- **************************************************************************************************8******  -->

                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="tgl_order">Tanggal Order</label>
                                <div class="col-sm-4">
                                    <input
                                        class="form-control form-control-sm @error('tgl_order') is-invalid @enderror"
                                        name="tgl_order" type="text" id="tgl_order" disabled
                                        value="{{ old('tgl_order', $order->created_at->format('d M Y')) }}">
                                    @error('tgl_order')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="keperluan">Keperluan</label>
                                <div class="col-sm-4">
                                    <select class="form-select @error('keperluan') is-invalid @enderror"
                                        name="keperluan" id="keperluan" value="{{ old('keperluan') }}">
                                        <option></option>
                                        <option value="Sendiri"
                                            {{ old('keperluan', $order->keperluan) == 'Sendiri' ? 'selected' : '' }}>
                                            Sendiri
                                        </option>
                                        <option value="Keluarga"
                                            {{ old('keperluan', $order->keperluan) == 'Keluarga' ? 'selected' : '' }}>
                                            Keluarga
                                        </option>
                                        <option value="Orang Lain"
                                            {{ old('keperluan', $order->keperluan) == 'Orang Lain' ? 'selected' : '' }}>
                                            Orang Lain
                                        </option>
                                    </select>
                                    @error('keperluan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="catatan">Catatan Keperluan Pinjaman</label>
                                <div class="col">
                                    <textarea class="form-control form-control-sm @error('catatan') is-invalid @enderror" name="catatan" type="text"
                                        id="catatan">{{ old('catatan', $order->catatan) }}</textarea>
                                    @error('catatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="buss_unit">Buss
                                    Unit</label>
                                <div class="col">
                                    <select class="form-select form-select-sm @error('buss_unit') is-invalid @enderror"
                                        name="buss_unit" id="buss_unit">
                                        <option></option>
                                        <option value="01 - Pinjaman Jaminan Motor"
                                            {{ old('buss_unit', $order->jaminan->buss_unit) == '01 - Pinjaman Jaminan Motor' ? 'selected' : '' }}>
                                            01 - Pinjaman Jaminan Motor
                                        </option>
                                        <option value="02 - Pinjaman Jaminan Mobil"
                                            {{ old('buss_unit', $order->jaminan->buss_unit) == '02 - Pinjaman Jaminan Mobil' ? 'selected' : '' }}>
                                            02 - Pinjaman Jaminan Mobil
                                        </option>
                                    </select>
                                    @error('buss_unit')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="catt_survey">Catt Survey</label>
                                <div class="col">
                                    <textarea class="form-control form-control-sm @error('catt_survey') is-invalid @enderror" name="catt_survey"
                                        type="text" id="catt_survey">{{ old('catt_survey', $order->catt_survey) }}</textarea>
                                    @error('catt_survey')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4 p-l-0">
                                <h6><u>Barang Transaksi/Produk</u></h6>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="barang">Barang</label>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm @error('barang') is-invalid @enderror"
                                        name="barang" type="tipe" id="barang"
                                        value="{{ old('barang', $order->jaminan->barang) }}">
                                    @error('barang')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="tipe">Tipe</label>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm @error('tipe') is-invalid @enderror"
                                        name="tipe" type="text" id="tipe"
                                        value="{{ old('tipe', $order->jaminan->tipe) }}">
                                    @error('tipe')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="tahun">Tahun</label>
                                <div class="col-sm-4">
                                    <input class="form-control form-control-sm @error('tahun') is-invalid @enderror"
                                        name="tahun" type="number" id="tahun"
                                        value="{{ old('tahun', $order->jaminan->tahun) }}">
                                    @error('tahun')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label class="visually-hidden" for="awalorakhir"></label>
                                <div class="col-sm-4">
                                    <select
                                        class="form-select form-select-sm @error('awalorakhir') is-invalid @enderror"
                                        name="awalorakhir" id="awalorakhir">
                                        <option></option>
                                        <option value="Awal"
                                            {{ old('awalorakhir', $order->jaminan->awalorakhir) == 'Awal' ? 'selected' : '' }}>
                                            Awal
                                        </option>
                                        <option value="Akhir"
                                            {{ old('awalorakhir', $order->jaminan->awalorakhir) == 'Akhir' ? 'selected' : '' }}>
                                            Akhir
                                        </option>
                                    </select>
                                    @error('awalorakhir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="harga_pasar">Harga Pasar</label>
                                <div class="col-sm-5">
                                    <input
                                        class="form-control form-control-sm @error('harga_pasar') is-invalid @enderror"
                                        name="harga_pasar" type="text" id="harga_pasar"
                                        value="{{ old('harga_pasar', $order->jaminan->harga_pasar) }}"
                                        type-currency="IDR" placeholder="Rp ">
                                    @error('harga_pasar')
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

            <div>

            </div>
        </div>
    </div>
