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
                            @if($marca->estado == 'activo')
                                <div class="col-md-3">
                                    @if ($marca->imagen === "sin imagen")
                                       <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/marcas/sin-logo.jpg') }}"/>
                                             <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.marcas.show', $marca->id) }}"> <h3>{{ $marca->nombre }}</h3></a>

                                                <p><h4>Origen: {{ $marca->localidad->nombre }}</h4></p>
                                                <p>Rubro: {{ $marca->rubro->nombre }}</p>
                                            </div>
                                        </div>
                                    @else
                                        <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/marcas/' . $marca->imagen) }}"/>
                                            <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.marcas.show', $marca->id) }}"> <h3><b>{{ $marca->nombre }}</b></h3></a>
                                                <p><h5>{{ $marca->localidad->nombre." (".$marca->localidad->provincia->nombre.")" }}</h5></p>
                                                <p><h5>Rubro: {{ $marca->rubro->nombre }}</h5></p>

                                                <p><h4>Dirección: {{ $marca->calle." ".$marca->altura }}</h4></p>
                                                <p><h4><b>Horario Atención:</b> {{ $marca->hora_a_manana}} a {{ $marca->hora_c_manana}} y {{ $marca->hora_a_tarde}} a {{ $marca->hora_c_tarde}}</h4></p>

                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div class="col-md-3 ui-state-disabled">
                                    @if ($marca->imagen === "sin imagen")
                                        <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/marcas/sin-logo.jpg') }}"/>
                                            <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href=""> <h3>{{ $marca->nombre }}</h3></a>
                                                <p><h4>Origen: {{ $marca->localidad->nombre }}</h4></p>
                                                <p>Rubro: {{ $marca->rubro->nombre }}</p>
                                                <p><h2 class="text-danger">marca Inactivo</h2></p>
                                            </div>
                                        </div>
                                    @else
                                        <div class="thumbnail ui-state-disabled"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/marcas/' . $marca->imagen) }}"/>
                                            <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href=""> <h3><b>{{ $marca->nombre }}</b></h3></a>
                                                <p><h5>{{ $marca->localidad->nombre." (".$marca->localidad->provincia->nombre.")" }}</h5></p>
                                                <p><h5>Rubro: {{ $marca->rubro->nombre }}</h5></p>
                                                <p><h2 class="text-danger">marca Inactivo</h2></p>

                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                                @endforeach
                    </div> 

                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script src="{{ asset('js/marcas.js') }}"></script>
@endsection