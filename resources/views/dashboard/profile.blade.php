@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Profile</li>
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
                @if (session('status'))
                    <div class="alert alert-success text-light">{{ session('status') }}</div>
                @endif
                <form action="{{ route('update-profile', Auth::id()) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-3 d-flex align-items-center">
                            <div class="card-body avatar-showcase">
                                <div class="avatars">
                                    {{-- <div class="avatar">
                                    <img class="img-200 rounded-circle"
                                        src="https://laravel.pixelstrap.com/viho/assets/images/user/1.jpg" alt="#">
                                </div> --}}
                                    <div class="text-center">
                                        <a href="#">
                                            <img src="https://laravel.pixelstrap.com/viho/assets/images/user/1.jpg"
                                                class="img-200 rounded-circle">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8 needs-validation was-validated" novalidate="">
                            <div class="card-body">

                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="name">Nama</label>
                                    <div class="col-sm-8">
                                        <input class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                                            name="name" type="text" value="{{ auth()->user()->name }}" required>
                                    </div>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="email">Email</label>
                                    <div class="col-sm-8">
                                        <input class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}"
                                            name="email" type="text" value="{{ auth()->user()->email }}" required>
                                    </div>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                </div>


                                {{-- <div class="form-group mb-3 row">
                                    <label class="col-sm-4 col-form-label">Password Baru</label>
                                    <div class="col-sm-8" id="show_hide_password">
                                        <input class="form-control" type="password" required="">

                                        <div class="show-hide">
                                            <a href=""><i class="fa fa-eye-slash px-3" aria-hidden="true"></i></a>
                                        </div>

                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">Konfirm Password Baru</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="password" required="">
                                    </div>
                                </div>

                                <div class="form-group text-end">
                                    <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                </div> --}}

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
