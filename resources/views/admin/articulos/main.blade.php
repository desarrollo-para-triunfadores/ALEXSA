@extends('admin.partes.index')

@section('title')
Artículos registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Artículos
            <small>registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-suitcase"></i> Gestión de Artículos</a></li>          
            <li class="active">Artículos</li>
        </ol>
    </section>
    <section class="content animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <h3 class="box-title"> Registros</h3>
                    </div>
                    <div class="box-body ">
                       
                        @include('admin.partes.msj_acciones')
                       
                        {{--
                        <div>
                            Columnas:
                            <a class="toggle-vis" href="" data-column="0">Nombre</a> -
                            <a class="toggle-vis" href="" data-column="1">Marca</a> -
                            <a class="toggle-vis" href="" data-column="2">Minimo Venta</a> -
                            <a class="toggle-vis" href="" data-column="3">Unidad Medida</a> -
                            <a class="toggle-vis" href="" data-column="4">Nacimiento</a> -
                            <a class="toggle-vis" href="" data-column="5">Teléfono</a> -
                            <a class="toggle-vis" href="" data-column="6">Teléfono contacto</a> -
                            <a class="toggle-vis" href="" data-column="7">Email</a> -
                            <a class="toggle-vis" href="" data-column="8">Alquila</a> -
                            <a class="toggle-vis" href="" data-column="9">Localidad</a> -
                            <a class="toggle-vis" href="" data-column="10">Fecha alta</a> -
                            <a class="toggle-vis" href="" data-column="11">Acciones</a>
                        </div>
                        --}}
                        <table id="tabla_articulos" class="dataTable responsive table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Marca</th>
                                    <th class="text-center">ID Tango</th>
                                    <th class="text-center">Subrubro</th>
                                    <th class="text-center">Pedidos web</th>
                                    <th class="text-center">Fecha alta</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articulos as $articulo)
                                    <tr>
                                        <td class="text-center text-bold">{{$articulo->nombre}}</td>
                                        <td class="text-center">{{$articulo->marca->nombre}}</td>
                                        @if($articulo->cod_tango)
                                            <td class="text-center text-bold">{{$articulo->cod_tango}}</td>
                                        @else
                                        <td class="text-center text-yellow">*Aún no referenciado*</td>
                                        @endif    
                                        <td class="text-center">{{$articulo->subrubro->nombre}}</td>
                                        {{--
                                        @if($articulo->descripcion)
                                            <td class="text-center">{{$articulo->descripcion}}</td>
                                        @else
                                            <td class="text-center text-yellow">-</td>
                                        @endif
                                        --}}
                                        <td class="text-center">0</td>
                                        @if($articulo->created_at)
                                            <td class="text-center">{{$articulo->created_at->format('d/m/Y')}}</td>
                                        @else
                                            <td class="text-center">Sin Fecha</td>
                                        @endif
                                        
                                        <td class="text-center" width="100">
                                            <a onclick="completar_campos({{$articulo}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a onclick="abrir_modal_borrar({{$articulo->id}})" title="Eliminar este articulo" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            <a href="{{ route('articulos.show', $articulo->id) }}" title="Visualizar el detalle de este registro" class="btn btn-social-icon btn-sm btn-info"><i class="fa fa-list"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">ID Tango</th>
                                    <th class="text-center">Marca</th>
                                    <th class="text-center">Subrubro</th>
                                    
                                    <th class="text-center">Pedidos web</th>
                                    <th class="text-center">Fecha alta</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right">                                 
                                    <button title="Registrar un articulo" type="button" id="boton-modal-crear" class="btn btn-primary" data-toggle="modal" data-target="#modal-crear">
                                        <i class="fa fa-plus-circle"></i> &nbsp;Registrar Artículo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>                                               
        </div>
    </section>   
</div>

@include('admin.articulos.formulario.create')
@include('admin.articulos.formulario.editar')
@include('admin.articulos.formulario.confirmar')

@endsection
@section('script') 
<script src="{{ asset('js/articulo.js') }}"></script>
<script src="{{ asset('js/camara.js') }}"></script>
@endsection
