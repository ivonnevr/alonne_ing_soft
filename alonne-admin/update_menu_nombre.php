<?php
    include('conexion.php');

    //Validar recepción de datos
    if(!empty($_POST['id'])) {

        //Recibir datos
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];

        //Validar datos


        //Guardar a la DB
        $sql = "UPDATE platillos SET nombre='$nombre' WHERE id='$id'";

        //Use exec() because no results are returned
        $conn->exec($sql);

        //Redireccionar
        header('Location: admin_menu.php');

    }
    else {
        echo "No hay datos enviados";
    }

?>