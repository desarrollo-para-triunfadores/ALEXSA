<div class="modal fade hide" id="modal_registro" tabindex="-1" role="dialog" aria-labelledby="modal_registro" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title" id="">Registrese como nuestro cliente:</h4>
            </div>
            <div class="modal-body modal-body-sub">
                <div class="row">
                    <div class="col-md-6 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                        <div class="sap_tabs">
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul>
                                    <li class="resp-tab-item hide" aria-controls="tab_item-0">
                                        <span>Registrar</span>
                                    </li>
                                </ul>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="facts">
                                        <div class="register">
                                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/registrar') }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input name="Email" value="{{ old('email') }}" placeholder="Correo electrónico" type="text" required="">

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                @endif
                                                <input name="cuit" placeholder="ingrese el CUIT de la empresa/cliente" type="text" required="">
                                                <div class="sign-up">
                                                    <input type="submit" value="Registrar" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{--
                                <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="facts">
                                        <div class="register">
                                            <form action="#" method="post">
                                                <input placeholder="Codigo Cliente" name="Name" type="text" required="">
                                                <input placeholder="Email" name="Email" type="email" required="">

                                                <div class="sign-up">
                                                    <input type="submit" value="Crear Cuenta" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 modal_body_right modal_body_right1">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <img src="{{asset('plantillas/front/imagenes/logo.jpg')}}" width="440" height="230" class="img-rounded" alt="Cinque Terre">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
        $('#myModal88').modal('hide');
</script>
