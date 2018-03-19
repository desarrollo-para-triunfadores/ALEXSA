<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alex Distribuidora S.A. - Resistencia, Chaco</title>
    @include('front.partes.estilos')
</head>

<body style="background-color: yellow">

<!-- //for bootstrap working -->

<!-- header -->
@include('front.partes.header')
<!-- //header -->
<!-- navigation -->
@include('front.partes.modal_inicial')
<div class="new-products" style="background: white">
<h3>CARRITO DE PRODUCTOS</h3>
	<div class="container">
		
		<br><br>	
		<div class="animated fadeIn" id="tabla_articulos">
			@include('front.carrito.tabla_articulos')
		</div>
	</div>
</div>
<br><br>
@include('front.partes.pie')
@include('front.partes.scripts')
</body>
</html>