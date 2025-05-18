<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="proyecto";

    //$conexion=mysqli_connect($host,$user,$pass,$db);
    // Crear la conexión
    $conexion = new mysqli($host, $user, $pass, $db);

    if ($conexion->connect_error) {
        die("La conexión ha fallado: " . $conexion->connect_error);
    }

?>