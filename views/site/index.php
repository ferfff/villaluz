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

  <div class="container_fluid header_galery d-flex align-items-center">
  </div>
  
  <div class="content_fluid paralax_color py-5 mb-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h5 class="mb-4">Por el bienestar de vivir.</h5>
          <div style="border: 1px solid #82007e; width:200px; margin: 0 auto;"></div><br>
          <p>sabemos que lo más importante es la familia</p>
        </div>
      </div>
    </div>
  </div><br>

  <div class="container purple_back p-5 mb-5">
    <div class="row">
      <div class="col-lg-12 text-center">
        <p>Cuando las personas mayores se encuentran en casa, necesitan cuidados especiales, donde el cuidador o cuidadora cuenten con un perfil basado en la confianza y el respeto. Además, la persona que brinde la atención debe tener conocimientos esenciales en salud e higiene, de esta manera se asegura a los pacientes un entorno tranquilo, seguro y saludable.</p>
      </div>
    </div>
  </div>

  <div class="container my-5 p-5">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div style="border: 1px solid #82007e; width:200px; margin: 0 auto;"></div><br>
        <h2>Nuestros <b class="purple">Servicios Domiciliarios</b> están orientados a cubrir las necesidades de cuidado, salud y seguridad que su familia necesita.</h2>
      </div>
    </div>
  </div>

  <div class="container mb-5 pb-5">
    <div class="row">
      <div class="col-md-6 col-lg-4 p-3">
        <img src="img/enfermeria_asistencial_villaluz.jpg" width="100%" alt="enfermeria asistencial">
        <p class="font-weight-bold service_txt">Enfermería para Adultos Mayores</p>
      </div>
      <div class="col-md-6 col-lg-4 p-3">
        <img src="img/cuidadoras_villaluz.jpg" width="100%" alt="cuidadoras adulto mayor">
        <p class="font-weight-bold service_txt">Cuidadoras</p>
      </div>
      <div class="col-md-6 col-lg-4 p-3">
        <img src="img/atencion_postoperatoria_villaluz.jpg" width="100%" alt="atencion postoperatoria">
        <p class="font-weight-bold service_txt">Atención Postoperatoria</p>
      </div>
      <div class="col-md-6 col-lg-4 p-3">
        <img src="img/medico_geriatra_villaluz.jpg" width="100%" alt="medico geriatra">
        <p class="font-weight-bold service_txt">Médico Geriatra</p>
      </div>
      <div class="col-md-6 col-lg-4 p-3">
        <img src="img/villaluz_fisioterapeuta_01.jpg" width="100%" alt="fisioterapeuta">
        <p class="font-weight-bold service_txt">Fisioterapeuta</p>
      </div>
      <div class="col-md-6 col-lg-4 p-3">
        <img src="img/villaluz_podologia_01.jpg" width="100%" alt="podologia">
        <p class="font-weight-bold service_txt">Podología</p>
      </div>
    </div>
  </div>
  
  <div class="container_fluid paralax py-5">
    <div class="container">
      <div class="row p-5 d-flex align-items-center">
        <div class="col-md-12 col-lg-6 purple_back p-5">
          <p>En <b>Villaluz Servicios Integrales de Salud</b>, sabemos que lo más importante es la familia, y cada vez es más necesario el apoyo de especialistas que brinden la atención requerida por el adulto mayor.<p>
          <p>Nuestros Servicios Domiciliarios están orientados a cubrir las necesidades de cuidado, salud y seguridad que su familia necesita; con la tranquilidad de ser atendidos por un equipo de profesionales que trabajan bajo una metodología de atención especializada.</p>
        </div>
        <div class="col-md-12 col-lg-6 p-5">
          <img src="img/slogan.png" width="100%" alt="villaluz slogan">
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5 py-5">
    <div class="row">
      <div class="col-lg-12 text-center p-5">
        <h3 class="mb-3">Testimonios de familiares</h3>
        <div class="mb-3" style="border-bottom: 1px solid #82007e; width:200px; margin: 0 auto;"></div>
        <h2 class="mb-5">De nuestra familia a la tuya.</h2>
        <div id="owl-demo" class="owl-carousel">
          <div class="item">
            <p class="purple">Es una empresa con valores éticos y trato justo, como pocas. Tuve una excelente experiencia al tratar con Villaluz. Gracias!<p>
            <p><b class="green">Lily del Campo (Irapuato, Gto.)</b><p>
          </div>
          <div class="item">
            <p class="purple">Excelente servicio, lo recomiendo ampliamente. La enfermera muy atenta con tía enfermita, muyacomedida y sobre todo, con mucha paciente para mi tía que es un adulto muy difícil. Tía quedó muy contenta con este servicio. Todo muy profesional.<p>
            <p><b class="green">Rocío Arvizu (San José Irtubide, Gto)</b></p>
          </div>
          <div class="item">
            <p class="purple">Excelente servicio, las enfermeras siempre fueron muy atentas con mia vuela. Los recomiendo ampliamente, un servicio muy profesional.<p>
            <p><b class="green">David Díaz (Léon, Gto.)</b></p>
          </div>
          <div class="item">
            <p class="purple">Muy buen servicio, bien formales y atentas las señoritas. Atención especializada y eficaz, sobre todo, un servicio muy humano… Gracias.<p>
            <p><b class="green">Ernesto N. (Irapuato, Gto)</b></p>
          </div>
          <div class="item">
            <p class="purple">Hola, mi mensaje solo es para decirles que estoy muy contenta con el trabajo que hicieron con mi papá (Don Paco). En poquito más de un mes, su adelanto fue enorme, muchas gracias!!!<p>
            <p><b class="green">Hernández (Irapuato, Gto.)</b></p>
          </div>
          <div class="item">
            <p class="purple">Un servicio muy bien organizado, desde el envío del personal hasta el sistema de pago (muy práctico). Sin duda, lo volvería a contratar, muy recomendables!!<p>
            <p><b class="green">Alicia Coutinho (Irapuato, Gto.)</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container_fluid paralax_color py-5">
    <div class="text-center p-5">
      <h2 class="mb-5">Estamos encantados de ayudarte</h2>
      <div style="border-bottom: 1px solid #82007e; width:200px; margin: 0 auto;"></div><br>
      <p>El cuidar de alguien es un asunto que se hace en familia.</p>
      <p>Somos en quien usted puede confiar para cuidar de esa persona tan especial.</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-6 p-5">
          <div class="direccion h-100 d-flex align-items-center">
            <div class="p-5">
              <p>Calle Laguna #447 Col. Las Rosas, Irapuato, Gto.</p>
              <p>Oficina: <b>462 62 4 54 66</b></p>
              <p>WhastApp: <a href="https://api.whatsapp.com/send?phone=46236739960&text=Gracias por comunicarte con el departamento de Atención a Clientes de Villaluz, ¿Cómo podemos ayudarte?" target="_blank" class="text-light redes"><b>462 367 39 60</b></a></p>
              <p>Facebook: <a href="https://www.facebook.com/Villaluzirapuato" target="_blank" class="text-light redes"><b>Villaluzirapuato</b></a><p>
              <p>Instagram: <a href="https://www.instagram.com/villaluz_salud/" target="_blank" class="text-light redes"><b>villaluz_salud</b></a></p>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-lg-6 p-5">
          <div class="datos_formulario">
            <form method='POST' action=''>
              <div><label>Nombre:</label><input type='text' style="background-color: #f2f2f2; border-bottom: 1px solid #666666; width: 100%;" name='nombre' value='<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; } ?>'><?php if(isset($errors)){ echo $errors[1]; } ?></div>
              <div><label>Correo:</label><input type='text' style="background-color: #f2f2f2; border-bottom: 1px solid #666666; width: 100%;" name='email' value='<?php if(isset($_POST['email'])){ $_POST['email']; } ?>'><?php if(isset($errors)){ echo $errors[2]; } ?></div>
              <div><label>Asunto:</label><input type='text' style="background-color: #f2f2f2; border-bottom: 1px solid #666666; width: 100%;" name='asunto' value='<?php if(isset($_POST['asunto'])){ $_POST['asunto']; } ?>'><?php if(isset($errors)){ echo $errors[3]; } ?></div>
              <div><label>Mensaje:</label><textarea rows='2' style="background-color: #f2f2f2; border-bottom: 1px solid #666666; width: 100%; margin-bottom:30px" name='mensaje'><?php if(isset($_POST['mensaje'])){ $_POST['mensaje']; } ?></textarea><?php if(isset($errors)){ echo $errors[4]; } ?></div>
              <div><input type='submit' value='Envia Mensaje' style="background-color: #82007e; padding: 8px 15px; color: #fff;" name='boton'></div>
              <!-- <?php if(isset($result)) { echo $result; } ?> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
