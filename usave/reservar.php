<?php
include('db.php'); //trae los datos del arreglo donde se guardan los carros
setlocale(LC_TIME,"es_MX"); //Formato a las fechas y horas
?>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  </head>
  <body>
<?php
    if(!isset($_POST['cbox_lugar_renta']) || !isset($_POST['txt_fecha_renta']) || !isset($_POST['cbox_hora_inicial']) || !isset($_POST['cbox_lugar_entrega']) || !isset($_POST['txt_fecha_entrega']) || !isset($_POST['cbox_hora_final'])){ //si no recibe nungún dato..
      echo "";
    }else{
      //recibe los valores por post y los guarda en las variables
      $lugar_renta=$_POST['cbox_lugar_renta'];
      $fecha_renta=$_POST['txt_fecha_renta'];
      $hora_inicial=$_POST['cbox_hora_inicial'];
      $lugar_entrega=$_POST['cbox_lugar_entrega'];
      $fecha_entrega=$_POST['txt_fecha_entrega'];
      $hora_final=$_POST['cbox_hora_final'];

      if(!isset($_POST['idcarro']) || !isset($_POST['preciousd']) || !isset($_POST['preciomx'])){
?>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#destino").stop(true,true).delay(0).fadeOut(500);
    $("#auto").stop(true,true).delay(550).fadeIn(500);
  });
  </script>
<?php
    }else{
      $idcarro=$_POST['idcarro'];
      $preciousd=$_POST['preciousd'];
      $preciomx=$_POST['preciomx'];
      $dias=(strtotime($fecha_renta)-strtotime($fecha_entrega))/86400;
      if($fecha_renta == $fecha_entrega){
        $dias=1;
      }else{
        $dias=abs($dias); //valor absoluto
        $dias=floor($dias); //redondear el valor obtenido
      }
      $semanas=0;
      while($dias>6){
        $dias=$dias-7;
        $semanas++;
      }
//////////////////////////////////CALCULOS EN PESOS//////////////////////////////////////////////////////
      $tarifa_semana_mx=$preciomx*7; //tarifa por una semana en pesos
      $suma_semana_mx=$tarifa_semana_mx*$semanas; //subtotal de la renta por semana en pesos
      $suma_dias_mx=$dias*$preciomx; //subtotal de la renta por dias en pesos
      $subtotal_mx=$suma_semana_mx+$suma_dias_mx; //subtotal general de la renta en pesos
      $airport_fee=$subtotal_mx*0.10; //impuesto airport fee
      $iva=$subtotal_mx*0.16; //impuesto iva
      $precio_total_mx=$subtotal_mx+$iva+$airport_fee; //Precio total.

/////////////////////////////////CALCULOS EN DOLARES///////////////////////////////////////////////////
      $tarifa_semana_usd=$preciousd*7; //tarifa por una semana en dolares
      $suma_semana_usd=$tarifa_semana_usd*$semanas; //subtotal de la renta por semana en dolares
      $suma_dias_usd=$dias*$preciousd; //subtotal de la renta por dias en dolares
      $subtotal_usd=$suma_semana_usd+$suma_dias_usd; //subtotal general de la renta en dolares
      $airport_fee_usd=$subtotal_usd*0.10; //impuesto airport fee
      $iva_usd=$subtotal_usd*0.16; //impuesto iva
      $precio_total_usd=$subtotal_usd+$iva_usd+$airport_fee_usd; //Precio total más impuestos


?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#destino").stop(true,true).delay(0).fadeOut(500);
    $("#cotizacion").stop(true,true).delay(550).fadeIn(500);
  });
