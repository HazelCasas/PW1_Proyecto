<?php
    require "conexion.php";
    
    $consulta_sql = "SELECT * FROM tienda";
    $resultado = $conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado);
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="Materialize/css/materialize.css">
</head>
    <body>
        <header>
            <h1 style='text-align: center;'>Registros</h1>        
        </header>
        <?php if($count > 0){ ?>
        <div class="container">    
            <table class="highlight centered">
                <tr>
                    <th>ID</th>
                    <th>Tipo de instrumento</th>
                    <th>Marca del instrumento</th>
                    <th>Nombre del intrumento</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_assoc($resultado))
                    {
                        echo"<tr>";
                        echo"<td>".$row['id']."</td>";
                        echo"<td>".$row['tipo']."</td>";
                        echo"<td>".$row['marca']."</td>";
                        echo"<td>".$row['nombre']."</td>";
                        echo"<td>".$row['precio']."</td>";
                        echo"<td>".$row['stock']."</td>";
                        echo"</tr>";
                    }
                ?>
            </table>
            <?php }else{ ?>
                <div class="container">
                    <div class="card-panel teal red-2">
                        <h3 class="center-align">Tabla sin datos: Ingresa un nuevo registro.</h3>
                    </div>
                </div>
                            <?php } ?>
                <div class="card-action center">
                    <div>   
                        <br><button onclick = "window.location.href = 'tableRegistro.php'"class = "btn waves-effect waves-light">Nuevo registro</button>
                        <br><br><button onclick = "window.location.href = 'tableElimReg.php'" class = "btn waves-effect waves-light">Eliminar registro</button>
                    </div>
                    <br><br>
                    <div class = "center">
                        <button onclick = "window.location.href = 'logOut.php'" class="btn-flat waves effect">Cerrar sesión</button>
                    </div>
                </div>
        </div>    
    </body>
</html>