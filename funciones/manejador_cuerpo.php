<?php
    $vista = $_GET['vista'];
    if($vista == 1)
    {
        include_once ('../vistas/favoritos.php');
    }else if ($vista == 2){
        include_once ('../vistas/v_actualizar_favoritos.php');
    }
?>