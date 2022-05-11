@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Pooling Order</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Pooling Order</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="true">
                            Anggota Lama
                            <div class="media"></div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Anggota
                            Baru</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <p class="mb-0 m-t-3">
                            {{-- form anggota lama --}}
                            {{-- Card --}}
                        <form class="form theme-form">

                            <div class="card">
                                <div class="card-body f-12">
                                    <div class="row">
                                        {{-- Left Coloum --}}
                                        <div class="col">
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">No Anggota</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" autofocus />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">No
                                                    Order</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" readonly value="{{ $title }}" />
                                                </div>

                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class=" row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Nama</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Buss
                                                    Unit</label>
                                                <div class="col-sm-2 p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                                <div class="col p-l-0">
                                                    <select class="form-select form-select-sm">
                                                        <option>01 - Pinjaman Jaminan Motor</option>
                                                        <option>02 - Pinjaman Jaminan Mobil</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">TTL</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                                <div class="col p-l-0">
                                                    <input type="date" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->

                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Nama
                                                    Ibu</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Jenis
                                                    Kelamin</label>
                                                <div class="col p-l-0">
                                                    <select class="form-select form-select-sm" disabled>
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Status</label>
                                                <div class="col p-l-0">
                                                    <select class="form-select form-select-sm" disabled>
                                                        <option>Kawin</option>
                                                        <option>Belum Kawin </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- ****************************************************************************************** -->

                                        </div>

                                        <div class="col">
                                            {{-- Right Coloum --}}

                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Type
                                                    Identitas</label>
                                                <div class="col p-l-0">
                                                    <select class="form-select form-select-sm" disabled>
                                                        <option>KTP</option>
                                                        <option>Kartu Keluarga</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">No
                                                    Identitas</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>

                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Telepon</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Pekerjaan</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                            </div>

                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Jaminan</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            {{-- <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Referensi</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                            </div> --}}
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">No
                                                    Polisi</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">No
                                                    Mesin</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" disabled />
                                                </div>
                                            </div>
                                            <!-- ****************************************************************************************** -->
                                        </div>
                                        {{-- EndRight Coloum --}}
                                    </div>
                                </div>
                                {{-- cardFooter --}}
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <input class="btn btn-light" type="reset" value="Cancel" />
                                </div>
                                {{-- endCardFooter --}}
                            </div>
                            {{-- endCardBody --}}



                        </form>
                        {{-- endCard & end form anggota lama --}}

                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <p class="mb-0 m-t-3">
                            {{-- form anggota baru --}}
                            {{-- Card --}}
                        <form class="form theme-form">

                            <div class="card">
                                <div class="card-body f-12">
                                    <div class="row">
                                        {{-- Left Coloum --}}
                                        <div class="col">
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">No
                                                    Order</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" readonly value="{{ $title }}" />
                                                </div>

                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Konsumen</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" readonly value="{{ $title }}" />
                                                </div>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" autofocus />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Buss
                                                    Unit</label>

                                                <div class="col p-l-0">
                                                    <select class="form-select form-select-sm">
                                                        <option>01 - Pinjaman Jaminan Motor</option>
                                                        <option>02 - Pinjaman Jaminan Mobil</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">TTL</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" />
                                                </div>
                                                <div class="col p-l-0">
                                                    <input type="date" class="form-control form-control-sm"
                                                        id="colFormLabelSm" />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->

                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Nama
                                                    Ibu</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Jenis
                                                    Kelamin</label>
                                                <div class="col p-l-0">
                                                    <select class="form-select form-select-sm">
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Status</label>
                                                <div class="col p-l-0">
                                                    <select class="form-select form-select-sm">
                                                        <option>Kawin</option>
                                                        <option>Belum Kawin </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- ****************************************************************************************** -->

                                        </div>

                                        <div class="col">
                                            {{-- Right Coloum --}}

                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Type
                                                    Identitas</label>
                                                <div class="col p-l-0">
                                                    <select class="form-select form-select-sm">
                                                        <option>KTP</option>
                                                        <option>Kartu Keluarga</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">No
                                                    Identitas</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" />
                                                </div>

                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Telepon</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Pekerjaan</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" />
                                                </div>
                                            </div>

                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Jaminan</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            {{-- <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">Referensi</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" />
                                                </div>
                                            </div> --}}
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">No
                                                    Polisi</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" />
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************8******  -->
                                            <div class="row mb-1">
                                                <label class="col-sm-4 col-form-label" for="nama">No
                                                    Mesin</label>
                                                <div class="col p-l-0">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="colFormLabelSm" />
                                                </div>
                                            </div>
                                            <!-- ****************************************************************************************** -->
                                        </div>
                                        {{-- EndRight Coloum --}}
                                    </div>
                                </div>
                                {{-- cardFooter --}}
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <input class="btn btn-light" type="reset" value="Cancel" />
                                </div>
                                {{-- endCardFooter --}}
                            </div>
                            {{-- endCardBody --}}



                        </form>
                        {{-- endCard & end form anggota baru --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
