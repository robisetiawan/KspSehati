<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

            <!-- ***************** -->
            <!-- ***************** -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header p-b-0">
                            <h6>Kapital</h6>
                        </div>
                        <div class="card-body p-t-0">
                            <!-- ***************** -->
                            <!-- ***************** -->
                            <div class="container p-l-0">

                                <div class="row mb-1">
                                    <label class="col-sm-4 col-form-label" for="sewa_rumah">Sewa Rumah (Rp)</label>
                                    <div class="col-sm-3 p-l-0">
                                        <input
                                            class="form-control form-control-sm @error('sewa_rumah') is-invalid @enderror"
                                            name="sewa_rumah" type="text" id="sewa_rumah"
                                            value="{{ old('sewa_rumah', $order->las->sewa_rumah) }}">
                                        @error('sewa_rumah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3 p-l-0">
                                        <select class="form-select form-select-sm @error('per') is-invalid @enderror"
                                            name="per" id="per">
                                            <option value="Bulan"
                                                {{ old('faktur', $order->las->per) == 'Bulan' ? 'selected' : '' }}>
                                                Bulan
                                            </option>
                                            <option value="Tahun"
                                                {{ old('faktur', $order->las->per) == 'Tahun' ? 'selected' : '' }}>
                                                Tahun
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-sm-3 col-form-label" for="nama">Mobil</label>
                                    <div class="col-sm-3 p-l-0">
                                        <select class="form-select form-select-sm @error('mobil') is-invalid @enderror"
                                            name="mobil" id="mobil">
                                            <option value="Ada"
                                                {{ old('faktur', $order->las->mobil) == 'Ada' ? 'selected' : '' }}>
                                                Ada
                                            </option>
                                            <option value="Tidak Ada"
                                                {{ old('faktur', $order->las->mobil) == 'Tidak Ada' ? 'selected' : '' }}>
                                                Tidak Ada
                                            </option>
                                        </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label" for="nama">Motor</label>
                                    <div class="col-sm-3 p-l-0">
                                        <select class="form-select form-select-sm @error('motor') is-invalid @enderror"
                                            name="motor" id="motor">
                                            <option value="Ada"
                                                {{ old('faktur', $order->las->motor) == 'Ada' ? 'selected' : '' }}>
                                                Ada
                                            </option>
                                            <option value="Tidak Ada"
                                                {{ old('faktur', $order->las->motor) == 'Tidak Ada' ? 'selected' : '' }}>
                                                Tidak Ada
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-sm-3 col-form-label" for="nama">Kulkas</label>
                                    <div class="col-sm-3 p-l-0">
                                        <select class="form-select form-select-sm @error('kulkas') is-invalid @enderror"
                                            name="kulkas" id="kulkas">
                                            <option value="Ada"
                                                {{ old('faktur', $order->las->kulkas) == 'Ada' ? 'selected' : '' }}>
                                                Ada
                                            </option>
                                            <option value="Tidak Ada"
                                                {{ old('faktur', $order->las->kulkas) == 'Tidak Ada' ? 'selected' : '' }}>
                                                Tidak Ada
                                            </option>
                                        </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label" for="nama">TV</label>
                                    <div class="col-sm-3 p-l-0">
                                        <select class="form-select form-select-sm @error('tv') is-invalid @enderror"
                                            name="tv" id="tv">
                                            <option value="Ada"
                                                {{ old('faktur', $order->las->tv) == 'Ada' ? 'selected' : '' }}>
                                                Ada
                                            </option>
                                            <option value="Tidak Ada"
                                                {{ old('faktur', $order->las->tv) == 'Tidak Ada' ? 'selected' : '' }}>
                                                Tidak Ada
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-sm-3 col-form-label" for="nama">Ac</label>
                                    <div class="col-sm-3 p-l-0">
                                        <select class="form-select form-select-sm @error('ac') is-invalid @enderror"
                                            name="ac" id="ac">
                                            <option value="Ada"
                                                {{ old('faktur', $order->las->ac) == 'Ada' ? 'selected' : '' }}>
                                                Ada
                                            </option>
                                            <option value="Tidak Ada"
                                                {{ old('faktur', $order->las->ac) == 'Tidak Ada' ? 'selected' : '' }}>
                                                Tidak Ada
                                            </option>
                                        </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label" for="nama">DVD</label>
                                    <div class="col-sm-3 p-l-0">
                                        <select class="form-select form-select-sm @error('dvd') is-invalid @enderror"
                                            name="dvd" id="dvd">
                                            <option value="Ada"
                                                {{ old('faktur', $order->las->dvd) == 'Ada' ? 'selected' : '' }}>
                                                Ada
                                            </option>
                                            <option value="Tidak Ada"
                                                {{ old('faktur', $order->las->dvd) == 'Tidak Ada' ? 'selected' : '' }}>
                                                Tidak Ada
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-sm-3 col-form-label" for="nama">Furniture</label>
                                    <div class="col-sm-3 p-l-0">
                                        <select
                                            class="form-select form-select-sm @error('furniture') is-invalid @enderror"
                                            name="furniture" id="furniture">
                                            <option value="Ada"
                                                {{ old('faktur', $order->las->furniture) == 'Ada' ? 'selected' : '' }}>
                                                Ada
                                            </option>
                                            <option value="Tidak Ada"
                                                {{ old('faktur', $order->las->furniture) == 'Tidak Ada' ? 'selected' : '' }}>
                                                Tidak Ada
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <!-- ***************** -->
                            <!-- ***************** -->

                        </div>
                    </div>
                </div>


                <!-- ***************** -->
                <!-- ***************** -->


                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header p-b-0">
                            <h6>Kondisi</h6>
                        </div>
                        <div class="card-body p-t-0">
                            <!-- ***************** -->
                            <!-- ***************** -->
                            <div class="container p-l-0">

                                <div class="row mb-1">
                                    <label class="col-sm-6 col-form-label" for="jarak_rk">Jarak Rumah-Kantor</label>
                                    <div class="col-sm-2 p-l-0">
                                        <input
                                            class="form-control form-control-sm @error('jarak_rk') is-invalid @enderror"
                                            name="jarak_rk" type="text" id="jarak_rk"
                                            value="{{ old('jarak_rk', $order->las->jarak_rk) }}">
                                        @error('jarak_rk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <label class="col-sm-2 col-form-label" for="nama">KM</label>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-sm-6 col-form-label" for="rumah">Rumah</label>
                                    <div class="col-sm-6 p-l-0">
                                        <select class="form-select form-select-sm @error('rumah') is-invalid @enderror"
                                            name="rumah" id="rumah">
                                            <option value="Semi Permanen"
                                                {{ old('rumah', $order->las->rumah) == 'Semi Permanen' ? 'selected' : '' }}>
                                                Semi Permanen
                                            </option>
                                            <option value="Permanen"
                                                {{ old('rumah', $order->las->rumah) == 'Permanen' ? 'selected' : '' }}>
                                                Permanen
                                            </option>
                                            <option value="Non Permanen (Papan)"
                                                {{ old('rumah', $order->las->rumah) == 'Non Permanen (Papan)' ? 'selected' : '' }}>
                                                Non Permanen (Papan)
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- ***************** -->
                                <!-- ***************** -->
                                <div class="row mb-1">
                                    <label class="col-sm-6 col-form-label" for="tetangga_kanan">Tetangga Kanan</label>
                                    <div class="col-sm-6 p-l-0">
                                        <select
                                            class="form-select form-select-sm @error('tetangga_kanan') is-invalid @enderror"
                                            name="tetangga_kanan" id="tetangga_kanan">
                                            <option value="Lebih dari 5 rumah"
                                                {{ old('faktur', $order->las->tetangga_kanan) == 'Lebih dari 5 rumah' ? 'selected' : '' }}>
                                                Lebih dari 5 rumah
                                            </option>
                                            <option value="Kurang dari 5 rumah"
                                                {{ old('faktur', $order->las->tetangga_kanan) == 'Kurang dari 5 rumah' ? 'selected' : '' }}>
                                                Kurang dari 5 rumah
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- ***************** -->
                                <!-- ***************** -->
                                <div class="row mb-1">
                                    <label class="col-sm-6 col-form-label" for="tetangga_kiri">Tetangga Kiri</label>
                                    <div class="col-sm-6 p-l-0">
                                        <select
                                            class="form-select form-select-sm @error('tetangga_kiri') is-invalid @enderror"
                                            name="tetangga_kiri" id="tetangga_kiri">
                                            <option value="Lebih dari 5 rumah"
                                                {{ old('faktur', $order->las->tetangga_kiri) == 'Lebih dari 5 rumah' ? 'selected' : '' }}>
                                                Lebih dari 5 rumah
                                            </option>
                                            <option value="Kurang dari 5 rumah"
                                                {{ old('faktur', $order->las->tetangga_kiri) == 'Kurang dari 5 rumah' ? 'selected' : '' }}>
                                                Kurang dari 5 rumah
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- ***************** -->
                                <!-- ***************** -->

                                <!-- ***************** -->
                                <!-- ***************** -->
                            </div>
                            <!-- ***************** -->
                            <!-- ***************** -->
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
</div>




<!-- ************************************************************************************************* -->
<!-- ************************************************************************************************* -->
