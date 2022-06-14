@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Karyawan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Karyawan</li>
                            <li class="breadcrumb-item">Tambah Karyawan</li>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <form method="POST" action="/dashboard/employee" class="form theme-form" enctype="multipart/form-data">
                @csrf

                <div class="card-body f-12">
                    <div class="row">
                        <div class="col">

                            <a href="/dashboard/employee" class="btn btn-pill btn-outline-primary btn-xs mb-3"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>

                            <div class="container-fluid py-3 border">
                                {{-- <div class="card-header p-1 mt-2">
                                    <h6> <i class="fa fa-lock" aria-hidden="true"></i>
                                        Account</h6>
                                </div> --}}
                                <div class="row rounded">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12 p-r-0">

                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <!-- **************************************************************************************************8******  -->

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="nama">Nama</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('nama') is-invalid @enderror"
                                                                name="nama" type="text" id="nama" autofocus
                                                                value="{{ old('nama') }}">
                                                            @error('nama')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="image">Image</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('image') is-invalid @enderror"
                                                                name="image" type="file" id="image"
                                                                onchange="previewImage()">
                                                            @error('image')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            <img class="p-l-2 img-preview img-fluid my-1 col-sm-6 rounded">
                                                        </div>
                                                    </div>
                                                    <!-- ************************************************************************************************* -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="no_identitas">No
                                                            Identitas</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('no_identitas') is-invalid @enderror"
                                                                name="no_identitas" type="text" id="no_identitas"
                                                                value="{{ old('no_identitas') }}">
                                                            @error('no_identitas')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="tmpt_lhr">TTL</label>
                                                        <label class="col-sm-4 col-form-label visually-hidden"
                                                            for="tgl_lhr">tgl_lhr</label>
                                                        <div class="col-sm-4 p-r-0">
                                                            <input
                                                                class="form-control form-control-sm @error('tmpt_lhr') is-invalid @enderror"
                                                                name="tmpt_lhr" type="text" id="tmpt_lhr"
                                                                value="{{ old('tmpt_lhr') }}">
                                                            @error('tmpt_lhr')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-4 p-l-1">
                                                            <input
                                                                class="form-control form-control-sm @error('tgl_lhr') is-invalid @enderror"
                                                                name="tgl_lhr" type="date" id="tgl_lhr"
                                                                value="{{ old('tgl_lhr') }}">
                                                            @error('tgl_lhr')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- ************************************************************************************************* -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="no_tel">Telepon
                                                            Seluler</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('no_tel') is-invalid @enderror"
                                                                name="no_tel" type="number" id="no_tel"
                                                                value="{{ old('no_tel') }}">
                                                            @error('no_tel')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- ************************************************************************************************* -->

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- ************************************************************************************************* -->
                                    <!-- ************************************************************************************************* -->

                                    <div class="col-sm-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1">
                                                    <!-- **************************************************************************************************8******  -->

                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="alamat">Alamat</label>
                                                        <div class="col">
                                                            <textarea class="form-control form-control-sm @error('alamat') is-invalid @enderror" name="alamat" type="text"
                                                                id="alamat">{{ old('alamat') }}</textarea>
                                                            @error('alamat')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="rt">RT / RW</label>
                                                        <label class="col-sm-4 col-form-label visually-hidden"
                                                            for="rw">Rw</label>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rt') is-invalid @enderror"
                                                                name="rt" type="number" id="rt"
                                                                value="{{ old('rt') }}">
                                                            @error('rt')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rw') is-invalid @enderror"
                                                                name="rw" type="number" id="rw"
                                                                value="{{ old('rw') }}">
                                                            @error('rw')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="desa_kel">Desa/Kel</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('desa_kel') is-invalid @enderror"
                                                                name="desa_kel" type="text" id="desa_kel"
                                                                value="{{ old('desa_kel') }}">
                                                            @error('desa_kel')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kec">Kec</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kec') is-invalid @enderror"
                                                                name="kec" type="text" id="kec"
                                                                value="{{ old('kec') }}">
                                                            @error('kec')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="kab_kota">Kab/Kota</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('kab_kota') is-invalid @enderror"
                                                                name="kab_kota" type="text" id="kab_kota"
                                                                value="{{ old('kab_kota') }}">
                                                            @error('kab_kota')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label"
                                                            for="provinsi">Provinsi</label>
                                                        <div class="col-sm-6">
                                                            <input
                                                                class="form-control form-control-sm @error('provinsi') is-invalid @enderror"
                                                                name="provinsi" type="text" id="provinsi"
                                                                value="{{ old('provinsi') }}">
                                                            @error('provinsi')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="kode_pos">Kode
                                                            Pos</label>
                                                        <div class="col-sm-4">
                                                            <input
                                                                class="form-control form-control-sm @error('kode_pos') is-invalid @enderror"
                                                                name="kode_pos" type="number" id="kode_pos"
                                                                value="{{ old('kode_pos') }}">
                                                            @error('kode_pos')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button class="btn btn-primary text-end" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>


            </form>
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
