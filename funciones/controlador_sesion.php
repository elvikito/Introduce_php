<?php
    session_start();
    require_once "../objetos/manejadorDB.php";
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $res = $manejadorDB->darUsuario($login, $pass);
    $usuario = pg_fetch_array($res);
    if($usuario)
    {
        $_SESSION['usuario'] = $usuario['nombre'];
        $_SESSION['apellido'] = $usuario['apellido'];
        $_SESSION['permisos'] = $usuario['permisos'];
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        header("Location: ../vistas/principal.php?vista=1");
    }else{
        header("Location: ../index.html");
    }
?>
