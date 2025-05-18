<?php
    include "conexion.php";
    $id_producto=$_REQUEST['id_producto'];
    $sql="SELECT * FROM producto WHERE id_producto='$id_producto'";
    $query=mysqli_query($conexion,$sql);

    $fila=mysqli_fetch_array($query);


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">Editar Producto</h1>
    <br>

    <div class="container">
        <form action="editar.php" method="POST">
            <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto']?>">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['nombre']?>">
              
            </div>
            <div class="mb-3">
                <label class="form-label">Id_categoria</label>
                <input type="numeric" class="form-control" placeholder="Id_categoria" name="id_categoria" value="<?php echo $fila['id_categoria']?>">
              
            </div>
            <div class="mb-3">
                <label class="form-label">Id_marca</label>
                <input type="numeric" class="form-control" placeholder="Id_marca" name="id_marca" value="<?php echo $fila['id_marca']?>">
              
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" value="<?php echo $fila['descripcion']?>">
              
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="numeric" class="form-control" placeholder="Precio" name="precio" value="<?php echo $fila['precio']?>">
              
            </div>

            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Editar Producto</button>
                <a href="index.php" class="btn btn-dark">Regresar</a>
            </div>
            
           
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
