<?php
    include('conexion.php');

    $platillo = "Pizze";
    $descripcion = "Mozarella y peperoni";
    $precio = "150";

    //Guardar a la DB
    $sql = "INSERT INTO pedidos (platillo, descripcion, precio) VALUES ('$platillo', '$descripcion', '$precio')";

    //Use exec() because no results are returned
    $conn->exec($sql);

    //Redireccionar
    header('Location: finalizar.php');

?>