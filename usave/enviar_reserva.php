<?php
  if(isset($_POST['email'])){
    $correo_usave="javierbarajas@usavemexico.com";
    $asunto="Reservacion de automovil";

    $lugar_renta=$_POST['lugar_renta'];
    $fecha_renta=$_POST['fecha_renta'];
    $hora_inicial=$_POST['hora_inicial'];
    $lugar_entrega=$_POST['lugar_entrega'];
    $fecha_entrega=$_POST['fecha_entrega'];
    $hora_final=$_POST['hora_final'];
    $semanas=$_POST['semanas'];
    $dias=$_POST['dias'];
    $ptotal_semanas=$_POST['ptotal_semanas'];
    $ptotal_dias=$_POST['ptotal_dias'];
    $subtotal=$_POST['subtotal'];
    $airport_fee=$_POST['airport_fee'];
    $iva=$_POST['iva'];
    $preciomx=$_POST['preciomx'];
    $ptotal=$_POST['precio_total_mx'];
    $ptotal_usd=$_POST['precio_total_mx'];
    $carro=$_POST['carro'];

    $mensaje='<h3>DATOS DE RESERVACIÓN</h3>'.
             '<h5>'.$carro.'</h5>'.
             '<b>Ciudad de Renta:</b>'.
             '<p>'.$lugar_renta.'</p>'.
             '<b>Ciudad de Entrega:</b>'.
             '<p>'.$lugar_entrega.'</p>'.
             '<b>Fecha y hora de Renta:</b>'.
             '<p>'.strftime("%d-%B-%G",strtotime($fecha_renta)).' a las: '.$hora_inicial.'<br></p>'.
             '<b>Fecha y hora de Entrega:</b>'.
             '<p>'.strftime("%d-%B-%G",strtotime($fecha_entrega)).' a las: '.$hora_final.'</p><br>';

    $mensaje .= '<table>'.
        '<tr class="table-head">'.
        '<th>Cantidad</th>'.
        '<th>Tarifas</th>'.
        '<th>Suma</th>'.
      '</tr>'.
      '<tr>'.
        '<td>'.$semanas.'semanas</td>'.
        '<td>$'.$tarifa_semana_mx.'MXN</td>'.
        '<td>$'.$suma_semana_mx.'MXN</td>'.
      '</tr>'.
      '<tr>'.
        '<td>'.$dias.' Días</td>'.
        '<td>$'.$preciomx.' MXN/día</td>'.
        '<td>$'.$suma_dias_mx.'MXN</td>'.
      '</tr>'.
      '<tr>'.
        '<td></td>'.
        '<td>Subtotal</td>'.
        '<td>$'.$subtotal.' MXN</td>'.
      '</tr>'.
      '<tr>'.
        '<td>Recargo</td>'.
        '<td>-</td>'.
        '<td>$0.00 MXN</td>'.
      '</tr>'.
      '<tr>'.
        '<td>UNLIMITED MILES*</td>'.
        '<td>-</td>'.
        '<td>$0.00 MXN</td>'.
      '</tr>'.
      '<tr>'.
        '<td>AIRPORT FEE</td>'.
        '<td>10.00%</td>'.
        '<td class="price">$'.$airport_fee.' MXN</td>'.
      '</tr>'.
      '<tr>'.
        '<td>IVA</td>'.
        '<td>16.00%</td>'.
        '<td>$'.$iva.' MXN</td>'.
      '</tr>'.
      '<tr>'.
        '<td>Precio Total</td>'.
        '<td></td>'.
        '<td>$'.$precio_total_mx.' MXN</td>'.
      '</tr>'.
      '<tr>'.
        '<td>Precio en Dólares</td>'.
        '<td></td>'.
        '<td>$'.$precio_total_usd.' USD</td>'.
      '</tr>'.
    '</table>';

    $correo=$email;
    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $cabeceras .= 'From: '.$correo."\r\n".
        'Reply-To: '.$correo."\r\n".
        'X-Mailer: PHP/'.phpversion();
    if(mail($correo_usave,$asunto,$mensaje,$cabeceras)){
      ?>
        <script>
          alert("Tu reservación ha sido exitosa. Por favor revisa tu correo: "+correo);
          window.location="index.html"
        </script>
      <?php
    }else{
      ?>
      <script>
        alert("No se pudo enviar el correo, por favor intentelo de nuevo más tarde");
        window.location="index.html"
      </script>
      <?php
  }
}
      ?>
