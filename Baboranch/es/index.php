<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baboyahui</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/top.js"></script>
    <script>
    $(document).ready(function(){
    $(".hospitality-title").click(function(){
            $(".hospitality-contafter").delay(500).fadeIn(1000);
        });
    });
    </script>
  </head>

  <body>
    <header>
      <nav id="media-menu" class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <div id="menu-icon">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </div>
              <img src="assets/images/main-logo.png" class="img-responsive">
            </div>
          </div>
          <div style="position: relative; background-color: #dfe1e4; text-align: center;" class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">Home</a></li>
            <li><a href="#aboutus">¿Quiénes Somos?</a></li>
            <li><a href="#hospitality">Hospitalidad</a></li>
            <li><a href="#hunting">Nuestra Cacería</a></li>
            <li><a href="#gallery">Galería</a></li>
            <li><a href="#contactus">Contacto</a></li>
            <div class="change-lang">
              <span>ES</span>/<a href="http://www.baboranch.com/">EN</a>
            </div>
            </ul>
          </div>
        </div>
      </nav>

      <nav id="menu">
        <div class="sidebar"><br></div>
          <ul class="list1">
            <li><a href="#home">Home</a></li>
            <li><a href="#aboutus">¿Quiénes Somos?</a></li>
            <li><a href="#hospitality">Hospitalidad</a></li>
          </ul>
              <ul class="logo"><li><a href="index.html"><img src="assets/images/main-logo.png" alt="" class="img-responsive"></a></li></ul>
          <ul class="list1">
            <li><a href="#hunting">Nuestra Cacería</a></li>
            <li><a href="#gallery">Galería</a></li>
            <li><a href="#contactus">Contacto</a></li>
          </ul>
          <div class="sidebar">
            <div class="change-lang">
              <span>ES</span>/<a href="http://www.baboranch.com/">EN</a>
            </div>
          </div>
      </nav>

      <!-- SLIDER -->
      <div class="bannerFull banner-principal">
        <div id="carousel-principal" class="carousel slide" data-ride="carousel">
              <ol class='carousel-indicators'>
        <li data-target='#carousel-principal' data-slide-to='0' class='active'></li>
        <!-- <li data-target='#carousel-principal' data-slide-to='1'></li> -->
        </ol>
        <div class='carousel-inner' role='listbox'>
          <div class='item active slider1' data-interval='10'>
            <div class='slider-conteudo-html'>
              <div class="container-fluid slider-grande-modelo1 slider1 img-responsive">
                <div class="container">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 hidden-xs">
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class='item' data-interval='20'>
            <div class='slider-conteudo-html'>
              <div class="container-fluid slider-grande-modelo1 slider2 img-responsive">
                <div class="container">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 hidden-xs">
                    </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <!-- ARROWS -->
          <!-- <a class="left carousel-control" href="#carousel-principal" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#carousel-principal" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a> -->
        </div>
      </div>
    <!-- SLIDER -->
    </header>
    <main>
      <section id="aboutus">
        <div class="row">
          <div class="col-sm-5 img-aboutus">
            <img src="assets/images/img-aboutus.png" alt="">
          </div>
          <div class="col-sm-6 aboutus-content">
            <h1>¿QUIÉNES SOMOS?</h1>
            <p>Ubicados en el corazón del desierto de Sonora, Baboranch es un rancho cinegético,
              donde ofrecemos cacería de Venado Bura y Venado Cola Blanca. Nos distinguimos por
              tener una excelente calidad de nuestras especies y por una mejora año con año gracias
              a nuestros programas de genética y conservación, así como también por nuestra gran
              calidad en el servicio a nuestros clientes.</p>
            <p>Te invitamos a ser parte de esta experiencia única de cacería mientras disfrutas de
              las mejores comodidades y vistas increíbles de nuestro bello Estado.</p>
          </div>
        </div>
      </section>
      <section id="hospitality">
      <div class="hos-wrapper">
        <div class="hospitality-title">
          <h2>HOSPITALIDAD</h2><img src="assets/images/arrow-hospitality.png" alt="" class="arrow-img"> <img src="assets/images/arrow-hospitality2.png" alt="" class="media-arrow-img">
        </div>
        <div class="hospitality-cont">
          <div class="hospitality-contafter">
            <p>Para su mayor comodidad, en Baboranch contamos con cuartos privados de 5 estrellas,
              en donde podrán venir a disfrutar de todo nuestros servicios incluidos hasta por 6 días.</p>

              <p>Los servicios que ofrecemos son:

                <li>Comidas y Bebidas</li>
                <li>Chef Profesional</li>
                <li>Servicio de 5 ESTRELLAS</li>
                <li>Habitaciones de lujo</li>
                <li>Transporte de Aeropuerto a Baboranch</li>
                <li>Internet de máxima velocidad</li>
                <li>Directv</li>
                <li>Jacuzzi</li>
                <li>Mesa de billar</li>
                <li>Sala de masajes (costo extra)</li>
                <li>Entre mucho más.</li>
              <br>
              Nuestro personal siempre estará al pendiente de cualquier solicitud especial que se
              presente para poder brindar una mejor experiencia y que usted se sienta como en casa.</p>
          </div>
        </div>
      </div>
      </section>
      <section id="hunting">
        <div class="hunting-wrapper">
          <div class="hunting-content">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home-tab">Cacería</a></li>
              <li><a data-toggle="tab" href="#menu1">2015-2016</a></li>
            </ul>
              <div class="tab-content">
                <div id="home-tab" class="tab-pane fade in active">
                  <h1>NUESTRA CACERÍA</h1>
                  <p>Contamos con un área de 10,000 hectáreas de campo abierto, en donde además,
                    ofrecemos un guía certificado por cada cazador y vehículos especializados de
                    las más alta calidad e ideales para recorrer la zona.</p>

                  <p>Ofrecemos la caza de animales de:
                  <li>Venado Cola Blanca</li>
                  <li>Venado Bura</li></p>

                  <p>Además nos especializamos con tener un programa genético y un plan de manejo
                    para la conservación y la mejora del Venado Bura. Tenemos los mejores recursos
                    alimenticios naturales de Sonora para así poder mantener a todos nuestros animales
                    sanos y crear un venado trofeo.
                  </p>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <div class="row">
                    <div class="col-xs-4 col-md-2">
                      <a href="assets/images/17_01_2016.JPG" class="thumbnail" target="_blank">
                        <img src="assets/images/17_01_2016.JPG" alt="17_01_2016">
                      </a>
                    </div>
                    <div class="col-xs-4 col-md-2">
                      <a href="assets/images/15_01_2016.JPG" class="thumbnail" target="_blank">
                        <img src="assets/images/15_01_2016.JPG" alt="15_01_2016">
                      </a>
                    </div>
                    <div class="col-xs-3 col-md-2">
                      <a href="assets/images/10_01_2016.JPG" class="thumbnail" target="_blank">
                        <img src="assets/images/10_01_2016.JPG" alt="10_01_2016">
                      </a>
                    </div>
                    <div class="col-xs-3 col-md-2">
                      <a href="assets/images/07_01_2016.JPG" class="thumbnail" target="_blank">
                        <img src="assets/images/07_01_2016.JPG" alt="07_01_2016">
                      </a>
                    </div>
                  </div>
                  <div class="row">

                    <div class="col-xs-4 col-md-2">
                      <a href="assets/images/12_01_2016.JPG" class="thumbnail" target="_blank">
                        <img src="assets/images/12_01_2016.JPG" alt="12_01_2016">
                      </a>
                    </div>
                    <div class="col-xs-4 col-md-2">
                      <a href="assets/images/08_01_2016.JPG" class="thumbnail" target="_blank">
                        <img src="assets/images/08_01_2016.JPG" alt="08_01_2016">
                      </a>
                    </div>
                    <div class="col-xs-4 col-md-2">
                      <a href="assets/images/03_01_2016.JPG" class="thumbnail" target="_blank">
                        <img src="assets/images/03_01_2016.JPG" alt="03_01_2016">
                      </a>
                    </div>
                    <div class="col-xs-4 col-md-2">
                      <a href="assets/images/03_01_2016 (2).JPG" class="thumbnail" target="_blank">
                        <img src="assets/images/03_01_2016 (2).JPG" alt="03_01_2016 (2)">
                      </a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="hunting-img">
          <img src="assets/images/img-hunting.png" alt="">
        </div>
      </section>
      <section id="gallery">
        <div class="gallery-content">
          <h1>GALERÍA</h1>
        </div>
        <div class="slider">
          <img src="assets/images/slider-gallery26.png">
          <img src="assets/images/slider-gallery24.png">
          <img src="assets/images/slider-gallery22.png">
          <img src="assets/images/slider-gallery20.png">
          <img src="assets/images/slider-gallery18.png">
          <img src="assets/images/slider-gallery16.png">
          <img src="assets/images/slider-gallery14.png">
          <img src="assets/images/slider-gallery12.png">
          <img src="assets/images/slider-gallery10.png">
          <img src="assets/images/slider-gallery8.png">
          <img src="assets/images/slider-gallery6.png">
          <img src="assets/images/slider-gallery4.png">
          <img src="assets/images/slider-gallery3.png">
          <img src="assets/images/slider-gallery1.png" class="activegallery">
          <img src="assets/images/slider-gallery2.png">
          <img src="assets/images/slider-gallery5.png">
          <img src="assets/images/slider-gallery7.png">
          <img src="assets/images/slider-gallery9.png">
          <img src="assets/images/slider-gallery11.png">
          <img src="assets/images/slider-gallery13.png">
          <img src="assets/images/slider-gallery15.png">
          <img src="assets/images/slider-gallery17.png">
          <img src="assets/images/slider-gallery19.png">
          <img src="assets/images/slider-gallery21.png">
          <img src="assets/images/slider-gallery23.png">
          <img src="assets/images/slider-gallery25.png">
          <img src="assets/images/slider-gallery27.png">
        </div>
        <div class="gallery-img">
          <img src="assets/images/slider-gallery26.png" class="thumbnail">
          <img src="assets/images/slider-gallery24.png" class="thumbnail">
          <img src="assets/images/slider-gallery22.png" class="thumbnail">
          <img src="assets/images/slider-gallery20.png" class="thumbnail">
          <img src="assets/images/slider-gallery18.png" class="thumbnail">
          <img src="assets/images/slider-gallery16.png" class="thumbnail">
          <img src="assets/images/slider-gallery14.png" class="thumbnail">
          <img src="assets/images/slider-gallery12.png" class="thumbnail">
          <img src="assets/images/slider-gallery10.png" class="thumbnail">
          <img src="assets/images/slider-gallery8.png" class="thumbnail">
          <img src="assets/images/slider-gallery6.png" class="thumbnail">
          <img src="assets/images/slider-gallery4.png" class="thumbnail">
          <img src="assets/images/slider-gallery3.png" class="thumbnail">
          <img src="assets/images/slider-gallery1.png" class="thumbnail">
          <img src="assets/images/slider-gallery2.png" class="thumbnail">
          <img src="assets/images/slider-gallery5.png" class="thumbnail">
          <img src="assets/images/slider-gallery7.png" class="thumbnail">
          <img src="assets/images/slider-gallery9.png" class="thumbnail">
          <img src="assets/images/slider-gallery11.png" class="thumbnail">
          <img src="assets/images/slider-gallery13.png" class="thumbnail">
          <img src="assets/images/slider-gallery15.png" class="thumbnail">
          <img src="assets/images/slider-gallery17.png" class="thumbnail">
          <img src="assets/images/slider-gallery19.png" class="thumbnail">
          <img src="assets/images/slider-gallery21.png" class="thumbnail">
          <img src="assets/images/slider-gallery23.png" class="thumbnail">
          <img src="assets/images/slider-gallery25.png" class="thumbnail">
          <img src="assets/images/slider-gallery27.png" class="thumbnail">
        </div>
      </section>
      <section id="contactus">
        <div class="contactus-content">
          <h2>CONTACTO</h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d113774.0208523035!2d-108.6320327!3d26.9846863!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDU3JzQwLjAiTiAxMDjCsDM1JzE3LjAiVw!5e0!3m2!1ses-419!2smx!4v1475014844218" frameborder="0" class="responsive-map" allowfullscreen></iframe>
        </div>
        <div class="form-container">
          <?php
          $action=$_REQUEST['action'];
          if ($action=="")    /* display the contact form */
              {
              ?>
              <form class="form" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit">
                <input type="text" name="name" placeholder="Nombre" >
                <input type="text" name="email" placeholder="Correo Electrónico"><br>
                <textarea name="message" rows="8" cols="40" placeholder="Mensaje"></textarea><br>
                <input class="btn-group" type="submit" value="ENVIAR"/>
              </form>
              <?php
              }
          else                /* send the submitted data */
              {
              $name=$_REQUEST['name'];
              $email=$_REQUEST['email'];
              $text=$_REQUEST['message'];
              if (($name=="")||($email=="")||($text==""))
                  {
                  echo "Necesita llenar todos los campos para enviar un mensaje.";
                  }
              else{
                $message = "Nombre: " . $name . "\r\n
                ";
                $message .= "Correo: " . $email . "\r\n
                ";
                $message .= "Mensaje: " . $text . "\r\n
                ";
                  $from="De: $name<$email>\r\nReturn-path: $email";
                  $subject="Mensaje de Contacto";
                  mail("josecarlos@bay.com.mx", $subject, $message);
                  echo "Su mensaje se ha enviado.";
                  }
              }
          ?>
          <div class="contact-info">
            <p><b>Gustavo Donnadieu</b> <br>
            +52 662 244 8203 <br>
            gussdon@hotmail.com <br></p>

            <p><b>Juan Bay</b> <br>
            520 576 6832 <br>
            juanbay@gmail.com <br> </p>

            <p>jcbayg@gmail.com <br>
            alejobay@gmail.com <br> </p>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="socialmedia img-responsive">
          <a href="https://www.facebook.com/baboranch" target="_blank"><img src="assets/images/socialmedia-fb.png" alt="Baboyahui Facebook"></a>
          <a href="https://www.instagram.com/baboranch" target="_blank"><img src="assets/images/socialmedia-insta.png" alt="Baboyahui Instagram"></a>
          <a href="#" target="_blank"><img src="assets/images/socialmedia-youtu.png" alt="Baboyahui Youtube"></a>
      </div>
      <h5>Copyright © 2016 Baboyahui. Todos los derechos reservados.</h5>
      <a href="#" class="go-top"><i class="icon-chevron-up"></i></a>
    </footer>
  </body>
</html>
