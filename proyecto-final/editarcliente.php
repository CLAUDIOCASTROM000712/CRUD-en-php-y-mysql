<?php
include "conexion.php";
$id_cliente = $_REQUEST['id_cliente'];
$sql = "SELECT * FROM cliente WHERE id_cliente='$id_cliente'";
$query = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_array($query);


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">Editar Cliente</h1>
    <br>

    <div class="container">
        <form action="editar_cliente.php" method="post">
            <input type="hidden" name="id_cliente" value="<?php echo $fila['id_cliente']?>">
            <div class="mb-3">
                <label class="form-label">Nombre_Cliente</label>
                <input type="text" class="form-control" placeholder="Nombre_Cliente" name="nombre_cliente" value="<?php echo $fila['nombre_cliente'] ?>">

            </div>
            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" class="form-control" placeholder="Correo" name="correo" value="<?php echo $fila['correo'] ?>">

            </div>
            <div class="mb-3">
                <label class="form-label">Domicilio</label>
                <input type="text" class="form-control" placeholder="Domicilio" name="domicilio" value="<?php echo $fila['domicilio'] ?>">

            </div>

           

            <div class="mb-3">
                <label class="form-label">Id_venta</label>
                <input type="numeric" class="form-control" placeholder="Id_venta" name="id_venta" value="<?php echo $fila['id_venta'] ?>">

            </div>

           
           

            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Editar Producto</button>
                <a href="index_cliente.php" class="btn btn-dark">Regresar</a>
            </div>

            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>