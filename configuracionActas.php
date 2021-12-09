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
    <title>Configuración actas</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/configuracionGeneral.css">
    <!-- ICONOS -->
    <script src="https://kit.fontawesome.com/410536779e.js" crossorigin="anonymous"></script>
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
                <a href="actas.php">Historial de actas</a>
                <a class="active" href="configuracionActas.php">Configuración actas</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="#" method="" onclick="">
                    <select class="input" name="comunidad">
                        <option class="input" value="comunidad 1">Comunidad 1</option>
                        <option value="comunidad 2">Comunidad 2</option>
                        <?php
                            require_once('include/functions.php');
                            $row = get_comunidad();
                            foreach ($row as $comunidad){
                                echo '<option value="'.$comunidad[0].'">'.$comunidad[1].'</option>';
                            }
                        ?>
                    </select>
                    <div class="contenedor">
                        <p class="parrafo negrita">Título Acta:</p>
                        <div class="conenedorBoton">
                            <a class="button modificar" href="editarActa.php"><i class="fas fa-edit"></i></a>
                            <a class="button eliminar" href="eliminarActa.php"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php

    Hice esto por si acaso en vola algo sirve uwu, con cariño metal <3.

    $ID_ACTA = $_GET['ID_ACTA'];
    $eliminar = "DELETE FROM ACTA WHERE ID_ACTA = '$ID_ACTA';";
    $resultado = mysqli_query($conection, $eliminar);
    if($resultado){
        echo "<script>alert('Eliminado con exito'); </script>";
        header('Location: configuracionActas.php');
    }

?>