<?php
    session_start();
    session_unset();
    session_destroy();
    if(!isset($_SESSION['id_usuario']))
    {
        header("Location: ../index.html");
    }
?>
