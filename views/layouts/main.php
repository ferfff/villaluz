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
    <title>Villaluz - <?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/img/villaluz.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli: 400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        background-color: #5eaead;
        color: #fff;
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
        <div class="wrapper">
        <nav class="social">
            <a href="https://es-la.facebook.com/Porelbienestardevivir"><img class="icon_social" src="/img/facebook.png"></a>
            <!-- <a href=""><img class="icon_social" src="img/twitter.png"></a> -->
            <a href="https://login.bluehost.com/cgi/webmail.com" target="blank"><img class="icon_social" src="/img/mail.png"></a>
        </nav>
        <div class="social">¿Tienes dudas? <b class="phone">01 (462) 624 5466</b></div>
        </div>  
    </div>
    
    <header class="header2">
        <div class="wrapper">
        <div class="logo"><img class="logo_villaluz" src="/img/logotipo_villaluz.png"></div>
        <nav>
            <div class="topnav" id="myTopnav">
            <a href="/">Inicio</a>
            <a href="/site/nosotros">Nosotros</a>
            <a href="/site/servicio">Servicio</a>
            <a href="/site/miservicio">Mi Servicio</a>
            <a href="/noticias/">De Inter&eacute;s</a>
            <a href="/site/contacto">Contacto</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </nav>
        </div>
    </header>

    <?= $content ?>



    <footer>
        <div class="wrapper">
        <div class="menu">
            <nav class="social">
            <a href="https://es-la.facebook.com/Porelbienestardevivir"><img class="icon_social" src="/img/facebook_white.png"></a>
            <!-- <a href=""><img class="icon_social" src="img/twitter_white.png"></a> -->
            <a href="https://login.bluehost.com/cgi/webmail.com" target="blank"><img class="icon_social" src="/img/mail_white.png"></a>
            </nav>
            <div class="social" style="font-size:10px;">¿Tienes dudas? <b>01 (462) 624 5466</b></div>
        </div>
        <nav>
            <a href="/">Inicio</a>
            <a href="/site/nosotros">Nosotros</a>
            <a href="/site/servicio">Servicio</a>
            <a href="/site/miservicio">Mi Servicio</a>
            <a href="/site/contacto">Contacto</a>
        </nav><br><br>
        <nav>
            <div class="logo"><img src="/img/logotipo_villaluz.png" width=100px; style="margin-bottom:10px;"></div>
            Aviso de privacidad© 2017 Villaluz® Derechos Reservados
        </nav>
        <div class="menu">
            <div class="social" style="font-size:10px;"></b></div>
        </div>
        </div>
    </footer>
  
    <script src="/js/jquery-1.9.1.min.js"></script> 
    <script src="/js/owl.carousel.js"></script>

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
