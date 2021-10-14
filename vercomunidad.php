<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver comunidades</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/vercomunidad.css">
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
                <a href="vercomunidad.php" class="active">Comunidades</a>
                <a href="actas.php">Actas</a>
                <a href="login.php">Iniciar Sesión</a>
                <a href="register.php">Registro</a>
            </div>
        </div>
        <div class="submenu">
            <div class="action-submenu">
                <a href="crearcomunidad.php">Crear nueva comunidad</a>
                <a href="vercomunidad.php" class="active">Ver comunidades</a>
                <a href="#">Editar comunidad</a>
                <a href="#">Eliminar comunidad</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form action="">
                    <?php
                    include('include/functions.php');
                    $row = get_comunidad();
                    foreach ($row as $comunidad){
                        echo '
                        <div class="block">
                            <p>' .$comunidad[1]. '</p>
                            <a href="verdescripcionComunidad.php?id='.$comunidad[0].'" class="button">Descripción</a>
                        </div>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>