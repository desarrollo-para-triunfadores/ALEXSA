@extends('admin.partes.index')

@section('title')
    Presupuestos solicitados
@endsection
@include('admin.presupuestos.email')
@section('content')
    <div class="content-wrapper" style="min-height: 916px;">
        <section class="content-header">
            <h1>
                Presupuesto
                <small>solicitados por</small> <b>{{$presupuesto->user->name}}</b> (el {{$presupuesto->created_at->format('d/m/Y , H:i')}} hs)
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
                            <table id="tabla_presupuestos" class="display dataTable table-bordered table-hover table-responsive" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th class="text-center">Producto</th>
                                    <th class="text-center">Cantidad</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($lineas_presupuesto as $linea)
                                    <tr>
                                        <td class="text-center text-bold"><a>{{$linea->articulo->nombre}}</a></td>
                                        <td class="text-center">{{$linea->cantidad}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="text-center">Producto</th>
                                    <th class="text-center">Cantidad</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="box-footer">
                                <button title="Enviar un mensaje al interesado" type="button" id="boton-modal-crear" class="btn btn-yahoo" data-toggle="modal" data-target="#modal-enviar-email">
                                        <i class="fa fa-envelope-o"></i> Email sobre presupuesto
                                </button>
                                {{--
                                    <a onclick="({{$presupuesto}})" title="Enviar un mensaje al interesado"  data-toggle="modal" data-target="#modal-enviar-email" class="btn btn-social-icon btn-yahoo btn-sm">Email<i class="fa fa-envelope-o"></i></a>
                                --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--
    
    @include('admin.presupuestos.formulario.editar')
    @include('admin.presupuestos.formulario.confirmar')
            -->
@endsection
@section('script')
    <script src="{{ asset('js/presupuesto.js') }}"></script>
@endsection