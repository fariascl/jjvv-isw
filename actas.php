
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/actas.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="#">J.J.V.V</a>
            </div>
            <div class="action">
                <a href="#">Home</a>
                <a href="reuniones.php">Reuniones</a>
                <a href="vercomunidad.php">Comunidades</a>
                <a href="actas.php" class="active">Actas</a>
                <a href="login.php">Iniciar Sesión</a>
                <a href="register.php">Registro</a>
            </div>
        </div>
        <div class="main">
            <div>
                <div id="row">
                    <input type="date" class="inputFecha">
                    <input type="date" class="inputFecha">
                    <button type="submit" class="buttonFecha" value="Filtrar">🔎</button>
                </div>
                <?php
                include('include/functions.php');
                $row = get_actas();
                foreach ($row as $acta)
                    echo '
                    <div id="acta">
                    <p class="titulo_acta">'. $acta[1]. '</p>
                    <div id="contenido">
                        <p>' .$acta[2]. '
                        </p>
                    </div>
                    <div id="contenido">
                        <p><strong>Eva</strong> dijo: Lorem ipsum dolor</p>
                    </div>
                    <textarea rows="4" cols="30" id="contenido" placeholder="Escriba su comentario aquí"></textarea>
                </div>
                    ';

                ?>
                
                <button type="button" class="button">Enviar</button>
            </div>
        </div>
</body>

</html>