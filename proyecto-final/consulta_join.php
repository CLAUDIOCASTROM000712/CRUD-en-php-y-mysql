<?php

    include "conexion.php";
    $sql=$conexion->query("SELECT p.id_producto,p.nombre,c.categoria,m.marca,p.descripcion,p.precio FROM producto p JOIN categoria c ON p.id_categoria=c.id_categoria JOIN marca m ON p.id_marca=m.id_marca");
    while($row=$sql->fetch_array()){
        echo $row['id_producto']."<br>".$row['nombre']." ".$row['categoria']." ".$row['marca']." ".$row['descripcion']." ".$row['precio']."<br><br>";
    }


?>