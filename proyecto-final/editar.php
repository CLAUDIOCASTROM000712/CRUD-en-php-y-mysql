<?php

    include "conexion.php";
    $id_producto=$_POST['id_producto'];
    $nombre=$_POST['nombre'];
    $id_categoria=$_POST['id_categoria'];
    $id_marca=$_POST['id_marca'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];

    $sql="UPDATE producto SET nombre='$nombre',id_categoria='$id_categoria',id_marca='$id_marca',descripcion='$descripcion',precio='$precio' WHERE id_producto='$id_producto'";

    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index.php");
    }

?>