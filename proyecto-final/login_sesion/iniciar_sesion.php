<?php
    session_start();
    include "conexion.php";

    if (isset($_POST['nombre_usuario']) && isset($_POST['contraseña'])) {
        function validate($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $nombre_usuario=validate($_POST['nombre_usuario']);
        $contraseña=validate($_POST['contraseña']);

        if (empty($nombre_usuario)) {
            header("location:login_index.php?error=el nombre de usuario es requerido");
            exit();
        }elseif (empty($contraseña)) {
            header("location:login_index.php?error=la contraseña es requerida");
            exit();
        }else{
            $contraseña=md5($contraseña);
            $sql="SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario' AND contraseña=MD5('$contraseña')";
            $result=mysqli_query($conexion,$sql);

            if (mysqli_num_rows($result)===1) {
                $row=mysqli_fetch_assoc($result);
                if ($row['nombre_usuario']===$nombre_usuario && $row['contraseña']===$contraseña) {
                    $_SESSION['id']=$row['id'];
                    $_SESSION['nombre_usuario']=$row['nombre_usuario'];
                    $_SESSION['contraseña']=$row['contraseña'];
                    header("location:inicio.php");
                    exit();
                }else{
                    header("location:login_index.php");
                    exit();
                }
            }else{
                header("location:login_index.php");
                exit();
            }

        }

    }else{
        header("location:login_index.php");
        exit(); 
    }


?>