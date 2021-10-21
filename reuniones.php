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
    <title>Historial reuniones</title>
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
                <?php include 'include/menu.php'; ?>
            </div>
        </div>
        <div class="submenu">
            <div class="action-submenu">
                <a href="crearReunion.php">Crear nueva reunión</a>
                <a href="reuniones.php" class="active">Historial de reuniones</a>
                <a href="configuracionReunion.php">Configuración de reuniones</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="#" method="" onclick="">
                    <p class="tittle">Reuniones realizadas</p>
                    <div class="reuniones">
                        <select class="input" name="comunidad" onchange="location = this.value;">
                            <?php
                                require_once('include/functions.php');
                                
                                $row = get_comunidad();
                                
                                
                                if (isset($_GET['comunidad'])){
                                    $id_com_aux = $_GET['comunidad'];
                                    echo '<option selected disabled>'.get_comunidad_by_id($id_com_aux)['nombre_comunidad'].'</option>';
                                }
                                foreach ($row as $comunidad){
                                    echo '<option value="reuniones.php?comunidad='.$comunidad[0].'">'.$comunidad[1].'</option>';
                                }
                            ?>
                        </select>

                        <?php
                        if (!isset($_GET['comunidad'])){
                            $id_comunidad = 1;
                            $row_2 = get_reunion_by_comun($id_comunidad);
                            if (count($row_2) == 0){
                                echo '<p class="mensaje">No se han encontrado reuniones</p>';
                            }
                            $newDate = date("d-m-Y", strtotime($orgDate)); 
                        foreach ($row_2 as $reunion){
                        echo '
                            
                            <div class="datosReunion">
                                <p>'.$reunion[1].'</p>
                                <p>'.date("d-m-Y", strtotime($reunion[2])).'</p>
                                
                                <a class="button" href="verdescripcionReunion.php?id='.$reunion[0].'">Ver detalle</a>
                            </div>
                            ';
                            }
                        }
                        else{
                        $id_comunidad = $_GET['comunidad'];
                        $row_2 = get_reunion_by_comun($id_comunidad);
                        if (count($row_2) == 0){
                            echo '<p class="mensaje">No se han encontrado reuniones</p>';
                        }
                        foreach ($row_2 as $reunion){
                        echo '
                        
                        <div class="datosReunion">
                            <p>'.$reunion[1].'</p>
                            <p>'.$reunion[2].'</p>
                            <a class="button" href="verdescripcionReunion.php?id='.$reunion[0].'">Ver detalle</a>
                        </div>
                        ';
                        }
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>