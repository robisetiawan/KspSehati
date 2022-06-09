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
