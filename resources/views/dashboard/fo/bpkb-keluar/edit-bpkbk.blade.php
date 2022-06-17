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
                            <li class="breadcrumb-item">Edit Bpkb Keluar</li>
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

                <div class="card">
                    <div class="card-body f-12">
                        <div class="row">
                            {{-- Left Coloum --}}
                            <div class="col">
                                <div class="btn-group">
                                    <a href="/dashboard/bpkb-keluar">
                                        <button class="btn btn-pill btn-outline-primary btn-xs mb-3"><i
                                                class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                                    </a>
                                </div>
                                <form method="POST" action="/dashboard/bpkb-keluar/{{ $bpkbk->id }}"
                                    class="form theme-form" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <!-- **************************************************************************************************8******  -->
                                    <div class=" row mb-1">
                                        <label class="col-sm-3 col-form-label" for="penerima">Nama Penerima</label>
                                        <div class="col-sm-4">
                                            <input
                                                class="form-control form-control-sm @error('penerima') is-invalid @enderror"
                                                name="penerima" type="text" id="penerima"
                                                value="{{ old('penerima', $bpkbk->penerima) }}">
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
                                            {{-- <input type="hidden" name="dbrkn_olh" value="{{ $bpkbm->dbrkn_olh }}"> --}}
                                            <input
                                                class="form-control form-control-sm @error('dbrkn_olh') is-invalid @enderror"
                                                name="dbrkn_olh" type="text" id="dbrkn_olh"
                                                value="{{ old('dbrkn_olh', $bpkbk->dbrkn_olh) }}">
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
                                                class="form-control form-control-sm @error('foto') is-invalid @enderror mb-2"
                                                name="foto" type="file" id="foto"
                                                value="{{ old('foto', $bpkbk->foto) }}" onchange="previewImage()">
                                            @error('foto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <input type="hidden" name="oldFoto" value="{{ $bpkbk->foto }}">
                                            @if ($bpkbk->foto)
                                                <img src="{{ asset('storage/' . $bpkbk->foto) }}"
                                                    class="p-l-2 img-preview img-fluid mb-3 col-sm-6 rounded"
                                                    onclick="window.open(this.src)">
                                            @else
                                                <img class="p-l-2 img-preview img-fluid mb-3 col-sm-6 rounded"
                                                    onclick="window.open(this.src)">
                                            @endif
                                            {{-- <img id="image" src="{{ asset('storage/' . $bpkbm->foto) }}"
                                                onclick="window.open(this.src)" class="card-img-top rounded"
                                                style="max-height: 100px; width:auto"> --}}
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button class="btn btn-primary text-end" type="submit">Simpan</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- endCardBody --}}



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
