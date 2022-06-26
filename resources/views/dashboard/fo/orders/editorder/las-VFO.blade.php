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
                        <div class="card-body p-t-0 pb-3">
                            <!-- ***************** -->
                            <!-- ***************** -->
                            <div class="container p-l-0">

                                <div class="row mb-1">
                                    <label class="col-sm-4 col-form-label" for="sewa_rumah">Sewa Rumah</label>
                                    <div class="col-sm-5 p-l-0">
                                        <input
                                            class="form-control form-control-sm @error('sewa_rumah') is-invalid @enderror"
                                            name="sewa_rumah" type="text" id="sewa_rumah"
                                            value="{{ old('sewa_rumah', $order->las->sewa_rumah) }}"
                                            type-currency="IDR" placeholder="Rp ">
                                        @error('sewa_rumah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3 p-l-0">
                                        <select class="form-select form-select-sm @error('per') is-invalid @enderror"
                                            name="per" id="per">
                                            <option></option>
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
                                            <option></option>
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
                                            <option></option>
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
                                            <option></option>
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
                                            <option></option>
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
                                            <option></option>
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
                                            <option></option>
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
                                            <option></option>
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
                        <div class="card-body p-t-0 pb-5">
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
                                        <select
                                            class="form-select form-select-sm @error('rumah') is-invalid @enderror"
                                            name="rumah" id="rumah">
                                            <option></option>
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
                                            <option></option>
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
                                            <option></option>
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
                                <div class="row mb-1">
                                    <div class="col">

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

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header p-b-0">
                            <h6>Karakter</h6>
                        </div>
                        <div class="card-body p-t-0">
                            <ul class="nav nav-tabs nav-primary" id="pills-clrtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-clrhome-tab" data-bs-toggle="pill"
                                        href="#pills-clrhome" role="tab" aria-controls="pills-clrhome"
                                        aria-selected="true">Lingkungan 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-clrprofile-tab" data-bs-toggle="pill"
                                        href="#pills-clrprofile" role="tab" aria-controls="pills-clrprofile"
                                        aria-selected="false">Lingkungan 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-clrcontact-tab" data-bs-toggle="pill"
                                        href="#pills-clrcontact" role="tab" aria-controls="pills-clrcontact"
                                        aria-selected="false">Lingkungan 3</a>
                                </li>
                            </ul>
                            {{-- ===================== --}}
                            {{-- Lingkungan 1 --}}
                            {{-- ===================== --}}
                            <div class="tab-content" id="pills-clrtabContent">
                                <div class="tab-pane fade show active" id="pills-clrhome" role="tabpanel"
                                    aria-labelledby="pills-clrhome-tab">
                                    <p class="mb-0 m-t-30">

                                        {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="wrg_a1">Warga
                                            Asli</label>
                                        <div class="col-sm-2 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('wrg_a1') is-invalid @enderror"
                                                name="wrg_a1" id="wrg_a1">
                                                <option></option>
                                                <option value="Ya"
                                                    {{ old('wrg_a1', $order->lingkungan->wrg_a1) == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak"
                                                    {{ old('wrg_a1', $order->lingkungan->wrg_a1) == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="pkm1">Pernah Kredit
                                            Macet</label>
                                        <div class="col-sm-2 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('pkm1') is-invalid @enderror"
                                                name="pkm1" id="pkm1">
                                                <option></option>
                                                <option value="Ya"
                                                    {{ old('pkm1', $order->lingkungan->pkm1) == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak"
                                                    {{ old('pkm1', $order->lingkungan->pkm1) == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="rdl1">Reputasi di
                                            Lingkungan</label>
                                        <div class="col-sm-3 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('rdl1') is-invalid @enderror"
                                                name="rdl1" id="rdl1">
                                                <option></option>
                                                <option value="Baik"
                                                    {{ old('rdl1', $order->lingkungan->rdl1) == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Biasa Saja"
                                                    {{ old('rdl1', $order->lingkungan->rdl1) == 'Biasa Saja' ? 'selected' : '' }}>
                                                    Biasa Saja
                                                </option>
                                                <option value="Buruk"
                                                    {{ old('rdl1', $order->lingkungan->rdl1) == 'Buruk' ? 'selected' : '' }}>
                                                    Buruk
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="nm_nr1">Nama Narasumber
                                            1</label>
                                        <div class="col-sm-4 p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('nm_nr1') is-invalid @enderror"
                                                name="nm_nr1" type="text" id="nm_nr1"
                                                value="{{ old('nm_nr1', $order->lingkungan->nm_nr1) }}">
                                            @error('nm_nr1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="tlp_nr1">Tlp Narasumber
                                            1</label>
                                        <div class="col-sm-4 p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('tlp_nr1') is-invalid @enderror"
                                                name="tlp_nr1" type="text" id="tlp_nr1"
                                                value="{{ old('tlp_nr1', $order->lingkungan->tlp_nr1) }}">
                                            @error('tlp_nr1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end"
                                            for="hbng1">Hubungan</label>
                                        <div class="col-sm-3 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('hbng1') is-invalid @enderror"
                                                name="hbng1" id="hbng1">
                                                <option></option>
                                                <option value="Keluarga Dekat"
                                                    {{ old('hbng1', $order->lingkungan->hbng1) == 'Keluarga Dekat' ? 'selected' : '' }}>
                                                    Keluarga Dekat
                                                </option>
                                                <option value="Keluarga Jauh"
                                                    {{ old('hbng1', $order->lingkungan->hbng1) == 'Keluarga Jauh' ? 'selected' : '' }}>
                                                    Keluarga Jauh
                                                </option>
                                                <option value="Tetangga Saja"
                                                    {{ old('hbng1', $order->lingkungan->hbng1) == 'Tetangga Saja' ? 'selected' : '' }}>
                                                    Tetangga Saja
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    </p>
                                </div>

                                {{-- ===================== --}}
                                {{-- Lingkungan 2 --}}
                                {{-- ===================== --}}
                                <div class="tab-pane fade" id="pills-clrprofile" role="tabpanel"
                                    aria-labelledby="pills-clrprofile-tab">
                                    <p class="mb-0 m-t-30">
                                        {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="wrg_a2">Warga
                                            Asli</label>
                                        <div class="col-sm-2 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('wrg_a2') is-invalid @enderror"
                                                name="wrg_a2" id="wrg_a2">
                                                <option></option>
                                                <option value="Ya"
                                                    {{ old('wrg_a2', $order->lingkungan->wrg_a2) == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak"
                                                    {{ old('wrg_a2', $order->lingkungan->wrg_a2) == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="pkm2">Pernah Kredit
                                            Macet</label>
                                        <div class="col-sm-2 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('pkm2') is-invalid @enderror"
                                                name="pkm2" id="pkm2">
                                                <option></option>
                                                <option value="Ya"
                                                    {{ old('pkm2', $order->lingkungan->pkm2) == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak"
                                                    {{ old('pkm2', $order->lingkungan->pkm2) == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="rdl2">Reputasi di
                                            Lingkungan</label>
                                        <div class="col-sm-3 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('rdl2') is-invalid @enderror"
                                                name="rdl2" id="rdl2">
                                                <option></option>
                                                <option value="Baik"
                                                    {{ old('rdl2', $order->lingkungan->rdl2) == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Biasa Saja"
                                                    {{ old('rdl2', $order->lingkungan->rdl2) == 'Biasa Saja' ? 'selected' : '' }}>
                                                    Biasa Saja
                                                </option>
                                                <option value="Buruk"
                                                    {{ old('rdl2', $order->lingkungan->rdl2) == 'Buruk' ? 'selected' : '' }}>
                                                    Buruk
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="nm_nr2">Nama Narasumber
                                            2</label>
                                        <div class="col-sm-4 p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('nm_nr2') is-invalid @enderror"
                                                name="nm_nr2" type="text" id="nm_nr2"
                                                value="{{ old('nm_nr2', $order->lingkungan->nm_nr2) }}">
                                            @error('nm_nr2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="tlp_nr2">Tlp Narasumber
                                            2</label>
                                        <div class="col-sm-4 p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('tlp_nr2') is-invalid @enderror"
                                                name="tlp_nr2" type="text" id="tlp_nr2"
                                                value="{{ old('tlp_nr2', $order->lingkungan->tlp_nr2) }}">
                                            @error('tlp_nr2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end"
                                            for="hbng2">Hubungan</label>
                                        <div class="col-sm-3 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('hbng2') is-invalid @enderror"
                                                name="hbng2" id="hbng2">
                                                <option></option>
                                                <option value="Keluarga Dekat"
                                                    {{ old('hbng2', $order->lingkungan->hbng2) == 'Keluarga Dekat' ? 'selected' : '' }}>
                                                    Keluarga Dekat
                                                </option>
                                                <option value="Keluarga Jauh"
                                                    {{ old('hbng2', $order->lingkungan->hbng2) == 'Keluarga Jauh' ? 'selected' : '' }}>
                                                    Keluarga Jauh
                                                </option>
                                                <option value="Tetangga Saja"
                                                    {{ old('hbng2', $order->lingkungan->hbng2) == 'Tetangga Saja' ? 'selected' : '' }}>
                                                    Tetangga Saja
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                                {{-- ===================== --}}
                                {{-- Lingkungan 3 --}}
                                {{-- ===================== --}}
                                <div class="tab-pane fade" id="pills-clrcontact" role="tabpanel"
                                    aria-labelledby="pills-clrcontact-tab">
                                    <p class="mb-0 m-t-30">
                                        {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="wrg_a3">Warga
                                            Asli</label>
                                        <div class="col-sm-2 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('wrg_a3') is-invalid @enderror"
                                                name="wrg_a3" id="wrg_a3">
                                                <option></option>
                                                <option value="Ya"
                                                    {{ old('wrg_a3', $order->lingkungan->wrg_a3) == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak"
                                                    {{ old('wrg_a3', $order->lingkungan->wrg_a3) == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="pkm3">Pernah Kredit
                                            Macet</label>
                                        <div class="col-sm-2 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('pkm3') is-invalid @enderror"
                                                name="pkm3" id="pkm3">
                                                <option></option>
                                                <option value="Ya"
                                                    {{ old('pkm3', $order->lingkungan->pkm3) == 'Ya' ? 'selected' : '' }}>
                                                    Ya
                                                </option>
                                                <option value="Tidak"
                                                    {{ old('pkm3', $order->lingkungan->pkm3) == 'Tidak' ? 'selected' : '' }}>
                                                    Tidak
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="rdl3">Reputasi di
                                            Lingkungan</label>
                                        <div class="col-sm-3 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('rdl3') is-invalid @enderror"
                                                name="rdl3" id="rdl3">
                                                <option></option>
                                                <option value="Baik"
                                                    {{ old('rdl3', $order->lingkungan->rdl3) == 'Baik' ? 'selected' : '' }}>
                                                    Baik
                                                </option>
                                                <option value="Biasa Saja"
                                                    {{ old('rdl3', $order->lingkungan->rdl3) == 'Biasa Saja' ? 'selected' : '' }}>
                                                    Biasa Saja
                                                </option>
                                                <option value="Buruk"
                                                    {{ old('rdl3', $order->lingkungan->rdl3) == 'Buruk' ? 'selected' : '' }}>
                                                    Buruk
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="nm_nr3">Nama Narasumber
                                            3</label>
                                        <div class="col-sm-4 p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('nm_nr3') is-invalid @enderror"
                                                name="nm_nr3" type="text" id="nm_nr3"
                                                value="{{ old('nm_nr3', $order->lingkungan->nm_nr3) }}">
                                            @error('nm_nr3')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end" for="tlp_nr3">Tlp Narasumber
                                            3</label>
                                        <div class="col-sm-4 p-l-0">
                                            <input
                                                class="form-control form-control-sm @error('tlp_nr3') is-invalid @enderror"
                                                name="tlp_nr3" type="text" id="tlp_nr3"
                                                value="{{ old('tlp_nr3', $order->lingkungan->tlp_nr3) }}">
                                            @error('tlp_nr3')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- =============================================================== --}}
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label text-end"
                                            for="hbng3">Hubungan</label>
                                        <div class="col-sm-3 p-l-0">
                                            <select
                                                class="form-select form-select-sm @error('hbng3') is-invalid @enderror"
                                                name="hbng3" id="hbng3">
                                                <option></option>
                                                <option value="Keluarga Dekat"
                                                    {{ old('hbng3', $order->lingkungan->hbng3) == 'Keluarga Dekat' ? 'selected' : '' }}>
                                                    Keluarga Dekat
                                                </option>
                                                <option value="Keluarga Jauh"
                                                    {{ old('hbng3', $order->lingkungan->hbng3) == 'Keluarga Jauh' ? 'selected' : '' }}>
                                                    Keluarga Jauh
                                                </option>
                                                <option value="Tetangga Saja"
                                                    {{ old('hbng3', $order->lingkungan->hbng3) == 'Tetangga Saja' ? 'selected' : '' }}>
                                                    Tetangga Saja
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>




<!-- ************************************************************************************************* -->
<!-- ************************************************************************************************* -->
