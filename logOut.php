<?php
    session_start();
    session_destroy();
    header("location: loginIndex.php");
    exit();
?>