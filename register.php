<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('include/functions.php');
    if (isset($_POST['name']) && isset($_POST['rut']) && isset($_POST['email']) && isset($_POST['password'])){
        if (register($_POST['name'], $_POST['rut'], $_POST['email'], $_POST['password']) == 1){
            $msg = "Usuario registrado correctamente";
            return $msg;
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
    <title>Esqueleto Menu</title>
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
                <a href="#">Home</a>
                <a href="reuniones.html">Reuniones</a>
                <a href="contacto.html">Contacto</a>
                <a href="actas.html">Actas</a>
                <a href="sesion.html">Iniciar Sesión</a>
                <a href="register.html" class="active">Registro</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="register.php" method="POST" onclick="">
                    <p class="tittle">Registro junta vecinos</p>
                    <input class="input" name="email" id="email" type="text" placeholder="Correo electrónico">
                    <input class="input" name="name" id="name" type="text" placeholder="Nombre completo">
                    <input class="input" name="rut" id="rut" type="text" placeholder="Rut">
                    <input class="input" name="password" id="password" type="password" placeholder="Contraseña">
                    <input class="button" type="submit" value="Regístrate">
                    <nav class="blocktext">
                        <p class="account">¿Tienes cuenta?</p>
                        <<<<<<< HEAD <a href="#" class="link">Entrar</a>
                            =======
                            <p class="link">Entrar</p>
                            >>>>>>> d40db5195777cfeb19cad5ffc115684991e53739
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