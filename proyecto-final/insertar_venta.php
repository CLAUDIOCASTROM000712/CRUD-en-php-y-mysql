<?php
    include "conexion.php";
    $tipo_venta=$_POST['tipo_venta'];
    $fecha_venta=$_POST['fecha_venta'];
    $nombre_empleado=$_POST['nombre_empleado'];
    
    

    $sql="INSERT INTO venta(tipo_venta,fecha_venta,nombre_empleado) VALUES('$tipo_venta','$fecha_venta','$nombre_empleado')";
    $query=mysqli_query($conexion,$sql);
    if ($query===TRUE) {
        header("location:index_venta.php");
    }

    


?>