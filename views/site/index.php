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
