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
    <title>Actas</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/actas.css">
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
                <a href="configuracionActas.php">Configuración actas</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="#" method="" onclick="">
                    <div class="searcher">
                        <input class="date" type="date" class="inputFecha">
                        <input class="date" type="date" class="inputFecha">
                        <button class="date" type="submit" class="buttonFecha" value="Filtrar">🔎</button>
                    </div>
                    <p class="tittle">Actas archivadas</p>
                    <select class="input" name="comunidad" onchange="location = this.value;">
                        <?php
                            require_once('include/functions.php');
                            $row = get_comunidad();
                            if (isset($_GET['comunidad'])){
                                echo '<option selected disabled>'.$row[$_GET['comunidad']-1][1].'</option>';
                            }
                            
                            foreach ($row as $comunidad){
                                echo '<option value="actas.php?comunidad='.$comunidad[0].'">'.$comunidad[1].'</option>';
                            }
                        ?>
                    </select>
                    <?php
                        $id_comunidad = $_GET['comunidad'];
                        $row_2 = get_actas_by_comun($id_comunidad);
                        foreach ($row_2 as $acta){
                        echo '
                    <div class="datosActas">
                        <p>'.$acta[1].'</p>
                        <p>'.$acta[2].'</p>
                        <a class="button" href="verdescripcionActa.php?id='.$acta[0].'">Ver detalle</a>
                    </div>
                    ';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>