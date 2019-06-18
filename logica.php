<?php
require("conexion.php");
   $lavado = $_POST['1'];
   $a = $_POST['2'];
   $s = $_POST['3'];
   $d = $_POST['4'];
   $f = $_POST['5'];
   $g = $_POST['6'];
   $h = $_POST['7'];
   $i = $_POST['8'];
   $j = $_POST['9'];
   $k = $_POST['10'];
   $l = $_POST['11'];
   $fecha = $_POST['fecha'];
   $placa = $_POST['placa'];
   $tipo_carro = $_POST['tipo_carro'];
   $servicios = $lavado." ".$a." ".$s." ".$d." ".$f." ".$g." ".$h." ".$i." ".$j." ".$k." ".$l;
   if (!empty($lavado)) {
       # code...
       $preciolavado = $_POST['preciolavado'];
   }else {
       # code...
       $preciolavado = 0;
   }
   if (!empty($a)) {
       # code...
       $preciopasteado = $_POST['preciopasteado'];
   }else {
       # code...
       $preciopasteado = 0;
   }
   if (!empty($s)) {
       # code...
       $preciolavadomotor = $_POST['preciolavadom'];
   }else {
    $preciolavadomotor = 0;
   }
   if (!empty($d)) {
       # code...
       $preciopasteadom = $_POST['preciooasteadom'];
   }else {
       # code...
       $preciopasteadom = 0;
   }
   if (!empty($f)) {
       # code...
       $preciolavadot = $_POST['preciolavadot'];
   }else {
       $preciolavadot = 0;
   }
   if (!empty($g)) {
       # code...
       $precioabrillantado = $_POST['precioabrillantado'];
   }else {
       # code...
       $precioabrillantado = 0;
   }
   if (!empty($h)) {
       # code...
       $preciopulido = $_POST['preciopulido'];
   }else {
       # code...
       $preciopulido = 0;
   }
   if (!empty($i)) {
       # code...
       $preciopulidor = $_POST['preciopulidor'];
   }else{
    $preciopulidor = 0;
   }
   if (!empty($j)) {
       # code...
       $preciopulidos = $_POST['preciopulidos'];
   }else{
    $preciopulidos = 0;
   }
   if (!empty($k)) {
       # code...
       $preciopolarizado = $_POST['preciopolarizado'];
   }else{
    $preciopolarizado = 0;
   }
  if (!empty($l)) {
      # code...
      $preciootros = $_POST['preciootros'];
    }else{
        $preciootros = 0;
    }
    $total = $preciolavado + $preciopasteado + $preciolavadomotor + $preciopasteadom +
    $preciolavadot + $precioabrillantado + $preciopulido + $preciopulidor + $preciopulidos +
    $preciopolarizado + $preciootros;
   
   $sql = "INSERT INTO transaccion (placa, tipo_carro, servicios, total, fecha) VALUES ('$placa', '$tipo_carro', '$servicios', '$total', '$fecha')";
   if(mysqli_query($conexion, $sql)){
    header("location:index.php?valor=guardado");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
}
 
// Close connection
mysqli_close($conexion);

 
?>