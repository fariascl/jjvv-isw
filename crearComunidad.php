<?php
require_once('include/session.php');
if (check_session()){
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('include/functions.php');
    if (isset($_POST['nombre_comunidad']) && isset($_POST['descripcion_comunidad'])){
        $nombre_com = $_POST['nombre_comunidad'];
        $desc_com = $_POST['descripcion_comunidad'];
        if (create_comunidad($nombre_com, $desc_com) == 1){
            $msg = "Comunidad creada correctamente";
            //return $msg;
        }
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Crear nueva comunidad</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/crearComunidad.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="#">J.J.V.V</a>
            </div>
            <div class="action">
                <?php include 'include/menu.php'; ?>
            </div>
        </div>
        <div class="submenu">
            <div class="action-submenu">
                <a href="crearComunidad.php" class="active">Crear nueva comunidad</a>
                <a href="comunidades.php">Ver comunidades</a>
                <!-- <a href="configuracionComunidades.php">Configuración comunidades</a> -->
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form action="crearcomunidad.php" method="POST" autocomplete="off" onsubmit="return ValidacionCrearComunidad();">
                    <p class="tittle">Crear Comunidad</p>
                    <p class="preinput">Nombre de la comunidad</p>
                    <input class="input" name="nombre_comunidad" id="nombre" type="text" placeholder="Ingrese nombre de la Comunidad">
                    <p class="preinput">Descripción</p>
                    <textarea class="input textarea" name="descripcion_comunidad" id="descripcion" cols="10" rows="5"
                        placeholder="Ingrese descripción"></textarea>
                    <input class="button primario" type="submit" value="Crear comunidad">
                </form>
            </div>
        </div>
    </div>
<script src="static/js/validacionVarias.js"></script>
</body>

</html>