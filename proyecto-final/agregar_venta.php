<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Venta</h1>
    <br>

    <div class="container">
        <form action="insertar_venta.php" method="POST">
            <div class="mb-3">
                
                <input type="text" class="form-control" placeholder="Tipo_Venta" name="tipo_venta">
              
            </div>
            <div class="mb-3">
                
                <input type="date" class="form-control" placeholder="Fecha_Venta" name="fecha_venta">
              
            </div>
            <div class="mb-3">
                
                <input type="text" class="form-control" placeholder="Nombre_Empleado" name="nombre_empleado">
              
            </div>
            

            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Agregar Venta</button>
                <a href="index_venta.php" class="btn btn-dark">Regresar</a>
            </div>
            
           
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>