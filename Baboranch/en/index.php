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
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="#hospitality">Hospitality</a></li>
            <li><a href="#hunting">Our Hunt</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contactus">Contact</a></li>
            <div class="change-lang">
              <a href="../es/index.php">ES</a>/<span>EN</span>
            </div>
            </ul>
          </div>
        </div>
      </nav>

      <nav id="menu">
        <div class="sidebar"><br></div>
          <ul class="list1">
            <li><a href="#home">Home</a></li>
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="#hospitality">Hospitality</a></li>
          </ul>
              <ul class="logo"><li><a href="index.html"><img src="assets/images/main-logo.png" alt="" class="img-responsive"></a></li></ul>
          <ul class="list1">
            <li><a href="#hunting">Our Hunt</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contactus">Contact</a></li>
          </ul>
          <div class="sidebar">
            <div class="change-lang">
              <a href="../es/index.php">ES</a>/<span>EN</span>
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
            <h1>ABOUT US</h1>
            <p>Located in the heart of the Sonoran Desert, Baboranch is a hunting ranch in which you can hunt Mule deer and white-tailed deer. We stand by having an excellent quality of our species and an improvement year-on-year in our genetic and conservation programs, as well as a great quality service for our customers.</p>
            <p>We invite you to be part of this unique hunting experience while enjoying the best amenities and incredible views of our beautiful state.</p>
          </div>
        </div>
      </section>
      <section id="hospitality">
      <div class="hos-wrapper">
        <div class="hospitality-title">
          <h2>HOSPITALITY</h2><img src="assets/images/arrow-hospitality.png" alt="" class="arrow-img"> <img src="assets/images/arrow-hospitality2.png" alt="" class="media-arrow-img">
        </div>
        <div class="hospitality-cont">
          <div class="hospitality-contafter">
            <p>For your best convenience, In Baboranch we have 5 starts private rooms where you enjoy all our included services up to 6 days.</p>

              <p>The services we offer are:

                <li>Food and Drinks</li>
                <li>Professional Chef</li>
                <li>5 STARS Service</li>
                <li>Luxury rooms</li>
                <li>Transport from Airport to Baboranch</li>
                <li>Maximum Speed Internet</li>
                <li>Directv</li>
                <li>Jacuzzi</li>
                <li>Pool table</li>
                <li>Massage room (extra cost)</li>
                <li>Among much more.</li>
              <br>
              Our staff will always be at your service for any special request, in order to provide a better experience for you to feel at home.</p>
          </div>
        </div>
      </div>
      </section>
      <section id="hunting">
        <div class="hunting-wrapper">
          <div class="hunting-content">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home-tab">Hunting</a></li>
              <li><a data-toggle="tab" href="#menu1">2015-2016</a></li>
            </ul>
              <div class="tab-content">
                <div id="home-tab" class="tab-pane fade in active">
                  <h1>OUR HUNT</h1>
                  <p>We have an area of 10,000 hectares of open field, and in addition, We offer a certified guide per hunter and specialized vehicles of the highest quality, ideal for touring the area.</p>

                  <p>We offer the hunting of animals:
                  <li>White-Tailed Deer</li>
                  <li>Mule deer</li></p>

                  <p>In addition we specialize in having a genetic program and a management plan for the conservation and improvement of the Mule Deer. We have the best natural food resources of Sonora in order to keep all our animals healthy and create a trophy deer.
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
          <h1>GALLERY</h1>
        </div>
        <div class="slider">
          <img src="assets/images/slider-gallery3.png">
          <img src="assets/images/slider-gallery1.png" class="activegallery">
          <img src="assets/images/slider-gallery2.png">
        </div>
        <div class="gallery-img">
          <img src="assets/images/slider-gallery3.png" class="thumbnail">
          <img src="assets/images/slider-gallery1.png" class="thumbnail">
          <img src="assets/images/slider-gallery2.png" class="thumbnail">
        </div>
      </section>
      <section id="contactus">
        <div class="contactus-content">
          <h2>CONTACT</h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d113774.0208523035!2d-108.6320327!3d26.9846863!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDU3JzQwLjAiTiAxMDjCsDM1JzE3LjAiVw!5e0!3m2!1ses-419!2smx!4v1475014844218" frameborder="0" class="responsive-map" allowfullscreen></iframe>
        </div>
        <div class="form-container">
    <!--   <input class="btn-group" type="submit" value="SEND"/> -->
          <?php
          $action=$_REQUEST['action'];
          if ($action=="")    /* display the contact form */
              {
              ?>
              <form class="form" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit">
                <input type="text" name="name" placeholder="Name" >
                <input type="text" name="email" placeholder="Email"><br>
                <textarea name="message" rows="8" cols="40" placeholder="Message"></textarea><br>
                <input class="btn-group" type="submit" value="SEND"/>
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
                  echo "You need to fill the form to send a message.";
                  }
              else{
                $message = "Name: " . $name . "\r\n
                ";
                $message .= "Email: " . $email . "\r\n
                ";
                $message .= "Message: " . $text . "\r\n
                ";
                  $from="From: $name<$email>\r\nReturn-path: $email";
                  $subject="Contact Message";
                  mail("josecarlos@bay.com.mx", $subject, $message);
                  echo "Your message has been sent.";
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
      <h5>Copyright © 2016 Baboyahui. All Rights Reserved.</h5>
      <a href="#" class="go-top"><i class="icon-chevron-up"></i></a>
    </footer>
  </body>
</html>
