<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="css/style.css" type=text/css media=screen>
    <title>Login</title>
</head>
<body>
<div>
    <h1>Inicio de Sesion</h1>
        <form method="POST" action="welcome.php">
            <label>Correo Electronico</label><br><br>
            <input type="email" placeholder="Ingresar su correo Electronico" required>
            <br><br>
            <label>Contraseña</label><br><br>
            <input type="password" placeholder="Ingresar su Contraseña" required>
            <br><br>
            <button>Iniciar Sesion</button>
            <br><br>
            <p>Unete Ahora?<p> <a href="register.php">Registrar</a>
        </form>
</div>
</body>
</html>