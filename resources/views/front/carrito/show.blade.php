<!DOCTYPE html>
<html class="noIE" lang="es-ES">
<head>
    <title>ALEX DISTRIBUIDORA SA | Resistencia</title>
    @include('front.partes.estilos')
</head>
<body>
@include('front.partes.header')
<div class="single">
    <div class="container">
        <div class="col-md-4 single-left">
            <div class="flexslider">
                <ul class="">
                    <li data-thumb="{{asset('imagenes/articulos/'.$articulo->imagen)}}">
                        <div class="thumb-image"> <img src="{{asset('imagenes/articulos/'.$articulo->imagen)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                    </li>

                </ul>
            </div>
            <!-- flexslider -->

            <!-- flexslider -->
            <!-- zooming-effect -->
            <script src="{{asset('plantillas/front/js/imagezoom.js')}}"></script>
            <!-- //zooming-effect -->
        </div>
        <div class="col-md-8 single-right">
            <h3>{{$articulo->nombre}}</h3>
            <div class="description">
                <h5><i>Description</i></h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                    odit aut fugit, sed quia consequuntur magni dolores eos qui
                    ratione voluptatem sequi nesciunt.</p>
            </div>
            <div class="color-quality">
                <div class="color-quality-left">
                    <h5>Color : </h5>
                    <ul>
                        <li><a href="#"><span></span></a></li>
                        @if($articulo->color)
                            <li><a href="#" style="color: {{$articulo->color->codigo}}"><span></span></a></li>
                        @endif

                    </ul>
                </div>
                <div class="color-quality-right">
                    <h5>Cantidad :</h5>
                    <div class="quantity">
                        <div class="quantity-select">
                            <div class="entry value-minus1">&nbsp;</div>
                            <div class="entry value1"><span>1</span></div>
                            <div class="entry value-plus1 active">&nbsp;</div>
                        </div>
                    </div>
                    <!--quantity-->
                    <script>
                        $('.value-plus1').on('click', function(){
                            var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                            divUpd.text(newVal);
                        });

                        $('.value-minus1').on('click', function(){
                            var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                            if(newVal>=1) divUpd.text(newVal);
                        });
                    </script>
                    <!--quantity-->

                </div>
                <div class="clearfix"> </div>
            </div>
            {{--
            <div class="occasional">
                <h5>RAM :</h5>
                <div class="colr ert">
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>3 GB</label>
                    </div>
                </div>
                <div class="colr">
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>2 GB</label>
                    </div>
                </div>
                <div class="colr">
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>1 GB</label>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            --}}
            <div class="simpleCart_shelfItem">
                <p><span>$460</span> <i class="item_price">$450</i></p>
                <form action="#" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="add" value="1">
                    <input type="hidden" name="w3ls_item" value="-">
                    <input type="hidden" name="amount" value="450.00">
                    <button type="submit" class="w3ls-cart">Añadir al carrito de presupuesto</button>
                </form>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</body>
@include('front.partes.pie')