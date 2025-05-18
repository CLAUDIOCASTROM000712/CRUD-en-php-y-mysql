<?php

    include "conexion.php";
    $id_marca=$_POST['id_marca'];
    $marca=$_POST['marca'];
    

    $sql="UPDATE marca SET marca='$marca' WHERE id_marca='$id_marca'";

    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index_marca.php");
    }

?>