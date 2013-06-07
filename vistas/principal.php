<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Pagina</title>
  <link type="text/css" rel="stylesheet" href="../css/configuracion.css" />
</head>

<body>

    <header>
        <center>Webs Favoritas</center>
        Bienvenido:<?php echo $_SESSION['usuario']." ".$_SESSION['apellido'];?>
    </header>
    <nav>
         <!-- aqui pondremos los menus -->
         <ul>
            <li><a href="../vistas/principal.php?vista=1">Inicio</a></li>
            <?php if($_SESSION['permisos'] == 'administrador'){?>
            <li><a href="../vistas/principal.php?vista=3">Usuarios</a></li>
            <?php } ?>
            <li><a href="../funciones/cerrar_sesion.php">Cerrar Cesion</a></li>
         </ul>
    </nav>
    <section>
         <!-- aqui los diferentes cuerpos -->
         <?php include_once('../funciones/manejador_cuerpo.php'); ?>
         <hr />
         <h2>Algunos enlaces que gustan los otros usuarios</h2>
         <?php include_once('social.php'); ?>
    </section>

    <footer>
        <a href="#">footer</a>
    </footer>
</body>

</html>
