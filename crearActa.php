<?php
require_once('include/session.php');
if (check_session()){
    header('Location: login.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('include/functions.php');
    if (isset($_POST['titulo_acta']) && isset($_POST['fecha_acta']) && isset($_POST['descripcion_acta']) && isset($_POST['reunion_acta'])){
        $titulo_acta = $_POST['titulo_acta'];
        $fecha_acta = $_POST['fecha_acta'];
        $descripcion_acta = $_POST['descripcion_acta'];
        $reunion_acta = $_POST['reunion_acta'];
        echo $titulo_acta. $fecha_acta. $descripcion_acta. $reunion_acta;
        $id_usuario = $_SESSION['id_usuario']; // Id para pruebas, pero cuando todo esté funcional con el panel admin deberia sacarse de la variable session
        if (crear_acta($titulo_acta, $descripcion_acta, $fecha_acta, $reunion_acta)  == 1){
            $msg = "Acta creada correctamente"; // flag
            header('Location: crearActa.php?msg=1');
        }else {
            header('Location: crearActa.php?msg=2');
        }
    }
}
?>
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nueva acta</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/crearnuevaActa.css">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon" />
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
                <a class="active" href="crearActa.php">Crear nueva acta</a>
                <a href="actas.php">Historial de actas</a>
                <a href="configuracionActas.php">Configuración actas</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="crearActa.php" method="POST" onclick="" autocomplete="off" onsubmit="return ValidacionCrearActa();"> <!--falta validar-->
                    <p class="tittle">Crear nueva acta</p>
                    <?php if (isset($_GET['msg']) && $_GET['msg'] == '1'){
                            echo "<p class='alerta exito'>El acta ha sido creada con éxito</p>"; 
                        }
                        else if (isset($_GET['msg']) && $_GET['msg'] == '2'){
                            echo "<p class='alerta error'>Ha habido un error al crear el acta, revise los datos e inténtelo nuevamente</p>";
                        }
                    ?>
                    <p class="preinput">Título</p>
                    <input class="input"  type="text" id="nombre" name="titulo_acta" placeholder="Ingrese título">
                    <p class="preinput">Seleccione reunión</p>
                    <select class="input" name="reunion_acta">
                        <?php
                            require_once('include/functions.php');
                            $id_usuario = $_SESSION['id_usuario'];
                            $row = listing_reuniones($id_usuario);
                            foreach ($row as $reunion){
                                $fecha = date("d-m-Y", strtotime($reunion[3]));
                                //reunion.id_reunion, comunidad.nombre_comunidad, reunion.tema_reunion, reunion.fecha_reunion FROM reunion,
                                echo '<option value="'.$reunion[0].'">'.$reunion[1]. ' &mdash; '.$reunion[2].' &mdash; '.$fecha.'</option>';
                            }
                        ?>
                    </select>
                    <p class="preinput">Selecciona fecha</p>
                    <input class="input" type="date" id="fecha" name="fecha_acta">
                    <p class="preinput">Descripción</p>
                    <textarea class="input textarea" name="descripcion_acta" id="descripcion" cols="10" rows="5"
                        placeholder="Ingrese descripción"></textarea>
                    <input class="button secundario" type="submit" value="Crear acta">
                </form>
            </div>
        </div>
    </div>
    <script src="static/js/validacionVarias.js"></script>
</body>

</html>