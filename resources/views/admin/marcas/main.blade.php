@extends('admin.partes.index')

@section('title')
Marcas registradas
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Marcas
            <small>registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-suitcase"></i> Generales</a></li>
            <li class="active">Marcas</li>
        </ol>
    </section>
    <section class="content">
        <div id="tab-logos" class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-">
                        <div class="panel-heading">marcas Registrados</div>
                        <div class="panel-body">
                            <div class="col-lg-8">
                                <br>
                                <strong> Mostrando {!! $marcas->count() !!} registros del total existente.</strong>
                            </div>
                            <br>
                            <br>
                            <hr>

                            <div class="row">
                                @foreach($marcas as $marca)
                                        <div class="col-md-3">
                                            @if ($marca->logo === "sin imagen")
                                                <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/marcas/sin-imagen.jpg') }}"/>
                                            @else   
                                                <div class="thumbnail"><img class="img-rounded" style="width:470px;height:120px" src="{{ asset('imagenes/marcas/' . $marca->logo) }}"/>           
                                            @endif
                                                <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href=""> <h3>{{ $marca->nombre }}</h3></a>
                                                       @if($marca->pais->nombre === 'Argentina')
                                                            <p><h4>Marca de producción Nacional</h4></p>
                                                       @else
                                                            <p><h4>Origen: {{ $marca->pais->nombre }}</h4></p>
                                                       @endif    
                                                    </div>
                                                </div>                                        
                                        </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <h3 class="box-title"> Registros</h3>
                    </div>
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')
                        <table id="example" class="display dataTable table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>                                  
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Cantidad de productos de ésta marca</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($marcas as $marca)
                                <tr>                                    
                                    <td class="text-center text-bold">{{$marca->nombre}}</td>
                                    <td class="text-center">{{ $marca->articulos->count() }}</td>
                                    <td class="text-center">
                                        <a onclick="completar_campos({{$marca}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="abrir_modal_borrar({{$marca->id}})" title="Eliminar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>                                  
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Cantidad de articulos asociadas</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <button title="Registrar una marca" type="button" id="boton-modal-crear" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar Marca
                        </button>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>

@include('admin.marcas.formulario.create')
@include('admin.marcas.formulario.editar')
@include('admin.marcas.formulario.confirmar')

@endsection
@section('script') 
<script src="{{ asset('js/marca.js') }}"></script>
@endsection
