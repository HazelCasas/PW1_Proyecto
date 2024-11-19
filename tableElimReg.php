<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eliminar articulo</title>
        <link rel="stylesheet" href="Materialize/css/materialize.css">
    </head>
    <body>
        <div class="container">
            <div class="col s12 m6 center">
                <div class="card">
                    <div class="card-content">
                        <header>
                            <h1 class="center-align">Eliminar articulo</h1>
                        </header>
                        <form action="tableLogicaElim.php" method = "POST">
                            <div class="input-field">
                                <input type = "text" name = "id" placeholder = "Ingresa el ID del articulo.">
                            </div>
                            <div class="card-action center">
                                <br><button type = "submit" class = "btn waves-effect waves-light">Eliminar articulo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-action center">
            <button onclick = "window.location.href = 'tableIndex.php'" class="btn-flat waves effect">Ver registros</button>
        </div>
    </body>
</html>