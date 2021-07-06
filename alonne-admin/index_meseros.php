<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meseros</title>
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
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand">Alonne</a>
                        <img src="images/mesero.png" width="55px">
                        <div class="navbar-brand">- Mesero</div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="index_meseros.php">Pedidos</a></li>
                            <li><a class="color_animation" href="mesero_mesas.php">Mesas asignadas</a></li>
                            <li><a class="color_animation" href="asistencias.php">Asistencias</a></li>
                            <li><a class="color_animation" href="index.php">Cerrar sesión</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>

        <section id ="ordenes" class="description_content">
            <br>
            <br>
            <br>
            <h1>Pedidos</h1>
            <br>
            <br>
            <br>
            <br>
             <form action="mesero_listar_pedidos.php">
                <button type="submit" id="listar_ordenes" name="listar_ordenes" class="boton">Ver pedidos</button>
            </form>
            <br>
            <form action="mesero_modificar_pedido.php">
                <button type="submit" id="cambiar_estatus" name="cambiar_estatus" class="boton">Cambiar estatus de pedidos</button>
            </form>
            <br>
            <form action="mesero_eliminar_pedido.php">
                <button type="submit" id="eliminar_orden" name="eliminar_orden" class="boton">Eliminar pedidos</button>
            </form>
            <br>
            <form action="truncate.php">
                <button type="submit" id="vaciar" name="vaciar" class="boton">Limpiar registro</button>
            </form>
            <br>
        </section>

        <br>

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