@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6">
                        @include('dashboard.fo.bookmark')
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        @cannot('anggota')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <a href="/dashboard/anggotas">
                            <div class="card o-hidden border-0">
                                <div class="bg-primary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><i data-feather="users"></i></div>
                                        <div class="media-body">
                                            <span class="m-0">Anggota</span>
                                            <h4 class="mb-0 counter">{{ $anggotas }}</h4>
                                            <i class="icon-bg" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <a href="/dashboard/employee">
                            <div class="card o-hidden border-0">
                                <div class="bg-secondary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><i data-feather="user-check"></i></div>
                                        <div class="media-body">
                                            <span class="m-0">Karyawan</span>
                                            <h4 class="mb-0 counter">{{ $employees }}</h4>
                                            <i class="icon-bg" data-feather="user-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <a href="/dashboard/orders">
                            <div class="card o-hidden border-0">
                                <div class="bg-primary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><i data-feather="dollar-sign"></i></div>
                                        <div class="media-body">
                                            <span class="m-0">Pinjaman</span>
                                            <h4 class="mb-0 counter">{{ $pinj }}</h4>
                                            <i class="icon-bg" data-feather="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <a href="/dashboard/orders">
                            <div class="card o-hidden border-0">
                                <div class="bg-secondary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><i data-feather="target"></i></div>
                                        <div class="media-body">
                                            <span class="m-0">Belum Lunas</span>
                                            <h4 class="mb-0 counter">{{ $order }}</h4>
                                            <i class="icon-bg" data-feather="target"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endcan



        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <main>
                                <h1 class="visually-hidden">Heroes examples</h1>

                                <div class="px-4 my-3 text-center">
                                    <img class="d-block mx-auto mb-4"
                                        src="{{ asset('templates/assets/images/logo/logo-sehati2.png ') }}" alt=""
                                        width="100">
                                    <h3>Welcome back, {{ auth()->user()->name }}</h3>
                                    <h1 class="display-6 fw-bold">KSP Sehati Makmur Abadi</h1>
                                    <div class="col-lg-6 mx-auto">
                                        <p class="lead mb-4 f-12">Jalur 8 jembatan 2 Desa Telang Jaya RT. 18 Rw. 07
                                            Kec. Muara Telang Kab. Banyuasin Hp. 0823-7322-9292 / 0813-67375476 /
                                            0822-8098-0320
                                        </p>
                                    </div>
                                </div>
                        </div>

                        </main>
                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>
@endsection
