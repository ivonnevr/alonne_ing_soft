<?php
    include('conexion.php');

    //Guardar a la DB
    $sql = "TRUNCATE table pedidos";

    //Use exec() because no results are returned
    $conn->exec($sql);

    //Redireccionar
    header('Location: vaciar_pedidos.php');

?>