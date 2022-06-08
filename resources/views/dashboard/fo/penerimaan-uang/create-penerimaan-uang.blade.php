@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Penerimaan Uang</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Penerimaan Uang</li>
                            <li class="breadcrumb-item">Tambah Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="card">

            <form method="POST" action="/dashboard/penerimaan-uang" class="form theme-form" enctype="multipart/form-data">
                @csrf
                <div class="card-body f-12">
                    <div class="row">
                        <div class="col">


                            <div class="row">
                                <div class="col-sm-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-sm-12 p-r-0">
                                            <div class="card border-0">
                                                <!-- **************************************************************************************************8******  -->
                                                <div class="card-body p-1 ">
                                                    <!-- **************************************************************************************************8******  -->
                                                    <div class="row mb-1">
                                                        <label class="col-sm-3 col-form-label" for="no_terima">No
                                                            Terima</label>
                                                        <div class="col-sm-4 p-l-0">
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="colFormLabelSm" readonly value="0000" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-1">
                                                        <label class="col-sm-3 col-form-label" for="id">No
                                                            Order</label>

                                                        <div class="col p-l-0">
                                                            <select class="form-select" name="id">
                                                                @foreach ($orders as $order)
                                                                    @if (old('no_order') == $order->id)
                                                                        <option value="{{ $order->id }}" selected>
                                                                            {{ $order->no_order }} -
                                                                            {{ $order->anggota->user->name }}
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $order->id }}">
                                                                            {{ $order->no_order }} -
                                                                            {{ $order->anggota->user->name }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- **************************************************************************************************8******  -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="card-footer text-end f-12">
                                <div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
            </form>
        </div>
    </div>
@endsection
