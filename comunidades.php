<?php
//session_start();
require_once('include/session.php');
if (check_session()){
    header('Location: login.php');
    exit;
}


if (isset($_GET['unirse'])){
    include 'include/functions.php';
    $unido = unirse($_SESSION['id_usuario'], $_GET['unirse']);
    header('Location: comunidades.php');
}

/*if (isset($_GET['salirse'])){
    include 'include/functions.php';
    $salido = salirse($_SESSION['id_usuario'], $_GET['salirse']);
    header('Location: comunidades.php');
}*/

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
                <!-- <a href="#">Configuración comunidades</a> -->
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form action="">
                    <?php
                        include('include/functions.php');
                        $row = get_comunidad();
                        $id_usuario = $_SESSION['id_usuario'];
                        $unido_en = esta_en_comunidad($id_usuario);
                        foreach ($row as $comunidad){
                            if (in_array($comunidad[0], $unido_en)){
                                echo '
                                <div class="block">
                                    <div class="contenedor">
                                        <p class="parrafo">' .$comunidad[1]. '</p>
                                    </div>
                                    <div class="separate">
                                        <a class="button secundario" href="verdescripcionComunidades.php?id='.$comunidad[0].'">Descripción</a>
                                        <a class="button eliminar" href="eliminarComunidad.php?id_comunidad='.$comunidad[0].'&id_usuario='.$id_usuario.'">Salirse</a>
                                    </div>
                                </div>';
                            }else{
                            echo '
                                <div class="block">
                                    <p class="parrafo">' .$comunidad[1]. '</p>
                                    <div class="separate">
                                        <a class="button secundario" href="verdescripcionComunidades.php?id='.$comunidad[0].'">Descripción</a>
                                        <a class="button primario" href="?unirse='.$comunidad[0].'">Unirse</a>
                                    </div>
                                </div>';
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>