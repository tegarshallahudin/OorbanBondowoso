<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('boostrap/') }}css/font-face.css" rel="stylesheet" media="all">
    <link href="{{ asset('boostrap/') }}vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('boostrap/') }}vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('boostrap/') }}vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('boostrap/') }}vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('boostrap/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('boostrap/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('boostrap/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('boostrap/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('boostrap/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('boostrap/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('boostrap/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('boostrap/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="containers">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo ">
                            <a href="#">
                                <img src="{{ asset('boostrap/images/icon/logo.png') }}" alt="OorbanBondowoso">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group">
                                    <label>Masukkan Email</label>
                                    <input id='email' class="au-input au-input--full" type="email" name="email" :value="old('email')" placeholder="Masukkan Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" class="au-input au-input--full" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan Password">
                                </div>
                                <br>
                                <br>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('boostrap/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('boostrap/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('boostrap/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('boostrap/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('boostrap/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('boostrap/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('boostrap/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('boostrap/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('boostrap/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('boostrap/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('boostrap/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('boostrap/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('boostrap/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('boostrap/js/main.js') }}"></script>

</body>

</html>