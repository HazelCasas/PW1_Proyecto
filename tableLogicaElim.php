<?php
    require "conexion.php";
    
    $deleteArticulo = "DELETE FROM tienda WHERE ID = ?";
    $stm_delete = $conexion->prepare($deleteArticulo);
    $stm_delete -> bind_param("i",$_POST['id']);
    $deleteSuccess = $stm_delete->execute();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eliminar registro.</title>
        <link rel="stylesheet" href="Materialize/css/materialize.css">
    </head>
    <body>
        <?php 
        if ($deleteSuccess && $stm_delete->affected_rows > 0) {
        ?>
            <div class="container">
                <div class="card-panel teal red-5">
                    <h1 class="center-align">El registro se eliminó correctamente.</h1>
                </div>                
            </div>
        <?php 
        } else {
        ?>
            <div class="container">
                <div class="card-panel teal red-5">
                    <h1 class="center-align">Error: No se pudo eliminar el registro.</h1>
                </div>                
            </div>
        <?php
        }
        ?>
        <div class="card-action center">
            <button onclick = "window.location.href = 'tableIndex.php'" class="btn-flat waves effect">Ver registros</button>
        </div>
    </body>
</html>