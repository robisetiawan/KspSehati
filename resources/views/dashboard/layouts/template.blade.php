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
    <link rel="icon" href="{{ asset('templates/assets/images/logo/logo-sehati2.png ') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('templates/assets/images/logo/logo-sehati2.png ') }}"
        type="image/x-icon">
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

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/cssadd/bootsrap.css') }}"> --}}
    {{-- dataTables --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templates/assets/cssadd/dataTables.bootstrap4.min.css') }}">
    {{-- endDataTabels --}}
    {{-- heroes.css-bootstrap --}}
    <link rel="stylesheet" href="/css/heroes.css">

    {{-- Livewire table --}}
    @livewireStyles
    {{-- endLivewire table --}}

</head>

<body>

    <!--  Navbar  -->
    @include('dashboard.layouts.navbar')
    <!--  EndNavbar  -->

    <!--  Sidebar  -->
    @include('dashboard.layouts.sidebar')
    <!--  EndSidebar -->

    <!-- content -->
    @yield('content')
    <!-- EndContent -->

    <!-- Container-fluid Ends-->

    <!-- dashboardoter -->
    @include('dashboard.layouts.footer')
    <!-- Enddashboardoter -->

    @livewireScripts
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

    {{-- Currency --}}
    <script type="text/javascript">
        document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
            element.addEventListener('keyup', function(e) {
                let cursorPostion = this.selectionStart;
                let value = parseInt(this.value.replace(/[^,\d]/g, ''));
                let originalLenght = this.value.length;
                if (isNaN(value)) {
                    this.value = "";
                } else {
                    this.value = value.toLocaleString('id-ID', {
                        currency: 'IDR',
                        style: 'currency',
                        minimumFractionDigits: 0
                    });
                    cursorPostion = this.value.length - originalLenght + cursorPostion;
                    this.setSelectionRange(cursorPostion, cursorPostion);
                }
            });
        });
    </script>
    {{-- End --}}

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

    <!-- dataTable.js-->

    <script src="{{ asset('templates/assets/jsadd/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('templates/assets/jsadd/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('templates/assets/jsadd/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('templates/assets/jsadd/jsshowhide.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    {{-- dataTables --}}
    @stack('prepend-script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @stack('scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>
    {{-- end_dataTables --}}

    @stack('chart')

</body>

</html>
