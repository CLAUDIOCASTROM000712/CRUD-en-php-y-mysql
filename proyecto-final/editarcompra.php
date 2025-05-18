<?php
include "conexion.php";
$id_compra = $_REQUEST['id_compra'];
$sql = "SELECT * FROM compra WHERE id_compra='$id_compra'";
$query = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_array($query);


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">Editar Compra</h1>
    <br>

    <div class="container">
        <form action="editar_compra.php" method="post">
            <input type="hidden" name="id_compra" value="<?php echo $fila['id_compra']?>">
            <div class="mb-3">
                <label class="form-label">Tipo_Compra</label>
                <input type="text" class="form-control" placeholder="Tipo_Compra" name="tipo_compra" value="<?php echo $fila['tipo_compra'] ?>">

            </div>

            <div class="mb-3">
                <label class="form-label">Id_cliente</label>
                <input type="numeric" class="form-control" placeholder="Id_cliente" name="id_cliente" value="<?php echo $fila['id_cliente'] ?>">

            </div>

            <div class="mb-3">
                <label class="form-label">Id_producto</label>
                <input type="numeric" class="form-control" placeholder="Id_producto" name="id_producto" value="<?php echo $fila['id_producto'] ?>">

            </div>
          
           

            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Editar Compra</button>
                <a href="index_compra.php" class="btn btn-dark">Regresar</a>
            </div>

            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>