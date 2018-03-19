/**
 * Created by Juampy on 23/07/2017.
 */



function mensaje_desde_front(){
    //var token = $("#token-create").val();

        $.ajax({
            dataType: 'json',
            url: "/rrhh/create",         //ruta que contendra el metodo para obtener lo que necesitamos, dentro del contolador
            //headers: {"X-CSRF-TOKEN": token},
            data: {
                nombre: $('#nombre').val(),
                telefono: $('#telefono').val(),
            },
            success: function (data) {
                //console.log(data);
                //$("#modal-mensaje-exitoso").modal();
                window.location.reload();
            }
        });
    }
