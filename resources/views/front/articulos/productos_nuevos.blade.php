<div class="ui left attached demo menu">
	<a class="item">
		<i class="sidebar icon"></i> Categorias
	</a>
</div>
<div class="ui bottom attached segment">
	<div class="ui sidebar inverted vertical menu">
		@foreach($rubros as $rubro)
			<div class="item">
				<a class="title active">
					<i class="dropdown icon"></i>
					<b>{{$rubro->nombre}}</b>
				</a>
				<div class="content menu active">
					@foreach($rubro->subrubros as $subrubro)
						<a class="item">{{$subrubro->nombre}} ({{$subrubro->articulos->count()}})</a>
					@endforeach
				</div>
			</div>
			<br>
		@endforeach

	</div>
	<div class="pusher">
		<div class="ui basic segment">
			<p></p>
			<div class="new-products" style="background: white">
				<div class="container">
					<h3>NUESTROS PRODUCTOS</h3>

					<legend>Filtros </legend>
					<div class="row animated fadeInDown">
						<div class="col-md-4">
							<div class="form-group">
								<label>Marca:</label>
								<select style="width: 100%" id="marcas" class="select2 filtro_articulos form-control" multiple>
									@foreach($marcas as $marca)
										<option value="{{$marca->id}}">{{$marca->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Rubro:</label>
								<select style="width: 100%" id="rubros" class="select2 filtro_articulos form-control" multiple>
									@foreach($rubros as $rubro)
										<option value="{{$rubro->id}}">{{$rubro->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Subrubro:</label>
								<select style="width: 100%" id="subrubros" class="select2 filtro_articulos form-control" multiple>
									@foreach($subrubros as $subrubro)
										<option value="{{$subrubro->id}}">{{$subrubro->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Materiales:</label>
								<select style="width: 100%" id="materiales" class="select2 filtro_articulos form-control" multiple>
									@foreach($materiales as $material)
										<option value="{{$material->id}}">{{$material->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Colores:</label>
								<select style="width: 100%" id="colores" class="select2 filtro_articulos form-control" multiple>
									@foreach($colores as $color)
										<option value="{{$color->id}}">{{$color->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<br>
					<br>
					<div class="animated fadeIn" id="tabla_articulos">
						@include('front.articulos.tabla_articulos')
					</div>
				</div>
				<script>
                    $('.ui.sidebar').sidebar({
                        context: $('.bottom.segment')
                    })
                        .sidebar('attach events', '.menu .item');
				</script>
			</div>
			<p></p>
			<p></p>
			<p></p>
		</div>
	</div>
</div>
{{--
<div class="new-products" style="background: white">
	<div class="container">

		<h3>NUESTROS PRODUCTOS</h3>
		<br>
		<br>
		<legend>Filtros </legend>
		<div class="row animated fadeInDown">
			<div class="col-md-4">
				<div class="form-group">
					<label>Marca:</label>
					<select style="width: 100%" id="marcas" class="select2 filtro_articulos form-control" multiple>
						@foreach($marcas as $marca)
						<option value="{{$marca->id}}">{{$marca->nombre}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label>Rubro:</label>
					<select style="width: 100%" id="rubros" class="select2 filtro_articulos form-control" multiple>
						@foreach($rubros as $rubro)
						<option value="{{$rubro->id}}">{{$rubro->nombre}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label>Subrubro:</label>
					<select style="width: 100%" id="subrubros" class="select2 filtro_articulos form-control" multiple>
						@foreach($subrubros as $subrubro)
						<option value="{{$subrubro->id}}">{{$subrubro->nombre}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label>Materiales:</label>
					<select style="width: 100%" id="materiales" class="select2 filtro_articulos form-control" multiple>
						@foreach($materiales as $material)
						<option value="{{$material->id}}">{{$material->nombre}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label>Colores:</label>
					<select style="width: 100%" id="colores" class="select2 filtro_articulos form-control" multiple>
						@foreach($colores as $color)
						<option value="{{$color->id}}">{{$color->nombre}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="animated fadeIn" id="tabla_articulos">
			@include('front.articulos.tabla_articulos')
		</div>
	</div>
	<script>
        $('.ui.sidebar').sidebar({
            context: $('.bottom.segment')
        })
            .sidebar('attach events', '.menu .item');
	</script>
</div>
--}}