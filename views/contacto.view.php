<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto | Digital Life</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v6.0"></script>
    
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 class="logo"><img class="img-logo" src="img/logo.png">Digital Life</h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__phone">
                    <span class="icon-phone">962 215 74 25</span>
                </p>
                <p class="main-header__contactInfo__address">
                    <span class="icon-location">Cacahoatán, Chiapas</span>
                </p>
            </div>
        </div>    
    </header>

    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="index.php" class="menu__link">Inicio</a></li>
                <li class="menu__item"><a href="index.php?action=acercade" class="menu__link">Acerca de</a></li>
                <li class="menu__item"><a href="index.php?action=contacto" class="menu__link menu__link--select">Contacto</a></li>
            </ul>
            <div class="social-icon">
                <a target="_blank" href="https://www.facebook.com/DigitalLife-113077276919369/" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
                <a href="index.php?action=contacto" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
    </nav>
    
    <section class="banner">
        <img src="img/banner1.png" alt="" class="banner__img">
        <div class="banner__content">Contactame</div>
    </section>
    
    <main class="main">
        <section class="group contact">
            <h2 class="group__title">Contáctanos</h2>
            <div class="container container--flex">
                <div class="contact-information column column--50">
                    <h3 class="column__title">Información de contacto</h3>
                    <p class="column__txt">Aqui podras encontrar la información necesaria para ponerte en contacto con nosotros y resolver todas tus dudas.</p>
                    <p class="column__txt"><span class="icon-phone"></span>Teléfono: 962 215 74 25</p>
                    <p class="column__txt"><span class="icon-location"></span>Cacahoatán, Chiapas</p>
                    <p class="column__txt"><span class="icon-mail"></span>jose33.cecilio@gmail.com</p>
                     <div class="social-icon">
                        <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
                        <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
                        <a href="" class="social-icon__link"><span class="icon-mail"></span></a>
                     </div>
                </div>
                <form action="enviar_db.php" method="post" class="formulario column column--50">
                    <label for="" class="formulario__label">Nombre:</label>
                    <input type="text" class="formulario__input-txt" name="nombre">
                    <label for="" class="formulario__label">Correo:</label>
                    <input type="text" class="formulario__input-txt" name="correo">
                    <label for="" class="formulario__label">Teléfono:</label>
                    <input type="text" class="formulario__input-txt" name="telefono">
                    <label for="" class="formulario__label">Mensaje:</label>
                    <textarea name="mensaje" id="" cols="30" rows="10" class="formulario__textarea"></textarea>
                    <input type="submit" class="btn formulario__btn" value="Enviar">
                </form>
                <div class="fb-comments" data-href="http://localhost/digitallife/contacto.html" data-width="500 " data-numposts="50"></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d963.5042784086854!2d-92.16719500653194!3d14.991755210568293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858e0add7e127ae3%3A0x5fd88adbfe92705f!2sCacahoat%C3%A1n%2C%20Chis.!5e0!3m2!1ses!2smx!4v1583616364921!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section>
    </main>

    <?php require 'views/footer.php'; ?>
    
    <script src="js/menu.js"></script>
    <script src="js/modal.js"></script>

    <script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.es/b13245123/crm/site_button/loader_3_cwst71.js');
    </script>

</body>
</html>