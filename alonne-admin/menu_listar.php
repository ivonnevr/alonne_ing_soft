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
                            <li><a class="color_animation" href="index_admin.php">Empleados</a></li>
                            <li><a class="navactive color_animation" href="admin_menu.php">Menú</a></li>
                            <li><a class="color_animation" href="admin_ordenes.php">Pedidos</a></li>
                            <li><a class="color_animation" href="admin_mesas.php">Mesas</a></li>
                            <li><a class="color_animation" href="index.php">Cerrar sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <section id ="platos" class="description_content">
                                <br>
                                <br>
                                <br>
                                <h1>Menú</h1>
                                <br><br><br>
                                
                                <table align="center">
                                    <tr>
                                        <td>
                                            <div class="margen"><b>Antipasti</b></div>
                                        </td>
                                        <td>
                                            <div class="margen"><b>Focaccia</b></div>
                                        </td>
                                        <td>
                                            <div class="margen"><b>Pizze</b></div>
                                        </td>
                                        <td>
                                            <div class="margen"><b>Pasta</b></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/food_icon01.jpg" width="200px">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/food_icon02.jpg" width="200px">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/food_icon03.jpg" width="200px">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/food_icon04.jpg" width="200px">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                Provoleta a la plancha<br>
                                                Precio: $80<br><br><br>
                                            
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Mozarella, jitomate y jamón<br>
                                                Precio: $60<br><br><br>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Mozarella y peperoni<br>
                                                Precio: $150<br><br><br>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Salsa a la crema y perejil<br>
                                                Precio: $70<br><br><br>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="margen"><b>Limonadas</b></div>
                                        </td>
                                        <td>
                                            <div class="margen"><b>Refrescos</b></div>
                                        </td>
                                        <td>
                                            <div class="margen"><b>Cerveza</b></div>
                                        </td>
                                        <td>
                                            <div class="margen"><b>Café</b></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/limonada.jpg" width="200px">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/refresco.jpg" width="200px">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/cerveza.jpg" width="200px">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/cafe.jpg" width="200px">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                Limonada 455 ml<br>
                                                Precio: $20<br><br><br>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Refresco 455 ml<br>
                                                Precio: $25<br><br><br>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Cerveza 355 ml<br>
                                                Precio: $25<br><br><br>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Taza de café 255 ml<br>
                                                Precio: $20<br><br><br>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="margen"><b>Pays</b></div>
                                        </td>
                                        <td>
                                            <div class="margen"><b>Pasteles</b></div>
                                        </td>
                                        <td>
                                            <div class="margen"><b>Helados</b></div>
                                        </td>
                                        <td>
                                            <div class="margen"><b>Tartas</b></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/pay.jpg" width="200px">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/pastel.jpg" width="200px">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/helado.jpg" width="200px">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="margen">
                                                <img src="images/images/tarta.jpg" width="200px">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                Pay queso con manzana<br>
                                                Precio: $35<br><br><br>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Pastel de chocolate<br>
                                                Precio: $30<br><br><br>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Helado de vainilla<br>
                                                Precio: $20<br><br><br>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Tarta de guayaba<br>
                                                Precio: $25<br><br><br>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                </table>
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