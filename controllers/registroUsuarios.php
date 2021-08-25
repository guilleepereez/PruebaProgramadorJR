<?php
include '../model/conexion.php';
/* include './model/registro.php';
include './controllers/registro.php'; */
if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];
	$email = $_POST['email'];
	$habilidadesDeUsuario = $_POST['habilidadesDeUsuario'];

	//insertar datos en la base de datos testPrueba
	$modelo = new ConexionBD();
	$conexion = $modelo->get_conexion();
	$sql = "INSERT INTO usuario (nombre, apellido, edad, email, habilidadesDeUsuario)VALUES ('$nombre', '$apellido', '$edad', '$email', '$habilidadesDeUsuario')";
	if ($conexion->query($sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conexion->error;
	}
} else {
	echo "Error, sin datos";
}
?>