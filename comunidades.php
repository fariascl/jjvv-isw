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
    <title>Ver comunidades</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/comunidades.css">
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
                <a href="crearComunidad.php">Crear nueva comunidad</a>
                <a href="comunidades.php" class="active">Ver comunidades</a>
                <a href="#">Configuración comunidades</a>
            </div>
        </div>
        <div class="main">
            form
            <div class="center">
                <form action="">
                    <div class="block">
                    <?php
                        include('include/functions.php');
                        $row = get_comunidad();
                        foreach ($row as $comunidad){
                            echo '
                                <div class="block">
<<<<<<< HEAD
                                <strong class="parrafo">' .$comunidad[1]. '</strong>
=======
                                <p class="parrafo">' .$comunidad[1]. '</p>
>>>>>>> 6f7fe7de2fcfcd9007ad06b0b51903152f259b3a
                                <a href="verdescripcionComunidades.php?id='.$comunidad[0].'" class="button">Descripción</a>
                        </div>';
                        }
                    ?> 
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>


<!--
-->

