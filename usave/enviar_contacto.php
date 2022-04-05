<?php
  if(isset($_POST['email'])){
    $correo_usave="javierbarajas@usavemexico.com";
    $asunto="Mensaje de formulario Contacto Usave Mexico";

    function died($error){
      echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento<br>";
      echo "Detalle de los errores.<br><br>";
      echo $error."<br><br>";
      echo "Porfavor corrija estos errores e intentelo de nuevo<br><br>";
      die();
    }
    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['cellphone']) || !isset($_POST['message'])){
      died('Lo sentimos pero parece haber un problema con los datos enviados. ');
    }
      $nombre=$_POST['name'];
      $correo=$_POST['email'];
      $celular=$_POST['cellphone'];
      $mensaje=$_POST['message'];
      $error_message="";

      //Verificar que el correo sea válido
      $email_exp='/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

      if(!preg_match($email_exp,$correo)){
        $error_message .= "La dirección de correo proporcionada no es válida.<br>";
      }

      if(strlen($mensaje)<10){
        $error_message .= "El formato del texto no es válido<br>";
      }
      if(strlen($error_message)>0){
        died($error_message);
      }


      //Construír cuerpo del mensaje
      $email_message="Contenido del mensaje.\n\n";

      function limpiar_string($string){
        $bad=array("content-type","bcc:","to:","cc:","href");

        return str_replace($bad,"",$string);
      }

      $email_message .= "Nombre: ".limpiar_string($nombre)."\n";
      $email_message .= "email: ".limpiar_string($correo)."\n";
      $email_message .= "Celular: ".limpiar_string($celular)."\n";
      $email_message .= "Mensaje: ".limpiar_string($mensaje)."\n";

      //Crear encabezados del correo

      $headers = 'From: '.$correo."\r\n".
        'Reply-To: '.$correo."\r\n".
        'X-Mailer: PHP/'.phpversion();

        @mail($correo_usave,$asunto,$email_message,$headers);

?>
  <script>
    alert("Gracias por ponerte en contacto con nosotros. Nos comunicaremos contigo a la brevedad.")
    window.location="index.html"
  </script>
<?php
  }
?>
