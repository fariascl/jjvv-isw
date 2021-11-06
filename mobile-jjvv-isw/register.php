<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('../include/functions.php');
    if (isset($_POST['name']) && isset($_POST['rut']) && isset($_POST['email']) && isset($_POST['password'])){
        $nombre = $_POST['name'];
        $rut = $_POST['rut'];
        $correo = $_POST['email'];
        $clave = $_POST['password'];
        if (register($nombre, $correo, $clave, $rut) == 1){
            //$msg = "Usuario registrado correctamente";
            header("Location: register.php?msg=1");
        }
        else {
            header("Location: register.php?msg=2");
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
    <title>Registro</title>
    <link rel="stylesheet" href="static/css/general.css">
    <link rel="stylesheet" href="static/css/login.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <label for="btn-menu" class="burger"><img src="static/img/burger.png" alt=""></label>
            <div class="actions">
                <a href="login.php">Iniciar sesión</a>
                <a href="register.php" class="active">Registro</a>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="center">
            <p class="tittle">Registro</p>
            <form action="register.php" method="POST" autocomplete="off">
                <input class="input" type="email" name="email" placeholder="Correo electrónico">
                <input class="input" type="text" name="name" placeholder="Nombre completo">
                <input class="input" type="text" name="rut" placeholder="Rut">
                <input class="input" type="password" name="password" placeholder="Contraseña">
                <button class="button secundario" type="submit">Registrarte</button>
            </form>
            <div class="footerRegistro">
                <p class="parrafo">¿Tienes cuenta?</p>
                <a class="link" href="login.php">Entrar</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>