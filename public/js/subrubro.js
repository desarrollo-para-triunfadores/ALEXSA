$("#side-general-li").addClass("active");
$("#side-general-ul").addClass("menu-open");
$("#side-ele-lugares-ul").addClass("menu-open");
$("#side-ele-lugares-li").addClass("active");
$("#side-ele-lugares-subrubros").addClass("active");
    
    

function completar_campos(subrubro) {
    $('#nombre').val(subrubro.nombre);
    $('#rubro_id').val(subrubro.rubro_id).trigger("change");
    $('#form-update').attr('action', '/admin/subrubros/' + subrubro.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/subrubros/' + id);
    $('#boton-modal-borrar').click();
}


//Datatable
var table = $('#tabla_subrubros').DataTable({
    language: tabla_traducida
});

instaciar_filtros();
function instaciar_filtros() {
    //Datatables | filtro individuales - instanciación de los filtros
    $('#tabla_subrubros tfoot th').each(function () {
        var title = $(this).text();
        if (title !== "") {
            if (title !== 'Acciones') { //ignoramos la columna de los botones
                $(this).html('<input nombre="' + title + '" type="text" placeholder="Buscar ' + title + '" />');
            }
        }
    });
//Datatables | filtro individuales - búsqueda 
    table.columns().every(function () {
        var that = this;
        $('input', this.footer()).on('keyup change', function () {
            if (that.search() !== this.value) {
                that.search(this.value).draw();
            }
        });
    });
}