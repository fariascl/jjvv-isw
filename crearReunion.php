<?php

require_once('include/session.php');
if (check_session()){
    header('Location: login.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('include/functions.php');
    if (isset($_POST['titulo']) && isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['ubicacion']) && isset($_POST['descripcion'])){
        $titulo = $_POST['titulo'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $ubicacion =$_POST['ubicacion'];
        $descripcion = $_POST['descripcion'];
        $comunidad = $_POST['comunidad'];
        $id_usuario = $_SESSION['id_usuario']; // Id para pruebas, pero cuando todo esté funcional con el panel admin deberia sacarse de la variable session
        if (create_reunion($titulo, $fecha, $hora, $ubicacion, $descripcion, $comunidad, $id_usuario)  == 1){
            $msg = "Comunidad creada correctamente"; // flag
            header('Location: reuniones.html');
            
        }

    }
    
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Crear nueva reunión</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/crearReunion.css">
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
                <a href="sesion.php">Iniciar Sesión</a>
                <a href="register.php">Registro</a>
            </div>
        </div>
        <div class="submenu">
            <div class="action-submenu">
                <a href="crearReunion.php" class="active">Crear nueva reunión</a>
                <a href="reuniones.php">Historial de reuniones</a>
                <a href="#">Configuración de reuniones</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="crearReunion.php" method="POST" onsubmit="return validar();">
                    <p class="tittle">Agendar reunión</p>
                    <input class="input" id="titulo" name="titulo" type="text" placeholder="Título">
                    <!-- Elegir comunidad -->
                    <select class="input" name="comunidad">
                        <?php
                        require_once('include/functions.php');
                        $row = get_comunidad();
                        foreach ($row as $comunidad){
                            echo '<option value="'.$comunidad[0].'">'.$comunidad[1].'</option>';
                        }
                        ?>
                    </select>
                    <input class="input" id="dia" name="fecha" type="date" placeholder="Día">
                    <input class="input" id="hora" name="hora" type="time" placeholder="Hora">
                    <input class="input" id="ubicacion" name="ubicacion" type="text" placeholder="Ubicación">
                    <textarea class="input textarea" id="descripcion" name="descripcion" cols="10" rows="5"
                        placeholder="Descripción"></textarea>
                    <input class="button" type="submit" value="Agendar">
                </form>
            </div>
        </div>
    </div>
    <script src="./static/js/validaciones.js"></script>
</body>

</html>