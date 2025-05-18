<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultas con Informacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!---link de data table en css--->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">Consultas con Join</h1><!--muestra las consultas aplicando el join--->
    <br>

    <div class="container bg-light p-3">
        <h1>Lista de Productos aplicando join</h1>
        <table class="table table-bordered" id="myTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id_producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include "conexion.php";
                $sql = $conexion->query("SELECT p.id_producto,p.nombre,c.categoria,m.marca,p.descripcion,p.precio FROM producto p JOIN categoria c ON p.id_categoria=c.id_categoria JOIN marca m ON p.id_marca=m.id_marca");
                while ($row = $sql->fetch_array()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id_producto'] ?></th>
                        <th scope="row"><?php echo $row['nombre'] ?></th>
                        <th scope="row"><?php echo $row['categoria'] ?></th>
                        <th scope="row"><?php echo $row['marca'] ?></th>
                        <th scope="row"><?php echo $row['descripcion'] ?></th>
                        <th scope="row"><?php echo $row['precio'] ?></th>
                        
                    </tr>
                    
                    
                <?php
                }


                ?>

            </tbody>
        </table>


    </div>

    <div class="container">
        <a href="index.php" class="btn btn-dark">Regresar</a>
    </div>

    <!------->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--script que incluye la libreria de cdnjs jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!--scrip de data table en javascript-->
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>


</body>

</html>