<?php require_once "../objetos/manejadorDB.php"?>
<table width="100%" border="1">
    <thead>
        <th>Direccion</th>
        <th>Categoria</th>
        <th>Valoracion</th>
        <th>Comentario</th>
    </thead>
    <tbody>
    <?php
        $favoritos = $manejadorDB->darOtrosFavoritos($_SESSION['id_usuario']);
        while($fila = pg_fetch_object($favoritos))
        {
            echo "
                <tr>
                  <td>$fila->direccion</td>
                  <td>$fila->categoria</td>
                  <td>$fila->valoracion</td>
                  <td>$fila->comentario</td>
                </tr>
            ";
        }
    ?>
    </tbody>
</table>
