$("#side-usuarios-li").addClass("active");
$("#side-usuarios-ul").addClass("menu-open");
$("#side-ele-roles").addClass("active");


function completar_campos(rol) {
    console.log(rol);


    $('#nombre').val(rol.nombre);

//    Estos if son actualizar los estados de los checkbox en el modal update:
//    
//    $('#roles').bootstrapToggle('off'); 
//    $('#inquilinos').bootstrapToggle('off');   
//    $('#propietarios').bootstrapToggle('off'); 
//    $('#consorcios').bootstrapToggle('off');
//    $('#servicios').bootstrapToggle('off');       
//        
//    if(rol.){
//        $('#roles').bootstrapToggle('on'); 
//    }
//     if(rol.){
//        $('#inquilinos').bootstrapToggle('on');
//    }
//     if(rol.){
//        $('#propietarios').bootstrapToggle('on');
//    }
//     if(rol.){
//        $('#consorcios').bootstrapToggle('on');
//    }
//     if(rol.){
//        $('#servicios').bootstrapToggle('on');
//    }


    $('#form-update').attr('action', '/roles/' + rol.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/roles/' + id);
    $('#boton-modal-borrar').click();
}



//Datatable - instaciación del plugin
var table = $('#example').DataTable({
    "language": tabla_traducida // esta variable esta instanciada donde están declarados todos los js.
});


//Datatables | filtro individuales - instanciación de los filtros
$('#example tfoot th').each(function () {
    var title = $(this).text();
    if (title !== 'Acciones') { //ignoramos la columna de los botones
        $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');
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

//Datatables | ocultar/visualizar columnas dinámicamente
$('a.toggle-vis').on('click', function (e) {
    e.preventDefault();
    // Get the column API object
    var column = table.column($(this).attr('data-column'));
    // Toggle the visibility
    column.visible(!column.visible());
});

//Datatables | asocio el evento sobre el body de la tabla para que resalte fila y columna
$('#example tbody').on('mouseenter', 'td', function () {
    var colIdx = table.cell(this).index().column;
    $(table.cells().nodes()).removeClass('highlight');
    $(table.column(colIdx).nodes()).addClass('highlight');
});
