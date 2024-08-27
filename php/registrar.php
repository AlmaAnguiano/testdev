<?php
include 'conexion.php';
//Recibir los datos y almacenarlos en variables
$name = $_POST["name"];
$correo = $_POST["email"];
$password = $_POST["password"];
$comida_favorita = $_POST["comida_favorita"];
$artista_favorito = $_POST["artista_favorito"];
$lugar_favorito = $_POST["lugar_favorito"];
$color_favorito = $_POST["color_favorito"];


//Consulta para insertar
$insertar = "INSERT INTO tb_usuarios(name, email, password, comida_favorita, artista_favorito, Lugar_favorito,color_favorito) VALUES ('$', '$name', '$email', '$password', '$comida_favorita', '$artista_favorito', '$lugar_favorito','$color_favorito')";
//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}else{
	echo 'Usuario registrado exitosamente';
}
//Cerrrar conexion
mysqli_close($conexion);
