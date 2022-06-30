@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col">
                        <h3>Anggota Berhenti</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Anggota Berhenti</li>
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
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="/dashboard/stopout/search" method="GET">

                            <div class="input-group mb-3">
                                <label class="col-sm-4 col-form-label visually-hidden" for="id">No Anggota</label>
                                <input class="form-control" type="text" name="cari"
                                    placeholder="Masukan Nama atau Nomor Anggota  ..." value="{{ request('cari') }}"
                                    required>
                                <button class="btn btn-primary" type="submit" value="CARI"><i class="fa fa-arrow-right"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>

                    </div>
                </div>

                @forelse ($anggota as $a)
                    <form method="POST" action="/dashboard/stop-out" class="form theme-form" enctype="multipart/form-data">
                        @csrf

                        <div class="card">
                            <div class="card-body f-12">
                                <div class="row">
                                    {{-- Left Coloum --}}
                                    <div class="col">
                                        <!-- **************************************************************************************************8******  -->
                                        <div class=" row mb-1">
                                            <label class="col-sm-3 col-form-label" for="no_order">No Order</label>
                                            <div class="col-sm-2">
                                                <input type="hidden" name="anggota_id" value="{{ $a->id }}">
                                                <input type="hidden" name="simpkok" value="{{ $a->simpkok }}">
                                                <input type="hidden" name="simpwj" value="{{ $a->simpwj }}">
                                                <input
                                                    class="form-control form-control-sm @error('no_order') is-invalid @enderror"
                                                    name="no_order" type="text" id="no_order"
                                                    value="{{ $a->no_anggota }}" readonly>
                                                @error('no_order')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-3 col-form-label" for="nama">Nama</label>
                                            <div class="col-sm-4">
                                                <input
                                                    class="form-control form-control-sm @error('nama') is-invalid @enderror"
                                                    name="nama" type="text" id="nama"
                                                    value="{{ $a->nama_panggilan }}" readonly>
                                                @error('nama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-3 col-form-label" for="nama_ibu">Nama Ibu</label>
                                            <div class="col-sm-4">
                                                {{-- <input type="hidden" name="nama_ibu" value="{{ $a->nama_ibu }}"> --}}
                                                <input
                                                    class="form-control form-control-sm @error('nama_ibu') is-invalid @enderror"
                                                    name="nama_ibu" type="text" id="nama_ibu"
                                                    value="{{ old('nama_ibu', $a->nama_ibu) }}" readonly>
                                                @error('nama_ibu')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <label class="col-sm-3 col-form-label" for="foto">Foto</label>
                                            <div class="col-sm-4">
                                                @if ($a->user->image)
                                                    {{-- <img src="{{ asset('storage/' . $a->user->image) }}"
                                                                    class="card-img-top mt-3"> --}}
                                                    <div style="overflow: hidden">
                                                        <img class="rounded"
                                                            src="{{ asset('storage/' . $a->user->image) }}"
                                                            width="200px" height="200px" />
                                                    </div>
                                                @else
                                                    <img src="{{ asset('templates/assets/images/dashboard/2.png ') }}"
                                                        class="rounded" width="200px" height="200px">
                                                @endif
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                {{-- cardFooter --}}
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                                {{-- endCardFooter --}}
                            </div>
                        </div>
                    </form>
                @empty
                    <p class="text-center">Anggota tidak ditemukan !!!</p>
                @endforelse
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
