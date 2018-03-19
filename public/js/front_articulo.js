

$('.selectpicker').selectpicker({
    style: 'btn-info',
    size: 4
  });
  


function agregar_articulo() {
    $.ajax({
        url: 'carrito/show',
        data: {
            marcas: $('#marcas_id').val(),
            umedidas: $('#umedidas_id').val(),
            colores: $('#colores_id').val(),
            materiales: $('#materiales_id').val(),
            subrubros: $('#subrubros_id').val(),
            rubros: $('#rubros_id').val()
        },
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            $('#tabla_articulos').html(data)
            instanciar_elementos() // se instancian nuevamente la tabla y las máscaras para las fechas
        }
    })

}