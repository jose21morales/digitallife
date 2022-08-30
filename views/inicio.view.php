<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Digital Life</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"/>
</head>
<body>

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
                <li class="menu__item"><a href="index.php" class="menu__link menu__link--select">Inicio</a></li>
                <li class="menu__item"><a href="index.php?action=acercade" class="menu__link">Acerca de</a></li>
                <li class="menu__item"><a href="index.php?action=contacto" class="menu__link">Contacto</a></li>
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
        <div class="banner__content">Has crecer tu negocio hacia nuevas fronteras</div>
    </section>
    
    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Bienvenidos</h2>
                <p class="main__txt">Hola te damos una cordial bienvenida a nuestra Agencia de Marketing Digital aqui podras encontrar todo lo necesario para hacer crecer tus ventas, y que los clientes se acerquen a ti en vez de estarlos persiguiendo</p>
            </div>
        </section>
        
        <section class="group main__about__description">
            <div class="container container--flex">
                <div class="column column--50">
                    <img src="img/food01.jpg" alt="">
                </div>
                <div class="column column--50">
                    <h3 class="column__title">¿Como podemos ayudarte?</h3>
                    <p class="column__txt">Actualmente si no estas en internet no existes y cada vez hay más empresas y pequeños negocios que tienen presencia en redes sociales como Facebook, Instagram y Twitter y tu no te puedes quedar atrás.</p>
                <a href="" class="btn btn--contact">Contact</a>
                </div>
            </div>
        </section>

        <br><br><br><br>

        <section class="group today-special">
            <h2 class="group__title">Oferta Especial</h2>
            <div class="container container--flex">
                <div class="column column--50-25">
                    <img src="img/MD.png" alt="" class="today-special__img">
                    <div class="today-special__title">Si quieres incrementas tus clientes te damos 7 DIAS de prueba GRATIS solo ponte en contacto con nosotros</div>
                    <div class="today-special__price">$0.00</div>
                </div>
            </div>
        </section>
    </main>