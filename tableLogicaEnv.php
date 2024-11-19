<?php
   include "conexion.php";

    $buscarArticulo = "SELECT * FROM tienda WHERE id = '$_POST[id]'";

    $resultado = $conexion -> query($buscarArticulo);
    $count = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar registros</title>
    <link rel="stylesheet" href="Materialize/css/materialize.css">
</head>
<body>
    <?php
if($count == 1)
    {
    ?>
        <div class="container">
            <div class="card-panel teal red-5">
                <h1 class="center-align">El articulo ya ha sido registrado.</h1>
            </div>                
        </div>
    <?php
    }
    else
    {
        mysqli_query($conexion, "INSERT INTO tienda
        (id, tipo, marca, nombre, precio, stock)
        VALUES (
            '$_POST[id]',
            '$_POST[tipo]',
            '$_POST[marca]',
            '$_POST[nombre]',
            '$_POST[precio]',
            '$_POST[stock]'
        )")
    ?>
        <div class="container">
            <div class="card-panel teal red-5">
                <h1 class="center-align">Registro creado con éxito.</h1>
            </div>                
        </div>       
    <?php
    }
    ?>
    <div class="card-action center">
        <button onclick = "window.location.href = 'tableRegistro.php'" class="btn-flat waves effect">Generar un registro nuevo</button>
        <br><button onclick = "window.location.href = 'tableIndex.php'" class="btn-flat waves effect">Ver registros</button>
    </div>
</body>
</html>