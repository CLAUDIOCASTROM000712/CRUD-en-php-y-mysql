<?php
    include "conexion.php";
    $id_cliente=$_REQUEST['id_cliente'];
    $sql="DELETE FROM cliente WHERE id_cliente='$id_cliente'";
    $query=mysqli_query($conexion,$sql);

    if ($query) {
        header("location:index_cliente.php");
    }

    

?>