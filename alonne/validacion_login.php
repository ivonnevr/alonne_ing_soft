<?php
    header("Access-Control-Allow-Origin: http://localhost");
    
    $bd = include_once "db.php";

    $user = $_POST["user"];
    $password = $_POST["password"];

    $sentencia = $bd->prepare("SELECT * FROM mesas m WHERE m.id = '$user' AND m.passwords = '$password'");
    $sentencia->execute();
    $data = $sentencia->fetchObject();

    if(empty($data)) {
        echo "
            <script>
                alert('Mesa y/o contraseña incorrectos, inténtelo de nuevo.');
                window.location= 'index.php';
            </script>";
    }
    else {
        switch($data->id) {
            case 1:
                header('location: mesa1.php');
                break;
            case 2:
                header('location: mesa2.php');
                break;
            case 3:
                header('location: mesa3.php');
                break;
            case 4:
                header('location: mesa4.php');
                break;
            case 5:
                header('location: mesa5.php');
                break;
        }
    }

?>