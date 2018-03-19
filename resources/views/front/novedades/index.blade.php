<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alex Distribuidora S.A. - Resistencia, Chaco</title>
    @include('front.partes.estilos')
</head>

<body style="background-color: yellow">

    @include('front.partes.scripts')

    <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

    @include('front.partes.header')

    <a class="twitter-grid" href="https://twitter.com/TwitterDev/timelines/539487832448843776?ref_src=twsrc%5Etfw">National Park Tweets</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    {{--
    <div class="footer">
        <div class="container" style="align-content: center">
            <div class="fb-page" data-href="https://www.facebook.com/hidromatferreteriaindustrial/?ref=br_rs" data-tabs="timeline, events, messages" data-width="500" data-small-header="false" data-height="4000" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/hidromatferreteriaindustrial/?ref=br_rs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hidromatferreteriaindustrial/?ref=br_rs">Hidromat Ferretería Industrial</a>
                </blockquote></div>
        </div>
    </div>
    --}}




    @include('front.partes.marcas')


    @include('front.partes.productos_nuevos')
    @include('front.partes.contacto')

    @include('front.partes.maps')
    @include('front.partes.pie')

</body>

</html>