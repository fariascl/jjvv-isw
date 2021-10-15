<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('include/functions.php');
    if (isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $is_valid = login($email, $password);
        if ($is_valid == 1){
            try {
                session_start();
                $row = get_user_data($email);
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
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="static/css/sesion.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="#">J.J.V.V</a>
            </div>
            <div class="action">
                <a href="#">Home</a>
                <a href="reuniones.php">Reuniones</a>
                <a href="comunidades.php">Comunidades</a>
                <a href="actas.php">Actas</a>
                <a href="login.php" class="active">Iniciar Sesión</a>
                <a href="register.php">Registro</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="login.php" method="POST" onclick="">
                    <p class="tittle">Iniciar sesión</p>
                    <input class="input" type="email" name="email" placeholder="Correo electrónico">
                    <input class="input" type="password" name="password" placeholder="Contraseña">
                    <input class="button" type="submit" value="Iniciar sesión">
                    <a href="#" class="link">¿Has olvidado tu contraseña?</a>
                    <a href="#" class="link">Regístrate</a>
                </form>
            </div>
        </div>
</body>

</html>