</script>
  <?php
}
}
?>
    <header>
      <nav>
        <div class="nav-wrapper">
          <div class="nav-center">
            <a href="index.html" class="brand-logo"><img src="assets/images/logo-usave.png" alt=""></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down valign-wrapper">
              <li><a href="index.html">INICIO</a></li>
              <li><a href="#">RESERVA</a></li>
              <li><a href="seguros.html">SEGUROS</a></li>
              <li><a href="flotilla.php">NUESTRA FLOTILLA</a></li>
              <li><a href="contacto.html">CONTACTO</a></li>
              <li class="btn-net"><a class="socialnet" href="https://www.facebook.com/usavemexico" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="btn-net"><a class="socialnet" href="https://twitter.com/usavemexico" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="btn-net"><a class="socialnet" href="https://plus.google.com/114870054196917032127" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="index.html">INICIO</a></li>
            <li><a href="#">RESERVA</a></li>
            <li><a href="seguros.html">SEGUROS</a></li>
            <li><a href="flotilla.php">NUESTRA FLOTILLA</a></li>
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
    <section id="reservar">
      <div class="content">
        <h1>RESERVA</h1>
        <div id="destino">
          <div class="top-tabs">
            <div class="row">
              <div class="col s4">
                <div class="destino selected">
                  <li>Selecciona tu destino</li>
                </div>
              </div>
              <div class="col s4">
                <div class="auto">
                  <li>Selecciona tu auto</li>
                </div>
              </div>
              <div class="col s4">
                <div class="cotizacion">
                  <li>Confirma tu cotización</li>
                </div>
              </div>
            </div>
          </div>
          <div class="destination-content">
            <div id="form">
              <div class="form-content">
                <div class="blue-divider">
                </div>
                <h2>RESERVACIÓN</h2>
                <form action="reservar.php" method="post">
                  <div class="input-field col s12 rentplace">
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
                  <div class="label">
                  <label>Pick-up</label> <br>
                  </div>
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
                  <div class="label">
                  <label>Drop-off</label> <br>
                  </div>
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
                  <div id="select-dest">
                    <!-- <button class="btn waves-effect waves-light" type="submit" name="action">Siguiente</button> -->
                    <button class="btn waves-effect waves-light" type="submit" name="action">SIGUIENTE</button>
                    <!--<div class="reserve"><p>SIGUIENTE</p></div>-->
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div id="auto">
          <div class="top-tabs">
            <div class="row">
              <div class="col s4">
                <div class="destino">
                  <li>Selecciona tu destino</li>
                </div>
              </div>
              <div class="col s4">
                <div class="auto selected">
                  <li>Selecciona tu auto</li>
                </div>
              </div>
              <div class="col s4">
                <div class="cotizacion">
                  <li>Confirma tu cotización</li>
                </div>
              </div>
            </div>
          </div>
          <div class="pickcar-content">
            <div class="reservation">
              <?php
              //Si no recibe valores mostrará la lista sin valores
              if(!isset($_POST['cbox_lugar_renta']) || !isset($_POST['txt_fecha_renta']) || !isset($_POST['cbox_hora_inicial']) || !isset($_POST['cbox_lugar_entrega']) || !isset($_POST['txt_fecha_entrega']) || !isset($_POST['cbox_hora_final'])){
              ?>
              <h3>DATOS DE RESERVACIÓN</h3>
              <b>Ciudad de Renta:</b>
              <p>Lugar</p>
              <b>Ciudad de Entrega:</b>
              <p>Lugar</p>
              <b>Fecha y hora de Renta:</b>
              <p>01/01/2017 00:00am</p>
              <b>Fecha y hora de Entrega:</b>
              <p>01/01/2017 00:00am</p>
              <?php
              }else{
              ?>
              <h3>DATOS DE RESERVACIÓN</h3>
              <b>Ciudad de Renta:</b>
              <p><?php echo $lugar_renta ?></p>
              <b>Ciudad de Entrega:</b>
              <p><?php echo $lugar_entrega ?></p>
              <b>Fecha y hora de Renta:</b>
              <p><?php echo strftime("%d-%B-%G",strtotime($fecha_renta)) ?> a las: <?php echo $hora_inicial ?><br></p>
              <b>Fecha y hora de Entrega:</b>
              <p><?php echo strftime("%d-%B-%G",strtotime($fecha_entrega)) ?> a las: <?php echo $hora_final ?></p>
              <?php
              }
              ?>
            </div>
            <div class="auto-content">
              <div class="slidern">
                <div class="slidern-inner" id="slidern-inner">
                  <?php
                  //ciclo para mostrar los carros y sus datos en el slider
                  //count($db) devuelve el tamaño del array
                  for($i=0; $i<count($db); $i++){
                  ?>
                  <input class="slidern-open" type="radio" id="slidern-<?php echo $db[$i]['id']?>" name="slidern" aria-hidden="true" hidden="" <?php if($i==0){?>checked="checked"<?php } ?>>
                   <div class="slidern-item slidern<?php echo $db[$i]['id'] ?> flex">
                    <div class="car-description">
                      <div class="title-slide">
                        <h2><?php echo $db[$i]['tipo']?></h2>
                        <img class="materialboxed" data-caption="Nissan March" width="300" src="<?php echo $db[$i]['foto']?>">
                        <div class="row flex">
                          <div class="col s4">
                            <p><i class="fa fa-user" aria-hidden="true" title="Pasajeros"></i><?php echo $db[$i]['pasajeros']?></p>
                          </div>
                          <div class="col s4">
                            <p><i class="fa fa-suitcase" aria-hidden="true" title="Maletas Medianas"></i><?php echo $db[$i]['maletas']?></p>
                          </div>
                          <div class="col s4">
                            <p><i class="fa fa-snowflake-o" aria-hidden="true" title="Aire Condicionado"></i> A/C</p>
                          </div>
                        </div>
                      </div>
                      <div class="desc-slide">
                        <div class="row">
                          <div class="col s12 text-icon">
                            <h3><?php echo $db[$i]['carro']?></h3>
                            <img src="assets/images/autos/stars.png" alt="">
                            <h4>$<?php echo $db[$i]['preciomx']?> MXN</h4>
                            <h5>$<?php echo $db[$i]['preciousd']?> USD</h5>
                            <p>Precio por 1 día</p>
                          </div>
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
              } //fin del ciclo
                ?>
              <div class="car-form">
                <div class="form-content">
                  <div class="blue-divider">
                    <div class="reserve-close">Casilla de verificación<i class="fa fa-times" aria-hidden="true"></i></div>
                  </div>
                  <form action="reservar.php" method="post">
                    <input type="hidden" name="cbox_lugar_renta" value="<?php echo $lugar_renta ?>">
                    <input type="hidden" name="txt_fecha_renta" value="<?php echo $fecha_renta ?>">
                    <input type="hidden" name="cbox_hora_inicial" value="<?php echo $hora_inicial?>">
                    <input type="hidden" name="cbox_lugar_entrega" value="<?php echo $lugar_entrega?>">
                    <input type="hidden" name="txt_fecha_entrega" value="<?php echo $fecha_entrega ?>">
                    <input type="hidden" name="cbox_hora_final" value="<?php echo $hora_final ?>">
                    <input type="hidden" id="idcarro" name="idcarro">
                    <input type="hidden" id="preciousd" name="preciousd">
                    <input type="hidden" id="preciomx" name="preciomx">
                    <h4 id="datos_reservacion"></h2><br>
                    <font color="black"><h5>¿Desea continuar con la cotización?</h5></font><br>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Cotizar</button>
                </form>
                </div>
              </div>

              <label for="slidern-1" class="slidern-control next control-8">›</label>
              <label for="slidern-1" class="slidern-control prev control-2">‹</label>
              <label for="slidern-2" class="slidern-control next control-1">›</label>
              <label for="slidern-2" class="slidern-control prev control-3">‹</label>
              <label for="slidern-3" class="slidern-control next control-2">›</label>
              <label for="slidern-3" class="slidern-control prev control-4">‹</label>
              <label for="slidern-4" class="slidern-control next control-3">›</label>
              <label for="slidern-4" class="slidern-control prev control-5">‹</label>
              <label for="slidern-5" class="slidern-control next control-4">›</label>
              <label for="slidern-5" class="slidern-control prev control-6">‹</label>
              <label for="slidern-6" class="slidern-control next control-5">›</label>
              <label for="slidern-6" class="slidern-control prev control-7">‹</label>
              <label for="slidern-7" class="slidern-control next control-6">›</label>
              <label for="slidern-7" class="slidern-control prev control-8">‹</label>
              <label for="slidern-8" class="slidern-control next control-7">›</label>
              <label for="slidern-8" class="slidern-control prev control-1">‹</label>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="cotizacion">
          <div class="top-tabs">
            <div class="row">
              <div class="col s4">
                <div class="destino">
                  <li>Selecciona tu destino</li>
                </div>
              </div>
              <div class="col s4">
                <div class="auto">
                  <li>Selecciona tu auto</li>
                </div>
              </div>
              <div class="col s4 selected">
                <div class="cotizacion">
                  <li>Confirma tu cotización</li>
                </div>
              </div>
            </div>
          </div>
          <div class="price-content">
            <div class="reservation">
              <?php
              //Si no recibe valores mostrará la lista sin valores
              if(!isset($_POST['cbox_lugar_renta']) || !isset($_POST['txt_fecha_renta']) || !isset($_POST['cbox_hora_inicial']) || !isset($_POST['cbox_lugar_entrega']) || !isset($_POST['txt_fecha_entrega']) || !isset($_POST['cbox_hora_final'])){
              ?>
              <h3>DATOS DE RESERVACIÓN</h3>
              <b>Ciudad de Renta:</b>
              <p>Lugar</p>
              <b>Ciudad de Entrega:</b>
              <p>Lugar</p>
              <b>Fecha y hora de Renta:</b>
              <p>01/01/2017 00:00am</p>
              <b>Fecha y hora de Entrega:</b>
              <p>01/01/2017 00:00am</p>
              <?php
              }else{
              ?>
              <h3>DATOS DE RESERVACIÓN</h3>
              <b>Ciudad de Renta:</b>
              <p><?php echo $lugar_renta ?></p>
              <b>Ciudad de Entrega:</b>
              <p><?php echo $lugar_entrega ?></p>
              <b>Fecha y hora de Renta:</b>
              <p><?php echo strftime("%d-%B-%G",strtotime($fecha_renta)) ?> a las: <?php echo $hora_inicial ?><br></p>
              <b>Fecha y hora de Entrega:</b>
              <p><?php echo strftime("%d-%B-%G",strtotime($fecha_entrega)) ?> a las: <?php echo $hora_final ?></p>
              <?php
              }
              ?>
            </div>
            <?php
            for($i=0;$i<count($db);$i++){

              if($idcarro == $db[$i]['id']){
            ?>
            <div class="car-description">
              <h3><?php echo $db[$i]['carro'] ?></h3>
              <h2><?php echo $db[$i]['tipo'] ?></h2>
              <div class="wrapper">
              <div class="title-slide">
                <img class="materialboxed" data-caption="Nissan March" width="200" src="<?php echo $db[$i]['foto'] ?>">
                <div class="row flex">
                  <div class="col s4">
                    <p><i class="fa fa-user" aria-hidden="true" title="Pasajeros"></i> <?php echo $db[$i]['pasajeros'] ?></p>
                  </div>
                  <div class="col s4">
                    <p><i class="fa fa-suitcase" aria-hidden="true" title="Maletas Medianas"></i> <?php echo $db[$i]['maletas'] ?></p>
                  </div>
                  <div class="col s4">
                    <p><i class="fa fa-snowflake-o" aria-hidden="true" title="Aire Condicionado"></i> A/C</p>
                  </div>
                </div>
              </div>
              <div class="desc-slide">
                <div class="row">
                  <div class="col s12 text-icon">
                    <img src="assets/images/autos/stars.png" alt="">
                    <h4>$<?php echo $db[$i]['preciomx'] ?> MXN</h4>
                    <h5>$<?php echo $db[$i]['preciousd'] ?> USD</h5>
                    <p>Precio por 1 día</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            <div class="insurance-fullcovers">
              <div class="border-blue">
                <img src="assets/images/ddw-cover1x.png" alt="">
                <h2 class="valign">DDW+<br>
                PAI <br>
                FULL COVER</h2>
                <blockquote class="valign-wrapper">
                  <p>Cero deducible en caso de accidente o robo total del auto,
                    gastos médicos a ocupantes, daños a terceros limitado</p>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="price-table">
            <h2>COTIZACIÓN</h2>
            <table>
              <tr class="table-head">
                <th>Cantidad</th>
                <th>Tarifas</th>
                <th>Suma</th>
              </tr>
              <tr>
                <td><?php echo $semanas ?> Semana(s)</td>
                <td class="price">$<?php echo $tarifa_semana_mx ?> MXN</td>
                <td class="price">$<?php echo $suma_semana_mx ?> MXN</td>
              </tr>
              <tr>
                <td><?php echo $dias ?> Día(s)</td>
                <td class="price">$<?php echo $db[$i]["preciomx"] ?> MXN/día</td>
                <td class="price">$<?php echo $suma_dias_mx ?> MXN</td>
              </tr>
              <tr>
                <td></td>
                <td>Subtotal</td>
                <td class="price">$<?php echo $subtotal_mx ?> MXN</td>
              </tr>
              <tr>
                <td>Recargo</td>
                <td>-</td>
                <td class="price">$0.00 MXN</td>
              </tr>
              <tr>
                <td>UNLIMITED MILES*</td>
                <td>-</td>
                <td class="price">$0.00 MXN</td>
              </tr>
              <tr>
                <td>AIRPORT FEE</td>
                <td>10.00%</td>
                <td class="price">$<?php echo $airport_fee ?> MXN</td>
              </tr>
              <tr>
                <td>IVA</td>
                <td>16.00%</td>
                <td class="price">$<?php echo $iva ?> MXN</td>
              </tr>
              <tr class="total">
                <td>Precio Total</td>
                <td></td>
                <td class="price">$<?php echo $precio_total_mx ?> MXN</td>
              </tr>
              <tr>
                <td>Precio en Dólares</td>
                <td></td>
                <td class="price">$<?php echo $precio_total_usd ?> USD</td>
              </tr>
            </table>
            <button class="btn waves-effect waves-light" type="submit" name="action" id="send">FINALIZAR</button>
            <button class="btn waves-effect waves-light gray" type="submit" name="action" id="cancel">CANCELAR</button>
          </div>
          <?php
                break;
              } //fin del if
            } //fin del ciclo
          ?>
          </div>
        </div>
      </div>
      <div class="fullcover-cover"></div>
      <div class="final-form">
        <div class="form-content">
          <div class="blue-divider">
            <div class="finalform-close"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
          <h2>INFORMACIÓN DE CONTACTO</h2>
          <div class="summary">
            <h3>Resumen de tu reserva:</h3>
            <p><b>Ciudad de Renta:</b> <?php echo $lugar_renta ?> <br>
            <b>Ciudad de Entrega:</b> <?php echo $lugar_entrega ?> <br>
            <b>De:</b> <?php echo strftime("%d-%B-%G",strtotime($fecha_renta)) ?> <?php echo $hora_inicial ?> <b>A:</b> <?php echo strftime("%d-%B-%G",strtotime($fecha_entrega)) ?> <?php echo $hora_final ?> <br>
            <b>Total de días:</b> Totaldias <br>
            <b>Auto:</b> <?php echo $db[$i]['carro'] ?> <br>
            <b>Total:</b> <?php echo $precio_total_mx ?> MXN - <?php echo $precio_total_usd ?> USD</p>
          </div>
          <p>Por favor llena tus datos de contacto para poder contactarnos
          contigo</p>
          <form class="form" action="enviar_contacto.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="submit">
            <input type="text" name="name" placeholder="Nombre:"> <br>
            <input type="email" name="email" placeholder="Correo Electrónico:"><br>
            <input type="tel" name="cellphone" placeholder="Celular:"><br>
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
          </form>
        </div>
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

    <script type="text/javascript">
    function seleccion(idcarro, nombrecarro, preciousd, preciomx){
      var h2 = document.getElementById("datos_reservacion");
      h2.textContent = "Ha seleccionado el auto: "+nombrecarro;
      document.getElementById("idcarro").value=idcarro;
      document.getElementById("preciousd").value=preciousd;
      document.getElementById("preciomx").value=preciomx;
    }
    $(document).ready(function(){
      $(".button-collapse").sideNav();
      $('main').height(screen.height - 230);
      $('#reservar').height(screen.height - 230);
      $('.fullcover-cover').height(screen.height - 96);

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
        $(".final-form").delay(0).fadeOut(200);
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
      $("#send").click(function(){
        $(".final-form").stop(true,true).delay(100).fadeIn(200);
        $(".fullcover-cover").stop(true,true).delay(100).fadeIn(200);
      });
      $(".finalform-close").click(function(){
        $(".final-form").delay(0).fadeOut(200);
        $(".fullcover-cover").delay(0).fadeOut(200);
      });
      $('#cancel').click(function() {
          window.location.href = 'reservar.php';
          return false;
      });
    });
    </script>
  </body>
