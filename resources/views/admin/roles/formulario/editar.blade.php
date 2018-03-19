<div class="modal fade" id="modal-update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Actualizar rol de usuario</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form id="form-update" action="" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                    
                     <h3>Detalles del registro</h3>
                    <br>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" id="nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                    </div>                  
                    <br>
                    <hr/>  
                    <br>                                         
                    <h3>Permisos</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-6">   
                            <div class="form-group">                       
                                <input type="checkbox" data-toggle="toggle" id="roles" name="usuarios_roles" data-on="<b>Si</b>" data-off="<b>No</b>">
                                <label>Usuarios y Roles</label>
                            </div>  
                            <div class="form-group">                       
                               <input type="checkbox" data-toggle="toggle" id="inquilinos" name="inquilinos" data-on="<b>Si</b>" data-off="<b>No</b>">
                                <label>Inquilinos</label>
                            </div>  
                            <div class="form-group">                       
                                <input type="checkbox" data-toggle="toggle" id="propietarios" name="propietarios" data-on="<b>Si</b>" data-off="<b>No</b>">
                                <label>Propietarios</label>
                            </div>  
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group">                       
                                <input type="checkbox" data-toggle="toggle" id="consorcios" name="consorcios" data-on="<b>Si</b>" data-off="<b>No</b>">
                               <label>Consorcios</label>
                            </div>  
                            <div class="form-group">                       
                                <input type="checkbox" data-toggle="toggle" id="servicios" name="servicios" data-on="<b>Si</b>" data-off="<b>No</b>">
                               <label>Gestión de Servicios</label>
                            </div>  
                        </div>
                    </div>                        
                    <button id="boton_submit_update" type="submit" class="btn btn-primary hide"></button>
                </form>  
                <br>               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">volver</button>
                <button type="button" class="btn  btn-warning" onclick="$('#boton_submit_update').click()">actualizar rol de usuario</button>
            </div>
        </div>
    </div>
</div>

<button type="button" id="boton-modal-update" class="btn btn-primary btn-lg hide" data-toggle="modal" data-target="#modal-update"></button>