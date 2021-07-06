<?php
    include('conexion.php');

    $platillo = "Limonadas";
    $descripcion = "Limonada 455 ml";
    $precio = "20";

    //Guardar a la DB
    $sql = "INSERT INTO pedidos (platillo, descripcion, precio) VALUES ('$platillo', '$descripcion', '$precio')";

    //Use exec() because no results are returned
    $conn->exec($sql);

    //Redireccionar
    header('Location: finalizar.php');

?>