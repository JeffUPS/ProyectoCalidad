<?php

require 'database.php';


$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$cedula= $_REQUEST['cedula'];
$fecha_nacimiento= $_REQUEST['fecha_nacimiento'];
$genero= $_REQUEST['genero'];
$prov= $_REQUEST['prov'];
$ciu = $_REQUEST['ciu'];
$direccion = $_REQUEST['direccion'];
$codigo = $_REQUEST['codigo'];
$telefono_fijo = $_REQUEST['telefono_fijo'];
$telefono_movil=$_REQUEST['telefono_movil'];
$profesion=$_REQUEST['profesion'];
$correo=$_REQUEST['correo'];
$contrasenia=$_REQUEST['contrasenia'];


$sql = "INSERT INTO usuario (nombre,apellido,cedula,fecha_nacimiento,genero,prov,ciu,direccion,codigo,telefono_fijo,telefono_movil,profesion,correo,contrasenia) 
VALUES ('$nombre','$apellido','$cedula','$fecha_nacimiento','$genero','$prov','$ciu','$direccion','$codigo','$telefono_fijo','$telefono_movil','$profesion','$correo',sha1('$contrasenia'))";

$resultado = $conexion->query($sql);

?>



<html lang="es">
     <head> 
     <title>Registro</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
     <link href="css/style.css" rel="stylesheet" type="text/css" />

     </head>
     <body>
         <div class="container">
         <div class="container">
           <div class="row">
             <div class="row" style="text-align:center">
             <?php if($resultado) { ?>
                echo "<script> alert("TU REGISTRO SE HA REALIZADO DE MANERA EXITOSA - Es momento de elegir una letra del alfabeto y un genero musical de tu preferencia esto se requiere porque cuando inicies sesión se te pedira que autentifiques tu identidad y esto lo sabremos cuando elijas de manera correcta el nombre del artista que inicie  con la letra que escojas y la canción pertenezca al genero de tu preferencia. "); window.location="registro_autenticacion.php";</script>";
             <?php } else { ?>
               echo "<script> alert("USUARIO NO REGISTRADO"); window.location="register.php";</script>";
             <?php } ?>
        </body>
</html>