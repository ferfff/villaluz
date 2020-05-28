<?php
    if(isset($_POST['boton'])){
        if($_POST['nombre'] == ''){
            $errors[1] = '<span class="error">Ingrese su nombre</span>';
        }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = '<span class="error">Ingrese un email correcto</span>';
        }else if($_POST['asunto'] == ''){
            $errors[3] = '<span class="error">Ingrese un asunto</span>';
        }else if($_POST['mensaje'] == ''){
            $errors[4] = '<span class="error">Ingrese un mensaje</span>';
        }else{
            $dest = "informes@villaluz.com.mx"; //Email de destino
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto']; //Asunto
            $cuerpo = $_POST['mensaje']; //Cuerpo del mensaje
            //Cabeceras del correo
            $headers = "From: $nombre <$email>\r\n"; //Quien envia?
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; //
 
            if(mail($dest,$asunto,$cuerpo,$headers)){
                $result = '<div class="result_ok">Email enviado correctamente </div>';
                // si el envio fue exitoso reseteamos lo que el usuario escribio:
                $_POST['nombre'] = '';
                $_POST['email'] = '';
                $_POST['asunto'] = '';
                $_POST['mensaje'] = '';
            }else{
                $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="Empresa dedicada al cuidado del adulto mayor en su domicilio"/>
  <meta name="format-detection" content="telephone=no">
  <title>Villaluz - Servicios Integrales de Salud</title>
  <link rel="shortcut icon" href="img/villaluz.ico">
  <link href="https://fonts.googleapis.com/css?family=Muli: 400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  
  <!-- Owl Carousel Assets -->
  <!-- <link href="css/bootstrapTheme.css" rel="stylesheet"> -->
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.css" rel="stylesheet">

  <script src="js/jquery-1.9.1.min.js"></script> 
  <script src="js/owl.carousel.js"></script>

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
  </style>

</head>

<body>
  
  <div id="barra_contacto">
    <div class="wrapper">
      <nav class="social">
        <a href="https://es-la.facebook.com/Porelbienestardevivir"><img class="icon_social" src="img/facebook.png"></a>
        <!-- <a href=""><img class="icon_social" src="img/twitter.png"></a> -->
        <a href="https://login.bluehost.com/cgi/webmail.com" target="blank"><img class="icon_social" src="img/mail.png"></a>
      </nav>
      <div class="social">¿Tienes dudas? <b class="phone">01 (462) 624 5466</b></div>
    </div>  
  </div>
  
  <header class="header2">
    <div class="wrapper">
      <div class="logo"><img class="logo_villaluz" src="img/logotipo_villaluz.png"></div>
      <nav>
        <div class="topnav" id="myTopnav">
          <a href="index.php">Inicio</a>
          <a href="nosotros.html">Nosotros</a>
          <a href="servicio.html">Servicio</a>
          <a href="mi_servicio.html">Mi Servicio</a>
          <a href="/noticias/index.php">De Inter&eacute;s</a>
          <a href="contacto.php">Contacto</a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
      </nav>
    </div>
  </header>

  <div class='header_galery'>
    <div class="container_block">
      <h1>Por el bienestar de vivir.</h1>
      <span class="header_block">sabemos que lo más importante es la familia</span>
    </div>
  </div>

  <div class="important">
    <div class="wrapper_2">
      <p>Las personas mayores necesitan cuidados especiales, donde el cuidador o cuidadora cuente con un perfil basado en la confianza y el respeto. Además, la persona responsable debe tener conocimientos esenciales en salud e higiene, de esta manera se asegura a los pacientes un entorno tranquilo, seguro y saludable.</p>
    </div>
  </div>

  <div class="heder_title">
    <div class="wrapper_2">
      <div style="border: 1px solid #82007e; width:200px; margin: 0 auto;"></div><br>
      <h2>Nuestros Servicios Domiciliarios están orientados a cubrir las necesidades de cuidado, salud y seguridad que su familia necesita.</h2>
    </div>
  </div>

  <div class="wrapper">
    <div class="heder_title">
      <div id="mysernav"><img src="img/villaluz_enfermeria_asistencial.jpg" width="100%" alt="villaluz enfermeria asistencial">Enfermería Asistencial</div>
      <div id="mysernav"><img src="img/villaluz_cuidadoras.jpg" width="100%" alt="villaluz cuidadoras">Cuidadoras</div>
      <div id="mysernav"><img src="img/villaluz_atencion_postoperatoria.jpg" width="100%" alt="villaluz atencion postoperatoria">Atención Postoperatoria</div>
      <div id="mysernav"><img src="img/villaluz_medico_geriatra.jpg" width="100%" alt="villaluz medico geriatra">Médico Geriatra</div>
      <div id="mysernav"><img src="img/villaluz_fisioterapeuta.jpg" width="100%" alt="villaluz fisioterapeuta">Fisioterapeuta</div>
      <div id="mysernav"><img src="img/villaluz_podologia.jpg" width="100%" alt="villaluz podologia">Podología</div>
    </div>
  </div>

  
    <div class="paralax">
      <div class="wrapper">
        <div class="heder_title">
        <div class="block_paralax">
          <p>En <b>Villaluz Servicios Integrales de Salud</b>, sabemos que lo más importante es la familia, y cada vez es más necesario el apoyo de especialistas que brinden la atención requerida por el adulto mayor.<br><br>


          Nuestros Servicios Domiciliarios están orientados a cubrir las necesidades de cuidado, salud y seguridad que su familia necesita; con la tranquilidad de ser atendidos por un equipo de profesionales que trabajan bajo una metodología de atención especializada.</p>
        </div>
        <div class="block_paralax_2">
          <img src="img/slogan.png" width="90%" alt="villaluz slogan">
        </div>
      </div>
    </div>
  </div>

  <div class="heder_title">
    <div class="wrapper_2">
      <h3>Testimonios de familiares</h3>
      <div style="border-bottom: 1px solid #82007e; width:200px; margin: 0 auto; padding-top:20px;"></div><br>
      <h2>De nuestra familia a la tuya.</h2>
    </div>
  </div>


  
    <div class="heder_title">
      <div id="demo">
        <div class="container">
          <div class="row">
            <div class="span12">
              <div id="owl-demo" class="owl-carousel">
                <div class="item">
                  Es una empresa con valores éticos y trato justo, como pocas. Tuve una excelente experiencia al
                  tratar con Villaluz. Gracias!<br><br>
                  <b>Lily del Campo (Irapuato, Gto.)</b>
                </div>
                <div class="item">
                  Excelente servicio, lo recomiendo ampliamente. La enfermera muy atenta con tía enfermita, muyacomedida y sobre todo, con mucha paciente para mi tía que es un adulto muy difícil. Tía quedó muy contenta con este servicio. Todo muy profesional.<br><br>
                  <b>Rocío Arvizu (San José Irtubide, Gto)</b>
                </div>
                <div class="item">
                  Excelente servicio, las enfermeras siempre fueron muy atentas con mia vuela. Los recomiendo
                  ampliamente, un servicio muy profesional.<br><br>
                  <b>David Díaz (Léon, Gto.)</b>
                </div>
                <div class="item">
                  Muy buen servicio, bien formales y atentas las señoritas. Atención especializada y eficaz, sobre
                  todo, un servicio muy humano… Gracias.<br><br>
                  <b>Ernesto N. (Irapuato, Gto)</b>
                </div>
                <div class="item">
                  Hola, mi mensaje solo es para decirles que estoy muy contenta con el trabajo que hicieron con mi
                  papá (Don Paco). En poquito más de un mes, su adelanto fue enorme, muchas gracias!!!<br><br>
                  <b>Hernández (Irapuato, Gto.)</b>
                </div>
                <div class="item">
                  Un servicio muy bien organizado, desde el envío del personal hasta el sistema de pago (muy
                  práctico). Sin duda, lo volvería a contratar, muy recomendables!!<br><br>
                  <b>Alicia Coutinho (Irapuato, Gto.)</b>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="paralax_color">
      <div class="heder_title">
        <h2>Estamos encantados de ayudarte</h2><br>
        <p>El cuidar de alguien es un asunto que se hace en familia.<br>
        Somos en quien usted puede confiar para cuidar de esa persona tan especial.</p>
        <div class="block_direccion">
          <p class="direccion">Oficinas Plaza España<br>
            Tel. 01 (462) 624 5466<br>
            informes@villaluz.com.mx<br>
          </p>
          <p class="direccion">Oficina Coruña / Planta Alta<br>
            Av. Guerrero No.708<br>
            Zona Centro, Irapuato, Gto.<br>
          </p>
        </div>
        <div class="block_direccion">
           <div class="datos_formulario">
            <form method='POST' action=''>
                
                <div><label>Nombre:</label><input type='text' style="background-color: #f2f2f2; border-bottom: 1px solid #666666; width: 100%;" name='nombre' value='<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; } ?>'><?php if(isset($errors)){ echo $errors[1]; } ?></div>
                
                
                <div><label>Correo:</label><input type='text' style="background-color: #f2f2f2; border-bottom: 1px solid #666666; width: 100%;" name='email' value='<?php if(isset($_POST['email'])){ $_POST['email']; } ?>'><?php if(isset($errors)){ echo $errors[2]; } ?></div>
                
                <div><label>Asunto:</label><input type='text' style="background-color: #f2f2f2; border-bottom: 1px solid #666666; width: 100%;" name='asunto' value='<?php if(isset($_POST['asunto'])){ $_POST['asunto']; } ?>'><?php if(isset($errors)){ echo $errors[3]; } ?></div>
                
                <div><label>Mensaje:</label><textarea rows='2' style="background-color: #f2f2f2; border-bottom: 1px solid #666666; width: 100%;" name='mensaje'><?php if(isset($_POST['mensaje'])){ $_POST['mensaje']; } ?></textarea><?php if(isset($errors)){ echo $errors[4]; } ?></div>
                
                <div><input type='submit' value='Envia Mensaje' style="background-color: #82007e; padding: 8px 15px; color: #fff;" name='boton'></div>
                
               <!-- <?php if(isset($result)) { echo $result; } ?> -->
          </div>
        </div>
      </div>
  </div>

  <footer>
    <div class="wrapper">
      <div class="menu">
        <nav class="social">
          <a href="https://es-la.facebook.com/Porelbienestardevivir"><img class="icon_social" src="img/facebook_white.png"></a>
          <!-- <a href=""><img class="icon_social" src="img/twitter_white.png"></a> -->
          <a href="https://login.bluehost.com/cgi/webmail.com" target="blank"><img class="icon_social" src="img/mail_white.png"></a>
        </nav>
        <div class="social" style="font-size:10px;">¿Tienes dudas? <b>01 (462) 624 5466</b></div>
      </div>
      <nav>
        <a href="index.php">Inicio</a>
        <a href="nosotros.html">Nosotros</a>
        <a href="servicio.html">Servicio</a>
        <a href="mi_servicio.html">Mi Servicio</a>
        <a href="contacto.php">Contacto</a>
      </nav><br><br>
      <nav>
        <div class="logo"><img src="img/logotipo_villaluz.png" width=100px; style="margin-bottom:10px;"></div>
        Aviso de privacidad© 2017 Villaluz® Derechos Reservados
      </nav>
      <div class="menu">
        <div class="social" style="font-size:10px;"></b></div>
      </div>
    </div>
  </footer>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<!-- Demo -->

    <style>
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


    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 5000,
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
    </script>

    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>

    <script src="../assets/js/google-code-prettify/prettify.js"></script>
    <script src="../assets/js/application.js"></script>

</body>
</html>
