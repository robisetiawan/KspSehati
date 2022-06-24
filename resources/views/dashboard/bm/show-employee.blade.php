@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Laporan Data Karyawan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Laporan Data Karyawan</li>
                            <li class="breadcrumb-item">Detail Karyawan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">

            <div class="card-body f-12">
                <div class="row">
                    <div class="col">

                        <div class="btn-group">
                            <a href="/dashboard/lap-dt-employee">
                                <button class="btn btn-pill btn-outline-primary btn-xs mb-3"><i class="fa fa-arrow-left"
                                        aria-hidden="true"></i> Back</button>
                            </a>
                        </div>

                        <form method="POST" action="/dashboard/employee" class="form theme-form"
                            enctype="multipart/form-data">
                            @csrf

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
                                                        <label class="col-sm-6 col-form-label" for="bawa_ag">Anggota yang
                                                            dibawa</label>
                                                        <div class="col-sm-2">
                                                            <input
                                                                class="form-control form-control-sm @error('bawa_ag') is-invalid @enderror"
                                                                name="bawa_ag" type="text" id="bawa_ag" readonly
                                                                value="{{ old('bawa_ag', $employee->bawa_ag) }}">
                                                            @error('bawa_ag')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-2 p-l-0">
                                                            <a href="/dashboard/lap-dt-employee/bawa_ag/{{ $employee->id }}"
                                                                class="btn btn-success btn-sm border-0 px-2">
                                                                <i class="fa fa-eye fa-lg">
                                                                </i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="nama">Nama</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('nama') is-invalid @enderror"
                                                                name="nama" type="text" id="nama" readonly
                                                                value="{{ old('nama', $employee->nama) }}">
                                                            @error('nama')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- ************************************************************************************************* -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="no_employee">No
                                                            Karyawan</label>
                                                        <div class="col">
                                                            <input
                                                                class="form-control form-control-sm @error('no_employee') is-invalid @enderror"
                                                                name="no_employee" type="text" id="no_employee" readonly
                                                                value="{{ old('no_employee', $employee->no_employee) }}">
                                                            @error('no_employee')
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
                                                            @if ($employee->image)
                                                                {{-- <img src="{{ asset('storage/' . $anggotas->user->image) }}"
                                                                    class="card-img-top mt-3"> --}}
                                                                <div style="overflow: hidden">
                                                                    <img class="rounded"
                                                                        src="{{ asset('storage/' . $employee->image) }}"
                                                                        width="200px" height="200px" />
                                                                </div>
                                                            @else
                                                                <img src="{{ asset('templates/assets/images/dashboard/2.png ') }}"
                                                                    class="rounded" width="200px" height="200px">
                                                            @endif
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
                                                                readonly
                                                                value="{{ old('no_identitas', $employee->no_identitas) }}">
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
                                                                name="tmpt_lhr" type="text" id="tmpt_lhr" readonly
                                                                value="{{ old('tmpt_lhr', $employee->tmpt_lhr) }}">
                                                            @error('tmpt_lhr')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-4 p-l-1">
                                                            <input
                                                                class="form-control form-control-sm @error('tgl_lhr') is-invalid @enderror"
                                                                name="tgl_lhr" type="date" id="tgl_lhr" readonly
                                                                value="{{ old('tgl_lhr', $employee->tgl_lhr) }}">
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
                                                                name="no_tel" type="number" id="no_tel" readonly
                                                                value="{{ old('no_tel', $employee->no_tel) }}">
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
                                                        <label class="col-sm-4 col-form-label"
                                                            for="alamat">Alamat</label>
                                                        <div class="col">
                                                            <textarea class="form-control form-control-sm @error('alamat') is-invalid @enderror" name="alamat" readonly
                                                                type="text" id="alamat">{{ old('alamat', $employee->alamat) }}</textarea>
                                                            @error('alamat')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <label class="col-sm-4 col-form-label" for="rt">RT /
                                                            RW</label>
                                                        <label class="col-sm-4 col-form-label visually-hidden"
                                                            for="rw">Rw</label>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rt') is-invalid @enderror"
                                                                name="rt" type="number" id="rt" readonly
                                                                value="{{ old('rt', $employee->rt) }}">
                                                            @error('rt')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input
                                                                class="form-control form-control-sm @error('rw') is-invalid @enderror"
                                                                name="rw" type="number" id="rw" readonly
                                                                value="{{ old('rw', $employee->rw) }}">
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
                                                                name="desa_kel" type="text" id="desa_kel" readonly
                                                                value="{{ old('desa_kel', $employee->desa_kel) }}">
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
                                                                name="kec" type="text" id="kec" readonly
                                                                value="{{ old('kec', $employee->kec) }}">
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
                                                                name="kab_kota" type="text" id="kab_kota" readonly
                                                                value="{{ old('kab_kota', $employee->kab_kota) }}">
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
                                                                name="provinsi" type="text" id="provinsi" readonly
                                                                value="{{ old('provinsi', $employee->provinsi) }}">
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
                                                                name="kode_pos" type="number" id="kode_pos" readonly
                                                                value="{{ old('kode_pos', $employee->kode_pos) }}">
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

                        </form>


                    </div>
                </div>
            </div>


            {{-- </form> --}}
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
@push('scripts')
    // {{-- dataTables --}}
    <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
    </script>
    {{-- end_dataTables --}}
@endpush
