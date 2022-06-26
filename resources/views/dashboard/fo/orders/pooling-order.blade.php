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
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="/dashboard/pooling-order/cari" method="GET">

                            <div class="input-group mb-3">
                                <label class="col-sm-4 col-form-label visually-hidden" for="id">No atau Nama
                                    Anggota</label>
                                <input class="form-control" type="text" name="cari"
                                    placeholder="Masukan Nomor atau Nama Anggota ..." value="{{ old('cari') }}" required>
                                <button class="btn btn-primary" type="submit" value="CARI"><i class="fa fa-arrow-right"
                                        aria-hidden="true"></i></button>
                            </div>

                        </form>
                        <small>* Masukan nama atau nomor anggota</small>
                    </div>
                </div>


                {{-- endCard & end form anggota lama --}}

            </div>
        </div>
    </div>
@endsection
