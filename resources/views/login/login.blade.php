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

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/bootstrap.css ') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/style.css ') }}">
    <link id="color" rel="stylesheet" href="{{ asset('templates/assets/css/color-1.css ') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/responsive.css ') }}">



</head>

<body>

    <div class="login-card">
        <form class="theme-form login-form" action="/" method="POST">
            @csrf
            <div class="text-center mb-3">
                <img class="img-fluid" src="{{ asset('templates/assets/images/logo/logo-sehati-old.png ') }}"
                    alt="" width="250">
            </div>

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="form-group">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                            id="email" required autofocus value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <label for="password">Password</label>
                <div class="input-group" id="show_hide_password">
                    <span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                    <input class="form-control" type="password" id="password" name="password" required>
                </div>
            </div>

            <button class="w-100 btn btn-primary btn-sm" type="submit">Login</button>
            <small class="d-flex justify-content-center mt-4">
                Copyright 2022 © Sehati Makmur Abadi
            </small>
        </form>
    </div>


    <script src="{{ asset('templates/assets/js/jquery-3.5.1.min.js ') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('templates/assets/js/icons/feather-icon/feather.min.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/icons/feather-icon/feather-icon.js ') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('templates/assets/js/config.js ') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('templates/assets/js/bootstrap/popper.min.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/bootstrap/bootstrap.min.js ') }}"></script>
</body>

</html>
