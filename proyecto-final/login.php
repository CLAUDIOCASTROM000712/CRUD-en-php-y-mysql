<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <form action="validarlogin.php" method="post">
        <h1>Iniciar Sesion</h1>
        <hr>
        
        <hr>
        <i class="fa-solid fa-user"></i>
        <label for="nombre_usuario">Usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="nombre de usuario" require>

        

        <i class="fa-solid fa-unlock"></i>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" placeholder="password" require>

        <hr>
        
        <button type="submit" class="btn btn-success">Iniciar sesión</button>


        <!--<input type="submit" value="iniciar sesion" class="btn btn-success">-->
        <!---<a href="index.php" class="btn btn-success">Iniciar Sesion</a>--->
        
        <!---<a href="insertar_usuario.php" class="btn btn-success">iniciar sesion</a>-->
        <!---<a href="crear_cuenta.php">crear cuenta</a>-->

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>