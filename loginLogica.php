<?php
    require 'conexion.php';
    session_start();

    $no_empleado = $_POST['no_empleado'];
    $clave = $_POST['clave'];

    $q = "SELECT COUNT(*) AS contar FROM login WHERE no_empleado = '$no_empleado' and clave = '$clave'";
    $consulta = mysqli_query($conexion, $q);
    $array = mysqli_fetch_array($consulta);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuario nuevo</title>
        <link rel="stylesheet" href="Materialize/css/materialize.css">
    </head>
    <body>
        <?php
            if($array['contar'] > 0)
            {
                $_SESSION['username'] = $no_empleado;
                header('location: tableIndex.php');
            }
            else
            { 
        ?>
            <div class="container">
                <div class="card-panel teal red-5">
                    <h1 class="center-align">Usuario no reconocido, ingresa un usuario válido.</h1>
                </div>                
            </div>
        <?php
            }
        ?>
        <div class="card-action center">
            <button onclick = "window.location.href = 'loginIndex.php'" class="btn-flat waves effect">Iniciar sesión</button>
        </div>
    </body>
    </html>