<?php
session_start();
if(!isset($_SESSION['datos_login']))
{
  header("Location: welcome.php");
}
$arregloUsuario=$_SESSION['datos_login'];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bienvenido
</body>
</html>