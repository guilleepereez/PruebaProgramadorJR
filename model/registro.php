<?php
include '../../model/conexion.php';

class Registro
{
    public function guardarUsuario($nombre, $apellido, $edad, $email, $habilidadesDeUsuario)
    {
        $modelo = new ConexionBD();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO usuarios (nombre, apellido, edad, email, habilidadesDeUsuario)
            VALUES ('$nombre', '$apellido', '$edad', '$email', '$habilidadesDeUsuario')";
        //$sql = "UPDATE usuarios SET $campo = :valor WHERE usuario=:usuario";
        $statement = $conexion->prepare($sql);
        if (!$statement) {
            return 0;
        } else {
            $statement->execute();
            return 1;
        }
    }   
}
?>