<?php require_once "../objetos/manejadorDB.php"?>
<table width="100%" border="1">
    <thead>
        <th>Login</th>
        <th>Password</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Acciones</th>
    </thead>
    <tbody>
      <?php
      //
      $lista= $manejadorDB->ListaUsuario($_SESSION['id_usuario']);
       while($fila = pg_fetch_object($lista))
             {
                  echo "
                      <tr>
                        <td>$fila->login</td>
                        <td>$fila->password</td>
                        <td>$fila->nombre</td>
                        <td>$fila->apellido</td>
                        <td>$fila->edad</td>
                        <td>
                        <a href='principal.php?id=$fila->id_favoritos&vista=2'>Actualizar</a>
                        <a href='../funciones/eliminar_favorito.php?id=$fila->id_favoritos'>Eliminar</a>
                        </td>
                      </tr>
                  ";
              }
          ?>
    <form action="../funciones/registrar_Usuario.php" method="post">
        <tr>
            <td><input type="text" placeholder="nuevo dato" name="login"/></td>
            <td><input type="password"placeholder="nuevo dato" name="password"/></td>
            <td><input type="text" placeholder="nuevo dato" name="nombre"/></td>
            <td><input type="text" placeholder="nuevo dato" name="apellido"/></td>
            <td><input type="text" placeholder="nuevo dato" name="edad"/></td>
            <td><input type="submit" value="Registrar"/></td>
        </tr>
    </form>
    </tbody>
</table>