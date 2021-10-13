<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('include/functions.php');
    if (isset($_POST['nombre_comunidad']) && isset($_POST['descripcion_comunidad'])){
        $nombre_com = $_POST['nombre_comunidad'];
        $desc_com = $_POST['descripcion_comunidad'];
        if (create_comunidad($nombre_com, $desc_com) == 1){
            $msg = "Comunidad creada correctamente";
            //return $msg;
        }
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/crearcomunidad.css">
    <title>Crear nueva Comunidad</title>
</head>
<body>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="#">J.J.V.V</a>
            </div>
            <div class="action">
                <a href="#">Home</a>
                <a href="reuniones.php" >Reuniones</a>
                <a href="vercomunidad.php" class="active" >Comunidades</a>
                <a href="actas.php">Actas</a>
                <a href="sesion.php">Iniciar Sesión</a>
                <a href="register.php">Registro</a>
            </div>
        </div>
        <div class="submenu">
            <div class="action-submenu">
                <a href="crearcomunidad.php" class="active">Crear nueva Comunidad</a>
                <a href="vercomunidad.php">Ver Comunidad</a>
                <a href="#">Editar Comunidad</a>
                <a href="#">Eliminar Comunidad</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form action="crearcomunidad.php" method="POST">
                    <p class="tittle">Crear Comunidad</p>
                    <input class="input" name="nombre_comunidad" type="text" placeholder="Nombre de la Comunidad">
                    <textarea class="input textarea" name="descripcion_comunidad" cols="10" rows="5" placeholder="Descripción"></textarea>
                    <input class="button" type="submit" value="Crear">
                </form>
            </div>
        </div>
    </div>

</body>
</html>