<?php
$conexion = new mysqli('localhost', 'root', '', 'bd-calidad');
if($conexion->connect_error){
  die("No hubo conexion");
}
?>