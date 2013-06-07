<?php
    require_once "../objetos/manejadorDB.php";
    $id = $_GET['id'];

    $res = $manejadorDB->eliminarFavorito($id);
    if($res)
    {
        header("Location: ../vistas/principal.php?vista=1");
    }
?>

