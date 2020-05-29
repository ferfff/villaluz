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
