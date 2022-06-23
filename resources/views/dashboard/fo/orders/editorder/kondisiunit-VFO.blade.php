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
                                    <option></option>
                                    <option value="Baik"
                                        {{ old('kategori_m', $order->kondisi_unit->kategori_m) == 'Baik' ? 'selected' : '' }}>
                                        Baik
                                    </option>
                                    <option value="Tidak Baik"
                                        {{ old('kategori_m', $order->kondisi_unit->kategori_m) == 'Tidak Baik' ? 'selected' : '' }}>
                                        Tidak Baik
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
                                    <option></option>
                                    <option value="Halus"
                                        {{ old('suara_m', $order->kondisi_unit->suara_m) == 'Halus' ? 'selected' : '' }}>
                                        Halus
                                    </option>
                                    <option value="Tidak Halus"
                                        {{ old('suara_m', $order->kondisi_unit->suara_m) == 'Tidak Halus' ? 'selected' : '' }}>
                                        Tidak Halus
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
                                    <option></option>
                                    <option value="Ada"
                                        {{ old('sayap_b', $order->kondisi_unit->sayap_b) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('sayap_b', $order->kondisi_unit->sayap_b) == 'Tidak Ada' ? 'selected' : '' }}>
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
                                    <option></option>
                                    <option value="Ada"
                                        {{ old('cover_b', $order->kondisi_unit->cover_b) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('cover_b', $order->kondisi_unit->cover_b) == 'Tidak Ada' ? 'selected' : '' }}>
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
                                    <option></option>
                                    <option value="Orisinil"
                                        {{ old('knalpot', $order->kondisi_unit->knalpot) == 'Orisinil' ? 'selected' : '' }}>
                                        Orisinil
                                    </option>
                                    <option value="Tidak Orisinil"
                                        {{ old('knalpot', $order->kondisi_unit->knalpot) == 'Tidak Orisinil' ? 'selected' : '' }}>
                                        Tidak Orisinil
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
                                    <option></option>
                                    <option value="Ada"
                                        {{ old('accu_aki', $order->kondisi_unit->accu_aki) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('accu_aki', $order->kondisi_unit->accu_aki) == 'Tidak Ada' ? 'selected' : '' }}>
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
                                    <option></option>
                                    <option value="Ada/Model Tidak Bercakram"
                                        {{ old('cakram', $order->kondisi_unit->cakram) == 'Ada/Model Tidak Bercakram' ? 'selected' : '' }}>
                                        Ada/Model Tidak Bercakram
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('cakram', $order->kondisi_unit->cakram) == 'Tidak Ada' ? 'selected' : '' }}>
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
                                    <option></option>
                                    <option value="Ada"
                                        {{ old('speedometer', $order->kondisi_unit->speedometer) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('speedometer', $order->kondisi_unit->speedometer) == 'Tidak Ada' ? 'selected' : '' }}>
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
                                    <option></option>
                                    <option value="Ada"
                                        {{ old('kick_s', $order->kondisi_unit->kick_s) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('kick_s', $order->kondisi_unit->kick_s) == 'Tidak Ada' ? 'selected' : '' }}>
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
                                    <option></option>
                                    <option value="Standar"
                                        {{ old('velg_ban', $order->kondisi_unit->velg_ban) == 'Standar' ? 'selected' : '' }}>
                                        Standar
                                    </option>
                                    <option value="Tidak Standar"
                                        {{ old('velg_ban', $order->kondisi_unit->velg_ban) == 'Tidak Standar' ? 'selected' : '' }}>
                                        Tidak Standar
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
                                    <option></option>
                                    <option value="Standar"
                                        {{ old('shockbreaker', $order->kondisi_unit->shockbreaker) == 'Standar' ? 'selected' : '' }}>
                                        Standar
                                    </option>
                                    <option value="Tidak Standar"
                                        {{ old('shockbreaker', $order->kondisi_unit->shockbreaker) == 'Tidak Standar' ? 'selected' : '' }}>
                                        Tidak Standar
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
                                    <option></option>
                                    <option value="Ada"
                                        {{ old('spion', $order->kondisi_unit->spion) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('spion', $order->kondisi_unit->spion) == 'Tidak Ada' ? 'selected' : '' }}>
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
                                    <option></option>
                                    <option value="Ada"
                                        {{ old('kaki', $order->kondisi_unit->kaki) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('kaki', $order->kondisi_unit->kaki) == 'Tidak Ada' ? 'selected' : '' }}>
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
                                    <option></option>
                                    <option value="Orisinil"
                                        {{ old('jok', $order->kondisi_unit->jok) == 'Orisinil' ? 'selected' : '' }}>
                                        Orisinil
                                    </option>
                                    <option value="Tidak Orisinil"
                                        {{ old('jok', $order->kondisi_unit->jok) == 'Tidak Orisinil' ? 'selected' : '' }}>
                                        Tidak Orisinil
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
                                    <option></option>
                                    <option value="Ada"
                                        {{ old('lampu_sign', $order->kondisi_unit->lampu_sign) == 'Ada' ? 'selected' : '' }}>
                                        Ada
                                    </option>
                                    <option value="Tidak Ada"
                                        {{ old('lampu_sign', $order->kondisi_unit->lampu_sign) == 'Tidak Ada' ? 'selected' : '' }}>
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

            <div class="card">
                <div class="container-fluid text-end px-1 py-3">
                    <div class="row mb-1">
                        <div class="col-sm-6"></div>
                        <label class="col col-form-label" for="penanggung_jawab"><strong>Penanggung
                                Jawab</strong></label>
                        <div class="col">
                            <select class="form-select @error('penanggung_jawab') is-invalid @enderror"
                                name="penanggung_jawab" id="penanggung_jawab">
                                <option></option>
                                @foreach ($employees as $e)
                                    @if (old('penanggung_jawab', $order->employee_id) == $e->id)
                                        <option value="{{ $e->id }}" selected>{{ $e->nama }}</option>
                                    @else
                                        <option value="{{ $e->id }}">{{ $e->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('penanggung_jawab')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-body p-1 ">
                    <!-- ***************************************************************************************************************** -->
                    <div class="row mb-1">
                        <label class="col-sm-2 col-form-label text-end" for="bpkb">BPKB</label>
                        <div class="col-sm-3 p-l-0">
                            <select class="form-select @error('bpkb') is-invalid @enderror" name="bpkb"
                                id="bpkb">
                                <option></option>
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
                            <select class="form-select @error('faktur') is-invalid @enderror" name="faktur"
                                id="faktur" value="{{ old('faktur') }}">
                                <option></option>
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
                                <option></option>
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
                            <select class="form-select" disabled>
                                <option value="Ada">
                                    Ada
                                </option>
                                <option value="Tidak Ada">
                                    Tidak Ada
                                </option>
                            </select>
                            @error('status_order')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-2 col-form-label text-end" for="jatuh_tempo_stnk">Jth Tempo Pajak
                            STNK</label>
                        <div class="col-sm-2 p-l-0">
                            <input
                                class="form-control form-control-sm @error('jatuh_tempo_stnk') is-invalid @enderror"
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
                                value="{{ old('stnk_mati_tahun', $order->barang->stnk_mati_tahun) }}"
                                min="1">
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
</div>
