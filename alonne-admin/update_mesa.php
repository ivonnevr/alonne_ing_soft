<?php
    include('conexion.php');

    //Validar recepción de datos
    if(!empty($_POST['id'])) {

        //Recibir datos
        $id = $_POST['id'];
        $idempleado = $_POST['id_empleado'];
        $nombre = $_POST['nombre'];

        //Validar datos


        //Guardar a la DB
        $sql = "UPDATE mesas SET id_mesero='$idempleado', nombre_mesero='$nombre' WHERE id='$id'";

        //Use exec() because no results are returned
        $conn->exec($sql);

        //Redireccionar
        header('Location: admin_mesas.php');

    }
    else {
        echo "No hay datos enviados";
    }

?>