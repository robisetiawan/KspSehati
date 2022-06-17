@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Penerimaan Uang</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Penerimaan Uang</li>
                            <li class="breadcrumb-item">Tambah Data</li>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="card">

            @csrf
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
                                                <!-- **************************************************************************************************8******  -->
                                                <form action="/dashboard/penuang/search" method="GET">

                                                    <div class="input-group mb-3">
                                                        <label class="col-sm-4 col-form-label visually-hidden"
                                                            for="id">Search</label>
                                                        <input class="form-control" type="text" name="cari"
                                                            placeholder="Cari Nama / No Order ..."
                                                            value="{{ old('cari') }}" required>
                                                        <button class="btn btn-primary" type="submit" value="CARI"><i
                                                                class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                                    </div>

                                                </form>
                                                <small>* Masukan nama atau nomor order</small>
                                                <!-- **************************************************************************************************8******  -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
