<!DOCTYPE html>

<?php 
    include('conexion.php');
?>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Alonne</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="images/icons/restaurant.png" type="image/x-icon">
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand">Alonne - Mesa 2</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                        <!--
                            <li><a class="color_animation" href="mesa2.php">Volver al menú</a></li>
                        -->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <br><br><br>

        <section class="description_content">
            <div align="center">
                <h1>Ticket</h1>
            </div>
            <br>
            <br>

            <?php

                $sql = "SELECT * FROM pedidos";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                //set the resulting array to associative
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<table border='1' align='center'>";
                echo "<tr>
                        <th>
                            <p class='margen' align='center'>Platillo</p>
                        </th>
                        <th>
                            <p class='margen' align='center'>Descripción</p>
                        </th>
                        <th>
                            <p class='margen'>Precio</p>
                        </th>
                    </tr>";
                foreach($stmt->fetchAll() as $platillo) {
                    echo "<tr>
                            <td>" . $platillo['platillo'] . "</td>
                            <td>" . $platillo['descripcion'] . "</td>
                            <td>" . $platillo['precio'] . "</td>
                        </tr>";
                }

                echo "</table>";

            ?>
            <br>
            <?php

                    $bd = include_once "db.php";

                    $sentencia = $bd->prepare("SELECT SUM(precio) as sum FROM pedidos");
                    $sentencia->execute();
                    $data = $sentencia->fetchObject();

                echo "<table border='1' align='center'>";
                echo "<tr>
                        <td>
                            <p class='margen' align='center'><b>Total a pagar:</b></p>
                        </td>
                        <td>
                            <p class='margen' align='center'>" . $data->sum . "</p>
                        </td>
                    </tr>";

                echo "</table>";

            ?>
            <br>
            <div align="center">
                <form action="pagar.php">
                    <div align="center">
                        <button type="submit" name="salir" class="text-center form-boton form-btn2">Pagar y salir</button>
                    </div>
                </form>
            </div>
        </section>

    </body>
</html>