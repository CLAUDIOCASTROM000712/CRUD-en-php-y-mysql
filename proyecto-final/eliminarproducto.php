<?php
    include "conexion.php";
    $id_producto=$_REQUEST['id_producto'];
    $sql="DELETE FROM producto WHERE id_producto='$id_producto'";
    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index.php");
    }

    

?>