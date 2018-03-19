<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alex Distribuidora S.A. - Resistencia, Chaco</title>
    @include('front.partes.estilos')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>

<body style="background-color: yellow">
@include('front.partes.scripts')
@include('front.partes.header')





<section class="padding-bottom padding-top" style="background: white" >
{{--
<div class="container padding-top team-member-section"  data-parallax="scroll" style="background: url({{asset('imagenes/nosotros/4.jpeg')}}) ;background-attachment: fixed;background-size: cover;background-position: 50% 90%; color: #fff; text-align: center; padding: 80px 0;">
    <div class="container">
        <div class="col-lg-8 col-md-9">
            <div class="header-content-inner">
                <h1 class="font-one blanco"></h1>
                <p class="light-300" style="margin-right:0px; margin-bottom:20px; color:#080303;"><strong></strong> </p>
            </div>
        </div>
    </div>
    <div class="row padding-bottom padding-top">
        <div class="col-xs-12">
            <h2 class="bold-700 font-one font-24 no-margin">Sumate a nuestro equipo de trabajo</h2>
            <p>¡Podés completar el siguiente formulario o enviarnos tu Curriculum a <span class="azul">rrhh@alexsa.com.ar.</span> </p>
            {{--
            <img src="{{asset('imagenes/cv-icon.png')}}" class="pull-left">


        </div>
    </div>
</div>
--}}
<!-- Fin container -->


    <br>
    <div>
        <input id="token-create" type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="container padding-bottom animated fadeInLeftBig">
            <img src="{{asset('imagenes/cv-icon.png')}}" class="pull-left">
            <div class="row padd-bot-20">
                <div class="col-lg-12 padd-bot-10">
                    <br>
                    <h4 class="light-300 uppercase">Si usted ya es cliente, solicite su alta ingresando su CUIT</h4>
                    <div class="linea-separadora gris"></div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>CUIT</label>
                        <input class="form-control" id="cuit" name="cuit" placeholder="CUIT" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input class="form-control" id="email" name="email"  placeholder="email" type="email" required>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <button type="" class="btn btn-default-three radius-none" onclick="validar_cliente()">
                            Enviar
                        </button>
                    </div>
                </div>
            </div>
            <section>
                <script src="{{ asset('js/clientes.js') }}"></script>
            </section>
        </div>
    </div>



{{--
@include('front.partes.servicios')





@include('front.partes.contacto')
--}}

@include('front.partes.maps')
@include('front.partes.pie')

</body>

</html>