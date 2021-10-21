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
                <?php include 'include/menu.php'; ?>
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
                <form id="form" action="actas.php" method="GET" onclick="">
                    <div class="searcher">
                        <input class="date" type="date" name="fecha_comienzo" required>
                        <input class="date" type="date" name="fecha_termino" required>
                        <input type="hidden" name="comunidad" value="<?php if(!isset($_GET['comunidad'])){$_GET['comunidad']=1; } echo $_GET['comunidad'];?>">
                        <button class="date" type="submit" value="filtrar">🔎</button>
                    </div>
                    <p class="tittle">Actas archivadas</p>
                    <select class="input" name="comunidad" onchange="location = this.value;">
                        <?php
                            require_once('include/functions.php');

                        
                            $row = get_comunidad();
                            if (isset($_GET['comunidad'])){
                                $id_comunidad = $_GET['comunidad'];
                                echo '<option selected disabled>'.get_comunidad_by_id($id_comunidad)['nombre_comunidad'].'</option>';
                            }
                            
                            foreach ($row as $comunidad){
                                echo '<option value="actas.php?comunidad='.$comunidad[0].'">'.$comunidad[1].'</option>';
                            }
                        ?>
                    </select>
                    <?php
                        if (!isset($_GET['comunidad'])){
                            $id_comunidad = 1;
                            
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

                        }
                        if (isset($_GET['fecha_comienzo'])){
                            $id_comunidad = $_GET['comunidad'];
                            $fecha_comienzo = $_GET['fecha_comienzo'];
                            $fecha_termino = $_GET['fecha_termino'];
                            //echo $id_comunidad;
                            //echo $fecha_comienzo;
                            //echo $fecha_termino;
                            
                            $row_2 = search_acta_by_date($id_comunidad, $fecha_comienzo, $fecha_termino);
                            foreach ($row_2 as $acta){
                                echo '
                                <div class="datosActas">
                                    <p>'.$acta[1].'</p>
                                    <p>'.$acta[3].'</p>
                                    <a class="button" href="verdescripcionActa.php?id='.$acta[0].'">Ver detalle</a>
                                </div>
                                ';
                            }
                        }
                        else {
                            
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
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>