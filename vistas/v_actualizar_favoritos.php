<?php
    require_once "../objetos/manejadorDB.php";
    $respuesta = $manejadorDB->darFavorito($_GET['id']);
    $categorias = $manejadorDB->darCategorias();
    $favorito = pg_fetch_object($respuesta);
?>
<form action="../funciones/actualizar_favorito.php" method="post">
    <table cellpadding="10">
        <tr>
            <td>Direccion:</td>
            <td><input type="text" name="direccion" value='<?php echo $favorito->direccion; ?>'/></td>
        </tr>
        <tr>
            <td>Categoria:</td>
            <td><select name="categoria">
            <?php
                foreach($categorias as $cat)
                {
                    if($cat == $favorito->categoria)
                    {
                        echo "<option value='$cat' selected=selected>$cat</option>";
                    }else{
                        echo "<option value='$cat'>$cat</option>";
                    }
                }
            ?>
            </select></td>
        </tr>
        <tr>
            <td>Valoracion:</td>
            <td><input type="text" name="valoracion" value='<?php echo $favorito->valoracion; ?>'/></td>
        </tr>
        <tr>
            <td>Comentario:</td>
            <td><input type="text"name="comentario" value='<?php echo $favorito->comentario; ?>'/></td>
        </tr>
    </table>
    <input type="hidden" name="id" value="<?php echo $favorito->id_favoritos; ?>"/>
    <input type="submit" value="Guardar Cambios"/>
</form>