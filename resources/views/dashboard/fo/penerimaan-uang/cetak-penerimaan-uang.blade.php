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
                <img class="img-fluid" src="{{ asset('templates/assets/images/logo/logo-sehati2.png ') }}" alt=""
                    width="100">
            </div>
            <hr class="new4 my-4 btn-dark">


            <div class="pb-2 text-center">
                <h5>Bukti Angsuran Pinjaman</h5>
                <h6>Koperasi Sehati Makmur Abadi</h6>
            </div>


        </div>
        <div class="container pb-3">
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1 ">
                <div class="col-3">
                    No Anggota
                </div>
                <div class="col">
                    : {{ $penes->order->anggota->no_anggota }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">
                    No Terima
                </div>
                <div class="col">
                    : {{ $penes->no_terima }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">Nama</div>
                <div class="col">
                    : {{ $penes->order->anggota->user->name }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">Angsuran ke</div>
                <div class="col">
                    : {{ $penes->angsuran_ke }} dari {{ $penes->order->pinjam->periode }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">Tgl Terima</div>
                <div class="col">
                    : {{ $penes->updated_at->format('d M Y') }}
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">Nominal</div>
                <div class="col">
                    : @currency($penes->order->pinjam->angsuran)
                </div>
            </div>
            <!-- *************** -->
            <!-- *************** -->
            <div class="row p-1">
                <div class="col-3">Cara Bayar</div>
                <div class="col">
                    : {{ $penes->cr_bayar }}
                </div>
            </div>

            @if ($penes->cr_bayar === 'Transfer')
                <div class="row p-1">
                    <div class="col-3">Kode Bank</div>
                    <div class="col">
                        : {{ $penes->kd_bank }}
                    </div>
                </div>
                <!-- *************** -->
                <!-- *************** -->
                <div class="row p-1">
                    <div class="col-3">No Rek</div>
                    <div class="col">
                        : {{ $penes->no_rek }}
                    </div>
                </div>
            @else
            @endif
        </div>

        {{-- <div class="container px-3 pb-4">
            <div>
                Bersedia mengundurkan diri dari Anggota KSP Sehati Makmur Abadi jika tidak mentaati segala ketentuan
                Anggaran Dasar, Anggaran Rumah Tangga, Keputusan Rapat Anggota dan ketentuan lainnya yang berlaku di KSP
                Sehati Makmur Abadi.
            </div>
        </div> --}}
        <div class="container px-3 text-end">
            <div class="row">
                <div class="col py-2">
                    Muara Telang, {{ $penes->updated_at->format('d M Y') }}
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-2 py-2">
                    Pengurus
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 py-2">
                    (.................................................)
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
