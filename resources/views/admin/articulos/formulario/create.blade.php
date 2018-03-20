
<div class="modal fade" id="modal-crear">
    <div class="modal-dialog" style="width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar articulo</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form id="form-create" action="/admin/articulos" method="POST" enctype="multipart/form-data">
                    <input id="token-create" type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-md-7">
                            <legend>Información del Artículo</legend>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input name="nombre" id="nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Marca:</label>
                                            <select style="width: 100%"  name="marca_id" id="marca_id" placeholder="campo requerido"  class="select2 form-control">
                                                @foreach($marcas as $marca)
                                                    <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                
                            </div>

                            <div class="row">         
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Rubro:</label>
                                        <select title="Rubro al que pertenece" style="width: 100%"  name="rubro_id" id="rubro_id" placeholder="no requerido"  class="select2 form-control">
                                            @foreach($rubros as $rubro)
                                                <option value="{{$rubro->id}}">{{$rubro->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>                   
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Subrubro:</label>
                                        <select title="subrubro al que pertenece" style="width: 100%"  name="subrubro_id" id="subrubro_id" placeholder="campo requerido"  class="select2 form-control">
                                            @foreach($subrubros as $subrubro)
                                                <option value="{{$subrubro->id}}">{{$subrubro->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ID Tango:</label>
                                        <input title="codigo que corresponde al articulo en software Tango Gestión" style="width: 80%"  name="cod_tango" id="cot_tango" placeholder="no requerido"  class="form-control">
                                    </div>
                                </div>                                
                            </div>                        
             
                            <br>
                             <hr/>  
                            <br>                                         
                            <legend>Características básicas</legend>
                            <br>
                            <div class="row">      
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Unidad Medida</label>
                                        <select style="width: 100%"  name="umedida_id" id="umedida_id" placeholder="campo requerido"  class="select2 form-control">
                                            @foreach($umedidas as $umedida)
                                                <option value="{{$umedida->id}}">{{$umedida->unidad}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mínimo Vendible</label>
                                        <input name="minimo_vendible" type="number" min="1" value=1 class="form-control" placeholder="campo requerido" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Material</label>
                                        <select style="width: 100%"  name="material_id" id="material_id" placeholder="campo requerido"  class="select2 form-control">
                                            @foreach($materiales as $material)
                                                <option value="{{$material->id}}">{{$material->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                        
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descripción</label>


                                        <input name="descripcion" type="text-area" maxlength="500" class="form-control">
                                                                
                                </div>
                            </div>   
                        </div>  
                    </div> 
                        <div class="col-md-1">
                        </div>  
                        <div class="col-md-4">
                            <h3>Imagen de perfil</h3>
                            <br>
                            <div class="form-group">
                                <label>Subir imagen de perfil:</label>
                                <div id="main-cropper_nuevo"></div>
                                <a class="button actionUpload-nuevo">                   
                                    <input type="file" id="imagen-nuevo" value="Escoja una imagen" accept="image/*">
                                </a>                       
                                <small class="form-text text-muted"><strong>Información:</strong> si no escoge una imagen nueva se utilizará una imagen prestablecida.</small>
                            </div>                          
                        </div> 
                    </div>
                    <button id="boton_submit_crear" type="submit" class="btn btn-primary hide"></button>
                </form>
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">volver</button>
                <button type="button" class="btn btn-primary" onclick="mandar('create');">Registrar Artículo</button>
            </div>
        </div>          
    </div>
</div>