


<div class="modal video-modal fade" id="modal-articulo" tabindex="-1" role="dialog" aria-labelledby="modal-articulo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="col-md-5 modal_body_left">
                        <img src="{{asset('imagenes/articulos/'.$articulo->imagen)}}" alt=" " class="img-responsive" />
                    </div>
                    <div class="col-md-7 modal_body_right">
                        <h4 id="nombre">{{$articulo->nombre}}</h4>
                        <p>{{$articulo->descripcion}}</p>
                        <div class="rating">
                            <div class="rating-left">
                                <img src="images/star-.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="rating-left">
                                <img src="images/star-.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="rating-left">
                                <img src="images/star-.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="rating-left">
                                <img src="images/star-.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="rating-left">
                                <img src="images/star-.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        {{--
                        <div class="modal_body_right_cart simpleCart_shelfItem">
                            {{--<p><span>$980</span> <i class="item_price">$--</i></p>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="w3ls_item" value="Asus Laptop">
                                <input type="hidden" name="amount" value="880.00">
                                <button type="submit" class="w3ls-cart">Añadir al carro de presupuesto</button>
                            </form>
                        </div>
                    --}}
                        <h5>Color</h5>
                        <div class="color-quality">
                            <ul>
                                <li><a href="#"><span></span></a></li>
                                @if($articulo->color)
                                    <li><a href="#" style="color: {{$articulo->color->codigo}}"><span></span></a></li>
                                @endif

                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </section>
        </div>
    </div>
</div>

