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
                        <a class="navbar-brand">Alonne - Mesa 1</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">BIENVENIDOS</a></li>
                            <li><a class="color_animation" href="#story">CONÓCENOS</a></li>
                            <li><a class="color_animation" href="#pricing">MENÚ</a></li>
                            <li><a class="color_animation" href="#beer">BEBIDAS</a></li>
                            <li><a class="color_animation" href="#bread">POSTRES</a></li>
                            <li><a class="color_animation" href="#featured">ESPECIALIDADES</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> Alonne</h2>
                    <h2 class="white second-title">" La casa del verdadero placer "</h2>
                    <hr>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>CONÓCENOS</h1><br><br>
					<!--
						<div class="fa fa-cutlery fa-2x"></div>
					-->
					<img src="images/icons/conocenos.png" width="40">
                    <br>
                    <br>
                    <p class="desc-text">Alonne, es un restaurante de comida italiana gourmet. El nombre de nuestro establecimiento se debe a la combinación de los nombres de los dos creadores, Alan e Ivonne.<br>También contamos con una gran variedad de postres y bebidas para hacer de tu estadía en nuestro restaurante más placentera.</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="images/images/kabob.jpg" width="250" height="220">
                       <img src="images/images/limes.jpg" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="images/images/radish.jpg"  width="250" height="220">
                       <img src="images/images/corn.jpg"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>


        <!-- ============ Pricing  ============= -->


        <section id ="pricing" class="description_content">
            <div class="pricing background_content">
                <h1>MENÚ</h1>
             </div>
            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w"> 
                            <section id ="platos" class="description_content">
                                <h1>Platos fuertes</h1>
                                <br>
                                <br>
                                <img src="images/icons/platillos.png" width="40">
                                <br>
                                <br>
                                <br>
                                
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
                                                Precio: $80<br>
                                                <form action="plato1.php">
                                                    <div align="center">
                                                        <button type="submit" name="plato1" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Mozarella, jitomate y jamón<br>
                                                Precio: $60<br>
                                                <form action="plato2.php">
                                                    <div align="center">
                                                        <button type="submit" name="plato2" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Mozarella y peperoni<br>
                                                Precio: $150<br>
                                                <form action="plato3.php">
                                                    <div align="center">
                                                        <button type="submit" name="plato3" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Salsa a la crema y perejil<br>
                                                Precio: $70<br>
                                                <form action="plato4.php">
                                                    <div align="center">
                                                        <button type="submit" name="plato4" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </section>
                            
                        </div>
                    </div>
                </div>
            </div>  
        </section>

        <!-- ============ Our Beer  ============= -->

        <section id ="beer" class="description_content">
            <div  class="beer background_content">
                <h1>BEBIDAS</h1>
            </div>

            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                            <section id ="bebidas" class="description_content">
                                <h1>Nuestras bebidas</h1>
                                <br>
                                <br>
                                <img src="images/icons/bebidas.png" width="40">
                                <br>
                                <br>
                                <br>
                                <table align="center">
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
                                                Precio: $20<br>
                                                <form action="bebida1.php">
                                                    <div align="center">
                                                        <button type="submit" name="bebida1" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Refresco 455 ml<br>
                                                Precio: $25<br>
                                                <form action="bebida2.php">
                                                    <div align="center">
                                                        <button type="submit" name="bebida2" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Cerveza 355 ml<br>
                                                Precio: $25<br>
                                                <form action="bebida3.php">
                                                    <div align="center">
                                                        <button type="submit" name="bebida3" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Taza de café 255 ml<br>
                                                Precio: $20<br>
                                                <form action="bebida4.php">
                                                    <div align="center">
                                                        <button type="submit" name="bebida4" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

       <!-- ============ Our Bread  ============= -->


        <section id="bread" class=" description_content">
            <div  class="bread background_content">
                <h1>POSTRES</h1>
            </div>

            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                            <section id ="postres" class="description_content">
                                <h1>Nuestros postres</h1>
                                <br>
                                <br>
                                <img src="images/icons/postres.png" width="40">
                                <br>
                                <br>
                                <br>
                                <table align="center">
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
                                                Precio: $35<br>
                                                <form action="postre1.php">
                                                    <div align="center">
                                                        <button type="submit" name="postre1" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Pastel de chocolate<br>
                                                Precio: $30<br>
                                                <form action="postre2.php">
                                                    <div align="center">
                                                        <button type="submit" name="postre2" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Helado de vainilla<br>
                                                Precio: $20<br>
                                                <form action="postre3.php">
                                                    <div align="center">
                                                        <button type="submit" name="postre3" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                Tarta de guayaba<br>
                                                Precio: $25<br>
                                                <form action="postre4.php">
                                                    <div align="center">
                                                        <button type="submit" name="postre4" class="text-center form-boton form-btn2">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
        <!-- ============ Featured Dish  ============= -->

        <section id="featured" class="description_content">
            <div  class="featured background_content">
                <h1>ESPECIALIDADES</h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>¡Lo más pedido!</h1>
					<!--
						<div class="icon-hotdog fa-2x"></div>
					-->
					<br>
                    <br>
                    <img src="images/icons/especialidades.png" width="40">
                    <br>
                    <br>
                    <p class="desc-text">Cada platillo es elaborado a mano al momento de ser ordenado, usando los mejores ingredientes para brindarte un platillo de la mejor calidad. En esta galería encontrarás nuestros platillos estrella.</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/images/slider1.jpg"  alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/images/slider2.jpg" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/images/slider3.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/images/slider4.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/images/slider5.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>

            <br>
            <br>
            <hr>
            <br>
            <br>
            <section id="asistencia" class="description_content">
                <h1 class="titleForm">Asistencia</h1>
                <br>
                <br>
                <br>
                <br>
                <table align="center">
                    <tr>
                        <td>
                            <form action="llamar.php">
                                <div align="center">
                                    <button type="submit" name="llamar" class="text-center form-boton form-btn2">Llamar al mesero</button>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="ticket.php">
                                <div align="center">
                                    <button type="submit" name="ticket" class="text-center form-boton form-btn2">Ver ticket</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </section>
        </section>
        
        <br>
        <br>

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Ingeniería de software I</p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Volver <a href="#top">arriba</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Alonne</p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>