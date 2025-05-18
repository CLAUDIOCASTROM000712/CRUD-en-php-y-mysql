<?php
    include "conexion.php";
    $id_venta=$_REQUEST['id_venta'];
    $sql="DELETE FROM venta WHERE id_venta='$id_venta'";
    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index_venta.php");
    }

    

?>