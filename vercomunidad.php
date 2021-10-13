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
                <a href="reuniones.html">Reuniones</a>
                <a href="vercomunidades.html" class="active">Comunidades</a>
                <a href="actas.html">Actas</a>
                <a href="sesion.html">Iniciar Sesión</a>
                <a href="register.html">Registro</a>
            </div>
        </div>
        <div class="submenu">
            <div class="action-submenu">
                <a href="crearcomunidad.html">Crear nueva comunidad</a>
                <a href="reuniones.html" class="active">Ver comunidades</a>
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
                        <p>'.$comunidad[1].'</p>
                        <a href="#" class="button">Descripción</a>
                    </div>';
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>