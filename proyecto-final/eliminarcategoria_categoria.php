<?php
    include "conexion.php";
    $id_categoria=$_REQUEST['id_categoria'];
    $sql="DELETE FROM categoria WHERE id_categoria='$id_categoria'";
    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index_categoria.php");
    }

    

?>