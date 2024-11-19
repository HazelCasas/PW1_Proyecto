<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuevo usuario</title>
        <link rel="stylesheet" href="Materialize/css/materialize.css">
    </head>
    <body>
        <div class="container">
            <div class="col s12 m6 center">
                <div class="card">
                    <div class="card-content">
                        <header>
                            <h1 class="center-align">Nuevo usuario</h1>
                        </header>
                        <form action="loginEnviarNU.php" method = "POST">
                            <hr>
                                
                                    <div class="input-field">
                                        <input type = "text" name = "no_empleado" placeholder = "Ingresa tu número de empleado.">
                                    </div>
                                    <div class="input-field">
                                        <input type="password" name = "clave" placeholder="Crea una contraseña.">
                                    </div> 
                                <br>
                                <div class="card-action center">
                                    <button type = "submit" name = submit class="btn waves-effect waves-light">Crear usuario</button>
                                </div>
                            </hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="center">
            <br><button onclick = "window.location.href = 'loginIndex.php'"  class="btn-flat waves effect">Volver</button>
        </div>    
    </body>
</html>