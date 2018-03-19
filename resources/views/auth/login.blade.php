<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ALEX Distribuidora SA | Ingresar al Sistema</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
<link type="text/css" rel="stylesheet" href="{{ asset('plantillas/AdminLTE/bootstrap/css/bootstrap.min.css') }}  ">
        <!-- Font Awesome -->
        <link href="{{ asset('plantillas/AdminLTE/plugins/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link type="text/css" rel="stylesheet" href="{{ asset('plantillas/AdminLTE/dist/css/AdminLTE.min.css') }}  ">
        <!-- iCheck -->
        <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

        <link href="{{ asset('plantillas/AdminLTE/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <!-- Efectos Animaciones -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/animate.css') }}  ">
    <link type="text/css" rel="stylesheet" href="{{ asset('plantillas/AdminLTE/sacado_KAdmin/main.css') }} " type='text/css'>

</head>
    <body class="hold-transition">
    <div class="page-content">
        <div id="tab-general">
            <div class="row mbl">
                <div class="col-lg-12">
                    <div class="col-md-12">
                        <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="login-logo">
                        <?php $logo = \App\Config::find(1); ?>
                        @if($logo !== "sin imagen")
                            <img style="width:200px;height:200px"  alt="User Image" class="profile-user-img img-responsive img-circle" src="{{ asset('imagenes/logo-circular.png') }} " alt="User profile picture">
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-yellow animated bounceInLeft">
                                <div class="panel-heading">
                                    <b style="color: #0b0b0b">ALEX Distribuidora SA</b> | Ingreso al Sistema Web
                                </div>

                                <div class="panel-body">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label class="col-md-4 control-label"><b>Correo:</b></label>

                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label class="col-md-4 control-label"><b>Contraseña:</b></label>

                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="password">

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-5">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember"> Recuérdame
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-btn fa-sign-in"></i> Ingresar
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <br><br><br><br>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">¿Te olvidaste de tu contraseña? &nbsp;&nbsp😅</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    {{--
    <div class="login-box">

            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Inicie sesión para ingresar al sistema</p>

                <form method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="form-group has-feedback">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="form-group has-feedback">
                            <input id="password" type="password" class="form-control" name="password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label class="">
                                    <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Recuérdame
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                        </div>
                    </div>
                </form>







                <a href="#">Recuperar mi contraseña</a><br>

            </div>
        </div>
        --}}

        <!-- jQuery 2.2.3 -->
        <script src="{{ asset('plantillas/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{ asset('plantillas/AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ asset('plantillas/AdminLTE/plugins/iCheck/icheck.min.js') }}"></script>      

        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>


    </body>
</html>