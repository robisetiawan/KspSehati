@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col">
                        <h3>Bpkb Masuk</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Bpkb Masuk</li>
                            <li class="breadcrumb-item">Tambah Bpkb Masuk</li>
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
                        <form action="/dashboard/bpkbm/search" method="GET">

                            <div class="input-group mb-3">
                                <label class="col-sm-4 col-form-label visually-hidden" for="id">No Anggota</label>
                                <input class="form-control" type="text" name="cari"
                                    placeholder="Cari Nama / No Order ..." value="{{ request('cari') }}" required>
                                <button class="btn btn-primary" type="submit" value="CARI"><i class="fa fa-arrow-right"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>

                    </div>
                </div>

                <form method="POST" action="/dashboard/bpkb-masuk" class="form theme-form" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body f-12">
                            @forelse ($order as $o)
                                <div class="row">
                                    {{-- Left Coloum --}}
                                    <div class="col">
                                        <!-- **************************************************************************************************8******  -->
                                        <div class=" row mb-1">
                                            <label class="col-sm-5 col-form-label" for="no_order">No Order</label>
                                            <div class="col-sm-4">
                                                <input type="hidden" name="order_id" value="{{ $o->id }}">
                                                <input
                                                    class="form-control form-control-sm @error('no_order') is-invalid @enderror"
                                                    name="no_order" type="text" id="no_order"
                                                    value="{{ $o->no_order }}" readonly>
                                                @error('no_order')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-5 col-form-label" for="penyerah">Yang Menyerahkan</label>
                                            <div class="col-sm-6">
                                                <input
                                                    class="form-control form-control-sm @error('penyerah') is-invalid @enderror"
                                                    name="penyerah" type="text" id="penyerah"
                                                    value="{{ $o->nama }}">
                                                @error('penyerah')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-5 col-form-label" for="dtrm_olh">Diterima Oleh</label>
                                            <div class="col-sm-6">
                                                {{-- <input type="hidden" name="dtrm_olh" value="{{ $o->dtrm_olh }}"> --}}
                                                <input
                                                    class="form-control form-control-sm @error('dtrm_olh') is-invalid @enderror"
                                                    name="dtrm_olh" type="text" id="dtrm_olh"
                                                    value="{{ old('dtrm_olh') }}">
                                                @error('dtrm_olh')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <label class="col-sm-5 col-form-label" for="foto">Foto</label>
                                            <div class="col-sm-6">
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

                                    {{-- Right Coloum --}}
                                    <div class="col">
                                        <!-- **************************************************************************************************8******  -->
                                        <div class=" row mb-1">
                                            <label class="col-sm-4 col-form-label" for="no_polisi">No Polisi</label>
                                            <div class="col-sm-4">
                                                <input
                                                    class="form-control form-control-sm @error('no_polisi') is-invalid @enderror"
                                                    name="no_polisi" type="text" id="no_polisi"
                                                    value="{{ $o->jaminan->no_polisi }}">
                                                @error('no_polisi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-4 col-form-label" for="no_mesin">No Mesin</label>
                                            <div class="col">
                                                <input
                                                    class="form-control form-control-sm @error('no_mesin') is-invalid @enderror"
                                                    name="no_mesin" type="text" id="no_mesin"
                                                    value="{{ $o->jaminan->no_mesin }}">
                                                @error('no_mesin')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-4 col-form-label" for="no_bpkb">No Bpkb</label>
                                            <div class="col">
                                                <input
                                                    class="form-control form-control-sm @error('no_bpkb') is-invalid @enderror"
                                                    name="no_bpkb" type="text" id="no_bpkb"
                                                    value="{{ old('no_bpkb') }}">
                                                @error('no_bpkb')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-4 col-form-label" for="nm_bpkb">Nama Bpkb</label>
                                            <div class="col">
                                                <input
                                                    class="form-control form-control-sm @error('nm_bpkb') is-invalid @enderror"
                                                    name="nm_bpkb" type="text" id="nm_bpkb"
                                                    value="{{ old('nm_bpkb') }}">
                                                @error('nm_bpkb')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-4 col-form-label" for="almt_bpkb">Alamat Bpkb</label>
                                            <div class="col">
                                                <textarea class="form-control form-control-sm @error('almt_bpkb') is-invalid @enderror" name="almt_bpkb"
                                                    type="text" id="almt_bpkb">{{ old('almt_bpkb') }}</textarea>
                                                @error('almt_bpkb')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-4 col-form-label" for="no_rangka">No Rangka</label>
                                            <div class="col">
                                                <input
                                                    class="form-control form-control-sm @error('no_rangka') is-invalid @enderror"
                                                    name="no_rangka" type="text" id="no_rangka"
                                                    value="{{ old('no_rangka') }}">
                                                @error('no_rangka')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
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
