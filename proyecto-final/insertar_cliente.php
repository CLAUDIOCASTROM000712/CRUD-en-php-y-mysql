<?php
    include "conexion.php";
    $nombre_cliente=$_POST['nombre_cliente'];
    $correo=$_POST['correo'];
    $domicilio=$_POST['domicilio'];
    //$id_producto=$_POST['id_producto'];
    $id_venta=$_POST['id_venta'];
    //$id_compra=$_POST['id_compra'];

    $sql="INSERT INTO cliente(nombre_cliente,correo,domicilio,id_venta) VALUES('$nombre_cliente','$correo','$domicilio','$id_venta')";
    $query=mysqli_query($conexion,$sql);
    if ($query===TRUE) {
        header("location:index_cliente.php");
    }

    


?>