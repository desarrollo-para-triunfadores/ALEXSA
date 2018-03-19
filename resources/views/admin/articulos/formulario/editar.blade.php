<div class="modal fade" id="modal-update">
    <div class="modal-dialog" style="width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Actualizar Artículo</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form id="form-update" action="" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PUT">
                    <input id="token-update" type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="row">
                        <!-- Columna de Informacion -->
                        <div class="col-md-7">
                            <h3>Información del Artículo</h3>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input name="nombre" id="editar_nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                                    </div>
                                </div>                            
                            </div>
                            <div class="row">
                                                                                        
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Subrubro al que pertenece:</label>
                                            <select style="width: 100%"  name="subrubro_id" id="editar_subrubro_id" placeholder="campo requerido"  class="select2 form-control">
                                                @foreach($subrubros as $subrubro)
                                                    <option value="{{$subrubro->id}}">{{$subrubro->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Marca:</label>
                                            <select style="width: 100%"  name="marca_id" id="editar_marca_id" placeholder="campo requerido"  class="select2 form-control">
                                                @foreach($marcas as $marca)
                                                    <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                            </div>                                                                                                                                       
                            <br>
                            <hr/>  
                            <br>                                         
                            <h3>Características básicas</h3>
                            <br>

                            <div class="row">      
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Unidad Medida</label>
                                        <select style="width: 100%"  name="umedida_id" id="editar_umedida_id" placeholder="campo requerido"  class="select2 form-control">
                                            @foreach($umedidas as $umedida)
                                                <option value="{{$umedida->id}}">{{$umedida->unidad}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mínimo Vendible</label>
                                        <input id="editar_minimo_vendible" name="minimo_vendible" type="number" min="1" class="form-control" placeholder="campo requerido" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Material</label>
                                        <select style="width: 100%"  name="material_id" id="editar_material_id" placeholder="campo requerido"  class="select2 form-control">
                                            @foreach($materiales as $material)
                                                <option value="{{$material->id}}">{{$material->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                         
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descripción</label>                                    
                                    <input name="descripcion" id="editar_descripcion" type="text-area" maxlength="500" class="form-control">                                                                                        
                                </div>
                            </div>   
                        </div> 
                        </div>  
                        <div class="col-md-1">
                        </div>  
                        <div class="col-md-4">
                            <h3>Imagen Artículo</h3>
                            <br>
                            <div class="form-group">
                                <label>Subir imagen:</label>
                                <div id="main-cropper_update"></div>
                                <a class="button actionUpload-update">                   
                                    <input type="file" id="editar-imagen-nuevo" value="Escoja una imagen" accept="image/*">
                                </a>                       
                                <small class="form-text text-muted"><strong>Información:</strong> si no escoge una imagen nueva se utilizará una prestablecida.</small>
                            </div> 
                        </div> 
                    </div>

                    <button id="boton_submit_update" type="submit" class="btn btn-primary hide"></button>
                </form>  
                <br>               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Volver</button>
                <button type="button" class="btn  btn-warning" onclick="mandar('update');">Actualizar Artículo</button>
            </div>
        </div>
    </div>
</div>

<button type="button" id="boton-modal-update" class="btn btn-primary btn-lg hide" data-toggle="modal" data-target="#modal-update"></button>