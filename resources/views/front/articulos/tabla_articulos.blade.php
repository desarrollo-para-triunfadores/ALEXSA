@if (count($articulos) === 0)
	<div class="alert alert-warning animated fadeIn" role="alert">No existen artículos que cumplan con las características solicitados.</div>
@else
	@foreach($articulos as $articulo)
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail" >
				<img src="{{ asset('imagenes/articulos/' . $articulo->imagen) }}" style="width: 250px; height: 200px" class="img-responsive">
				<div class="caption">
					<h3 class="cortar">{{$articulo->nombre}}</h3>
					<div style="text-align: center;">
						<a onclick="agregar_articulos({{$articulo->id}})" class="btn btn-primary" role="button">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i> Agregar al carrito
						</a>
						<a href="{{ route('front_articulos.show', $articulo->id) }}" class="btn btn-info" role="button">
							<i class="fa fa-eye" aria-hidden="true"></i> Ver características
						</a>
					</div>
				</div>
			</div>
		</div>
		<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>

	@endforeach
	<div class="container">
		
	</div>
@endif
<div class="clearfix"> </div>

<script>
    $('.container').infiniteScroll({
        // options
        path: '.pagination__next',
        append: '.post',
        history: false,
    });
</script>