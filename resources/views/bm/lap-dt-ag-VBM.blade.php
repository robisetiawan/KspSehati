<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('templates/assets/images/favicon.ico ') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('templates/assets/images/favicon.ico ') }}" type="image/x-icon">
    <title>Sehati | {{ $title }}
    </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templates/assets/font-awesome-4.7.0/css/font-awesome.css ') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/icofont.css ') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/themify.css ') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/flag-icon.css ') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/feather-icon.css ') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/date-picker.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/owlcarousel.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/prism.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/whether-icon.css ') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/bootstrap.css ') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/style.css ') }}">
    <link id="color" rel="stylesheet" href="{{ asset('templates/assets/css/color-1.css ') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/responsive.css ') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/cssadd/bootsrap.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templates/assets/cssadd/dataTables.bootstrap4.min.css') }}">


</head>

<body>

    <!--  Navbar  -->
    @include('bm.layout.navbar-VBM')
    <!--  EndNavbar  -->

    <!--  Sidebar  -->
    @include('bm.layout.sidebar-VBM')
    <!--  EndSidebar -->

    <!-- content -->
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Laporan Data Anggota</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Laporan Data Anggota</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="table-responsive card-body f-12">
                            <table class="table table-bordered table-xxs text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No Anggota</th>
                                        <th scope="col">Tanggal Order</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Simpanan</th>
                                        <th scope="col">Pinjaman</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>1029384920</td>
                                        <td>01-01-2020</td>
                                        <td>Anton</td>
                                        <td>Jl.Blablalalal</td>
                                        <td>Rp. 1000.000</td>
                                        <td>Rp. 500.000</td>
                                        <td>
                                            <button type="button" class="btn btn-pill btn-primary btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#detailAnggota">
                                                Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>82647284728</td>
                                        <td>12-03-2021</td>
                                        <td>AB</td>
                                        <td>Motor</td>
                                        <td>Jl.Asdsad</td>
                                        <td></td>
                                        <td><button type="button" class="btn btn-pill btn-primary btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#detailAnggota">
                                                Detail
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- Modal -->
                        @include('bm.detail-ag-VBM')
                        <!-- endModal -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Laporan Keuangan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Laporan Keuangan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <!-- ***************************-->
                        <!-- ********* Cash Out ********-->
                        <!-- ***************************-->

                        <div class="card-header pb-0">
                            <h5>Cash Out</h5>
                        </div>

                        <div class="card-body pt-3 pb-1 f-12">
                            <div class="row">
                                <div class="col">
                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                    <div class="mb-1 row">
                                        <label class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": {{ $title }}">
                                        </div>
                                        <label class="col-sm-2 col-form-label">Periode Pinjaman</label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value=": {{ $title }}">
                                        </div>
                                    </div>
                                    <!-- ***************************-->
                                    <!-- ***************************-->
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-3 pb-1 f-12">
                            <table class="table table-striped table-bordered example" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="row">No</th>
                                        <th scope="row">Tanggal</th>
                                        <th scope="row">No Anggota</th>
                                        <th scope="row">Nama</th>
                                        <th scope="row">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>12-12-2022</td>
                                        <td>122314211</td>
                                        <td>Anton</td>
                                        <td>Rp. 2.000.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>12-03-2022</td>
                                        <td>81261867381</td>
                                        <td>Sudin</td>
                                        <td>Rp. 2.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- EndContent -->

    <!-- Footer -->
    @include('bm.layout.footer-VBM')
    <!-- EndFooter -->

    <script type="text/javascript">
        // localStorage.clear();
        var div = document.querySelector("div.page-wrapper")
        var b = div.classList.contains('compact-sidebar'); // true;
        if (b) {
            div.classList.remove("compact-sidebar");
        }
        localStorage.setItem('page-wrapper', 'page-wrapper compact-wrapper modern-sidebar');
        localStorage.setItem('page-body-wrapper', 'sidebar-icon');
    </script>

    <script src="{{ asset('templates/assets/js/jquery-3.5.1.min.js ') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('templates/assets/js/icons/feather-icon/feather.min.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/icons/feather-icon/feather-icon.js ') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('templates/assets/js/sidebar-menu.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/config.js ') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('templates/assets/js/bootstrap/popper.min.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/bootstrap/bootstrap.min.js ') }}"></script>
    <!-- Plugins JS start-->

    <script src="{{ asset('templates/assets/js/prism/prism.min.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/clipboard/clipboard.min.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/counter/jquery.waypoints.min.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/counter/jquery.counterup.min.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/counter/counter-custom.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/custom-card/custom-card.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/datepicker/date-picker/datepicker.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/datepicker/date-picker/datepicker.en.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/datepicker/date-picker/datepicker.custom.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/owlcarousel/owl.carousel.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/general-widget.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/height-equal.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/tooltip-init.js ') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('templates/assets/js/script.js ') }}"></script>

    <!-- Plugin used-->
    <script src="{{ asset('templates/assets/jsadd/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('templates/assets/jsadd/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('templates/assets/jsadd/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.example').DataTable();
        });
    </script>
</body>

</html>
