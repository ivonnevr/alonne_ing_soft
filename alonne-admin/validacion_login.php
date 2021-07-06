<?php
    header("Access-Control-Allow-Origin: http://localhost");
    
    $bd = include_once "db.php";

    $user = $_POST["user"];
    $password = $_POST["password"];

    $sentencia = $bd->prepare("SELECT * FROM usuarios u WHERE u.user = '$user' AND u.passwords = '$password'");
    $sentencia->execute();
    $data = $sentencia->fetchObject();

    //print_r($data);

    // if($data->id_rol == 1) {
    //     header('location: index_admin.php');
    // }
    // else if($data->id_rol == 2) {
    //     header('location: index_jefe_meseros.php');
    // }
    // else if($data->id_rol == 3) {
    //     header('location: index_meseros.php');
    // }
    // else {
    //     header('location: index.php');
    //     echo "Error";
    //     echo "<script>
    //             alert('Mensaje');
    //             window.location= 'index.php'
    //     </script>";
    // }

    // switch($data->id_rol) {
    //     case 1:
    //         header('location: index_admin.php');
    //         break;
    //     case 2:
    //         header('location: index_jefe_meseros.php');
    //         break;
    //     case 3:
    //         header('location: index_meseros.php');
    //         break;
    //     default:
    //         echo "Error";
    // }

    if(empty($data)) {
        echo "
            <script>
                alert('Usuario y/o contraseña incorrectos, inténtelo de nuevo.');
                window.location= 'index.php';
            </script>";
    }
    else {
        switch($data->id_rol) {
            case 1:
                header('location: index_admin.php');
                break;
            case 2:
                header('location: index_jefe_meseros.php');
                break;
            case 3:
                header('location: index_meseros.php');
                break;
        }
    }

?>