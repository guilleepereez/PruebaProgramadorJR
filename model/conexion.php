<?php

class ConexionBD
{
    public function get_conexion()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $user = "root";
            $pass = "root";
            $host = "localhost";
            $db = "testPrueba";
        } else {
            $user = "root";
            $pass = "root";
            $host = "localhost";
            $db = "testPrueba";
        }
        $conexion = new PDO("mysql:host=$host; dbname=$db;", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        if (!$conexion) {
            echo "<h1>Error en la conexión</h1>";
            exit();
        } else {
            echo "<h1>Conexion</h1>";
            return $conexion;
        }
    }
}
?>