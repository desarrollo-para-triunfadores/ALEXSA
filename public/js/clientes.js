/**
 * Created by Juampy on 23/07/2017.
 */



function validar_cliente(){
    //var token = $("#token-create").val();
    $.ajax({
        dataType: 'json',
        url: "/registro/create",         //ruta que contendra el metodo para obtener lo que necesitamos, dentro del contolador
        //headers: {"X-CSRF-TOKEN": token},
        data: {
            cuit: $('#cuit').val(),
            email: $('#email').val(),
        },
        success: function (data) {
            var respuesta = JSON.parse(data);
            console.log(data);
            if(respuesta == 'Se envio el email'){
                swal(
                    '¡Bienvenido!',
                    'Se le ha enviado un email con los datos para ingresar al sitio como cliente a '+$('#email').val(),
                    'success'
                );
                /*
                swal({
                    type: 'success',
                    title: '¡Bienvenido!',
                    text: ',
                    timer: 4000
                });
                */
            }
            if(respuesta == "todavia no es cliente"){
                swal({
                    title: 'Ups!',
                    type: 'warning',
                    text: 'Lo sentimos, actualmente no tenemos registros de que exista un cliente con el CUIT proporcionado.',
                    timer: 5000
                });
            }
            //$("#modal-mensaje-exitoso").modal();
            //window.location.reload();
        }
    });
}
/**
 * Created by jpaul on 15/1/2018.
 */
