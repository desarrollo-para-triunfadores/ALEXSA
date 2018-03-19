<!DOCTYPE html>
<html class="noIE" lang="es-ES">
<head>
    <title>ALEX DISTRIBUIDORA SA | Resistencia</title>
    @include('front.partes.estilos')

    <style>
        .cabecera-short {
            padding-top:160px;
            padding-bottom:70px;
        }

        @media (max-width: 768px){
            .cabecera-short {
                padding-top:80px;
                padding-bottom:50px;
            }
        }

        .linea-separadora{
            height: 2px;
            background-color: #c10948;
            margin-bottom: 8px;
        }
        .uppercase{
            text-transform: uppercase;
        }
        .negrita{
            font-weight: bold;
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 400;
            color: black;
            font-size: 13px;
        }

        .lista-checkbox label{
            font-size: 14px;
            line-height: 25px;
        }
        .lista-checkbox input[type=checkbox], .lista-checkbox input[type=radio]{
            margin-right: 4px;
            margin-top: 2px;
            width: 20px;
            height: 20px;
        }
        h3.titulo-compacto{
            font-size: 16px;
        }
        h4.titulo-compacto{
            font-size: 14px;
        }
        .naranja.underline{
            border-bottom-color: #F90;
        }

    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>




    <body>
    @include('front.partes.header')


{{--
    <section  class=""  data-parallax="scroll" data-image-src="{{asset('imagenes/cv-icon.png')}}">
        <div class="container">
            <div class="col-lg-8 col-md-9">
                <div class="header-content-inner">
                    <h1 class="font-one blanco">CV <span class="azul">ALEX DISTRIBUIDORA SA</span></h1>
                    <p class="light-300" style="margin-right:0px; margin-bottom:20px; color:#080303;"><strong>Estamos buscándote!</strong> </p>
                </div>
            </div>
        </div>
    </section>
--}}


    <section class="padding-bottom padding-top" >
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


<br><br><br>
        <div>
            <input id="token-create" type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="container padding-bottom">
                <img src="{{asset('imagenes/cv-icon.png')}}" class="pull-left">
                <div class="row padd-bot-20">
                    <div class="col-lg-12 padd-bot-10">
                        <h4 class="light-300 uppercase">Envianos este formulario con tu Curriculum Vitae</h4>
                        <div class="linea-separadora gris"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nombre y apellido</label>
                            <input class="form-control" id="nombre" name="nombre" placeholder="Como figura en su DNI" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>DNI</label>
                            <input class="form-control" name="dni"  placeholder="Número" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" required value="1984-12-23">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Ciudad (CP)</label>
                            <input class="form-control" name="ciudad" placeholder="Ciudad" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Provincia</label>
                            <input class="form-control" name="provincia" placeholder="Provincia" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Teléfono fijo</label>
                            <input class="form-control" name="telefono" id="telefono" placeholder="Nº" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Teléfono móvil</label>
                            <input class="form-control" name="telefono_movil" placeholder="Nº" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email"  placeholder="E-Mail" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <hr>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Domicilio</label>
                            <input class="form-control" name="domicilio" placeholder="Nº" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Ciudad (CP)</label>
                            <input class="form-control" name="domicilio_ciudad" placeholder="Nº" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Provincia</label>
                            <input class="form-control" name="domicilio_provincia" placeholder="provincia" required>
                        </div>
                    </div>
                </div>

                <div class="row lista-checkbox padd-bot-20">
                    <div class="col-lg-12 padd-bot-10">
                        <h4 class="titulo-compacto light-300 uppercase">Formación académica</h4>
                        <div class="linea-separadora gris"></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 padd-bot-top-5">
                        <div class="form-group">
                            <label>Estudios Secundarios</label>
                            <textarea name="estudios_secundarios"  rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 padd-bot-top-5">
                        <div class="form-group">
                            <label>Estudios Terciarios</label>
                            <textarea name="estudios_terciarios"  rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 padd-bot-top-5">
                        <div class="form-group">
                            <label>Estudios Universitarios</label>
                            <textarea name="estudios_universitarios"  rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row lista-checkbox padd-bot-20">

                    <div class="col-lg-12 padd-bot-10">
                        <h4 class="titulo-compacto light-300 uppercase">Experiencia Laboral</h4>
                        <div class="linea-separadora gris"></div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 padd-bot-top-5">
                        <div class="form-group">
                            <label>Detalle, información de relevancia a tener en cuenta</label>
                            <textarea name="informacion_extra"  rows="3" class="form-control"></textarea>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <button type="" class="btn btn-default-three radius-none" onclick="mensaje_desde_front()">
                                Enviar CV
                            </button>
                        </div>
                    </div>
                </div>
                <section>
                    <script src="{{ asset('js/rrhh.js') }}"></script>
                </section>
            </div>
        </div>
    </section>

@include('front.partes.pie')