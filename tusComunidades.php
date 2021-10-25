<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Tus comunidades</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/tusComunidades.css">
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
                <a href="tusComunidades.php" class="active">Tus comunidades</a>
                <a href="perfil.php">Datos personales</a>
                <a href="configuracionPersonal.php">Configuración personal</a>
                <a href="panelAdministradores.php">Panel administradores</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form action="crearcomunidad.php" method="POST" autocomplete="off">
                    <p class="tittle">Listado de comunidades a las que perteneces</p>
                    <div class="block">
                        <p class="parrafo">Comunidad:</p>
                        <div class="separate">
                            <a href="" class="button secundario">Ver reuniones</a>
                            <a class="button primario" href="#">Ver actas</a>
                        </div>
                    </div>
                    <div class="block">
                        <p class="parrafo">Comunidad:</p>
                        <div class="separate">
                            <a href="" class="button secundario">Ver reuniones</a>
                            <a class="button primario" href="#">Ver actas</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>