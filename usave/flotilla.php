<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>U-SAVE</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/screen.css">
    <script src="https://use.fontawesome.com/eafa080988.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>
    <header>
      <nav>
        <div class="nav-wrapper">
          <div class="nav-center">
            <a href="index.php" class="brand-logo"><img src="assets/images/logo-usave.png" alt=""></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down valign-wrapper">
              <li><a href="index.html">INICIO</a></li>
              <li><a href="reservar.php">RESERVA</a></li>
              <li><a href="seguros.html">SEGUROS</a></li>
              <li><a href="#">NUESTRA FLOTILLA</a></li>
              <li><a href="contacto.html">CONTACTO</a></li>
              <li class="btn-net"><a class="socialnet" href="https://www.facebook.com/usavemexico" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="btn-net"><a class="socialnet" href="https://twitter.com/usavemexico" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="btn-net"><a class="socialnet" href="https://plus.google.com/114870054196917032127" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="index.html">INICIO</a></li>
            <li><a href="reservar.php">RESERVA</a></li>
            <li><a href="seguros.html">SEGUROS</a></li>
            <li><a href="#">NUESTRA FLOTILLA</a></li>
            <li><a href="contacto.html">CONTACTO</a></li>
            <li class="btn-net"><a class="socialnet" href="https://www.facebook.com/usavemexico" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li class="btn-net"><a class="socialnet" href="https://twitter.com/usavemexico" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="btn-net"><a class="socialnet" href="https://plus.google.com/114870054196917032127" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
    <section id="flotilla">
      <h2>NUESTRA FLOTILLA</h2>
      <div class="slidern">
        <div class="slidern-inner">
      <?php
          $j=1; //definir contador para los slidern-
          for($i=0; $i<count($db);$i++){ //inicio del ciclo
      ?>
          <input class="slidern-open" type="radio" id="slidern-<?php echo $j ?>" name="slidern" aria-hidden="true" hidden="" <?php if($i==0){ ?>checked="checked"<?php } ?>>
          <div class="slidern-item slidern<?php echo $j ?> flex">
            <div class="car-description">
              <div class="title-slide">
                <h2><?php echo $db[$i]['tipo'] ?></h2>
                <img class="materialboxed" data-caption="Nissan March" width="300" src="<?php echo $db[$i]['foto'] ?>">
                <h3><?php echo $db[$i]['carro']?></h3>
                <h4>Desde <?php echo $db[$i]['preciousd']?> dlls. por día</h4>
                <img src="assets/images/autos/stars.png" alt="">
              </div>
              <div class="desc-slide">
                <div class="row">
                  <div class="col s2"><p><i class="fa fa-tachometer" aria-hidden="true"></i></div>
                  <div class="col s10 text-icon"><p>Gasolina</p></div>
                </div>
                <div class="row">
                  <div class="col s2"><p><i class="fa fa-cog" aria-hidden="true"></i></p></div>
                  <div class="col s10 text-icon"><p>Automático</p></div>
                </div>
                <div class="row">
                  <div class="col s2"><p><i class="fa fa-car" aria-hidden="true"></i></p></div>
                  <div class="col s10 text-icon"><p>25,000</p></div>
                </div>
                <div class="row text">
                  <div class="col s12"><p>Ponemos a tu disposición nuestros
                    diversos tipos de seguros en nuestras oficinas para que
                    manejes sin preocupaciones.</p></div>
                </div>
                <div class="row">
                  <div class="col s12 allinclude"><p>Todo Incluído</p></div>
                </div>
                <div class="row">
                  <div class="col s12 reserve" id="<?php echo $db[$i]['id-css']?>">
                    <p onclick="seleccion(<?php echo $db[$i]['id'] ?>,'<?php echo $db[$i]['carro'] ?>',<?php echo $db[$i]['preciousd'] ?>,<?php echo $db[$i]['preciomx'] ?>)">RESERVAR</p>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++; //aumenta pasa a la otra posición del array e imprimir el segundo carro en la misma pagina?>
            <div class="car-description">
              <div class="title-slide">
                <h2><?php echo $db[$i]['tipo'] ?></h2>
                <img class="materialboxed" data-caption="Nissan March" width="300" src="<?php echo $db[$i]['foto'] ?>">
                <h3><?php echo $db[$i]['carro']?></h3>
                <h4>Desde <?php echo $db[$i]['preciousd']?> dlls. por día</h4>
                <img src="assets/images/autos/stars.png" alt="">
              </div>
              <div class="desc-slide">
                <div class="row">
                  <div class="col s2"><p><i class="fa fa-tachometer" aria-hidden="true"></i></div>
                  <div class="col s10 text-icon"><p>Gasolina</p></div>
                </div>
                <div class="row">
                  <div class="col s2"><p><i class="fa fa-cog" aria-hidden="true"></i></p></div>
                  <div class="col s10 text-icon"><p>Automático</p></div>
                </div>
                <div class="row">
                  <div class="col s2"><p><i class="fa fa-car" aria-hidden="true"></i></p></div>
                  <div class="col s10 text-icon"><p>25,000</p></div>
                </div>
                <div class="row text">
                  <div class="col s12"><p>Ponemos a tu disposición nuestros
                    diversos tipos de seguros en nuestras oficinas para que
                    manejes sin preocupaciones.</p></div>
                </div>
                <div class="row">
                  <div class="col s12 allinclude"><p>Todo Incluído</p></div>
                </div>
                <div class="row">
                  <div class="col s12 reserve" id="<?php echo $db[$i]['id-css']?>">
                    <p onclick="seleccion(<?php echo $db[$i]['id'] ?>,'<?php echo $db[$i]['carro'] ?>',<?php echo $db[$i]['preciousd'] ?>,<?php echo $db[$i]['preciomx'] ?>)">RESERVAR</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php
            $j++; //contador para los slidern-
          }//fin del ciclo
        ?>
          <label for="slidern-2" class="slidern-control next control-1" onclick="slider1(2)">›</label>
          <label for="slidern-1" class="slidern-control prev control-2" onclick="slider1(1)">‹</label>
          <label for="slidern-3" class="slidern-control next control-2" onclick="slider1(3)">›</label>
          <label for="slidern-2" class="slidern-control prev control-3" onclick="slider1(2)">‹</label>
          <label for="slidern-3" class="slidern-control prev control-4" onclick="slider1(3)">‹</label>
          <label for="slidern-1" class="slidern-control next control-4" onclick="slider1(1)">›</label>
          <label for="slidern-4" class="slidern-control next control-3" onclick="slider1(4)">›</label>
          <label for="slidern-4" class="slidern-control prev control-1" onclick="slider1(4)">‹</label>

      </div>
    </div>
    <div class="fullcover-cover">
    </div>
    </section>
    <div class="insurance-fullcover z-depth-4">
      <div class="border-blue">
        <img src="assets/images/ddw-cover1x.png" alt="">
        <h2 class="valign">DDW+<br>
        PAI <br>
        FULL COVER</h2>
        <blockquote class="valign-wrapper">
          <p>Cero deducible en caso de accidente o robo total del auto,
            gastos médicos a ocupantes, daños a terceros limitado</p>
        </blockquote>
        <div class="fullcover-close"><i class="fa fa-times" aria-hidden="true"></i></div>
      </div>
    </div>
    <div class="car-form">
      <div class="form-content">
        <div class="blue-divider">
          <div class="reserve-close"><i class="fa fa-times" aria-hidden="true"></i></div>
        </div>
        <h2 id="datos_reservacion"></h2>
        <form action="reservar.php" method="post">
          <div class="input-field col s12 rentplace">
            <input type="hidden" id="idcarro" name="idcarro">
            <input type="hidden" id="preciousd" name="preciousd">
            <input type="hidden" id="preciomx" name="preciomx">
            <select name="cbox_lugar_renta">
              <option value="" disabled selected>Seleccionar</option>
              <option value="Aeropuerto Internacional de LC">Aeropuerto Internacional de LC</option>
              <option value="Royal Decameron">Royal Decameron</option>
              <option value="Club Regina">Club Regina</option>
              <option value="Cabo San Lucas Centro">Cabo San Lucas Centro</option>
              <option value="Sandos Finisterra">Sandos Finisterra</option>
              <option value="Club Cascadas del Baja">Club Cascadas del Baja</option>
            </select>
            <label>Lugar de renta</label>
          </div>
          <label>Pick-up</label> <br>
          <div class="datetimepicker">
            <input type="date" class="datepicker" placeholder="Fecha" name="txt_fecha_renta">
            <select name="cbox_hora_inicial">
              <option value="" disabled selected>Hora</option>
              <option value="08:00 a.m.">08:00 a.m.</option>
              <option value="09:00 a.m.">09:00 a.m.</option>
              <option value="10:00 a.m.">10:00 a.m.</option>
              <option value="11:00 a.m.">11:00 a.m.</option>
              <option value="12:00 p.m.">12:00 p.m.</option>
              <option value="13:00 p.m.">13:00 p.m.</option>
              <option value="14:00 p.m.">14:00 p.m.</option>
              <option value="15:00 p.m.">15:00 p.m.</option>
              <option value="16:00 p.m.">16:00 p.m.</option>
              <option value="17:00 p.m.">17:00 p.m.</option>
              <option value="18:00 p.m.">18:00 p.m.</option>
              <option value="19:00 p.m.">19:00 p.m.</option>
              <option value="20:00 p.m.">20:00 p.m.</option>
            </select>
          </div>
          <div class="input-field col s12 rentplace">
            <select name="cbox_lugar_entrega">
              <option value="" disabled selected>Seleccionar</option>
              <option value="Aeropuerto Internacional de LC">Aeropuerto Internacional de LC</option>
              <option value="Royal Decameron">Royal Decameron</option>
              <option value="Club Regina">Club Regina</option>
              <option value="Cabo San Lucas Centro">Cabo San Lucas Centro</option>
              <option value="Sandos Finisterra">Sandos Finisterra</option>
              <option value="Club Cascadas del Baja">Club Cascadas del Baja</option>
            </select>
            <label>Lugar de entrega</label>
          </div>
          <label>Drop-off</label> <br>
          <div class="datetimepicker">
            <input type="date" class="datepicker" placeholder="Fecha" name="txt_fecha_entrega">
            <select name="cbox_hora_final">
              <option value="" disabled selected>Hora</option>
              <option value="08:00 a.m.">08:00 a.m.</option>
              <option value="09:00 a.m.">09:00 a.m.</option>
              <option value="10:00 a.m.">10:00 a.m.</option>
              <option value="11:00 a.m.">11:00 a.m.</option>
              <option value="12:00 p.m.">12:00 p.m.</option>
              <option value="13:00 p.m.">13:00 p.m.</option>
              <option value="14:00 p.m.">14:00 p.m.</option>
              <option value="15:00 p.m.">15:00 p.m.</option>
              <option value="16:00 p.m.">16:00 p.m.</option>
              <option value="17:00 p.m.">17:00 p.m.</option>
              <option value="18:00 p.m.">18:00 p.m.</option>
              <option value="19:00 p.m.">19:00 p.m.</option>
              <option value="20:00 p.m.">20:00 p.m.</option>
            </select>
          </div>
          <!-- <a class="waves-effect waves-light btn">RENTAR</a> -->
          <button class="btn waves-effect waves-light" type="submit" name="action">Cotizar</button>
        </form>
      </div>
    </div>
      <footer class="page-footer">
        <div class="footer-copyright">
          <div class="container valign-wrapper">
            <div class="center valign">
              Copyright © 2017 U-SAVE Todos los derechos reservados.
            </div>
          </div>
        </div>
      </footer>
    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script type="text/javascript">
    function seleccion(idcarro, nombrecarro, preciousd, preciomx){
      //var nombrecarro = nombrecarro;
      var h2 = document.getElementById("datos_reservacion");
      h2.textContent = "DATOS DE LA RESERVACIÓN - "+nombrecarro;
      document.getElementById("idcarro").value=idcarro;
      document.getElementById("preciousd").value=preciousd;
      document.getElementById("preciomx").value=preciomx;
    }
    $(document).ready(function(){
      $(".button-collapse").sideNav();
      $('main').height(screen.height - 230);
      $('#flotilla').height(screen.height - 230);
      $('.fullcover-cover').height(screen.height - 96);
      $('select').material_select();
      $('.slider').slider({
        transition: 700,
        interval: 2000
      });
      $(".allinclude").click(function(){
        $(".insurance-fullcover").stop(true,true).delay(100).fadeIn(200);
        $(".fullcover-cover").stop(true,true).delay(100).fadeIn(200);
      });
      $(".fullcover-close").click(function(){
        $(".insurance-fullcover").delay(0).fadeOut(200);
        $(".fullcover-cover").delay(0).fadeOut(200);
      });
      $(".fullcover-cover").click(function(){
        $(".insurance-fullcover").delay(0).fadeOut(200);
        $(".fullcover-cover").delay(0).fadeOut(200);
        $(".car-form").delay(0).fadeOut(200);
      });
      $('select').material_select();
      $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 15,
		    firstDay: true,
        min: true,
        max: false,
        format: 'yyyy/mm/dd',
        onSet: function( arg ){ //Funcion para que se cierre el datepicker al seleccionar un dia
          if ( 'select' in arg ){  //prevee que no se cierre si selecciona un mes o año.
            this.close();
          }
        }
      });
      $(".reserve").click(function(){
        $(".car-form").stop(true,true).delay(100).fadeIn(200);
        $(".fullcover-cover").stop(true,true).delay(100).fadeIn(200);
      });
      $(".reserve-close").click(function(){
        $(".car-form").delay(0).fadeOut(200);
        $(".fullcover-cover").delay(0).fadeOut(200);
      });
    });
    </script>
  </body>
</html>
