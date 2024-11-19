<?php
    $host_db = "127.0.0.1:3307";
    $user_db = "root";
    $pass_db = "";
    $db_name = "tienda_musica";

    $conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

    if($conexion->connect_error)
    {
        echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
    } 
?>