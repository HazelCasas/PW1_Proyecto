<?php
    include "conexion.php";

    $buscarArticulo = "SELECT * FROM login WHERE no_empleado = '$_POST[no_empleado]'";

    $resultado = $conexion -> query($buscarArticulo);
    $count = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo usuario</title>
    <link rel="stylesheet" href="Materialize/css/materialize.css">
</head>
<body>
    <?php
        if($count ==1)
        {
    ?>
        <div class="container">
            <div class="card-panel teal red-5">
                <h1 class="center-align">Este usuario ya ha sido registrado.</h1>
            </div>                
        </div>
    <?php
        }
        else
        {
            mysqli_query($conexion, "INSERT INTO login
            (no_empleado, clave)
            VALUES (
            '$_POST[no_empleado]',
            '$_POST[clave]'
            )");
    ?> 
        <div class="container">
            <div class="card-panel teal red-5">
                <h1 class="center-align">Usuario registrado con éxito.</h1>
            </div>                
        </div>
    <?php
        }
    ?>
    <div class="card-action center">
        <button onclick = "window.location.href = 'loginIndex.php'" class="btn-flat waves effect">Volver</button>
    </div>
</body>
</html>