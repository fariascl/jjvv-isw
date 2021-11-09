<?php

require_once('include/session.php');
if (check_session()){
    header('Location: login.php');
    exit;
}

if (!isset($_GET['id'])){
    header('Location: vercomunidad.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Descripcion comunidad</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/verdescripcionComunidades.css">
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
                <a href="crearcomunidad.php">Crear nueva comunidad</a>
                <a href="comunidades.php" class="active">Ver comunidades</a>
                <a href="configuracionComunidades.php">Configuracion comunidades</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form action="">
                    <?php
                    include('include/functions.php');
                    $row = get_desc_by_comunidad($_GET['id']);
                    echo '
                    <p class="tittle">' .$row['nombre_comunidad']. '</p>
                    <textarea class="input textarea" cols="30" rows="10" placeholder="'.$row['descripcion_comunidad'].'" readonly></textarea>
                    '; ?>
                    <div class="block">
                        <a class="button primario" href="actas.php">Ver actas</a>
                        <a class="button eliminar" href="comunidades.php">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>