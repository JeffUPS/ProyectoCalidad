<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="css/style.css" type=text/css media=screen>
    <title>Document</title>
</head>
<body>
    <a href="index.php">Inicio</a>
<div class="div1">
    <h1>Registro de Usuario</h1>
        <form method="POST">
            <label>Nombres</label><br>
            <input type="text" required  placeholder="Ingresar su nombre"><br>
            <label>Apellidos</label><br>
            <input type="text" required  placeholder="Ingresar su apellido"><br>
            <label>Cedula</label><br>
            <input type="text" minlength="10" maxlength="10" required placeholder="Ingresar su numero de Cedula"><br>
            <label>Fecha de Nacimiento</label><br>
            <input type="date"><br>
            <label>Genero</label><br>
            <select>
            <option>Hombre</option>
            <option>Mujer</option>
            <option>Otro</option>
            </select><br>
            <label>Provincia</label><br>
            <input type="text" required pattern="[A-Za-z]" placeholder="Ingresar su Provincia"><br>
            <label>Ciudad</label><br>
            <input type="text" required pattern="[A-Za-z]" placeholder="Ingresar su Ciudad"><br>
            <label>Direccion</label><br>
            <input type="text" required pattern="[A-Za-z0-9]" placeholder="Ingresar su Direccion"><br>
            <label>Codigo Postal</label><br>
            <input type="text" required pattern="[0-9]" placeholder="Ingresar su Codigo Postal"><br>
            <label>Telefono Fijo</label><br>
            <input type="text" required pattern="[0-9]" placeholder="Ingresar su Telefono Fijo" minlength="7" maxlength="7" ><br>
            <label>Telefono Movil</label><br>
            <input type="text" required pattern="[0-9]" placeholder="Ingresar su Telefono Fijo" minlength="10" maxlength="10"><br>
            <label>Elije un Letra</label><br>
            <select>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            </select>
            <br>
            <label>Correo Electronico</label><br>
            <input type="email" required placeholder="Ingresar su Correo Electronico"><br>
            <label>Contraseña</label><br>
            <input type="password" required placeholder="Ingresar una Contraseña"><br>
            <label>Confirmar Contraseña</label><br>
            <input type="password" required placeholder="Confirmar Contraseña"><br><br>

            <button>Registrar</button>
            <br><br>
        </form>
</div>
</body>
</html>