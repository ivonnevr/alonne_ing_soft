<!DOCTYPE html>

<?php
    include('conexion.php');
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrador</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand">Alonne</a>
                        <img src="images/admin.png" width="50px">
                        <div class="navbar-brand">- Administrador</div>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="index_admin.php">Empleados</a></li>
                            <li><a class="color_animation" href="admin_menu.php">Menú</a></li>
                            <li><a class="color_animation" href="admin_ordenes.php">Pedidos</a></li>
                            <li><a class="color_animation" href="admin_mesas.php">Mesas</a></li>
                            <li><a class="color_animation" href="index.php">Cerrar sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <section id ="empleados" class="description_content">
            <br>
            <br>
            <br>
            <h1 class="titleForm">Agregar empleado</h1>
            <br>
            <br>
            <br>
            <br>
            <form action="store_empleados.php" method="POST">

                <input type="text" name="nombre_empleado" id="nombre_empleado" required="required" class="formulario" placeholder="Nombre(s) del empleado" />
                <input type="text" name="apellidos_empleado" id="apellidos_empleado" required="required" class="formulario" placeholder="Apellidos del empleado" /><br>
                <input type="text" name="direccion_empleado" id="direccion_empleado" required="required" class="formulario" placeholder="Dirección del empleado" />
                <input type="text" name="telefono_empleado" id="telefono_empleado" required="required" class="formulario" placeholder="Teléfono del empleado" /><br>
                <input type="email" name="email_empleado" id="email_empleado" required="required" class="formulario" placeholder="Email del empleado" />
                <select name="puesto_empleado" id="puesto_empleado" class="formulario">
                    <option disabled selected>Seleccione el puesto del empleado</option>
                    <option value="Jefe de meseros">Jefe de meseros</option>
                    <option value="Mesero">Mesero</option>
                </select>

                <div align="center">
                    <table>
                        <tr>
                            <td>
                            <button type="submit" id="submit" name="submit" class="text-center form-boton form-btn2">Agregar</button>
                            </td>
                            <td>
                            <button type="reset" id="reset" name="reset" class="text-center form-boton form-btn2">Limpiar</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </section>

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Alonne</a></p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Ingeniería de software I</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">González Yepez Alan Eduardo<br>Velázquez Ramírez Silvia Ivonne</a></p></div>
            </div>
        </footer>

    </body>
</html>