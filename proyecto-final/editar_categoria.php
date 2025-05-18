<?php

    include "conexion.php";
    $id_categoria=$_POST['id_categoria'];
    $categoria=$_POST['categoria'];
    

    $sql="UPDATE categoria SET categoria='$categoria' WHERE id_categoria='$id_categoria'";

    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index_categoria.php");
    }

?>