<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Perfil</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/perfil.css">
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
                <a href="perfil.php" class="active">Datos personales</a>
                <a href="configuracionPersonal.php">Configuración personal</a>
                <a href="panelAdministradores.php">Panel administradores</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form action="crearcomunidad.php" method="POST" autocomplete="off">
                    <p class="tittle">Datos generales de la cuenta</p>
                    <div class="block">
                        <p class="negrita">Nombre:</p>
                        <p class="parrafo">Nombre del usuario</p>
                    </div>
                    <div class="block">
                        <p class="negrita">Correo electrónico:</p>
                        <p class="parrafo">Correo</p>
                    </div>
                    <div class="block">
                        <p class="negrita">Rut:</p>
                        <p class="parrafo">11.111.111-1</p>
                    </div>
                    <select class="input">
                        <option value="0">Sus Comunidades</option>
                    </select>
                </form>
            </div>
        </div>
    </div>

</body>

</html>