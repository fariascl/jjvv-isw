<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Contacto</title>
    <link rel="stylesheet" href="static/css/contacto.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="#">J.J.V.V</a>
            </div>

            <div class="action">
                <a href="index.php">Home</a>
                <a href="reuniones.php">Reuniones</a>
                <a href="comunidades.php">Comunidades</a>
                <a href="actas.php">Actas</a>
                <a class="active" href="contacto.php">Contacto</a>
                <a href="?salir=true">Salir</a>
            </div>

        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="#" method="" onclick="">
                    <p class="tittle">Contacto</p>
                    <input class="input" type="text" placeholder="Nombre">
                    <input class="input" type="text" placeholder="Correo electrónico">
                    <input class="input" type="text" placeholder="Asunto">
                    <textarea class="input" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <input class="button" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>