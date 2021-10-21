<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('include/functions.php');
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
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/register.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="#">J.J.V.V</a>
            </div>
            <div class="action">
                <a href="index.php">Home</a>
                <a href="reuniones.php">Reuniones</a>
                <a href="comunidades.php"> Comunidades</a>
                <a href="actas.php">Actas</a>
                <a href="login.php">Iniciar Sesión</a>
                <a href="register.php" class="active">Registro</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="register.php" method="POST" onclick="" autocomplete="off">
                    <p class="tittle">Registro junta vecinos</p>
                    <?php if (isset($_GET['msg']) && $_GET['msg'] == '1'){
                            echo "<p class='alerta exito'>El usuario se ha registrado</p>"; 
                        }
                        else if (isset($_GET['msg']) && $_GET['msg'] == '2'){
                            echo "<p class='alerta error'>Ha habido un error al registrar el usuario, revise los datos e inténtelo nuevamente</p>";
                        } ?>
                    <input class="input" name="email" id="email" type="text" placeholder="Correo electrónico" required>
                    <input class="input" name="name" id="name" type="text" placeholder="Nombre completo" required>
                    <input class="input" name="rut" id="rut" type="text" placeholder="Rut" required>
                    <input class="input" name="password" id="password" type="password" placeholder="Contraseña" required>
                    <input class="button" type="submit" value="Regístrate">
                    <nav class="blocktext">
                        <p class="account">¿Tienes cuenta?</p>
                        <a href="login.php" class="link">Entrar</a>
                    </nav>
                </form>
            </div>
        </div>
    </div>
    <!--
    <script src="static/js/validationMenu.js"></script>
    -->
</body>

</html>