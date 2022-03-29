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

    <div class="login-card">
        <form class="theme-form login-form needs-validation was-validated" novalidate="">
            <div class="text-center mb-3">
                <img class="img-fluid" src="{{ asset('templates/assets/images/logo/logo-sehati.png ') }}" alt=""
                    width="250">
            </div>

            <div class="form-group">
                <label>Users Id</label>
                <div class="input-group">

                    <input class="form-control" type="email" required="" placeholder="Test@gmail.com" />
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group" id="show_hide_password">

                    <input class="form-control" type="password" name="login[password]" required=""
                        placeholder="*********">
                    <div class="show-hide">
                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
                <a class="link" href="https://laravel.pixelstrap.com/viho/forget-password">Forgot
                    password?</a>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </div>
            <p>Don't have account?<a class="ms-2" href="https://laravel.pixelstrap.com/viho/sign-up">Create
                    Account</a></p>
        </form>
    </div>

    <script>
        (function() {
            "use strict";
            window.addEventListener(
                "load",
                function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName("needs-validation");
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener(
                            "submit",
                            function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add("was-validated");
                            },
                            false
                        );
                    });
                },
                false
            );
        })();
    </script>


    <script src="{{ asset('templates/assets/js/jquery-3.5.1.min.js ') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('templates/assets/js/icons/feather-icon/feather.min.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/icons/feather-icon/feather-icon.js ') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('templates/assets/js/config.js ') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('templates/assets/js/bootstrap/popper.min.js ') }}"></script>
    <script src="{{ asset('templates/assets/js/bootstrap/bootstrap.min.js ') }}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('templates/assets/js/script.js ') }}"></script>
</body>

</html>
