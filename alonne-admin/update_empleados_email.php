<?php
    include('conexion.php');

    //Validar recepción de datos
    if(!empty($_POST['id'])) {

        //Recibir datos
        $id = $_POST['id'];
        $email = $_POST['email'];

        //Validar datos


        //Guardar a la DB
        $sql = "UPDATE empleados SET correo='$email' WHERE id='$id'";

        //Use exec() because no results are returned
        $conn->exec($sql);

        //Redireccionar
        header('Location: index_admin.php');

    }
    else {
        echo "No hay datos enviados";
    }

?>