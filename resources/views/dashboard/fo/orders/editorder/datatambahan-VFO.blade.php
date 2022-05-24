<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12 ">
            <div class="row">
                <div class="col-sm-12 p-r-0">

                    <div class="card border-0">

                        <!-- **************************************************************************************************8******  -->

                        <div class="card-body p-1 f-12">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <h6>Kerabat dalam kondisi darurat</h6>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="nama">Nama</label>
                                        <div class="col">
                                            <input
                                                class="form-control form-control-sm @error('nama') is-invalid @enderror"
                                                name="nama" type="text" id="nama"
                                                value="{{ old('nama', $order->anggota->adddata->nama) }}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="alamat_add">Alamat</label>
                                        <div class="col">
                                            <textarea class="form-control form-control-sm @error('alamat_add') is-invalid @enderror" name="alamat_add" type="text"
                                                id="alamat_add">{{ old('alamat_add', $order->anggota->adddata->alamat_add) }}</textarea>
                                            @error('alamat_add')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="rt_add">RT /
                                            RW</label>
                                        <label class="col-sm-4 col-form-label visually-hidden"
                                            for="rw_add">rw_add</label>
                                        <div class="col-sm-3">
                                            <input
                                                class="form-control form-control-sm @error('rt_add') is-invalid @enderror"
                                                name="rt_add" type="number" id="rt_add"
                                                value="{{ old('rt_add', $order->anggota->adddata->rt_add) }}">
                                            @error('rt_add')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-3">
                                            <input
                                                class="form-control form-control-sm @error('rw_add') is-invalid @enderror"
                                                name="rw_add" type="number" id="rw_add"
                                                value="{{ old('rw_add', $order->anggota->adddata->rw_add) }}">
                                            @error('rw_add')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="desa_kel_add">Desa
                                            Kel</label>
                                        <div class="col-sm-6">
                                            <input
                                                class="form-control form-control-sm @error('desa_kel_add') is-invalid @enderror"
                                                name="desa_kel_add" type="text" id="desa_kel_add"
                                                value="{{ old('desa_kel_add', $order->anggota->adddata->desa_kel_add) }}">
                                            @error('desa_kel_add')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="kec_add">Kecamatan</label>
                                        <div class="col-sm-6">
                                            <input
                                                class="form-control form-control-sm @error('kec_add') is-invalid @enderror"
                                                name="kec_add" type="text" id="kec_add"
                                                value="{{ old('kec_add', $order->anggota->adddata->kec_add) }}">
                                            @error('kec_add')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="kab_kota_add">Kabupaten
                                            / Kota</label>
                                        <div class="col-sm-6">
                                            <input
                                                class="form-control form-control-sm @error('kab_kota_add') is-invalid @enderror"
                                                name="kab_kota_add" type="text" id="kab_kota_add"
                                                value="{{ old('kab_kota_add', $order->anggota->adddata->kab_kota_add) }}">
                                            @error('kab_kota_add')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="provinsi_add">Provinsi</label>
                                        <div class="col-sm-6">
                                            <input
                                                class="form-control form-control-sm @error('provinsi_add') is-invalid @enderror"
                                                name="provinsi_add" type="text" id="provinsi_add"
                                                value="{{ old('provinsi_add', $order->anggota->adddata->provinsi_add) }}">
                                            @error('provinsi_add')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="kode_pos_add">Kode
                                            Pos</label>
                                        <div class="col-sm-6">
                                            <input
                                                class="form-control form-control-sm @error('kode_pos_add') is-invalid @enderror"
                                                name="kode_pos_add" type="number" id="kode_pos_add"
                                                value="{{ old('kode_pos_add', $order->anggota->adddata->kode_pos_add) }}">
                                            @error('kode_pos_add')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="telepon_rumah_add">Telepon
                                            Rumah</label>
                                        <div class="col-sm-6">
                                            <input
                                                class="form-control form-control-sm @error('telepon_rumah_add') is-invalid @enderror"
                                                name="telepon_rumah_add" type="number" id="telepon_rumah_add"
                                                value="{{ old('telepon_rumah_add', $order->anggota->adddata->telepon_rumah_add) }}">
                                            @error('telepon_rumah_add')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label class="col-sm-4 col-form-label" for="telepon_seluler_add">Telepon
                                            seluler</label>
                                        <div class="col-sm-6">
                                            <input
                                                class="form-control form-control-sm @error('telepon_seluler_add') is-invalid @enderror"
                                                name="telepon_seluler_add" type="number" id="telepon_seluler_add"
                                                value="{{ old('telepon_seluler_add', $order->anggota->adddata->telepon_seluler_add) }}">
                                            @error('telepon_seluler_add')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ***************** -->
                <!-- ***************** -->
            </div>
        </div>
    </div>
</div>
