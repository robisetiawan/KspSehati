@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Setting</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Setting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="card">
            <!-- *************** -->
            <!-- *************** -->

            <div class="container">
                @if (session('success'))
                    <div class="row justify-content-center">
                        <div class="alert alert-success alert-dismissible fade show mt-4 mb-1 col-sm-8" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                <form action="{{ route('update-setting', Auth::id()) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center">
                        <div class="col-sm-8 needs-validation was-validated" novalidate="">
                            <div class="card-body">

                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="password">Password</label>
                                    <div class="col" id="show_hide_password">
                                        <input type="password"
                                            class="form-control {{ $errors->first('password') ? 'is-invalid' : '' }}"
                                            name="password" id="password" value="" placeholder="Password">
                                        <div class="show-hide">
                                            <a href=""><i class="fa fa-eye-slash px-3" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="password">Konfirmasi Password</label>
                                    <div class="col-sm-8">
                                        <input type="password"
                                            class="form-control {{ $errors->first('konfirmasi_password') ? 'is-invalid' : '' }}"
                                            name="konfirmasi_password" id="password" value=""
                                            placeholder="Konfirmasi Password">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('konfirmasi_password') }}
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- *************** -->
            <!-- *************** -->
        </div>
    </div>
@endsection
