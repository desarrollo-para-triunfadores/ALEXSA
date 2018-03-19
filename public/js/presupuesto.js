$("#side-general-li").addClass("active");
$("#side-general-ul").addClass("menu-open");
$("#side-ele-lugares-ul").addClass("menu-open");
$("#side-ele-lugares-li").addClass("active");
$("#side-ele-lugares-paises").addClass("active");


function completar_campos(pais) {
    $('#nombre').val(pais.nombre);
    $('#form-update').attr('action', '/admin/paises/' + pais.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/paises/' + id);
    $('#boton-modal-borrar').click();
}







//Datatable - instaciación del plugin
var table = $('#tabla_presupuestos').DataTable({
    "language": tabla_traducida, // esta variable esta instanciada donde están declarados todos los js.
});


instaciar_filtros();
function instaciar_filtros() {
    //Datatables | filtro individuales - instanciación de los filtros
    $('#tabla_presupuestos tfoot th').each(function () {
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