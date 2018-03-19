<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alex Distribuidora S.A. - Resistencia, Chaco</title>
    @include('front.partes.estilos')

    <script type="text/javascript" src="{{asset('plantillas/front/plugins/Semantic-UI/semantic.js')}}"></script>
    <link href="{{asset('plantillas/front/plugins/Semantic-UI/semantic.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>

<body style="background-color: yellow">

<!-- //for bootstrap working -->

<!-- header -->
@include('front.partes.header')
<!-- //header -->
<!-- navigation -->
@if(\Illuminate\Support\Facades\Auth::user()==null)

    @include('front.partes.modal_inicial')

@endif


@include('front.articulos.productos_nuevos')
<br><br>
@include('front.partes.pie')
@include('front.partes.scripts')
</body>
</html>