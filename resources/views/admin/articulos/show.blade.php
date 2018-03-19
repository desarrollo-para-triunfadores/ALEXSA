@extends('admin.partes.index')

@section('title')
Articulos registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Articulos
            <small>registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-suitcase"></i> Inmuebles</a></li>            
            <li class="active">Articulos</li>
        </ol>
    </section>
    <section class="content animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                        <h3 class="box-title"> Detalle del registro</h3>
                    </div>
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')
                        <div class="row">
                            <div class="col-lg-4">
                                @if ($articulo->imagen === "sin imagen")
                                <img style="width:200px;height:200px"  alt="User Image" class="profile-user-img img-responsive img-circle" src="{{ asset('imagenes/articulos/sin-imagen.jpg') }}" alt="User profile picture">
                                @else
                                <img style="width:200px;height:200px"  alt="User Image" class="profile-user-img img-responsive img-circle" src="{{ asset('imagenes/articulos/' . $articulo->imagen) }} " alt="User profile picture">
                                @endif
                            </div>    

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    <span class="form-control">{{$articulo->nombre}}</span>
                                </div>
                            </div>                                                                     
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Marca:</label>
                                    <span class="form-control">{{$articulo->marca->nombre}}</span>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Material:</label>
                                    @if($articulo->material)
                                        <span class="form-control">{{$articulo->material->nombre}}</span>
                                    @else
                                        <span class="form-control">-</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Subrubro:</label>
                                    @if($articulo->subrubro)
                                        <span class="form-control">{{$articulo->subrubro->nombre}}</span>
                                    @else
                                        <span class="form-control">-</span>
                                    @endif
                                </div>
                            </div>                                                                             
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Minimo Vendible:</label>
                                    <span class="form-control">{{$articulo->minimo_vendible}} {{$articulo->umedida->unidad}}</span>
                                </div>
                            </div>                                                           
                        </div>  
                    </div> 
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-12">                            
                                <a href="/admin/articulos" title="volver al listado" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i> volver</a>
                                <div class="pull-right">                                                                       
                                    <a onclick="completar_campos({{$articulo}})" title="Editar este registro" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Actualizar Artículo</a>
                                    <a onclick="abrir_modal_borrar({{$articulo->id}})" title="Eliminar este registro" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Eliminar Artículo</a>
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
