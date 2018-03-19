<div class="modal fade" id="modal-crear-rol">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar rol de usuario</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form action="/admin/roles" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">                                                           
                    <h3>Detalles del registro</h3>
                    <br>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                    </div>                  
                    <br>
                    <hr/>  
                    <br>                                         
                    <h3>Permisos</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-6">   
                            <div class="form-group">                       
                                <input type="checkbox" data-toggle="toggle" name="usuarios_roles" data-on="<b>Si</b>" data-off="<b>No</b>">
                                <label>Usuarios y Roles</label>
                            </div>  
                            <div class="form-group">                       
                               <input type="checkbox" data-toggle="toggle" name="inquilinos" data-on="<b>Si</b>" data-off="<b>No</b>">
                                <label>Inquilinos</label>
                            </div>  
                            <div class="form-group">                       
                                <input type="checkbox" data-toggle="toggle" name="propietarios" data-on="<b>Si</b>" data-off="<b>No</b>">
                                <label>Propietarios</label>
                            </div>  
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group">                       
                                <input type="checkbox" data-toggle="toggle" name="consorcios" data-on="<b>Si</b>" data-off="<b>No</b>">
                               <label>Consorcios</label>
                            </div>  
                            <div class="form-group">                       
                                <input type="checkbox" data-toggle="toggle" name="servicios" data-on="<b>Si</b>" data-off="<b>No</b>">
                               <label>Gestión de Servicios</label>
                            </div>  
                        </div>                       
                    </div>    
                    <button id="boton_submit_crear" type="submit" class="btn btn-primary hide"></button>
                </form>
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">registrar rol de usuario</button>
            </div>
        </div>          
    </div>
</div>