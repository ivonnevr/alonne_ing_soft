<?php
    include('conexion.php');

    //Validar recepción de datos
    if(!empty($_POST['nombre_platillo'])) {

        //Recibir datos
        $nombre = $_POST['nombre_platillo'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $tipo = $_POST['tipo'];
		$imagen = $_POST['imagen'];

        //Validar datos


        //Guardar a la DB
        $sql = "INSERT INTO platillos (nombre, descripcion, precio, tipo, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$tipo', '$imagen')";

        //Use exec() because no results are returned
        $conn->exec($sql);

        //Redireccionar
        header('Location: admin_menu.php');

    }
    else {
        echo "No hay datos enviados";
    }

?>