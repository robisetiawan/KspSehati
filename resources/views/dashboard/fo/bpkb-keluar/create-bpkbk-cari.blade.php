@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col">
                        <h3>Bpkb Keluar</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Bpkb Keluar</li>
                            <li class="breadcrumb-item">Tambah Bpkb Keluar</li>
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
                        <form action="/dashboard/bpkbk/search" method="GET">

                            <div class="input-group mb-3">
                                <label class="col-sm-4 col-form-label visually-hidden" for="id">No Anggota</label>
                                <input class="form-control" type="text" name="cari"
                                    placeholder="Cari Nama Penyerah ..." value="{{ request('cari') }}" required>
                                <button class="btn btn-primary" type="submit" value="CARI"><i class="fa fa-arrow-right"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>

                    </div>
                </div>

                <form method="POST" action="/dashboard/bpkb-keluar" class="form theme-form" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body f-12">
                            @forelse ($bpkbm as $b)
                                <div class="row">
                                    {{-- Left Coloum --}}
                                    <div class="col">
                                        <!-- **************************************************************************************************8******  -->
                                        <div class=" row mb-1">
                                            <label class="col-sm-3 col-form-label" for="no_order">No Order</label>
                                            <div class="col-sm-2">
                                                <input type="hidden" name="bpkbm_id" value="{{ $b->id }}">
                                                <input
                                                    class="form-control form-control-sm @error('no_order') is-invalid @enderror"
                                                    name="no_order" type="text" id="no_order"
                                                    value="{{ $b->order->no_order }}" readonly>
                                                @error('no_order')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-3 col-form-label" for="penerima">Nama Penerima</label>
                                            <div class="col-sm-4">
                                                <input
                                                    class="form-control form-control-sm @error('penerima') is-invalid @enderror"
                                                    name="penerima" type="text" id="penerima"
                                                    value="{{ $b->penyerah }}">
                                                @error('penerima')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-3 col-form-label" for="dbrkn_olh">Diberikan Oleh</label>
                                            <div class="col-sm-4">
                                                {{-- <input type="hidden" name="dbrkn_olh" value="{{ $b->dbrkn_olh }}"> --}}
                                                <input
                                                    class="form-control form-control-sm @error('dbrkn_olh') is-invalid @enderror"
                                                    name="dbrkn_olh" type="text" id="dbrkn_olh"
                                                    value="{{ old('dbrkn_olh') }}">
                                                @error('dbrkn_olh')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <label class="col-sm-3 col-form-label" for="foto">Foto</label>
                                            <div class="col-sm-4">
                                                <input
                                                    class="form-control form-control-sm @error('foto') is-invalid @enderror"
                                                    name="foto" type="file" id="foto" onchange="previewImage()">
                                                @error('foto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <img class="p-l-2 img-preview img-fluid my-1 col-sm-6 rounded">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            @empty
                                <p class="text-center">Data tidak ditemukan !!!</p>
                            @endforelse
                        </div>
                        {{-- cardFooter --}}
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        {{-- endCardFooter --}}
                    </div>
                    {{-- endCardBody --}}



                </form>
                {{-- endCard & end form anggota lama --}}

            </div>
        </div>
    </div>

    <script>
        // preview image
        function previewImage() {
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
