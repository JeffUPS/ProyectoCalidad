<?php
  require 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="css/style.css" type=text/css media=screen>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Document</title>
</head>
<body onload="myOnLoad()">
    <a href="index.php">Inicio</a>
<div class="div1">
    
      <h1>Registro de Usuario</h1>
          <form method="POST" action="registro.php">
              <label>Nombres</label><br>
              <input type="text" name="nombre" required  placeholder="Ingresar su nombre"><br>
              <label>Apellidos</label><br>
              <input type="text" name="apellido" required  placeholder="Ingresar su apellido"><br>
              <label>Cedula</label><br>
              <input type="text" name="cedula" minlength="10" maxlength="10" required placeholder="Ingresar su numero de Cedula"><br>
              <label>Fecha de Nacimiento</label><br>
              <input type="date" name="fecha_nacimiento"><br>
              <label>Genero</label><br>
              <select name="genero">
              <option>Hombre</option>
              <option>Mujer</option>
              <option>Otro</option>
              </select><br>
              <label>Seleccione una Provincia</label><br>
              <select  onchange="ciudades()" id="provincia" name="prov" class="seleccion"></center>
                <option>Seleccione una Provincia</option>
              </select><br>
              <label>Seleccione una Ciudad</label><br>
              <select id='select2'  name="ciu" class="seleccion">
                <option>Seleccione una Ciudad</option>
              </select><br>
              <label>Direccion</label><br>
              <input type="text" name="direccion" required  placeholder="Ingresar su Direccion"><br>
              <label>Codigo Postal</label><br>
              <input type="text" name="codigo" required placeholder="Ingresar su Codigo Postal"><br>
              <label>Telefono Fijo</label><br>
              <input type="text" name="telefono_fijo" required  placeholder="Ingresar su Telefono Fijo" minlength="7" maxlength="7" ><br>
              <label>Telefono Movil</label><br>
              <input type="text" name="telefono_movil" required placeholder="Ingresar su Telefono Fijo" minlength="10" maxlength="10"><br>
              <label>Profesiòn</label><br>
              <input type="text" name="profesion" placeholder="Ingresar tu profesion" required />
              <br>
              <label>Correo Electronico</label><br>
              <input type="email" name="correo" required placeholder="Ingresar su Correo Electronico"><br>
              <label>Contraseña</label><br>
              <input type="password" name="contrasenia" required placeholder="Ingresar una Contraseña"><br>

              <input type="submit" value="Registrar"/>
              <br><br>
          </form>
</div>
</body>
<script src="script.js"></script>
</html>