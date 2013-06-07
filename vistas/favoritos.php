<?php require_once "../objetos/manejadorDB.php"?>
<table width="100%" border="1">
    <thead>
        <th>Direccion</th>
        <th>Categoria</th>
        <th>Valoracion</th>
        <th>Comentario</th>
        <th>Acciones</th>
    </thead>
    <tbody>
    <?php
      //
        $favoritos = $manejadorDB->favoritosUsuario($_SESSION['id_usuario']);
        while($fila = pg_fetch_object($favoritos))
        {
            echo "
                <tr>
                  <td>$fila->direccion</td>
                  <td>$fila->categoria</td>
                  <td>$fila->valoracion</td>
                  <td>$fila->comentario</td>
                  <td>
                    <a href='principal.php?id=$fila->id_favoritos&vista=2'>Actualizar</a>
                    <a href='../funciones/eliminar_favorito.php?id=$fila->id_favoritos'>Eliminar</a>
                  </td>
                </tr>
            ";
        }
    ?>
    <form action="../funciones/registrar_favorito.php" method="post">
        <tr>
            <td><input type="text" placeholder="nuevo dato" name="direccion"/></td>
            <td><select name="categoria">
              <?php
              $categorias = $manejadorDB->darCategorias();
              foreach($categorias as $cat)
              {
                echo "<option value='$cat'>$cat</option>";
              }
              ?>
            </select></td>
            <td><input type="text" placeholder="nuevo dato" name="valoracion"/></td>
            <td><input type="text" placeholder="nuevo dato" name="comentario"/></td>
            <td><input type="submit" value="Registrar"/></td>
        </tr>
    </form>
    </tbody>
</table>