<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    include '../include/functions.php';
    if (isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $is_valid = login($email, $password);
        if ($is_valid == 1){
            try {
                
                $row = get_user_data($email);
                $_SESSION['logged_in'] = true;
                $_SESSION['id_usuario'] = $row['id_usuario'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['rut'] = $row['rut'];
                $_SESSION['correo'] = $row['correo'];
                $_SESSION['clave'] = $row['clave'];

                header('Location: index.php');

            }
            catch (Exception $e) {
                $msg = "Se ha detectado un error";
            }
            
        }
        else if ($is_valid == 2){
            $msg = "La clave es incorrecta";
            header('Location: login.php?error=2');
        }
        else {
            $msg = "No existe el correo";
            header('Location: login.php?error=0');
        }
    }
}

?>









<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Inicio sesión</title>
    <link rel="stylesheet" href="static/css/general.css">
    <link rel="stylesheet" href="static/css/iniciarSesion.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <label for="btn-menu" class="burger"><img src="static/img/burger.png" alt=""></label>
            <div class="actions">
                <a href="#" class="active">Iniciar sesión</a>
                <a href="registro.php">Registro</a>
            </div>
        </div>
    </div>
    <div class="main">
        <p class="tittle">Inicio de sesión</p>
        <input class="input" type="email" name="email" placeholder="Correo electrónico">
        <input class="input" type="password" name="password" placeholder="Contraseña">
        <input class="button primario" type="submit" value="Iniciar sesión">
        <div class="footer">
            <a class="link" href="#">¿Has olvidado tu contraseña?</a>
            <a class="link" href="registro.php">Regístrate</a>
        </div>
    </div>
    </div>
</body>

</html>