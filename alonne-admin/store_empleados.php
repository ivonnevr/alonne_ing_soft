<?php
    include('conexion.php');

    //Validar recepción de datos
    if(!empty($_POST['nombre_empleado'])) {

        //Recibir datos
        $nombre = $_POST['nombre_empleado'];
        $apellidos = $_POST['apellidos_empleado'];
        $direccion = $_POST['direccion_empleado'];
        $telefono = $_POST['telefono_empleado'];
        $email = $_POST['email_empleado'];
        $puesto = $_POST['puesto_empleado'];

        //Validar datos


        //Guardar a la DB
        $sql = "INSERT INTO empleados (nombre, apellidos, direccion, telefono, correo, puesto) VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', '$email', '$puesto')";

        //Use exec() because no results are returned
        $conn->exec($sql);

        //Redireccionar
        header('Location: index_admin.php');

    }
    else {
        echo "No hay datos enviados";
    }

?>