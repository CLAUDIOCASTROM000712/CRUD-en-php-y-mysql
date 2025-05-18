<?php

    include "conexion.php";
    $id_compra=$_POST['id_compra'];
    $tipo_compra=$_POST['tipo_compra'];
    $id_cliente=$_POST['id_cliente'];
    $id_producto=$_POST['id_producto'];

    $sql="UPDATE compra SET tipo_compra='$tipo_compra',id_cliente='$id_cliente',id_producto='$id_producto' WHERE id_compra='$id_compra'";

    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index_compra.php");
    }

?>