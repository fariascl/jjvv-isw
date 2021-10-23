<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Configuración personal</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/configuracionPersonal.css">
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
                <a href="configuracionPersonal.php" class="active">Configuración personal</a>
                <a href="panelAdministradores.php">Panel administradores</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form action="crearcomunidad.php" method="POST" autocomplete="off">
                    <p class="tittle">Editar datos de la cuenta</p>
                    <input class="input" type="text" placeholder="Nombre completo" required>
                    <input class="input" type="email" placeholder="Correo electrónico" required>
                    <input class="input" type="text" placeholder="Rut" required>
                    <input class="input" type="password" placeholder="Contraseña" required>
                    <input type="button" class="button precaucion" value="Guardar cambios">
                    <input type="button" class="button peligro" value="Eliminar cuenta">
                </form>
            </div>
        </div>
    </div>

</body>

</html>