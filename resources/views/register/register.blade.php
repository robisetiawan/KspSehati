@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Register</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Register</li>
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
                <div class="row">
                    <div class="theme-form login-form">
                        <div class="text-center mb-3">
                            <a href="#">
                                <img src="https://laravel.pixelstrap.com/viho/assets/images/user/1.jpg"
                                    class="img-fluid img-200 rounded-circle">
                            </a>
                        </div>

                        @if (session()->has('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="/register" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="text">No Anggota</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
                                    <input class="form-control" type="text" id="text" required
                                        value="{{ old('email') }}" autofocus>
                                </div>
                                <label for="name">Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                        name="name" required value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="email">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input class="form-control @error('email') is-invalid @enderror" name="email"
                                        type="email" id="email" required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="password">Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <span class="input-group-text"><i class="fa fa-unlock-alt"
                                            aria-hidden="true"></i></span>
                                    <input class="form-control @error('password') is-invalid @enderror" name="password"
                                        type="password" id="password" required>
                                    @error('password')
                                        <div class="  invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="show-hide">
                                        <a href=""><i class="fa fa-eye-slash p-l-5" aria-hidden="true"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                            <button class="w-100 btn btn-primary btn-sm" type="submit">Create Account</button>
                        </form>
                    </div>


                    </form>
                </div>
            </div>

            <!-- *************** -->
            <!-- *************** -->
        </div>
    </div>
@endsection
