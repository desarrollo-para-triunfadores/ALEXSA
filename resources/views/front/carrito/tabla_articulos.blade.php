 @if (count($carrito) === 0)
<div class="alert alert-warning animated fadeIn" role="alert">Su carrito se encuentra vacío. </div>
@else

<table class="table table-striped" style="text-align: center;">
	<thead>
		<tr>
			<th style="text-align: center;">
				<h4>
					<b>Miniatura</b>
				</h4>
			</th>
			<th style="text-align: center;">
				<h4>
					<b>Nombre producto</b>
				</h4>
			</th>
			<th style="text-align: center;">
				<h4>
					<b>Cantidad</b>
				</h4>
			</th>
			<th style="text-align: center;">
				<h4>
					<b>Acciones</b>
				</h4>
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach($carrito as $linea)
		<tr>
			<td>
				<img class="zoom" src="{{ asset('imagenes/articulos/' . $linea['articulo']['imagen']) }}" width="55" height="55" data-zoom-image="{{ asset('imagenes/articulos/' . $linea['articulo']['imagen']) }}">
			</td>
			<td>
				<h4>{{$linea['articulo']['nombre']}}</h4>
			</td>
			<td>
				<h4>{{$linea['cantidad']}}</h4>
			</td>
			<td>
				<a onclick="actualizar_cantidad({{$linea['articulo']['id']}})" title="Actualizar la cantidad de de este artículo" class="btn btn-lg btn-warning">
					<i class="fa fa-pencil"></i>
				</a>
				<a onclick="eliminar_articulo({{$linea['articulo']['id']}})" title="Quitar este artículo del carrito" class="btn btn-lg btn-danger">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<br>
<div align="center">
<a onclick="solicitar_presupuesto()" title="Solicitar presupuesto por los productos que se encuentran en su carrito" class="btn btn-lg btn-success">
	<i class="fa fa-check" aria-hidden="true"></i> Solicitar presupuesto
</a>
<a onclick="vaciar_carrito()" title="Quitar todos los productos del carrito" class="btn btn-lg btn-danger">
	<i class="fa fa-trash"></i> Vaciar carrito
</a>
</div>

@endif