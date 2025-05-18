<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Registrados</title>
    <!--link de bootstrap--->
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
    <h1 class="bg-black p-2 text-white text-center">Clientes</h1>

    <br>
    <div class="container bg-light p-3">
        <h1>listado de clientes</h1>
        <table class="table table-bordered" id="myTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id_cliente</th>
                    <th scope="col">Nombre_Cliente</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Domicilio</th>
                   
                    <th scope="col">Id_venta</th>
                    
                    <th scope="col">Acciones</th>

                </tr>
            </thead>

            <tbody>
                <?php

                include "conexion.php";
                $sql = "SELECT * FROM cliente";
                $query = mysqli_query($conexion, $sql);


                while ($fila = mysqli_fetch_array($query)) {
                ?>

                    <tr>
                        <th scope="row"><?php echo $fila['id_cliente'] ?></th>
                        <th scope="row"><?php echo $fila['nombre_cliente'] ?></th>
                        <th scope="row"><?php echo $fila['correo'] ?></th>
                        <th scope="row"><?php echo $fila['domicilio'] ?></th>
                       
                        <th scope="row"><?php echo $fila['id_venta'] ?></th>
                      
                        <th scope="row">
                            <!---<a href="consultar.php" class="btn btn-info">Consultar</a>--->
                            <a href="editarcliente.php?id_cliente=<?php echo $fila['id_cliente'] ?>" class="btn btn-warning">Editar</a>
                            <a href="eliminarcliente.php?id_cliente=<?php echo $fila['id_cliente'] ?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a>

                        </th>
                    </tr>



                <?php
                }

                ?>


            </tbody>

        </table>




    </div>


    <div class="container">

        <a href="agregar_cliente.php" class="btn btn-success">Agregar Cliente</a>
        <a href="index.php" class="btn btn-dark">Regresar</a>
        <!---<a href="consulta_cliente.php" class="btn btn-info">Informacion</a>-->
        <a href="query.php" class="btn btn-info">otra consulta</a>

    </div>

    <!------->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--script de bootstrap-->
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

    <!--let table = new DataTable('#myTable');-->


</body>

</html>