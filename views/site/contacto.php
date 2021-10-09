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

  <div class="container_fluid contacto d-flex align-items-center">
  </div>
  
  <div class="container_fluid paralax_color py-5">
    <div class="container my-5 py-2">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h5 class="my-3">Contacto</h5>
          <div class="my-4" style="border: 1px solid #82007e; width:200px; margin: 0 auto;"></div>
          <p>Llame o escríbanos y nos pondremos en contacto</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5 py-5">
    <div class="row">
      <div class="col-lg-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.414208684985!2d-101.35738358464873!3d20.693398104516984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c7fd1206cc945%3A0xfccde9759efb81bc!2sVillaluz%20Servicios%20Integrales%20de%20Salud!5e0!3m2!1ses-419!2smx!4v1631028823238!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
              <p>Telegram: <a href="https://t.me/VillaluzIrapuato" target="_blank" class="text-light redes"><b>@VillaluzIrapuato</b></a><p>
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
              <div><label>Mensaje:</label><textarea rows='2' style="background-color: #f2f2f2; border-bottom: 1px solid #666666; width: 100%; margin-bottom: 30px" name='mensaje'><?php if(isset($_POST['mensaje'])){ $_POST['mensaje']; } ?></textarea><?php if(isset($errors)){ echo $errors[4]; } ?></div>
              <div><input type='submit' value='Envia Mensaje' style="background-color: #82007e; padding: 8px 15px; color: #fff;" name='boton'></div>
              <!-- <?php if(isset($result)) { echo $result; } ?> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  