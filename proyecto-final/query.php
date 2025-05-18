<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>

<body>
    <h1 class="bg-black p-2 text-white text-center">Consulta</h1>
    <br>

    <br>
    <div class="container bg-light p-3">
        <h1>lista de informacion de los clientes</h1>
        <table class="table table-bordered" id="myTable">
            <thead class=" table-dark">
            <tr>
                <th scope="col">Id_Compra</th>
                <th scope="col">Nombre_Cliente</th>
                <th scope="col">Nombre</th>
                
            </tr>
            </thead>
            <tbody>
                <?php

                include "conexion.php";
                $sql = $conexion->query("SELECT comp.id_compra,c.nombre_cliente,p.nombre FROM compra comp JOIN producto p ON comp.id_producto=p.id_producto JOIN cliente c ON comp.id_cliente=c.id_cliente");
                while ($row = $sql->fetch_array()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id_compra'] ?></th>
                        <th scope="row"><?php echo $row['nombre_cliente'] ?></th>
                        <th scope="row"><?php echo $row['nombre'] ?></th>
                        

                    </tr>


                <?php
                }


                ?>
            </tbody>
        </table>
    </div>

    <!---------------------------------------------------------------------------->

    <br>
    <div class="container bg-light p-3">
        <h1>Otras Consultas</h1>
        <table class="table table-bordered" id="myTable">
            <thead class=" table-dark">
            <tr>
                <th scope="col">Id_Producto</th>
                <th scope="col">Nombre</th>
                
                
            </tr>
            </thead>
            <tbody>
                <?php

                include "conexion.php";
                $sql = $conexion->query("SELECT p.id_producto,p.nombre FROM producto p LEFT JOIN compra c ON p.id_producto=c.id_producto WHERE c.id_producto IS NULL");
                while ($row = $sql->fetch_array()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id_producto'] ?></th>
                        
                        <th scope="row"><?php echo $row['nombre'] ?></th>
                        

                    </tr>


                <?php
                }


                ?>
            </tbody>
        </table>
    </div>

     <!---------------------------------------------------------------------------->

     <br>
    <div class="container bg-light p-3">
        
        <table class="table table-bordered" id="myTable">
            <thead class=" table-dark">
            <tr>
                <th scope="col">Id_Producto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Tipo_Compra</th>
                
            </tr>
            </thead>
            <tbody>
                <?php

                include "conexion.php";
                $sql = $conexion->query("SELECT producto.id_producto,producto.nombre,producto.precio,compra.tipo_compra FROM producto  LEFT JOIN compra  ON producto.id_producto=compra.id_producto");
                while ($row = $sql->fetch_array()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id_producto'] ?></th>
                        
                        <th scope="row"><?php echo $row['nombre'] ?></th>

                        <th scope="row"><?php echo $row['precio'] ?></th>
                        
                        <th scope="row"><?php echo $row['tipo_compra'] ?></th>
                        

                    </tr>


                <?php
                }


                ?>
            </tbody>
        </table>
    </div>



    <br>
    <div class="container">
        <a href="index_cliente.php" class="btn btn-dark">Regresar</a>
    </div>

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