<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>
    <link rel="stylesheet" href="Materialize/css/materialize.css">
</head>
<body>
    <header class="center-align">
        <h1 style="text-align: center;">Nuevo registro</h1>        
    </header>
    <div class="container">
        <form action="tableLogicaEnv.php" method = "post">
            <hr>
                <div class="center">
                    <div class="input-field">
                        <input type="text" name = "id" placeholder = "Ingresa el identificador.">
                    </div>
                    <div class="input-field">
                        <select name = "tipo">
                            <option value="default" disabled selected>Seleccionar...</option>
                            <option value="Guitarra acústica">Guitarra acústica</option>
                            <option value="Guitarra eléctrica">Guitarra eléctrica</option>
                            <option value="Guitarra electroacústic">Guitarra electroacústica</option>
                            <option value="Bajo eléctrico">Bajo eléctrico</option>
                            <option value="Bajo acústico">Bajo acústico</option>
                            <option value="Teclado">Teclado</option>
                            <option value="Sintetizador">Sintetizador</option>
                            <option value="Piano">Piano</option>
                            <option value="Bateria">Bateria</option>
                            <option value="Percuciones">Percuciones</option>
                            <option value="Acordeón">Acordeón</option>
                            <option value="Orquesta">Orquesta</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <input type="text" name = "marca" placeholder = "Ingresa la marca del articulo.">
                    </div>
                    <div class="input-field">
                        <input type="text" name = "nombre" placeholder = "Ingresa el nombre del articulo.">
                    </div>
                    <div class="input-field">
                        <input type="text" name = "precio" placeholder = "Ingresa el precio del articulo.">
                    </div>
                    <div class="input-field">
                        <input type="text" name = "stock" placeholder = "Ingresa la cantidad en stock.">
                    </div>
                   
                </div>
                <div class="card-action center">
                    <button type = "submit" name = submit class="btn waves-effect waves-light">Enviar registro</button>
                </div>  
            </hr>          
        </form>
    </div>
    <div class= "card-action center">
        <br><button onclick = "window.location.href = 'tableIndex.php'" class="btn-flat waves effect">Ver registros</button>
    </div>
    

    <script src="Materialize/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded',function(){
            var elems = document.querySelectorAll('select');
            M.FormSelect.init(elems);
        });
    </script>
</body>
</html>

