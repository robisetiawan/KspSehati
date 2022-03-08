@extends('fo.layout.template-VFO')

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header ">
            </div>
        </div>

        <div class="container-fluid">
            <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Dashboard</h5>
                    </div>
                    <div class="cal-date-widget card-body pt-3">
                        <div class="row">
                            <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                                <div class="cal-info text-center">
                                    <div>
                                        <img class="animation__wobble"
                                            src="{{ asset('templates/assets/images/logo/logo-sehati2.png') }}"
                                            alt="AdminLTELogo" height="150" width="150">
                                        {{-- <h3>Sehati Makmur Abadi</h3> --}}
                                        <p class="f-16">Selamat datang di Sisfo Sehati Makmur
                                            Abadi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                                <div class="cal-datepicker">
                                    <div class="datepicker-here float-sm-end" data-language="en"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
