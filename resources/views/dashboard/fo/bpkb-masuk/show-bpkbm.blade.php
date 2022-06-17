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
                            <li class="breadcrumb-item">Detail Bpkb Masuk</li>
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
                                    <a href="/dashboard/bpkb-masuk">
                                        <button class="btn btn-pill btn-outline-primary btn-xs mb-3"><i
                                                class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                                    </a>

                                    <a href="/dashboard/bpkb-masuk/{{ $bpkbm->id }}/edit">
                                        <button class="btn btn-pill btn-outline-success btn-xs mb-3 mx-1"><i
                                                class="fa fa-pencil fa-lg" aria-hidden="true"></i> Edit</button>
                                    </a>

                                    <a href="#">
                                        <form action="/dashboard/bpkb-masuk/{{ $bpkbm->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-pill btn-outline-danger btn-xs mb-3"
                                                onclick="return confirm('Are you sure !!')"><i class="fa fa-times fa-lg"
                                                    aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </a>
                                </div>
                                <form method="POST" action="/dashboard/bpkb-masuk" class="form theme-form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!-- **************************************************************************************************8******  -->
                                    <div class="row my-1 mb-2">
                                        <label class="col-sm-3 col-form-label" for="status">Status</label>
                                        @if ($bpkbm->status === 'Belum Diserahkan Ke Pemilik')
                                            <div class="col-sm-5">
                                                <div class="btn btn-pill btn-danger btn-sm">
                                                    {{ $bpkbm->status }}</div>
                                            </div>
                                        @elseif ($bpkbm->status === 'Sudah Diserahkan Ke Pemilik')
                                            <div class="col-sm-5">
                                                <div class="btn btn-pill btn-success btn-sm">{{ $bpkbm->status }}
                                                </div>
                                            </div>
                                        @else
                                        @endif
                                    </div>
                                    <div class=" row mb-1">
                                        <label class="col-sm-3 col-form-label" for="no_order">No Order</label>
                                        <div class="col-sm-2">
                                            <input
                                                class="form-control form-control-sm @error('no_order') is-invalid @enderror"
                                                name="no_order" type="text" id="no_order"
                                                value="{{ $bpkbm->order->no_order }}" readonly>
                                            @error('no_order')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class=" row mb-1">
                                        <label class="col-sm-3 col-form-label" for="penyerah">Yang Menyerahkan</label>
                                        <div class="col-sm-4">
                                            <input
                                                class="form-control form-control-sm @error('penyerah') is-invalid @enderror"
                                                name="penyerah" type="text" id="penyerah"
                                                value="{{ $bpkbm->penyerah }}" readonly>
                                            @error('penyerah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class=" row mb-1">
                                        <label class="col-sm-3 col-form-label" for="dtrm_olh">Diterima Oleh</label>
                                        <div class="col-sm-4">
                                            {{-- <input type="hidden" name="dtrm_olh" value="{{ $bpkbm->dtrm_olh }}"> --}}
                                            <input
                                                class="form-control form-control-sm @error('dtrm_olh') is-invalid @enderror"
                                                name="dtrm_olh" type="text" id="dtrm_olh"
                                                value="{{ old('dtrm_olh', $bpkbm->dtrm_olh) }}" readonly>
                                            @error('dtrm_olh')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label class="col-sm-3 col-form-label" for="foto">Foto</label>
                                        <div class="col-sm-4">
                                            <img id="image" src="{{ asset('storage/' . $bpkbm->foto) }}"
                                                onclick="window.open(this.src)" class="card-img-top rounded"
                                                style="max-height: 100px; width:auto">
                                        </div>
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
            const image = document.querySelector('#image');
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
