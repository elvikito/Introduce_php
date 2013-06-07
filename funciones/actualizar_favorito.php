<?php
    require_once "../objetos/manejadorDB.php";
    $url = $_POST['direccion'];
    $cat = $_POST['categoria'];
    $val = $_POST['valoracion'];
    $com = $_POST['comentario'];
    $id = $_POST['id'];
    $res = $manejadorDB->actualizarFavorito($url, $cat, $val, $com, $id);
    if($res)
    {
        header("Location: ../vistas/principal.php?vista=1");
    }
?>