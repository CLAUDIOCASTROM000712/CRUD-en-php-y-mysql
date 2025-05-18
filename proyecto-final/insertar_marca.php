<?php
    include "conexion.php";
    $marca=$_POST['marca'];
   

    $sql="INSERT INTO marca(marca) VALUES('$marca')";
    $query=mysqli_query($conexion,$sql);
    if ($query===TRUE) {
        header("location:index_marca.php");
    }

    


?>