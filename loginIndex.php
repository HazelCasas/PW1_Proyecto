<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="Materialize/css/materialize.css">
</head>
    <body>
        <div class="container">
            <div class="col s12 m6 center">
                <div class="card">
                    <div class="card-content">
                        <header>
                            <h1 class="center-align">Inicio de Sesión: Hermes Music</h1>
                        </header>
                        <form action = "loginLogica.php" method = "POST">
                            <div class="input-field">
                                <input type="text" name = "no_empleado" placeholder = "Número de empleado">
                                <br>
                            </div>
                            <div class="input-field">
                                <input type="password" name = "clave" placeholder = "Contraseña">
                                <br>
                            </div>
                            <div class="card-action center">
                                <button type = "submit" class = "btn waves-effect waves-light">Iniciar Sesión</button>
                            </div> 
                        </form>
                        <div class="card-action center">
                            <button onclick = "window.location.href = 'loginNuevoUser.php'" class="btn-flat waves effect">Registrarse</button>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>