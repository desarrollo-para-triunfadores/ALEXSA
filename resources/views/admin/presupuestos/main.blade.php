@extends('admin.partes.index')

@section('title')
Presupuestos solicitados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Presupuestos
            <small>solicitados por clientes</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-suitcase"></i> Generales</a></li>
            <li class="active">Gestión de Presupuestos</li>
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
                        <table id="tabla_presupuestos" class="display dataTable table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>                                  
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Fecha alta</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($presupuestos as $presupuesto)
                                <tr>                                    
                                    <td class="text-center text-bold"><a>{{$presupuesto->user->name}}</a></td>
                                    <td class="text-center">{{$presupuesto->estado}}</td>
                                    <td class="text-center">{{$presupuesto->created_at->format('d/m/Y')}}</td>
                                    <td class="text-center">
                                        <a onclick="" title="Ver este registro" href="{{route('presupuestos.show',$presupuesto->id)}}" class="btn btn-social-icon btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                        <a onclick="abrir_modal_borrar()" title="Eliminar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>                                  
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Fecha alta</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 
                    <div class="box-footer">                        
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>
<!--
@include('admin.presupuestos.formulario.create')
@include('admin.presupuestos.formulario.editar')
@include('admin.presupuestos.formulario.confirmar')
-->
@endsection
@section('script') 
<script src="{{ asset('js/presupuesto.js') }}"></script>
@endsection
