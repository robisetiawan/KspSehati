<html>

<head>
    <title>Cetak</title>
    <!-- Bootstrap css-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet" />
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
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col text-center">
                <img class="img-fluid" src="{{ asset('templates/assets/images/logo/koperasi.png ') }}" alt=""
                    width="100">
            </div>
            <div class="col-9 text-center">
                <div class="d-print-none fs-4 fw-bold">KOPERASI SIMPAN PINJAM SEHATI MAKMUR ABADI</div>
                <!-- Scrren Only -->
                <div class="d-none d-print-block fs-6 fw-bold">KOPERASI SIMPAN PINJAM SEHATI MAKMUR ABADI</div>
                <!-- Print Only -->
                <p class="text-break">Jalur 8 Jembatan 2 Desa Telang Jaya Rt 018 Rw 007 Kel. Telang Jaya Kec. Muara
                    Telang Kab. Bayuasin Prov. Sumatera Selatan
                </p>
            </div>
            <div class="col text-center">
                <img class="img-fluid" src="{{ asset('templates/assets/images/logo/logo-sehati2.png ') }}"
                    alt="" width="100">
            </div>
            <hr class="new4 my-4 btn-dark">


            <div class="pb-2 text-center">
                <h5>Bukti Serah Terima</h5>
                <h6>Koperasi Sehati Makmur Abadi</h6>
            </div>


        </div>
        <div class="container pb-3">
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1 ">
                <div class="col-3">
                    No Memo
                </div>
                <div class="col">
                    : {{ $bpkbm->no_memo }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">
                    Tgl Terima
                </div>
                <div class="col">
                    : {{ $bpkbm->created_at->format('d/m/Y') }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">Diserahkan Oleh</div>
                <div class="col">
                    : {{ $bpkbm->penyerah }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">Diterima Oleh</div>
                <div class="col">
                    : {{ $bpkbm->dtrm_olh }}
                </div>
            </div>
            <!-- *************** -->
            <hr class="btn-dark">
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">No Bpkb</div>
                <div class="col">
                    : {{ $bpkbm->no_bpkb }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">No Polisi</div>
                <div class="col">
                    : {{ $bpkbm->order->jaminan->no_polisi }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">No Rangka</div>
                <div class="col">
                    : {{ $bpkbm->no_rangka }}
                </div>
            </div>

            <div class="row p-1">
                <div class="col-3">No Mesin</div>
                <div class="col">
                    : {{ $bpkbm->order->jaminan->no_mesin }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">Nama Bpkb</div>
                <div class="col">
                    : {{ $bpkbm->nm_bpkb }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">Alamat Bpkb</div>
                <div class="col">
                    : {{ $bpkbm->almt_bpkb }}
                </div>
            </div>
            <hr class="btn-dark">
        </div>

        {{-- <div class="container px-3 pb-4">
            <div>
                Bersedia mengundurkan diri dari Anggota KSP Sehati Makmur Abadi jika tidak mentaati segala ketentuan
                Anggaran Dasar, Anggaran Rumah Tangga, Keputusan Rapat Anggota dan ketentuan lainnya yang berlaku di KSP
                Sehati Makmur Abadi.
            </div>
        </div> --}}
        <div class="container px-3 text-center">

            <div class="row mb-5">
                <div class="col col-lg-2 py-2">
                    Yang Menerima
                </div>

                <div class="col col-lg-2 py-2">
                    Yang Menyerahkan,
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-2 py-2">
                    ({{ $bpkbm->dtrm_olh }})
                </div>

                <div class="col col-lg-2 py-2">
                    ({{ $bpkbm->penyerah }})
                </div>
            </div>

        </div>
    </div>
    </div>

    <script>
        window.print();
    </script>

</body>

</html>
