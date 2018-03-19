<div class="modal fade" id="modal-crear">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar catalogo</h4>
            </div>
            <div class="modal-body modal-warning">
                @include('admin.partes.msj_lista_errores')
                <form action="/admin/catalogos" method="POST" enctype="multipart/form-data" >
                    <input id="token-create" type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h3>Detalles del registro</h3>
                    <br>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                    </div>
                    <div class="form-group">
                        <label>Tipo:</label>
                        <select name="tipo" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                            <option value="imp">Importacion</option>
                            <option value="nac">Nacionales</option>
                            <option value="otros">Otros</option>
                        </select>
                    </div>

                    <div class="controls">
                        <a class="button actionUpload-fotografias-nuevo">
                            <input type="file" id="archivo_catalogo" name="archivo_catalogo" value="Seleccione el catalogo" accept="file/*">
                        </a>
                        <small class="form-text text-muted"><strong>Información:</strong> El catalogo debe tener formato .PDF.</small>
                    </div>

                    <button id="boton_submit_crear" type="submit" class="btn btn-primary hide"></button>
                </form>
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">publicar catálogo</button>
            </div>
        </div>          
    </div>
</div>