<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/screen.css">
    <link rel="stylesheet" href="stylesheets/screencontacto.css">
    <script src="https://use.fontawesome.com/121247b17a.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="favicon.ico">
    <title>Praxis || Nosotros</title>
  </head>
  <body>
    <header>
      <div class="menu-section">
        <div class="menu-toggle">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </div>
        <nav>
      		<ul role="navigation" class="hidden">
      			<li><a href="index.html">Inicio</a></li>
      			<li><a href="nosotros.html">Praxis</a></li>
      			<li><a href="servicios.html">Servicios</a></li>
      			<li><a href="contacto.php" class="activelnk">Contacto</a></li>
            <div class="nav-footer">
              <div class="flex">
                <i class="fa fa-facebook socialnet" aria-hidden="true"></i>
                <i class="fa fa-twitter socialnet2" aria-hidden="true"></i>
              </div><br>
              <li>Copyright &copy; 2017 Praxis. Todos los derechos reservados.</li>
            </div>
      		</ul>
      	</nav>
      </div>
    </header>
    <section id="contact-content" class="flex">
      <div id="contacto" class="flex">
        <div class="contact-form">
          <div class="form-container">
            <?php
            $action=$_REQUEST['action'];
            if ($action=="")    /* display the contact form */
                {
                ?>
                <form class="form" action="" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="action" value="submit">
                  <input type="text" name="name" placeholder="Nombre" > <br>
                  <input type="text" name="email" placeholder="Correo Electrónico"><br>
                  <textarea name="message" id="textarea" placeholder="Mensaje" class="materialize-textarea" rows="8" cols="40"></textarea><br>
                  <input class="btn" type="submit" value="Enviar"/>
                </form>
              <?php
                }
                else                /* send the submitted data */
                {
                $name=$_REQUEST['name'];
                $email=$_REQUEST['email'];
                $text=$_REQUEST['message'];
                if (($name=="")||($email=="")||($message==""))
                    {
                    echo "Llene todos los campos para enviar su mensaje de contacto.";
                    }
                else{
                  $message = "Nombre: " . $name . "\r\n
                  ";
                  $message .= "Correo Electrónico: " . $email . "\r\n
                  ";
                  $message .= "Mensaje: " . $message . "\r\n
                  ";
                    $from="De: $name <$email> \r\nReturn-path: $email";
                    $subject="Mensaje de Contacto - Praxis Webpage";
                    mail("praxis@industriasocial.com.mx", $subject, $message);
                    echo "Mensaje enviado.";
                    }
                }
            ?>
          </div>
        </div>
        <div class="map">
          <div class="overlay" onclick="style.pointerEvents='none'"></div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.229604990482!2d-99.28031428547999!3d19.359208386926124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d200cb2f77afbb%3A0xe74ab79ed267261!2sJuan+Salvador+Agraz+65%2C+Santa+Fe%2C+Contadero%2C+01219+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1490831372221" frameborder="0" class="responsive-map" allowfullscreen=""></iframe>
        </div>
      </div>
    </section>
    <div class="contact-info">
      <p>Praxis de México S.A. de C.V.</p>
      <p>Juan Salvador Agraz #65, Santa Fe Ciudad de México</p>
      <p><i class="fa fa-phone" aria-hidden="true"></i> 91316285 <i class="fa fa-envelope" aria-hidden="true"></i> correo@praxis.com.mx</p>
    </div>
    <footer>
      <div id="contact-footer">

      </div>
    </footer>
    <script>
    $(document).ready(function(){
    $(".menu-toggle").on('click', function() {
      $(this).toggleClass("on");
      $('.menu-section').toggleClass("on");
      $("nav ul").toggleClass('hidden');
      });
    });
    </script>
  </body>
</html>
