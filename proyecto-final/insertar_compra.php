<?php
    include "conexion.php";
    $tipo_compra=$_POST['tipo_compra'];
    $id_cliente=$_POST['id_cliente'];
    $id_producto=$_POST['id_producto'];

    $sql="INSERT INTO compra(tipo_compra,id_cliente,id_producto) VALUES('$tipo_compra','$id_cliente','$id_producto')";
    $query=mysqli_query($conexion,$sql);
    if ($query===TRUE) {
        header("location:index_compra.php");
    }

    


?>