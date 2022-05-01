@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Anggota</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Anggota</li>
                            <li class="breadcrumb-item">Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">

            <form class="form theme-form">
                <div class="card-body f-12">
                    <div class="row">
                        <div class="col">


                            <div class="row">
                                <div class="col-sm-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-sm-12 p-r-0">
                                            <div class="card border-0">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <form class="theme-form">
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">No
                                                                Anggota</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" readonly />
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label " for="nama">Enrty
                                                                Date</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <input type="date" class="form-control form-control-sm "
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Pelanggan</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Nama
                                                                Panggilan</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <label class="col-sm-3 col-form-label" for="nama">Jenis
                                                                Kelamin</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Laki-Laki</option>
                                                                    <option>Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">TTL</label>
                                                            <div class="col-sm-5 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <div class="col-sm-4 p-l-0">
                                                                <input type="date" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Status</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Kawin</option>
                                                                    <option>Belum Kawin </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Type
                                                                Identitas</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>KTP</option>
                                                                    <option>Kartu Keluarga</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">No
                                                                Identitas</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>

                                                        </div>



                                                        <!-- **************************************************************************************************8******  -->

                                                    </form>
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
                                                    <form class="theme-form">
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Nama
                                                                Ibu</label>
                                                            <div class="col-sm-8 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Warganegara</label>
                                                            <div class="col-sm-3 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>WNI</option>
                                                                    <option>WNA</option>
                                                                </select>
                                                            </div>
                                                            <label class="col-sm-3 col-form-label" for="nama">Gol
                                                                Darah</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>-</option>
                                                                    <option>A</option>
                                                                    <option>AB</option>
                                                                    <option>B</option>
                                                                    <option>O</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Pekerjaan</label>
                                                            <div class="col-sm-8 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Agama</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Islam</option>
                                                                    <option>Protestan</option>
                                                                    <option>Katholik</option>
                                                                    <option>Budha</option>
                                                                    <option>Hindu</option>
                                                                    <option>Kong Hu cu</option>
                                                                    <option>Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Pendidikan</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>SD</option>
                                                                    <option>SMP</option>
                                                                    <option>SMA/SMK</option>
                                                                    <option>Diploma 1</option>
                                                                    <option>Diploma 2</option>
                                                                    <option>Diploma 3</option>
                                                                    <option>Diploma 4</option>
                                                                    <option>Sarjana S1</option>
                                                                    <option>Master</option>
                                                                    <option>Doktor</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Status
                                                                Rumah</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <select class="form-select form-select-sm">
                                                                    <option>Rumah Sendiri</option>
                                                                    <option>Rumah Orang Tua</option>
                                                                    <option>Rumah Dinas</option>
                                                                    <option>Rumah Sewa/Kontrak</option>
                                                                    <option>Kost</option>
                                                                    <option>Rumah Status Kredit</option>
                                                                    <option>Rumah Keluarga</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Telp
                                                                Rumah</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <div class="col-sm-6 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Telp
                                                                Seluler</label>
                                                            <div class="col-sm-4 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <div class="col-sm-4 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Telp
                                                                Kantor</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <div class="col-sm-6 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


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
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Alamat</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>

                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label " for="nama">RT</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm "
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                            <label class="col-sm-3 col-form-label " for="nama">RW</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm "
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Desa /
                                                                Kel</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Provinsi</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Kab /
                                                                Kota</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label"
                                                                for="nama">Kecamatan</label>
                                                            <div class="col-sm-9 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
                                                            </div>
                                                        </div>
                                                        <!-- **************************************************************************************************8******  -->
                                                        <div class="row mb-1">
                                                            <label class="col-sm-3 col-form-label" for="nama">Kode
                                                                Pos</label>
                                                            <div class="col-sm-2 p-l-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="colFormLabelSm" />
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

            </form>
            <div class="card-footer text-end f-12">
                <div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <input class="btn btn-light" type="reset" value="Cancel" />
                </div>
            </div>
        </div>
    </div>
@endsection
