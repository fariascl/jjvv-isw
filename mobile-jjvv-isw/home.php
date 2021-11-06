<?php
require_once('../include/session.php');
if (check_session()){
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Home</title>
    <link rel="stylesheet" href="static/css/general.css">
    <link rel="stylesheet" href="static/css/home.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <label for="btn-menu" class="burger"><img src="static/img/burger.png" alt=""></label>
            <div class="actions">
                <a href="#" class="active">Home</a>
                <a href="logout.php">Cerrar sesión</a>
            </div>
        </div>
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="submenu">
                <!-- Home -->
                <li class="menu-item" id="Home">
                    <div class="asd">
                        <img src="static/img/home.png">
                        <a href="home.php" class="btn">Home</a>
                    </div>
                </li>
                <!-- submenu Reuniones -->
                <li class="menu-item" id="reunion">
                    <div class="asd">
                        <img src="static/img/reuniones.png">
                        <a href="#reunion" class="btn">Reunión</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/crear.png">
                        <a href="crearReunion.php">Crear nueva reunión</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/historial.png">
                        <a href="historialReuniones.php">Historial de reuniones</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/configuración.png">
                        <a href="#">Configuración de reuniones</a>
                    </div>
                </li>
                <!-- submenu comunidades -->
                <li class="menu-item" id="comunidades">
                    <div class="asd">
                        <img src="static/img/Comunidades.png">
                        <a href="#comunidades" class="btn">Comunidades</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/crear.png">
                        <a href="crearComunidad.php">Crear nueva comunidad</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/historial.png">
                        <a href="historialComunidades.php">Historial de comunidades</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/configuración.png">
                        <a href="#">Configuración de comunidades</a>
                    </div>
                </li>
                <!-- submenu actas -->
                <li class="menu-item" id="actas">
                    <div class="asd">
                        <img src="static/img/actas.png">
                        <a href="#actas" class="btn">Actas</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/crear.png">
                        <a href="crearActa.php">Crear nueva acta</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/historial.png">
                        <a href="historialActas.php">Historial de actas</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/configuración.png">
                        <a href="#">Configuración de actas</a>
                    </div>
                </li>
                <!-- submenu perfil -->
                <li class="menu-item" id="perfil">
                    <div class="asd">
                        <img src="static/img/perfil.png">
                        <a href="#perfil" class="btn">Perfil</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/Comunidades.png">
                        <a href="tusComunidades.php">Tus comunidades</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/datospersonales.png">
                        <a href="datosPersonales.php">Datos personales</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/configuración.png">
                        <a href="editarPerfil.php">Configuración personal</a>
                    </div>
                    <div class="menu-item__sub">
                        <img src="static/img/configuracionAdmin.png">
                        <a href="panelAdministrador.php">Panel de administradores</a>
                    </div>
                </li>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <div class="welcome">
                    <p class="titulo">¡Bienvenido!</p>
                    <p class="nombre"><?php echo $_SESSION['nombre']; ?></p>
                </div>
                <div class="proxReunion">
                    <p class="tittle">Tus próximas reuniones</p>
                    <div class="info">
                        <p class="parrafo">Nombre</p>
                        <p class="parrafo">Fecha</p>
                        <a class="button secundario" href="#">Detalle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>