<!-- Owl-Carousel-js -->
<script src="{{asset('plantillas/front/js/owl.carousel.min.js')}}"></script>
<!-- //Owl-Carousel-js -->

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{asset('plantillas/front/js/google-map-init.js')}}"></script>

<!-- cart-js -->
<!--<script src="{{asset('plantillas/front/js/minicart.js')}}"></script>
<script>
	w3ls.render();

    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });

</script>
-->
<!-- //cart-js -->
<script type="text/javascript" src="{{asset('plantillas/front/template_marcia/js/jquery.inview.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plantillas/front/template_marcia/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plantillas/front/template_marcia/js/mousescroll.js')}}"></script>
<script type="text/javascript" src="{{asset('plantillas/front/template_marcia/js/smoothscroll.js')}}"></script>
{{--
<script type="text/javascript" src="{{asset('plantillas/front/template_marcia/js/jquery.countTo.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('plantillas/front/template_marcia/js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plantillas/front/template_marcia/js/main.js')}}"></script>


<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('plantillas/front/js/bootstrap-3.1.1.min.js')}}"></script>
<script src="{{asset('plantillas/front/assets/js/jquery.magnific-popup.min.js')}}"></script>



<script src="{{asset('plantillas/front/js/jquery.elevatezoom.js')}}" type="text/javascript"></script>

<script src="{{asset('plantillas/front/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true // 100% fit in a container
        });
    });

</script>





<script type="text/javascript">
	$(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

    });

</script>
<script type="text/javascript" src="{{asset('plantillas/front/js/jquery.flexisel.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- ACÁ COMIENZA LOS MÉTODOS PARA EL APARTADO DE ARTICULOS -->
<script>

	$(".filtro_articulos").change(function(){
        filtrar_articulos();
    });

    $('.zoom').elevateZoom(); 

    function filtrar_articulos() {        
        $.ajax({
            url: '/front_articulos',
            data: {
                marcas: $('#marcas').val(),
                talles: $('#talles').val(),
                umedidas: $('#umedidas').val(),
                colores: $('#colores').val(),
                materiales: $('#materiales').val(),
                subrubros: $('#subrubros').val(),
                rubros: $('#rubros').val()
            },
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $('#tabla_articulos').html(data)
            }
        })
    }

  function agregar_un_articulo(articulo) {
      console.log
        $.ajax({
            url: '/carrito/agregar_articulo',
            data: {
                articulo: articulo,                
            },
            type: 'GET',
            dataType: 'json',
            success: function (data) {
               swal("¡Agregado!", data, "success");
            }
        })
    }

function agregar_articulos(articulo){
        swal("Ingrese la cantidad de unidades deseada:", {
        content: "input",
        })
        .then((value) => {
            if((value != null) && (value> 0)){      //valida que no sea nulo y sea mayor a 0 para agregar
                $.ajax({
                    url: '/carrito/agregar_articulo',
                    data: {
                        articulo: articulo,
                        cantidad: value
                    },
                    type: 'GET',
                    dataType: 'json',

                    success: function (data) {
                        if(data == 'agregado'){
                            swal("¡Agregado!", data, "success");
                        }
                        else{
                            swal("Éste producto no pudo ser añadido", data, "error");
                        }

                    }
                })
            }
        });
    }


    function actualizar_cantidad(articulo){
        swal("Ingrese la cantidad de unidades deseada:", {
        content: "input",
        })
        .then((value) => {
            $.ajax({
                url: '/carrito/actualizar',
                data: {
                    articulo: articulo,   
                    cantidad: value         
                },  
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $('#tabla_articulos').html(data);            
                    swal("¡La cantidad de unidades fue actualizada!", {
                        icon: "success",
                    });              
                }
            })    
        });
    }


function vaciar_carrito(){
        swal({
        title: "¿Está seguro de vaciar su carrito?",
        text: "Perderá la lista de productos que haya seleccionado.",
        icon: "warning",
        buttons: true,
        buttons: {
            cancel: "cancelar",
            OK: true,
        },
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
             $.ajax({
                url: '/carrito/vaciar_carrito',                 
                data: {},  
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $('#tabla_articulos').html(data);            
                    swal("¡El carrito fue vaciado!", {
                        icon: "success",
                    });              
                }
            })
        }
        });
    }

    function solicitar_presupuesto(){
        swal({
            title: "¿Enviar solicitud de presupuesto?",
            text: "Si se olvida de algo puede pedir un nuevo presupuesto.",
            icon: "warning",
            buttons: true,
            buttons: {
                cancel: "cancelar",
                OK: true,
            },
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: '/carrito/registrar_carrito',                 
                    data: {},  
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#tabla_articulos').html(data);            
                        swal("¡El pedido de presupuesto fue enviado!", {
                            icon: "success",
                        });              
                    }
                })
            }
        });
    }

    function eliminar_articulo(articulo){
        swal({
        title: "¿Está seguro de quitar este producto?",
        text: "Puede volver a agregarlo después.",
        icon: "warning",
        buttons: true,
        buttons: {
            cancel: "cancelar",
            OK: true,
        },
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
             $.ajax({
                url: '/carrito/eliminar_articulo',
                data: {
                    articulo: articulo,                
                },  
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $('#tabla_articulos').html(data);            
                    swal("¡El producto fue retirado!", {
                        icon: "success",
                    });              
                }
            })
           
        }
        });
    }
</script>
<!-- ACÁ FINALIZA LOS MÉTODOS PARA EL APARTADO DE ARTICULOS -->

<!-- Select2 -->
<script src="{{ asset('plantillas/AdminLTE/plugins/select2/select2.full.min.js') }}"></script>



<script>
	$(".select2").select2({
    placeholder: "seleccione una opción"
});

</script>

<script>
    function registrarse() {
        swal("Ingrese su CUIT y email:", {
            content: "input",
        })
            .then((value) => {
            if((value != null) && (value> 0)){      //valida que no sea nulo y sea mayor a 0 para agregar
            $.ajax({
                url: '/carrito/agregar_articulo',
                data: {
                    articulo: articulo,
                    cantidad: value
                },
                type: 'GET',
                dataType: 'json',

                success: function (data) {
                    if(data == 'agregado'){
                        swal("¡Agregado!", data, "success");
                    }
                    else{
                        swal("Éste producto no pudo ser añadido", data, "error");
                    }

                }
            })
        }
    });
    }
</script>