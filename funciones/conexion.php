<?php
$user = 'postgres';
$passwd = 'postgres';
$db = 'web';
$port = 5432;
$host = 'localhost';
$cadenade_conec = "host=$host port=$port dbname=$db user=$user password=$passwd";
$conexion = pg_connect($cadenade_conec) or die ("Error de conexion a la base de datos ". pg_last_error());
echo "Conexion exitosa <hr>";
?>
