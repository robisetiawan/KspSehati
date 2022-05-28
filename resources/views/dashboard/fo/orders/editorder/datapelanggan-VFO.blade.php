<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12 col-xl-6">
            <div class="row">
                <div class="col-sm-12 p-r-0">

                    <div class="card border-0">
                        <!-- **************************************************************************************************8******  -->
                        <div class="card-body p-1 ">

                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="no_anggota">No Anggota</label>
                                <div class="col">
                                    <input
                                        class="form-control form-control-sm @error('no_anggota') is-invalid @enderror"
                                        name="no_anggota" type="text" id="no_anggota" readonly
                                        value="{{ old('no_anggota', $order->anggota->no_anggota) }}">
                                    @error('no_anggota')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="created_at">Entry Date</label>
                                <div class="col">
                                    <input
                                        class="form-control form-control-sm @error('created_at') is-invalid @enderror"
                                        name="created_at" type="text" id="created_at" readonly
                                        value="{{ old('created_at', $order->anggota->created_at->format('d M Y')) }}">
                                    @error('created_at')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="name">Nama</label>
                                <div class="col">
                                    <input class="form-control form-control-sm @error('name') is-invalid @enderror"
                                        name="name" type="text" id="name"
                                        value="{{ old('name', $order->anggota->user->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="nama_panggilan">Nama Panggilan</label>
                                <div class="col">
                                    <input
                                        class="form-control form-control-sm @error('nama_panggilan') is-invalid @enderror"
                                        name="nama_panggilan" type="text" id="nama_panggilan"
                                        value="{{ old('nama_panggilan', $order->anggota->nama_panggilan) }}">
                                    @error('nama_panggilan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="jenis_kelamin">Jenis
                                    Kelamin</label>
                                <div class="col">
                                    <select class="form-select @error('jenis_kelamin') is-invalid @enderror"
                                        name="jenis_kelamin" id="jenis_kelamin">
                                        <option value="Laki-laki"
                                            {{ old('jenis_kelamin', $order->anggota->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-laki
                                        </option>
                                        <option value="Perempuan"
                                            {{ old('jenis_kelamin', $order->anggota->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="tempat_lahir">TTL</label>
                                <label class="col-sm-4 col-form-label visually-hidden"
                                    for="tanggal_lahir">tanggal_lahir</label>
                                <div class="col">
                                    <input
                                        class="form-control form-control-sm @error('tempat_lahir') is-invalid @enderror"
                                        name="tempat_lahir" type="text" id="tempat_lahir"
                                        value="{{ old('tempat_lahir', $order->anggota->tempat_lahir) }}">
                                    @error('tempat_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input
                                        class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror"
                                        name="tanggal_lahir" type="date" id="tanggal_lahir"
                                        value="{{ old('tanggal_lahir', $order->anggota->tanggal_lahir) }}">
                                    @error('tanggal_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="type_identitas">Type
                                    Identitas</label>
                                <div class="col-sm-3">
                                    <select class="form-select @error('type_identitas') is-invalid @enderror"
                                        name="type_identitas" id="type_identitas" value="">
                                        <option value="KTP"
                                            {{ old('type_identitas', $order->anggota->identity->type_identitas) == 'KTP' ? 'selected' : '' }}>
                                            KTP
                                        </option>
                                        <option value="SIM"
                                            {{ old('type_identitas', $order->anggota->identity->type_identitas) == 'SIM' ? 'selected' : '' }}>
                                            SIM</option>
                                        <option value="Domisili"
                                            {{ old('type_identitas', $order->anggota->identity->type_identitas) == 'Domisili' ? 'selected' : '' }}>
                                            Domisili</option>
                                    </select>
                                    @error('type_identitas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="no_identitas">No
                                    Identitas</label>
                                <div class="col">
                                    <input
                                        class="form-control form-control-sm @error('no_identitas') is-invalid @enderror"
                                        name="no_identitas" type="text" id="no_identitas"
                                        value="{{ old('no_identitas', $order->anggota->identity->no_identitas) }}">
                                    @error('no_identitas')
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

        <!-- ************************************************************************************************* -->
        <!-- ************************************************************************************************* -->

        <div class="col-sm-12 col-xl-6">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-0">
                        <!-- **************************************************************************************************8******  -->
                        <div class="card-body p-1">
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="nama_ibu">Nama
                                    Ibu</label>
                                <div class="col">
                                    <input class="form-control form-control-sm @error('nama_ibu') is-invalid @enderror"
                                        name="nama_ibu" type="text" id="nama_ibu"
                                        value="{{ old('nama_ibu', $order->anggota->nama_ibu) }}">
                                    @error('nama_ibu')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="warganegara">Warganegara</label>
                                <div class="col-sm-3">
                                    <select class="form-select @error('warganegara') is-invalid @enderror"
                                        name="warganegara" id="warganegara" value="">
                                        <option value="WNI"
                                            {{ old('warganegara', $order->anggota->identity->warganegara) == 'WNI' ? 'selected' : '' }}>
                                            WNI
                                        </option>
                                        <option value="WNA"
                                            {{ old('warganegara', $order->anggota->identity->warganegara) == 'WNA' ? 'selected' : '' }}>
                                            WNA
                                        </option>
                                    </select>
                                    @error('warganegara')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="gol_darah">Gol
                                    Darah</label>
                                <div class="col-sm-3">
                                    <select class="form-select @error('gol_darah') is-invalid @enderror"
                                        name="gol_darah" id="gol_darah" value="">
                                        <option value="A"
                                            {{ old('gol_darah', $order->anggota->identity->gol_darah) == 'A' ? 'selected' : '' }}>
                                            A
                                        </option>
                                        <option value="B"
                                            {{ old('gol_darah', $order->anggota->identity->gol_darah) == 'B' ? 'selected' : '' }}>
                                            B
                                        </option>
                                        <option value="AB"
                                            {{ old('gol_darah', $order->anggota->identity->gol_darah) == 'AB' ? 'selected' : '' }}>
                                            AB
                                        </option>
                                        <option value="O"
                                            {{ old('gol_darah', $order->anggota->identity->gol_darah) == 'O' ? 'selected' : '' }}>
                                            O
                                        </option>
                                    </select>
                                    @error('gol_darah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="agama">Agama</label>
                                <div class="col-sm-4">
                                    <select class="form-select @error('agama') is-invalid @enderror" name="agama"
                                        id="agama" value="">
                                        <option value="Islam"
                                            {{ old('agama', $order->anggota->identity->agama) == 'Islam' ? 'selected' : '' }}>
                                            Islam
                                        </option>
                                        <option value="Kristen"
                                            {{ old('agama', $order->anggota->identity->agama) == 'Kristen' ? 'selected' : '' }}>
                                            Kristen
                                        </option>
                                        <option value="Katolik"
                                            {{ old('agama', $order->anggota->identity->agama) == 'Katolik' ? 'selected' : '' }}>
                                            Katolik
                                        </option>
                                        <option value="Hindu"
                                            {{ old('agama', $order->anggota->identity->agama) == 'Hindu' ? 'selected' : '' }}>
                                            Hindu
                                        </option>
                                        <option value="Buddha"
                                            {{ old('agama', $order->anggota->identity->agama) == 'Buddha' ? 'selected' : '' }}>
                                            Buddha
                                        </option>
                                        <option value="Khonghucu"
                                            {{ old('agama', $order->anggota->identity->agama) == 'Khonghucu' ? 'selected' : '' }}>
                                            Khonghucu
                                        </option>
                                    </select>
                                    @error('agama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="pendidikan">Pendidikan</label>
                                <div class="col-sm-4">
                                    <select class="form-select @error('pendidikan') is-invalid @enderror"
                                        name="pendidikan" id="pendidikan" value="">
                                        <option value="SD"
                                            {{ old('pendidikan', $order->anggota->identity->pendidikan) == 'SD' ? 'selected' : '' }}>
                                            SD
                                        </option>
                                        <option value="SMP"
                                            {{ old('pendidikan', $order->anggota->identity->pendidikan) == 'SMP' ? 'selected' : '' }}>
                                            SMP
                                        </option>
                                        <option value="SMA/SMK"
                                            {{ old('pendidikan', $order->anggota->identity->pendidikan) == 'SMA/SMK' ? 'selected' : '' }}>
                                            SMA/SMK
                                        </option>
                                        <option value="Diploma 1"
                                            {{ old('pendidikan', $order->anggota->identity->pendidikan) == 'Diploma 1' ? 'selected' : '' }}>
                                            Diploma 1</option>
                                        <option value="Diploma 2"
                                            {{ old('pendidikan', $order->anggota->identity->pendidikan) == 'Diploma 2' ? 'selected' : '' }}>
                                            Diploma 2</option>
                                        <option value="Diploma 3"
                                            {{ old('pendidikan', $order->anggota->identity->pendidikan) == 'Diploma 3' ? 'selected' : '' }}>
                                            Diploma 3</option>
                                        <option value="Diploma 4"
                                            {{ old('pendidikan', $order->anggota->identity->pendidikan) == 'Diploma 4' ? 'selected' : '' }}>
                                            Diploma 4</option>
                                        <option value="Sarjana S1"
                                            {{ old('pendidikan', $order->anggota->identity->pendidikan) == 'Sarjana S1' ? 'selected' : '' }}>
                                            Sarjana S1</option>
                                        <option value="Megister"
                                            {{ old('pendidikan', $order->anggota->identity->pendidikan) == 'Megister' ? 'selected' : '' }}>
                                            Megister
                                        </option>
                                        <option value="Doktor"
                                            {{ old('pendidikan', $order->anggota->identity->pendidikan) == 'Doktor' ? 'selected' : '' }}>
                                            Doktor
                                        </option>
                                    </select>
                                    @error('pendidikan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="status_rumah">Status
                                    Rumah</label>
                                <div class="col-sm-6">
                                    <select class="form-select @error('status_rumah') is-invalid @enderror"
                                        name="status_rumah" id="status_rumah" value="">
                                        <option value="Rumah Sendiri"
                                            {{ old('status_rumah', $order->anggota->identity->status_rumah) == 'Rumah Sendiri' ? 'selected' : '' }}>
                                            Rumah Sendiri
                                        </option>
                                        <option value="Rumah Orang tua"
                                            {{ old('status_rumah', $order->anggota->identity->status_rumah) == 'Rumah Orang tua' ? 'selected' : '' }}>
                                            Rumah Orang tua
                                        </option>
                                        <option value="Rumah Dinas"
                                            {{ old('status_rumah', $order->anggota->identity->status_rumah) == 'Rumah Dinas' ? 'selected' : '' }}>
                                            Rumah Dinas</option>
                                        <option value="Rumah Sewa/Kontrak"
                                            {{ old('status_rumah', $order->anggota->identity->status_rumah) == 'Rumah Sewa/Kontrak' ? 'selected' : '' }}>
                                            Rumah Sewa/Kontrak
                                        </option>
                                        <option value="Kost"
                                            {{ old('status_rumah', $order->anggota->identity->status_rumah) == 'Kost' ? 'selected' : '' }}>
                                            Kost
                                        </option>
                                        <option value="Rumah Status Kredit"
                                            {{ old('status_rumah', $order->anggota->identity->status_rumah) == 'Rumah Status Kredit' ? 'selected' : '' }}>
                                            Rumah Status Kredit
                                        </option>
                                        <option value="Rumah Keluarga"
                                            {{ old('status_rumah', $order->anggota->identity->status_rumah) == 'Rumah Keluarga' ? 'selected' : '' }}>
                                            Rumah Keluarga
                                        </option>
                                    </select>
                                    @error('status_rumah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="telepon_rumah">Telepon
                                    Rumah</label>
                                <div class="col">
                                    <input
                                        class="form-control form-control-sm @error('telepon_rumah') is-invalid @enderror"
                                        name="telepon_rumah" type="number" id="telepon_rumah"
                                        value="{{ old('telepon_rumah', $order->anggota->telepon_rumah) }}">
                                    @error('telepon_rumah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="telepon_seluler">Telepon
                                    Seluler</label>
                                <div class="col">
                                    <input
                                        class="form-control form-control-sm @error('telepon_seluler') is-invalid @enderror"
                                        name="telepon_seluler" type="number" id="telepon_seluler"
                                        value="{{ old('telepon_seluler', $order->anggota->telepon_seluler) }}">
                                    @error('telepon_seluler')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="telepon_kantor">Telepon
                                    Kantor</label>
                                <div class="col">
                                    <input
                                        class="form-control form-control-sm @error('telepon_kantor') is-invalid @enderror"
                                        name="telepon_kantor" type="number" id="telepon_kantor"
                                        value="{{ old('telepon_kantor', $order->anggota->telepon_kantor) }}">
                                    @error('telepon_kantor')
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

    </div>
</div>

<!-- ************************************************************************************************* -->
<!-- ************************************************************************************************* -->

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12 col-xl-6">
            <div class="row">
                <div class="col-sm-12 p-r-0">

                    <div class="card border-0">
                        <!-- **************************************************************************************************8******  -->
                        <div class="card-body p-1 ">

                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="alamat">Alamat</label>
                                <div class="col">
                                    <textarea class="form-control form-control-sm @error('alamat') is-invalid @enderror" name="alamat" type="text"
                                        id="alamat">{{ old('alamat', $order->anggota->identity->alamat) }}</textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="rt">RT / RW</label>
                                <label class="col-sm-4 col-form-label visually-hidden" for="rw">Rw</label>
                                <div class="col-sm-3">
                                    <input class="form-control form-control-sm @error('rt') is-invalid @enderror"
                                        name="rt" type="number" id="rt"
                                        value="{{ old('rt', $order->anggota->identity->rt) }}">
                                    @error('rt')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-control form-control-sm @error('rw') is-invalid @enderror"
                                        name="rw" type="number" id="rw"
                                        value="{{ old('rw', $order->anggota->identity->rw) }}">
                                    @error('rw')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- **************************************************************************************************8******  -->
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="desa_kel">Desa/Kel</label>
                                <div class="col-sm-6">
                                    <input
                                        class="form-control form-control-sm @error('desa_kel') is-invalid @enderror"
                                        name="desa_kel" type="text" id="desa_kel"
                                        value="{{ old('desa_kel', $order->anggota->identity->desa_kel) }}">
                                    @error('desa_kel')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="kec">Kec</label>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm @error('kec') is-invalid @enderror"
                                        name="kec" type="text" id="kec"
                                        value="{{ old('kec', $order->anggota->identity->kec) }}">
                                    @error('kec')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="kab_kota">Kab/Kota</label>
                                <div class="col-sm-6">
                                    <input
                                        class="form-control form-control-sm @error('kab_kota') is-invalid @enderror"
                                        name="kab_kota" type="text" id="kab_kota"
                                        value="{{ old('kab_kota', $order->anggota->identity->kab_kota) }}">
                                    @error('kab_kota')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="provinsi">Provinsi</label>
                                <div class="col-sm-6">
                                    <input
                                        class="form-control form-control-sm @error('provinsi') is-invalid @enderror"
                                        name="provinsi" type="text" id="provinsi"
                                        value="{{ old('provinsi', $order->anggota->identity->provinsi) }}">
                                    @error('provinsi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="kode_pos">Kode
                                    Pos</label>
                                <div class="col-sm-4">
                                    <input
                                        class="form-control form-control-sm @error('kode_pos') is-invalid @enderror"
                                        name="kode_pos" type="number" id="kode_pos"
                                        value="{{ old('kode_pos', $order->anggota->identity->kode_pos) }}">
                                    @error('kode_pos')
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
    </div>
</div>
