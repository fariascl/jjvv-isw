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
    <title>Home</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/index.css">
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
        <div class="main">
            <div class="center">
                <div class="welcome">
                    <p class="tittle">Bienvenido</p>
                    <p class="parrafo"><?php echo $_SESSION['nombre']; ?></p>
                </div>
                <form id="form" action="#" method="" onclick="">
                    <p class="tittle">Tus próximas reuniones</p>
                    <div class="datosReunion">
                        <p>Nombre reunion</p>
                        <p>Fecha Reunión</p>
                        <a class="button secundario" href="">Ver detalle</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
