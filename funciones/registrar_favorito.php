<?php
    require_once "../objetos/manejadorDB.php";
    $dir = $_POST['direccion'];
    $cat = $_POST['categoria'];
    $val = $_POST['valoracion'];
    $com = $_POST['comentario'];

    $res = $manejadorDB->registrarFavorito($dir, $cat, $val, $com);
    if($res)
    {
        header("Location: ../vistas/principal.php?vista=1");
    }
?>