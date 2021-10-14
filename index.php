<?
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == False) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="static/css/contacto.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="#">J.J.V.V</a>
            </div>
            <div class="action">
                <a href="#" class="active">Home</a>
                <a href="reuniones.php">Reuniones</a>
                <a href="contacto.php">Contacto</a>
                <a href="actas.php">Actas</a>
                <a href="login.php">Iniciar Sesión</a>
                <a href="register.php">Registro</a>
            </div>
        </div>
        <div class="main">
            Para prueba: <br>
            <?php echo $_SESSION['correo']. " -- ". $_SESSION['id_usuario']; ?>
        </div>
    </div>
</body>

</html>