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
            <h1 class="titleForm">Listar empleados</h1>
            <br>
            <br>
            <br>

            <?php

                $sql = "SELECT * FROM empleados";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                //set the resulting array to associative
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<table border='1' align='center'>";
                echo "<tr>
                        <th>
                            <p class='margen'>ID</p>
                        </th>
                        <th>
                            <p class='margen'>Nombre(s) del empleado</p>
                        </th>
                        <th>
                            <p class='margen'>Apellidos del empleado</p>
                        </th>
                        <th>
                            <p class='margen'>Dirección del empleado</p>
                        </th>
                        <th>
                            <p class='margen'>Teléfono del empleado</p>
                        </th>
                        <th>
                            <p class='margen'>Email del empleado</p>
                        </th>
                        <th>
                            <p class='margen'>Puesto del empleado</p>
                        </th>
                    </tr>";
                foreach($stmt->fetchAll() as $empleado) {
                    echo "<tr>
                            <td>" . $empleado['id'] . "</td>
                            <td>" . $empleado['nombre'] . "</td>
                            <td>" . $empleado['apellidos'] . "</td>
                            <td>" . $empleado['direccion'] . "</td>
                            <td>" . $empleado['telefono'] . "</td>
                            <td>" . $empleado['correo'] . "</td>
                            <td>" . $empleado['puesto'] . "</td>
                        </tr>";
                }

                echo "</table>";

            ?>

        </section>

        <br><br><br><br><br><br><br><br><br><br><br><br>

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