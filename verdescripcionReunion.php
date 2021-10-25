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
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Descripción reunión</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/verdescripcionReunion.css">
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
                <a href="crearReunion.php">Crear nueva reunión</a>
                <a href="reuniones.php" class="active">Historial de reuniones</a>
                <a href="#">Configuración de reuniones</a>
            </div>
        </div>
        <div class="main">
        <div class="center">
            <?php
            include 'include/functions.php';
            $id_reunion = $_GET['id'];
            $row = get_reunion_by_id($id_reunion);

            echo '
                <form id="form" action="#" method="" onclick="">
                    <p class="tittle">Detalle Reunión</p>
                    <p class="parrafo">'.$row['tema_reunion'].'</p>
                    <p class="parrafo">'.$row['fecha_reunion'].'</p>
                    <p class="parrafo">'.$row['hora_reunion'].'</p>
                    <p class="parrafo">'.$row['ubicacion_reunion'].'</p>
                    <p class="parrafo">'.$row['descripcion_reunion'].'</p>
                    <a class="button eliminar" href="reuniones.php">Volver</a>
                </form>';
                ?>
            </div>
        </div>
    </div>
</body>

</html>
