<?php

    include "conexion.php";
    $id_venta=$_POST['id_venta'];
    $tipo_venta=$_POST['tipo_venta'];
    $fecha_venta=$_POST['fecha_venta'];
    $nombre_empleado=$_POST['nombre_empleado'];
    

    $sql="UPDATE venta SET tipo_venta='$tipo_venta',fecha_venta='$fecha_venta',nombre_empleado='$nombre_empleado' WHERE id_venta='$id_venta'";

    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index_venta.php");
    }

?>