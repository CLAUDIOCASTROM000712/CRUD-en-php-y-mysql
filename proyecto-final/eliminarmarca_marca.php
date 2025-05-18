<?php
    include "conexion.php";
    $id_marca=$_REQUEST['id_marca'];
    $sql="DELETE FROM marca WHERE id_marca='$id_marca'";
    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index_marca.php");
    }

    

?>