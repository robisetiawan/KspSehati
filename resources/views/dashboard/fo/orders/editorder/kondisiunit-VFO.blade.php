<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">


            <div class="table-responsive card-body pt-3 px-1">
                <table class="table table-bordered table-xxs table-sm align-middle">
                    <!-- ****************** -->
                    <!-- ****************** -->
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori Header</th>
                            <th scope="col">Kategori Detail</th>
                            <th scope="col">Kondisi</th>
                        </tr>
                    </thead>
                    <!-- ****************** -->
                    <!-- ****************** -->
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mesin Kendaraan</td>
                            <td>Kategori Mesin</td>
                            <td>
                                <select class="form-select form-select-sm @error('kategori_m') is-invalid @enderror"
                                    name="kategori_m" id="kategori_m">
                                    <option value="Baik"
                                        {{ old('faktur', $order->kondisi_unit->kategori_m) == 'Baik' ? 'selected' : '' }}>
                                        Baik
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->kategori_m) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">2</th>
                            <td>Mesin Kendaraan</td>
                            <td>Suara Mesin</td>
                            <td>
                                <select class="form-select form-select-sm @error('suara_m') is-invalid @enderror"
                                    name="suara_m" id="suara_m">
                                    <option value="Halus"
                                        {{ old('faktur', $order->kondisi_unit->suara_m) == 'Halus' ? 'selected' : '' }}>
                                        Halus
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->suara_m) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">3</th>
                            <td>Aksesoris Mandatori</td>
                            <td>Sayap Body</td>
                            <td>
                                <select class="form-select form-select-sm @error('sayap_b') is-invalid @enderror"
                                    name="sayap_b" id="sayap_b">
                                    <option value="Ada"
                                        {{ old('faktur', $order->kondisi_unit->sayap_b) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->sayap_b) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">4</th>
                            <td>Aksesoris Mandatori</td>
                            <td>Cover Body</td>
                            <td>
                                <select class="form-select form-select-sm @error('cover_b') is-invalid @enderror"
                                    name="cover_b" id="cover_b">
                                    <option value="Ada"
                                        {{ old('faktur', $order->kondisi_unit->cover_b) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->cover_b) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">5</th>
                            <td>Aksesoris Mandatori</td>
                            <td>Knalpot</td>
                            <td>
                                <select class="form-select form-select-sm @error('knalpot') is-invalid @enderror"
                                    name="knalpot" id="knalpot">
                                    <option value="Orisinil"
                                        {{ old('faktur', $order->kondisi_unit->knalpot) == 'Orisinil' ? 'selected' : '' }}>
                                        Orisinil
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->knalpot) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">6</th>
                            <td>Aksesoris Mandatori</td>
                            <td>Accu/Aki</td>
                            <td>
                                <select class="form-select form-select-sm @error('accu_aki') is-invalid @enderror"
                                    name="accu_aki" id="accu_aki">
                                    <option value="Ada"
                                        {{ old('faktur', $order->kondisi_unit->accu_aki) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->accu_aki) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">7</th>
                            <td>Aksesoris Mandatori</td>
                            <td>Cakram</td>
                            <td>
                                <select class="form-select form-select-sm @error('cakram') is-invalid @enderror"
                                    name="cakram" id="cakram">
                                    <option value="Ada"
                                        {{ old('faktur', $order->kondisi_unit->cakram) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->cakram) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">8</th>
                            <td>Aksesoris Mandatori</td>
                            <td>Speedometer</td>
                            <td>
                                <select class="form-select form-select-sm @error('speedometer') is-invalid @enderror"
                                    name="speedometer" id="speedometer">
                                    <option value="Ada"
                                        {{ old('faktur', $order->kondisi_unit->speedometer) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->speedometer) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">9</th>
                            <td>Aksesoris Mandatori</td>
                            <td>Kick Starter</td>
                            <td>
                                <select class="form-select form-select-sm @error('kick_s') is-invalid @enderror"
                                    name="kick_s" id="kick_s">
                                    <option value="Ada"
                                        {{ old('faktur', $order->kondisi_unit->kick_s) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->kick_s) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">10</th>
                            <td>Aksesoris Mandatori</td>
                            <td>Velg dan Ban</td>
                            <td>
                                <select class="form-select form-select-sm @error('velg_ban') is-invalid @enderror"
                                    name="velg_ban" id="velg_ban">
                                    <option value="Standar"
                                        {{ old('faktur', $order->kondisi_unit->velg_ban) == 'Standar' ? 'selected' : '' }}>
                                        Standar
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->velg_ban) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">11</th>
                            <td>Aksesoris Mandatori</td>
                            <td>Shockbreaker</td>
                            <td>
                                <select class="form-select form-select-sm @error('shockbreaker') is-invalid @enderror"
                                    name="shockbreaker" id="shockbreaker">
                                    <option value="Standar"
                                        {{ old('faktur', $order->kondisi_unit->shockbreaker) == 'Standar' ? 'selected' : '' }}>
                                        Standar
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->shockbreaker) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">12</th>
                            <td>Aksesoris Optional</td>
                            <td>Spion</td>
                            <td>
                                <select class="form-select form-select-sm @error('spion') is-invalid @enderror"
                                    name="spion" id="spion">
                                    <option value="Ada"
                                        {{ old('faktur', $order->kondisi_unit->spion) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->spion) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">13</th>
                            <td>Aksesoris Optional</td>
                            <td>Kaki/Standar Samping/Tengah</td>
                            <td>
                                <select class="form-select form-select-sm @error('kaki') is-invalid @enderror"
                                    name="kaki" id="kaki">
                                    <option value="Ada"
                                        {{ old('faktur', $order->kondisi_unit->kaki) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->kaki) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">14</th>
                            <td>Aksesoris Optional</td>
                            <td>Jok</td>
                            <td>
                                <select class="form-select form-select-sm @error('jok') is-invalid @enderror"
                                    name="jok" id="jok">
                                    <option value="Orisinil"
                                        {{ old('faktur', $order->kondisi_unit->jok) == 'Orisinil' ? 'selected' : '' }}>
                                        Orisinil
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->jok) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                        <tr>
                            <th scope="row">15</th>
                            <td>Aksesoris Optional</td>
                            <td>Lampun Sign Depan Belakangan</td>
                            <td>
                                <select class="form-select form-select-sm @error('lampu_sign') is-invalid @enderror"
                                    name="lampu_sign" id="lampu_sign">
                                    <option value="Ada"
                                        {{ old('faktur', $order->kondisi_unit->lampu_sign) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('faktur', $order->kondisi_unit->lampu_sign) == 'Tidak Ada' ? 'selected' : '' }}>
                                        Tidak Ada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <!-- ****************** -->
                        <!-- ****************** -->
                    </tbody>
                </table>
            </div>

            <div class="card-body p-1 ">
                <!-- ***************************************************************************************************************** -->
                <div class="row mb-1">
                    <label class="col-sm-2 col-form-label text-end" for="bpkb">BPKB</label>
                    <div class="col-sm-3 p-l-0">
                        <select class="form-select @error('bpkb') is-invalid @enderror" name="bpkb" id="bpkb">
                            <option value="Atas Nama Sendiri"
                                {{ old('bpkb', $order->barang->bpkb) == 'Atas Nama Sendiri' ? 'selected' : '' }}>
                                Atas Nama Sendiri
                            </option>
                            <option value="Atas Nama Orang Lain"
                                {{ old('bpkb', $order->barang->bpkb) == 'Atas Nama Orang Lain' ? 'selected' : '' }}>
                                Atas Nama Orang Lain
                            </option>
                        </select>
                        @error('status_order')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- **************************************************************************************************8******  -->
                    <label class="col-sm-1 col-form-label text-end" for="faktur">Faktur</label>
                    <div class="col-sm-2 p-l-0">
                        <select class="form-select @error('faktur') is-invalid @enderror" name="faktur" id="faktur"
                            value="{{ old('faktur') }}">
                            <option value="Ada"
                                {{ old('faktur', $order->barang->faktur) == 'Ada' ? 'selected' : '' }}>
                                Ada
                            </option>
                            <option value="Tidak Ada"
                                {{ old('faktur', $order->barang->faktur) == 'Tidak Ada' ? 'selected' : '' }}>
                                Tidak Ada
                            </option>
                        </select>
                        @error('status_order')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label class="col-sm-2 col-form-label text-end" for="surat_jual_beli">Surat Jual Beli</label>
                    <div class="col-sm-2 p-l-0">
                        <select class="form-select @error('surat_jual_beli') is-invalid @enderror"
                            name="surat_jual_beli" id="surat_jual_beli" value="{{ old('surat_jual_beli') }}">
                            <option value="Ada"
                                {{ old('surat_jual_beli', $order->barang->surat_jual_beli) == 'Ada' ? 'selected' : '' }}>
                                Ada
                            </option>
                            <option value="Tidak Ada"
                                {{ old('surat_jual_beli', $order->barang->surat_jual_beli) == 'Tidak Ada' ? 'selected' : '' }}>
                                Tidak Ada
                            </option>
                        </select>
                        @error('status_order')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <!-- **************************************************************************************************8******  -->
                <div class="row mb-1">
                    <label class="col-sm-2 col-form-label text-end" for="stnk_ada">STNK Ada?</label>
                    <div class="col-sm-2 p-l-0">
                        <select class="form-select @error('stnk_ada') is-invalid @enderror" name="stnk_ada"
                            id="stnk_ada" value="{{ old('stnk_ada') }}">
                            <option value="Ada"
                                {{ old('stnk_ada', $order->barang->stnk_ada) == 'Ada' ? 'selected' : '' }}>
                                Ada
                            </option>
                            <option value="Tidak Ada"
                                {{ old('stnk_ada', $order->barang->stnk_ada) == 'Tidak Ada' ? 'selected' : '' }}>
                                Tidak Ada
                            </option>
                        </select>
                        @error('status_order')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label class="col-sm-2 col-form-label text-end" for="jatuh_tempo_stnk">Jth Tempo Pajak STNK</label>
                    <div class="col-sm-2 p-l-0">
                        <input class="form-control form-control-sm @error('jatuh_tempo_stnk') is-invalid @enderror"
                            name="jatuh_tempo_stnk" type="date" id="jatuh_tempo_stnk"
                            value="{{ old('jatuh_tempo_stnk', $order->barang->jatuh_tempo_stnk) }}">
                        @error('jatuh_tempo_stnk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label class="col-sm-2 col-form-label text-end" for="nama">STNK Mati (Tahun)</label>
                    <div class="col-sm-2 p-l-0">
                        <input class="form-control form-control-sm @error('stnk_mati_tahun') is-invalid @enderror"
                            name="stnk_mati_tahun" type="number" id="stnk_mati_tahun"
                            value="{{ old('stnk_mati_tahun', $order->barang->stnk_mati_tahun) }}">
                        @error('stnk_mati_tahun')
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
