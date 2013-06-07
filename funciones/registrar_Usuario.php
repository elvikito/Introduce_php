<?php
require_once "../objetos/manejadorDB.php";
    $log = $_POST['login'];
    $pas = $_POST['password'];
    $nom = $_POST['nombre'];
    $ap = $_POST['apellido'];
    $ed = $_POST['edad'];
    $res = $manejadorDB->registrarUsuario($log, $pas, $nom, $ap,$ed);
    if($res)
    {
        header("Location: ../vistas/principal.php?vista=1");
    }
?>
