<?php
    include('conexion.php');

    //Guardar a la DB
    $sql = "TRUNCATE table asistencias";

    //Use exec() because no results are returned
    $conn->exec($sql);

    //Redireccionar
    header('Location: asistencias_vaciar.php');

?>