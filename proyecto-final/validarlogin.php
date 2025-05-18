<?php
include 'conexion.php';

$nombre_usuario=$_POST['nombre_usuario'];
//$nombre_completo = $_POST['nombre_completo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario' AND password=md5('$password')";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
  echo "¡Inicio de sesión exitoso!";
  // Aquí puedes redirigir al usuario a otra página
  header("Location:index_cliente.php");
  exit();

} else {
  echo "Credenciales incorrectas";
  // Puedes redirigir al usuario de nuevo al formulario de inicio de sesión
}

$conexion->close();
?>
