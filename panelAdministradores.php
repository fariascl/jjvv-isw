<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Panel administradores</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/panelAdministradores.css">
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
                <a href="tusComunidades.php">Tus comunidades</a>
                <a href="perfil.php">Datos personales</a>
                <a href="configuracionPersonal.php">Configuración personal</a>
                <a href="panelAdministradores.php" class="active">Panel administradores</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form action="crearcomunidad.php" method="POST" autocomplete="off">
                    <p class="tittle">Panel de administración</p>
                    <div class="block">
                        <p class="parrafo">Usuario:</p>
                        <div class="separate">
                            <input class="button primario" type="button" value="Hacer administrador">
                            <a class="button modificar" href="editarDatosCuenta.php"><i class="fas fa-edit"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>