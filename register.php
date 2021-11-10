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
                <form id="form" action="register.php" method="POST" onclick="" autocomplete="off" onsubmit="return checkInputs()">
                    <p class="tittle">Registro</p>
                    <?php if (isset($_GET['msg']) && $_GET['msg'] == '1'){
                            echo "<p class='alerta exito'>El usuario se ha registrado</p>";
                        }
                        else if (isset($_GET['msg']) && $_GET['msg'] == '2'){
                            echo "<p class='alerta error'>Ha habido un error al registrar el usuario, revise los datos e inténtelo nuevamente</p>";
                        }
                    ?>
                    <p class="preinput">Correo electrónico</p>
                    <input class="input" name="email" id="email" type="text" placeholder="Ingrese correo electrónico" >
                    <p class="preinput">Nombre completo</p>
                    <input class="input" name="name" id="name" type="text" placeholder="Ingrese nombre completo" >
                    <p class="preinput">Rut</p>
                    <input class="input" name="rut" id="rut" oninput="checkRut(this);" type="text" placeholder="Ingrese rut" >
                    <p class="preinput">Contraseña</p>
                    <input class="input" name="password" id="password" type="password" placeholder="Ingrese contraseña" >
                    <input class="button secundario" type="submit" value="Regístrate">
                    <nav class="blocktext">
                        <p class="account">¿Tienes cuenta?</p>
                        <a href="login.php" class="link">Entrar</a>
                    </nav>
                </form>
            </div>
        </div>
    </div>
<script src="static/js/validaciones.js"></script>
<script src="static/js/validacionRut.js"></script>
</body>

</html>