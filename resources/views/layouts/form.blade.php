<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name')}}| @yield('subtitle')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href={{ asset('bootstrap/dist/css/bootstrap.min.css')}}>
        <!-- Font Awesome -->
        <link rel="stylesheet" href={{ asset('font-awesome/css/font-awesome.min.css')}}>
        <!-- Ionicons -->
        <link rel="stylesheet" href={{ asset('Ionicons/css/ionicons.min.css')}}>
        <!-- Theme style -->
        <link rel="stylesheet" href={{ asset('css/AdminLTE.min.css')}}>
        <!-- iCheck -->
        <link rel="stylesheet" href={{ asset('plugins/iCheck/square/blue.css"')}}>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                @yield('title')
            </div>
            <!-- /.login yield -->
            <div class="login-box-body">
                @yield('content')
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row-align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy;2020<a href="/" class="font-weight-bold m1-1">Trabajo final Gabriel Morales</a>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

            <!-- jQuery 3 -->
            <script src={{ asset('bower_components/jquery/dist/jquery.min.js')}}></script>
            <!-- Bootstrap 3.3.7 -->
            <script src={{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}></script>
            <!-- iCheck -->
            <script src={{ asset('plugins/iCheck/icheck.min.js')}}></script>
            <script>
            $(function () {
                $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
                });
            });
            </script>
    </body>
</html>
