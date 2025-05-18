<?php
    include "conexion.php";
    $categoria=$_POST['categoria'];
   

    $sql="INSERT INTO categoria(categoria) VALUES('$categoria')";
    $query=mysqli_query($conexion,$sql);
    if ($query===TRUE) {
        header("location:index_categoria.php");
    }

    


?>