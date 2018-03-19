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




	<div style="background-color: white" class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<img class="zoom" src="{{asset('imagenes/articulos/'.$articulo->imagen)}}" width="300" height="250" data-zoom-image="{{asset('imagenes/articulos/'.$articulo->imagen)}}">			
			</div>
			<div class="col-md-8 single-right">
				<h3>{{$articulo->nombre}}</h3>
                <a onclick="agregar_articulos({{$articulo->id}})" class="btn btn-primary" role="button">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i> Agregar al carrito
					</a>
				<div class="description">
					<h5>
						<i>Descripción</i>
					</h5>
					<p>{{$articulo->descripcion}}</p>
				</div>
				<div class="color-quality">
					<div class="color-quality-left">
						<h5>Color : </h5>
						<ul>
							<li>
								<a href="#">
									<span></span>
								</a>
							</li>
							@if($articulo->color)
							<li>
								<a href="#" style="color: {{$articulo->color->codigo}}">
									<span></span>
								</a>
							</li>
							@endif

						</ul>
					</div>
				</div>               
			</div>
		</div>
	</div>








	<br>
	<br> @include('front.partes.pie') @include('front.partes.scripts')
</body>

</html>