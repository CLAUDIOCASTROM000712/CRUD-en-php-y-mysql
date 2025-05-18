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

    <form action="iniciar_sesion.php" method="post">
        <h1>Iniciar Sesion</h1>
        <hr>
        <?php
            if (isset($_GET['error'])) {
                ?>
                <p class="error">
                    <?php
                        echo $_GET['error'];
                    ?>

                </p>
        <?php    
            }
        ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario:</label>
        <input type="text" name="nombre_usuario" placeholder="nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña:</label>
        <input type="password" name="contraseña" placeholder="contraseña">

        <hr>
        <button type="submit">Iniciar Sesion</button>
        <a href="crear_cuenta.php">crear cuenta</a>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>