@extends('bm.layout.template-VBM')

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>Order</h5>
                        </div>
                        <div class="table-responsive card-body pt-3 f-12">
                            <table class="table table-bordered table-xxs text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No Order</th>
                                        <th scope="col">Tanggal Order</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">UB</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Supplier Reff</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>1029384920</td>
                                        <td>01-01-2020</td>
                                        <td>Anton</td>
                                        <td>Motor</td>
                                        <td>Jl.Blablalalal</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>82647284728</td>
                                        <td>12-03-2021</td>
                                        <td>AB</td>
                                        <td>Motor</td>
                                        <td>Jl.Asdsad</td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
