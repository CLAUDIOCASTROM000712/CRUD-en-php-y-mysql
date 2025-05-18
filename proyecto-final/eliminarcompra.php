<?php
    include "conexion.php";
    $id_compra=$_REQUEST['id_compra'];
    $sql="DELETE FROM compra WHERE id_compra='$id_compra'";
    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index_compra.php");
    }

    

?>