<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Me gusta</title>
    <link rel="stylesheet" href="/frontend_css/normalize.css">
    <link rel="stylesheet" href="/frontend_css/megusta.css">

    <!-- Add jQuery library -->
    <script type="text/javascript" src="/frontend_js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="/js/registers/like.js"></script>

    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

</head>
<body>
<section>
    <div class="megusta">
        <h2>Mira todos los regalos que tenemos para nuestros fans</h2>
        <figure>
            <img src="/frontend_images/premios.png" alt="premios">
        </figure>
        <p>Haz click en Me Gusta y di ¡Yo lo quiero!</p>
        <a class="btn-megusta" href="#">Me gusta</a>
        <div class="btn-megusta" ><div style="display: none" ><div class="fb-like" data-href="https://www.facebook.com/unileverweb" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false" id="btn_like"></div></div></div>
    </div>
</section>
</body>
</html>