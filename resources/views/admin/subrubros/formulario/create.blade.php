<div class="modal fade" id="modal-crear">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar subrubro</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form action="/admin/subrubros" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">                                                           
                    <h3>Detalles del registro</h3>
                    <br>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                    </div>                   
                    <div class="form-group">
                        <label title="rubro al que pertenece el subrubro">Rubro:</label>
                        <select style="width: 100%"  name="rubro_id"  placeholder="campo requerido"  class="select2 form-control">
                            @foreach($rubros as $rubro)
                            <option value="{{$rubro->id}}">{{$rubro->nombre}}</option>                                                    
                            @endforeach
                        </select> 
                    </div>                                                                            
                    <button id="boton_submit_crear" type="submit" class="btn btn-primary hide"></button>
                </form>
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">registrar subrubro</button>
            </div>
        </div>          
    </div>
</div>