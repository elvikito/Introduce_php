<?php
    require_once "../funciones/conexion.php";
    class manejadorDB
    {
        function favoritosUsuario($id)
        {
          //
          //
            global $conexion;
            $sql = "select * from favorito where id_usuario=$id";
            $respuesta = pg_query($conexion, $sql);
            pg_close();
            return $respuesta;
        }
        function ListaUsuario($id){
          global $conexion;
            $sql = "select * from usuario where id_usuario=$id ";
            $respuesta = pg_query($conexion, $sql);
            pg_close();
            return $respuesta;
        }
        function darCategorias()
        {
            $categorias = array("Hobby","Entretenimiento",
                                "Trabajo","Tecnologia",
                                "Salud","Buscador","E-mail");
            return $categorias;
        }

        function registrarFavorito($url, $categoria, $valoracion, $comentario)
        {
            global $conexion;
            $sql = "insert into favorito values(default,1 ,
                    '$url', '$categoria', $valoracion, '$comentario')";
            $res = pg_query($conexion, $sql);
            pg_close();
            return $res;
        }
        function registrarUsuario($log, $pas, $nom, $ap,$ed)
        {
          global $conexion;
          "insert into usuario values(default,
                    '$log', '$pas', $nom, '$ap','$ed')";
          $res = pg_query($conexion, $sql);
          pg_close();
          return $res;
        }

        function eliminarFavorito($id_favorito)
        {
            global $conexion;
            $sql = "delete from favorito where id_favoritos=$id_favorito";
            $res = pg_query($conexion, $sql);
            pg_close();
            return $res;
        }

        function darFavorito($id_favorito)
        {
            global $conexion;
            $sql = "select * from favorito where id_favoritos=$id_favorito";
            $res = pg_query($conexion, $sql);
            pg_close();
            return $res;
        }

        function actualizarFavorito($url, $cat, $val, $com, $id)
        {
            global $conexion;
            $sql = "UPDATE favorito SET direccion='$url', categoria='$cat', valoracion=$val, comentario='$com' where id_favoritos=$id";
            $res = pg_query($conexion, $sql);
            pg_close();
            return $res;
        }

        function darUsuario($login, $pass)
        {
            global $conexion;
            $sql = "select * from usuario where login='$login'
                                    and password='$pass'";
            $respuesta = pg_query($conexion, $sql);
            pg_close();
            return $respuesta;
        }

        function darOtrosFavoritos($id_usuario)
        {
            global $conexion;
            $sql = "select * from favorito where id_usuario!=$id_usuario
                    ORDER BY RANDOM() LIMIT 3;";
            $respuesta = pg_query($conexion, $sql);
            pg_close();
            return $respuesta;
        }
    }
    $manejadorDB = new manejadorDB();
?>