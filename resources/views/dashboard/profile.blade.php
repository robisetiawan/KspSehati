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
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
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
                    <div class="alert alert-success alert-dismissible fade show mt-4 mb-1 mx-5" role="alert">
                        <strong>{{ session('status') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('update-profile', Auth::id()) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center">
                        <div class="card-body avatar-showcase">
                            <div class="avatars">
                                {{-- <div class="avatar">
                                    <img class="img-200 rounded-circle"
                                        src="https://laravel.pixelstrap.com/viho/assets/images/user/1.jpg" alt="#">
                                </div> --}}
                                <div class="text-center">
                                    {{-- <img src="https://laravel.pixelstrap.com/viho/assets/images/user/1.jpg"
                                            class="img-200"> --}}
                                    @if (auth()->user()->image)
                                        <div style="overflow: hidden">
                                            <img class="rounded-circle"
                                                src="{{ asset('storage/' . auth()->user()->image) }}" width="200px"
                                                height="200px" />
                                        </div>
                                    @else
                                        <img class="img-preview rounded-circle">
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8 needs-validation was-validated" novalidate="">
                            <div class="card-body">

                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="name">Nama</label>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('name ') is-invalid @enderror" name="name"
                                            type="text" id="name" value="{{ auth()->user()->name }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="email">Email</label>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('email') is-invalid @enderror" name="email"
                                            type="email" id="email" value="{{ auth()->user()->email }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="image">Foto</label>
                                    <input type="hidden" name="oldImage" value="{{ auth()->user()->image }}">
                                    <div class="col-sm-8">
                                        <input class="form-control @error('image ') is-invalid @enderror" name="image"
                                            type="file" id="image" onchange="previewImage()">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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

    <script>
        // preview image
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.height = '200px';
            imgPreview.style.width = '200px';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
