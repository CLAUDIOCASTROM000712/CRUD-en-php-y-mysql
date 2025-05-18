<?php

    include "conexion.php";
    $id_cliente=$_POST['id_cliente'];
    $nombre_cliente=$_POST['nombre_cliente'];
    $correo=$_POST['correo'];
    $domicilio=$_POST['domicilio'];
    //$id_producto=$_POST['id_producto'];
    $id_venta=$_POST['id_venta'];
    //$id_compra=$_POST['id_compra'];

    $sql="UPDATE cliente SET nombre_cliente='$nombre_cliente',correo='$correo',domicilio='$domicilio',id_venta='$id_venta' WHERE id_cliente='$id_cliente'";

    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index_cliente.php");
    }

?>