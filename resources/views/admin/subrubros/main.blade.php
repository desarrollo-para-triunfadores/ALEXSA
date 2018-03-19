@extends('admin.partes.index')

@section('title')
Subrubros registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Subrubros
            <small>registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-suitcase"></i> Generales</a></li>
            <li>Rubros</li>
            <li class="active">Subrubros</li>
        </ol>
    </section>
    <section class="content">
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
                        <table id="tabla_subrubros" class="dataTable responsive table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Pertenece a Rubro</th>
                                    <th class="text-center">Cantidad de articulos</th>   
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subrubros as $subrubro)
                                <tr>
                                    <td class="text-center text-bold">{{$subrubro->nombre}}</td>
                                    @if($subrubro->rubro)
                                        <td class="text-center text-bold">{{$subrubro->rubro->nombre}}</td>        
                                    @else
                                    <td class="text-center text-bold"> - </td>       
                                    @endif
                                    <td class="text-center">{{$subrubro->articulos->count()}}</td>                                    
                                    <td class="text-center">
                                        <a onclick="completar_campos({{$subrubro}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="abrir_modal_borrar({{$subrubro->id}})" title="Eliminar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Pertenece a Rubro</th>
                                    <th class="text-center">Cantidad de articulos</th>   
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <button title="Registrar una provincia" type="button" id="boton-modal-crear" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp; Registrar Subrubro
                        </button>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>

@include('admin.subrubros.formulario.create')
@include('admin.subrubros.formulario.editar')
@include('admin.subrubros.formulario.confirmar')

@endsection
@section('script') 
<script src="{{ asset('js/subrubro.js') }}"></script>
@endsection
