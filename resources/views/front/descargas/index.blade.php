<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alex Distribuidora S.A. - Resistencia, Chaco</title>
    @include('front.partes.estilos')

    <script type="text/javascript" src="{{asset('plantillas/front/plugins/Semantic-UI/semantic.js')}}"></script>
    <script type="text/javascript" src="{{asset('plantillas/front/plugins/PDFObject/pdfobject.js')}}"></script>
    <link href="{{asset('plantillas/front/plugins/Semantic-UI/semantic.css')}}" rel="stylesheet" type="text/css" media="all" />
    <style>
        .pdfobject-container { height: 300px;}
        .pdfobject { border: 1px solid #666; }
    </style>
    {{--
    <script>PDFObject.embed("{{asset('catalogos/ALEX_CATALOGO.pdf')}}", "#example1");</script>
    --}}

</head>

<body style="background-color: yellow">

<!-- //for bootstrap working -->

<!-- header -->
@include('front.partes.header')
<!-- //header -->
<!-- navigation -->
{{--
@if(\Illuminate\Support\Facades\Auth::user() == null)
    @include('front.partes.modal_inicial')
@endif
--}}

<div class="row">
    <div class="col-md-12">
        <div class="col-md-4">
            <div id="example1"></div>
        </div>
        <div class="col-md-4">
            <div id="example2"></div>
        </div>
    </div>
</div>

{{--
<section class="panel-pane pane-views pane-revista ediciones-anteriores block">
    <div class="block-inner clearfix">
        <h2 class="pane-title block-title">Catalogos</h2>
        <div class="block-content">
            <div class="view view-revista view-id-revista view-display-id-block_2 view-dom-id-5e61c3f37e5dd91b1e8a99c4914d191f">
                <div class="view-content">
                    <div class="views-row views-row-1 views-row-odd views-row-first">

                        <div class="views-field views-field-nothing">        <span class="field-content"><div class="secundarias">
	<div class="imagen-revista"><img class="image-style-revista-secundaria-230x180" src="http://scf.naturacosmeticos.com.ar/sites/default/files/styles/revista-secundaria-230x180/public/seccion-revista_46.jpg?itok=z-0qFUjb" width="230" height="180" alt="Revista digital Natura"></div>
	<div class="textos-secundarias" style="background: rgb(217, 57, 69);">
		<div class="content-revista">
			<div class="link-revista"><a href="http://scf.naturacosmeticos.com.ar/revista-digital?id=1652/13288/36127" target="_top" class="use_only_title" tabindex="175">Natura ciclo 04 - 2017</a></div>
			<div class="descripcion-revista">Pulpas Natura Ekos, suavidad para tus manos.
Libertad para tus pies.</div>
		</div>
	</div>
</div></span>  </div>
                        <div class="views-field views-field-field-background-color">        <div class="field-content hidden">#d93945</div>  </div>  </div>
                    <div class="views-row views-row-2 views-row-even">

                        <div class="views-field views-field-nothing">        <span class="field-content"><div class="secundarias">
	<div class="imagen-revista"><img class="image-style-revista-secundaria-230x180" src="http://scf.naturacosmeticos.com.ar/sites/default/files/styles/revista-secundaria-230x180/public/seccion-revista_45.jpg?itok=Wizp18ba" width="230" height="180" alt="Revista digital Natura"></div>
	<div class="textos-secundarias" style="background: rgb(217, 57, 69);">
		<div class="content-revista">
			<div class="link-revista"><a href="http://www.naturacosmeticos.com.ar/revista-digital?id=1652/13288/36017" target="_top" class="use_only_title" tabindex="176">Natura ciclo 03 - 2017</a></div>
			<div class="descripcion-revista">Nuevo Tododia Nuez Pecan y Karité</div>
		</div>
	</div>
</div></span>  </div>
                        <div class="views-field views-field-field-background-color">        <div class="field-content hidden">#d93945</div>  </div>  </div>
                    <div class="views-row views-row-3 views-row-odd">

                        <div class="views-field views-field-nothing">        <span class="field-content"><div class="secundarias">
	<div class="imagen-revista"><img class="image-style-revista-secundaria-230x180" src="http://scf.naturacosmeticos.com.ar/sites/default/files/styles/revista-secundaria-230x180/public/seccion-revista_44.jpg?itok=K-2JWR07" width="230" height="180" alt="Revista digital Natura"></div>
	<div class="textos-secundarias" style="background: rgb(47, 126, 167);">
		<div class="content-revista">
			<div class="link-revista"><a href="http://www.naturacosmeticos.com.ar/revista-digital?id=1652/13288/35881" target="_top" class="use_only_title" tabindex="177">Natura ciclo 02B - 2017</a></div>
			<div class="descripcion-revista">Y a vos ¿Qué te mueve?</div>
		</div>
	</div>
</div></span>  </div>
                        <div class="views-field views-field-field-background-color">        <div class="field-content hidden">#2f7ea7</div>  </div>  </div>
                    <div class="views-row views-row-4 views-row-even views-row-last">

                        <div class="views-field views-field-nothing">        <span class="field-content"><div class="secundarias">
	<div class="imagen-revista"><img class="image-style-revista-secundaria-230x180" src="http://scf.naturacosmeticos.com.ar/sites/default/files/styles/revista-secundaria-230x180/public/seccion-revista_43.jpg?itok=hB6Z-cgi" width="230" height="180" alt="Revista digital Natura"></div>
	<div class="textos-secundarias" style="background: rgb(217, 57, 69);">
		<div class="content-revista">
			<div class="link-revista"><a href="http://www.naturacosmeticos.com.ar/revista-digital?id=1652/13288/35889" target="_top" class="use_only_title" tabindex="178">Natura ciclo 02A - 2017</a></div>
			<div class="descripcion-revista">Natura Amó, tu forma única de amar</div>
		</div>
	</div>
</div></span>  </div>
                        <div class="views-field views-field-field-background-color">        <div class="field-content hidden">#d93945</div>  </div>  </div>
                </div>

            </div>    </div>
    </div>
</section>
--}}
<br><br>
@include('front.partes.pie')
@include('front.partes.scripts')
<script>PDFObject.embed("/catalogos/ALEX_CATALOGO.pdf", "#example1");</script>
<script>PDFObject.embed("/catalogos/ALEX_CATALOGO.pdf", "#example2");</script>
</body>
</html>