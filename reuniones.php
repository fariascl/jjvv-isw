<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuniones</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/reunion.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="#">J.J.V.V</a>
            </div>
            <div class="action">
                <a href="#">Home</a>
                <a href="reuniones.php" class="active">Reuniones</a>
                <a href="comunidades.php">Comunidades</a>
                <a href="actas.php">Actas</a>
                <a href="login.php">Iniciar Sesión</a>
                <a href="register.php">Registro</a>
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
                <form id="form" action="#" method="" onclick="">
                    <p class="tittle">Reuniones realizadas</p>
                    <div class="reuniones">
                        <select class="input" name="comunidad">
                            <option class="input" value="comunidad 1">comunidad 1</option>
                            <option value="comunidad 2">comunidad 2</option>
                            <?php
                                require_once('include/functions.php');
                                $row = get_comunidad();
                                foreach ($row as $comunidad){
                                    echo '<option value="'.$comunidad[0].'">'.$comunidad[1].'</option>';
                                }
                            ?>
                        </select>
                        <div class="datosReunion">
                            <p>Nombre de la reunión</p>
                            <p>Dia de la reunión</p>
                            <a class="button" href="verdescripcionReunion.html">Ver detalle</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<!--
    <?php
                        require_once('include/functions.php');
                        $row = get_reunion();
                        foreach ($row as $reunion){
                            echo '
                            <div class="item">
                                <p>' .$reunion[0]. '</p>
                                <p>'.$reunion[2].' </p>
                            </div>';
                        }
    ?>
-->