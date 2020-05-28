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
  <title>Villaluz - Contacto</title>
   <link rel="shortcut icon" href="img/villaluz.ico">
  <link href="https://fonts.googleapis.com/css?family=Muli: 400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">

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
        <a href="mailto:informes@villaluz.com.mx"><img class="icon_social" src="img/mail.png"></a>
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

  <div class='header_map'>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d466.59760588035675!2d-101.35034651996725!3d20.678493140555133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfccde9759efb81bc!2sVillaluz+Servicios+Integrales+de+Salud!5e0!3m2!1ses-419!2smx!4v1494291465135" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
                
                <div><label>Mensaje:</label><textarea rows='3' style="background-color: #f2f2f2; border-bottom: 1px solid #666666; width: 100%;" name='mensaje'><?php if(isset($_POST['mensaje'])){ $_POST['mensaje']; } ?></textarea><?php if(isset($errors)){ echo $errors[4]; } ?></div>
                
                <div><input type='submit' value='Envia Mensaje' style="background-color: #82007e; padding: 8px 15px; color: #fff;" name='boton'></div>
                
               <!-- <?php if(isset($result)) { echo $result; } ?> -->
            </form>
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
          <a href="mailto:informes@villaluz.com.mx"><img class="icon_social" src="img/mail_white.png"></a>
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

  <script>
    $('.map-container')
    .click(function(){
            $(this).find('iframe').addClass('clicked')})
    .mouseleave(function(){
            $(this).find('iframe').removeClass('clicked')});
  </script>

</body>
</html>