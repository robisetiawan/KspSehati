<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

            <!-- ***************** -->
            <!-- ***************** -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header p-b-0">
                            <h6>Rekap Kondisi Unit</h6>
                        </div>
                        <div class="card-body p-t-0 ">
                            <div class="table-responsive">
                                <!-- ***************** -->
                                <!-- ***************** -->
                                <table class="table table-bordered mb-0 ">
                                    <thead>
                                        <tr>
                                            <th>Seqn Header</th>
                                            <th>Kategori Header</th>
                                            <th>Persentase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mesin Kendaraan</td>
                                            <td>
                                                {{ $order->kondisi_unit->m_kend }} %
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Aksesoris Mandatori</td>
                                            <td>
                                                {{ $order->kondisi_unit->a_man }} %
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Aksesoris Optional</td>
                                            <td>{{ $order->kondisi_unit->a_opt }} %</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- ***************** -->
                                <!-- ***************** -->

                                <div class="container p-l-0 mt-4">
                                    {{-- <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label" for="nama">Grade ID</label>
                                        <div class="col-sm-2 p-l-0">
                                            <input type="text" class="form-control form-control-sm"
                                                id="colFormLabelSm" />
                                        </div>
                                    </div> --}}

                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label" for="nama">Grade Desc</label>
                                        <div class="col-sm-9 p-l-0">
                                            <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                                value="{{ $order->kondisi_unit->grade_desc >= 80 ? 'Diatas 80 %' : 'Dibawah 80 %' }}"
                                                disabled />
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label" for="stnk_mati_tahun">Kondisi
                                            STNK</label>
                                        <div class="col-sm-2 p-l-0">
                                            <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                                value="{{ $order->barang->stnk_mati_tahun }}" disabled />
                                        </div>
                                        <div class="col p-l-0">
                                            <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                                value="{{ $order->barang->stnk_mati_tahun >= 5 ? 'Mati diatas 5 tahun' : 'Mati dibawah 5 tahun' }}"
                                                disabled />
                                        </div>
                                    </div>
                                </div>

                                <!-- ***************** -->
                                <!-- ***************** -->
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ***************** -->
                <!-- ***************** -->


                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header p-b-0">
                            <h6>Perhitungan HAP</h6>
                        </div>
                        <div class="card-body p-t-0">
                            <!-- ***************** -->
                            <!-- ***************** -->
                            <div class="container p-l-0">
                                <div class="row mb-1">
                                    <label class="col-sm-6 col-form-label" for="nama">Tahun</label>
                                    <div class="col-sm-3 p-l-0">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                            value="{{ $order->jaminan->tahun }}" disabled />
                                    </div>
                                    <div class="col-sm-3 p-l-0">
                                        <select class="form-select form-select-sm" disabled>
                                            <option value="Awal"
                                                {{ old('awaloeakhir', $order->jaminan->awaloeakhir) == 'Awal' ? 'selected' : '' }}>
                                                Awal
                                            </option>
                                            <option value="Akhir"
                                                {{ old('awaloeakhir', $order->jaminan->awaloeakhir) == 'Akhir' ? 'selected' : '' }}>
                                                Akhir
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- ***************** -->
                                <!-- ***************** -->
                                <div class="row mb-1">
                                    <label class="col-sm-6 col-form-label" for="nama">Harga Pasar (IDR)</label>
                                    <div class="col-sm-6 p-l-0">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                            value="@currency($order->jaminan->harga_pasar)" disabled />
                                    </div>
                                </div>
                                <!-- ***************** -->
                                <!-- ***************** -->
                                <div class="row mb-1">
                                    <label class="col-sm-6 col-form-label" for="nama">Pengurangan Kond.Unit</label>
                                    <div class="col-sm-2 p-l-0">
                                        <input type="text" class="form-control form-control-sm" id="pengurangan_kond"
                                            name="pengurangan_kond" value="{{ old('pengurangan_kond') }}" />
                                    </div>
                                    <div class="col-sm-4 p-l-0">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                            value="" />
                                    </div>
                                </div>
                                <!-- ***************** -->
                                <!-- ***************** -->
                                <div class="row mb-1">
                                    <label class="col-sm-6 col-form-label" for="nama">Pengurangan Kond.STNK</label>
                                    <div class="col-sm-2 p-l-0">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" />
                                    </div>
                                    <div class="col-sm-4 p-l-0">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" />
                                    </div>
                                </div>
                                <!-- ***************** -->
                                <!-- ***************** -->
                                <div class="row mb-1">
                                    <label class="col-sm-8 col-form-label" for="nama">Harga Acuan Pinjaman (IDR)</label>
                                    <div class="col-sm-4 p-l-0">
                                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" />
                                    </div>
                                </div>
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
