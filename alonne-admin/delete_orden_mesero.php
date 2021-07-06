<?php
    include('conexion.php');

    //Validar recepción de datos
    if(!empty($_POST['id'])) {

        //Recibir datos
        $id = $_POST['id'];

        //Validar datos


        //Guardar a la DB
        $sql = "DELETE FROM pedidos WHERE id='$id'";

        //Use exec() because no results are returned
        $conn->exec($sql);

        //Redireccionar
        header('Location: index_meseros.php');

    }
    else {
        echo "No hay datos enviados";
    }

?>