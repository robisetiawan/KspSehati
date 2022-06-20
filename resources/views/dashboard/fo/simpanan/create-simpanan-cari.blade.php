@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col">
                        <h3>Simpanan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Simpanan</li>
                            <li class="breadcrumb-item">Tambah Simpanan</li>
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
                        <form action="/dashboard/tambah/cari" method="GET">

                            <div class="input-group mb-3">
                                <label class="col-sm-4 col-form-label visually-hidden" for="id">No Anggota</label>
                                <input class="form-control" type="text" name="cari"
                                    placeholder="Masukan Nama atau Nomor Anggota ..." value="{{ request('cari') }}"
                                    required>
                                <button class="btn btn-primary" type="submit" value="CARI"><i class="fa fa-arrow-right"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>

                    </div>
                </div>

                <form method="POST" action="/dashboard/tambah-simpanan" class="form theme-form"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body f-12">
                            @forelse ($anggotas as $a)
                                <div class="row">
                                    {{-- Left Coloum --}}
                                    <div class="col">
                                        <!-- **************************************************************************************************8******  -->
                                        <div class=" row mb-1">
                                            <label class="col-sm-2 col-form-label" for="no_anggota">No Anggota</label>
                                            <div class="col-sm-5 p-l-0">
                                                <input type="hidden" name="id" value="{{ $a->id }}">
                                                <input
                                                    class="form-control form-control-sm @error('no_anggota') is-invalid @enderror"
                                                    name="no_anggota" type="text" id="no_anggota"
                                                    value="{{ $a->no_anggota }}" readonly>
                                                @error('no_anggota')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-2 col-form-label" for="name">Nama</label>
                                            <div class="col-sm-5 p-l-0">
                                                <input
                                                    class="form-control form-control-sm @error('name') is-invalid @enderror"
                                                    name="name" type="text" id="name"
                                                    value="{{ $a->user->name }}" readonly>
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-2 col-form-label" for="simpwj">Simpanan Wajib</label>
                                            <div class="col-sm-5 p-l-0">
                                                <input type="hidden" name="simpwj" value="{{ $a->simpwj }}">
                                                <input
                                                    class="form-control form-control-sm @error('simpwj') is-invalid @enderror"
                                                    name="simpwj" type="text" id="simpwj" value="@currency($a->simpwj)"
                                                    disabled>
                                                @error('simpwj')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-1">
                                            <label class="col-sm-2 col-form-label" for="simp_wj">Nominal</label>
                                            <div class="col-sm-5 p-l-0">
                                                <input
                                                    class="form-control form-control-sm @error('simp_wj') is-invalid @enderror"
                                                    name="simp_wj" type="text" id="simp_wj"
                                                    value="{{ old('simp_wj') }}" type-currency="IDR" placeholder="Rp ">
                                                @error('simp_wj')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            @empty
                                <p class="text-center">Anggota tidak ditemukan !!!</p>
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
@endsection
