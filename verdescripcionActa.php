<?php
require_once('include/session.php');
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
    <title>Historial de actas</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/verdescripcionActa.css">
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
                <a class="active" href="actas.php">Actas</a>
                <a href="login.php">Iniciar Sesión</a>
                <a href="register.php">Registro</a>
            </div>
        </div>
        <div class="submenu">
            <div class="action-submenu">
                <a href="crearActa.php">Crear nueva acta</a>
                <a href="actas.php" class="active">Historial de actas</a>
                <a href="#">Configuración actas</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="#" method="" onclick="">
                    <p class="tittle">Junta de Vecinos X</p>
                    <div class="comunidades">
                        <p class="parrafo">Comunidad:</p>
                        <p class="parrafo">X</p>
                    </div>
                    <div class="fecha">
                        <p class="parrafo">Reunión:</p>
                        <p class="parrafo">Fecha reunión</p>
                    </div>
                    <p class="contenido">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores hic, aut eveniet, nobis
                        aspernatur aliquam expedita voluptate error dolorem qui, dolore nulla eum libero beatae
                        doloribus consequuntur at. Tempora, reprehenderit!
                    </p>
                    <div class="datos">
                        <p class="parrafo">Nombre del que escribe el acta</p>
                        <p class="parrafo">Fecha</p>
                    </div>
                    <a class="button" href="actas.html">Volver</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>