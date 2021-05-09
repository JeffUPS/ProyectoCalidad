
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="css/style.css" type=text/css media="screen">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Login</title>
</head>
<body>
<div>
  <center>
    <h1>Inicio de Sesion</h1>
        <form method="POST" action="check.php">
            <label>Correo Electronico</label><br><br>
            <input type="email" name="correo" placeholder="Ingresar su correo Electronico" required>
            <br><br>
            <label>Contraseña</label><br><br>
            <input type="password" name="contrasenia" placeholder="Ingresar su Contraseña" required>
            <br><br>
            <button type="submit" class="send" name="login_user">Iniciar Sesion</button>
            <br><br>
            <p>Unete Ahora?<p> <a href="register.php">Registrar</a>
        </form>
  </center>
</div>
</body>
<script src="script.js"></script>
</html>