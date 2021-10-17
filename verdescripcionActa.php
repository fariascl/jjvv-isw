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
                <?php
                include 'include/functions.php';
                $id_acta = $_GET['id'];
                $row = get_acta_by_id($id_acta);
                $data = get_usuario_by_acta($id_acta); 
                $aux_com = get_comunidad_by_acta($id_acta);
                echo '
                <form id="form" action="#" method="" onclick="">
                    <p class="tittle">'.$row['titulo_acta'].'</p>
                    <div class="comunidades">
                        <p class="parrafo">Comunidad: '.$aux_com['nombre_comunidad'].':</p>
                    </div>
                    <div class="fecha">
                        <p class="parrafo">Reunión: '.$data['fecha_reunion'].'</p>
                    </div>
                    <p class="contenido">
                        '.$row['contenido_acta'].'
                    </p>
                    <div class="datos">
                        <p class="parrafo">Escrito por <strong>'.$data['nombre'].'</strong></p>
                        <p class="parrafo">Fecha: '.$row['fecha_acta'].'</p>
                    </div>
                    <a class="button" href="actas.php">Volver</a>
                </form>';
                ?>
            </div>
        </div>
    </div>
</body>

</html>