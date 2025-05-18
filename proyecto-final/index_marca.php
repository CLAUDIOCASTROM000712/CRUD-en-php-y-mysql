<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Marcas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!---link de data table en css--->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>

<script>
    function confirmacion(){
        var respuesta = confirm("Desea realmente eliminar el registro");
        if (respuesta==true) {
            return true;
        }else{
            return false;
        }
    }
</script>

<body>
    <h1 class="bg-black p-2 text-white text-center">Crud de Marcas</h1>
    <br>



    <br>
    <div class="container bg-light p-3">
        <h1>Lista de Marcas</h1>
        <table class="table table-bordered" id="myTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id_marca</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>

                <?php

                include "conexion.php";
                $sql = "SELECT * FROM marca";
                $query = mysqli_query($conexion, $sql);


                while ($fila = mysqli_fetch_array($query)) {
                ?>

                    <tr>
                        <th scope="row"><?php echo $fila['id_marca'] ?></th>
                        <th scope="row"><?php echo $fila['marca'] ?></th>

                        <th scope="row">
                            <!---<a href="consultar.php" class="btn btn-info">Consultar</a>--->
                            <a href="editarmarca_marca.php?id_marca=<?php echo $fila['id_marca'] ?>" class="btn btn-warning">Editar</a>
                            <a href="eliminarmarca_marca.php?id_marca=<?php echo $fila['id_marca'] ?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a>

                        </th>
                    </tr>



                <?php
                }

                ?>

            </tbody>

        </table>
    </div>

    <div class="container">
        <a href="agregar_marca.php" class="btn btn-success">Agregar Marca</a>
        <a href="index.php" class="btn btn-dark">Regresar</a>
    </div>



    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--script que incluye la libreria de cdnjs jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--scrip de data table en javascript-->
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>

</html>