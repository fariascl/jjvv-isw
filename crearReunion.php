<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('include/functions.php');
    if (isset($_POST['titulo_reunion']) && isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['ubicacion']) && isset($_POST['descripcion'])){
        $titulo = $_POST['titulo_reunion'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $ubicacion = $_POST['ubicacion'];
        $descripcion = $_POST['descripcion'];
        $id_comunidad = 1; // Ejemplo de id de comunidad
        $id_usuario = 1; // Ejemplo de id usuario
        if (create_reunion($titulo, $fecha, $hora, $ubicacion, $descripcion, $id_comunidad, $id_usuario) == 1){
            $msg = "Reunion creada exitosamente";
            //return $msg;
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
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/crearReunion.css">
    <title>Crear nueva reunión</title>
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="#">J.J.V.V</a>
            </div>
            <div class="action">
                <a href="#">Home</a>
                <a href="reuniones.html" class="active">Reuniones</a>
                <a href="contacto.html">Contacto</a>
                <a href="actas.html">Actas</a>
                <a href="sesion.html">Iniciar Sesión</a>
                <a href="register.html">Registro</a>
            </div>
        </div>
        <div class="submenu">
            <div class="action-submenu">
                <a href="crearReunion.html" class="active">Crear nueva reunión</a>
                <a href="reuniones.html">Historial de reuniones</a>
                <a href="#">Configuración de reuniones</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form action="#">
                    <p class="tittle">Agendar reunión</p>
                    <input class="input" name="titulo_reunion" type="text" placeholder="Título">
                    <input class="input" name="fecha" type="text" placeholder="Día">
                    <input class="input" name="hora" type="text" placeholder="Hora">
                    <input class="input" name="ubicacion" type="text" placeholder="Ubicación">
                    <textarea class="input textarea" cols="10" rows="5" name="descripcion" placeholder="Descripción"></textarea>
                    <input class="button" type="submit" value="Agendar">
                </form>
            </div>
        </div>
    </div>

</body>

</html>