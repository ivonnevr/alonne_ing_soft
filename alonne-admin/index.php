<!DOCTYPE html>

<?php
    include('conexion.php');
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Login</title>
</head>
<body class="bdbackground">
    <form action="validacion_login.php" method="POST" class="bgform">
        <img src="images/logo.jpeg" width="150px"><br><br>
        <div align="center">
            <img src="images/user.png" width="100px"><br><br>
            <div class="text">
                Usuario
            </div><br>
            <input type="text" name="user" id="user" required="required" class="camposform" placeholder="Ingrese su usuario" /><br>
            <div class="text">
                Contraseña
            </div><br>
            <input type="password" name="password" id="password" required="required" class="camposform" placeholder="Ingrese su contraseña" />
            <button type="submit" id="ingresar" name="ingresar" class="form-boton form-btn2">Ingresar</button>
        </div>
    </form>
</body>
</html>
