<?php
    include('conexion.php');

    //Validar recepción de datos
    if(!empty($_POST['id'])) {

        //Recibir datos
        $id = $_POST['id'];
        $precio = $_POST['precio'];

        //Validar datos


        //Guardar a la DB
        $sql = "UPDATE platillos SET precio='$precio' WHERE id='$id'";

        //Use exec() because no results are returned
        $conn->exec($sql);

        //Redireccionar
        header('Location: admin_menu.php');

    }
    else {
        echo "No hay datos enviados";
    }

?>