<?php
    include "conexion.php";
    $nombre=$_POST['nombre'];
    $id_categoria=$_POST['id_categoria'];
    $id_marca=$_POST['id_marca'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];

    $sql="INSERT INTO producto(nombre,id_categoria,id_marca,descripcion,precio) VALUES('$nombre','$id_categoria','$id_marca','$descripcion','$precio')";
    $query=mysqli_query($conexion,$sql);
    if ($query===TRUE) {
        header("location:index.php");
    }

    


?>