<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Empresa dedicada al cuidado del adulto mayor en su domicilio"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="personas mayores, cuidados especiales, cuidadores,
    pacientes mayores, servicios domiciliarios, salud, seguridad, enfermeria, cuidadoras, atención
    postoperatoria, medico geriatra, fisioterapeuta, podologia, servicios integrales de salud,
    especialistas, cuidados irapuato, bajio adulto mayor, cuidados de adultos mayores,
    asistencia geronto-geriátrica, cuidados domiciliarios,">
    <meta name="author" content="Villaluz">
    <title>Villaluz - <?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/img/villaluz.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli: 400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2a68bf40c.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="/css/tabstyles.css" />
    <link rel="stylesheet" href="/css/site.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Owl Carousel Assets -->
    <!-- <link href="css/bootstrapTheme.css" rel="stylesheet"> -->
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.theme.css" rel="stylesheet">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <script src="https://kit.fontawesome.com/91038794b5.js" crossorigin="anonymous"></script>
    
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

</head>

<style>
    .topnav {
        overflow: hidden;
    }

    .topnav a {
    float: left;
    display: block;
    color: #fff;
    text-align: center;
    padding: 0 12px;
    text-decoration: none;
    }

    .topnav a:hover {
    background-color: #e6eeed;
    color: #5eaead;
    }

    .topnav .icon {
    display: none;
    }

    @media screen and (max-width: 736px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
        float: right;
        display: block;
    }
    }

    @media screen and (max-width: 736px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
    }

    #owl-demo .item{
        margin: 3px;
        text-align: center;
        font-size: 16px;
        padding: 35px;
    }

    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }

</style>

</head>

<body>
  
    <div id="barra_contacto">
        <div class="wrapper sh">
            <nav class="social_header">
                <a href="https://www.facebook.com/Villaluzirapuato" class="icon_social"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/villaluz_salud/" class="icon_social"><i class="fab fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=46236739960&text=Gracias por comunicarte con el departamento de Atención a Clientes de Villaluz, ¿Cómo podemos ayudarte?" class="icon_social"><i class="fab fa-whatsapp"></i></a>
                <!-- <a href="https://login.bluehost.com/cgi/webmail.com" target="blank" class="icon_social"><i class="fas fa-envelope"></i></a>-->
            </nav>
            <div class="social_header">¿Tienes dudas? <b class="phone">01 (462) 624 5466</b></div>
        </div>  
    </div>

    <header class="header2">
        <div class="wrapper">
            <div class="logo">
                <img class="logo_villaluz" src="/img/logotipo_villaluz.png">
            </div>
            <nav class="main_menu">
                <div class="topnav" id="myTopnav">
                    <a href="/">Inicio</a>
                    <a href="/site/nosotros">Nosotros</a>
                    <a href="/site/servicio">Servicio</a>
                    <a href="/site/miservicio">Mi Servicio</a>
                    <!-- <a href="/noticias/">De Inter&eacute;s</a>-->
                    <a href="/site/contacto">Contacto</a>
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>
            </nav>
        </div>
    </header>

    <?= $content ?>

   
    <footer>
        <div class="wrapper">
            <div class="menu my-3">
                <nav class="social">
                    <!-- <a href="https://login.bluehost.com/cgi/webmail.com" target="blank" class="social_footer"><i class="fas fa-envelope"></i></a> -->
                    <a href="https://www.facebook.com/Villaluzirapuato" target="blank" class="social_footer"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/villaluz_salud/" target="blank" class="social_footer"><i class="fab fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=46236739960&text=Gracias por comunicarte con el departamento de Atención a Clientes de Villaluz, ¿Cómo podemos ayudarte?" class="social_footer"><i class="fab fa-whatsapp"></i></a>
                </nav>
                <div class="social social_footer">¿Tienes dudas? <b>01 (462) 624 5466</b></div>
            </div>
            <div class="footer-logo">
                <nav class="min_footer my-3">
                    <a href="/" class="social_footer">Inicio</a>
                    <a href="/site/nosotros" class="social_footer">Nosotros</a>
                    <a href="/site/servicio" class="social_footer">Servicio</a>
                    <a href="/site/miservicio" class="social_footer">Mi Servicio</a>
                    <a href="/site/contacto" class="social_footer">Contacto</a>
                </nav>
                <nav class="logo_footer">
                    <div class="logo my-3"><img src="/img/logotipo_villaluz.png" width=100px; style="margin-bottom:10px;"></div>
                    Aviso de privacidad© 2017 Villaluz® Derechos Reservados
                </nav>
            </div>
        </div>
    </footer>
    
    
    <script src="/js/jquery-1.9.1.min.js"></script> 
    <script src="/js/owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 5000,
                items : 3,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3]
            });
        });

        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        $('.map-container')
        .click(function(){
                $(this).find('iframe').addClass('clicked')})
        .mouseleave(function(){
                $(this).find('iframe').removeClass('clicked')});
    </script>

    <script src="/js/cbpFWTabs.js"></script>
    <script>
        (function() {
            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
            });
        })();
    </script>
</body>
</html>
