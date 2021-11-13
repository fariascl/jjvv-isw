<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Crear nueva acta</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/crearnuevaActa.css">
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
                <a class="active" href="crearActa.php">Crear nueva acta</a>
                <a href="actas.php">Historial de actas</a>
                <a href="configuracionActas.php">Configuración actas</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="#" method="" onclick="" autocomplete="off" onsubmit="return noBlank();"> <!--falta validar-->
                    <p class="tittle">Crear nueva acta</p>
                    <p class="preinput">Título</p>
                    <input class="input"  type="text" id="nombre" placeholder="Ingrese título">
                    <p class="preinput">Seleccione comunidad</p>
                    <select class="input" name="comunidad">
                        <option class="input" value="comunidad 1">Comunidad 1</option>
                        <option value="comunidad 2">Comunidad 2</option>
                        <?php
                            require_once('include/functions.php');
                            $row = get_comunidad();
                            foreach ($row as $comunidad){
                                echo '<option value="'.$comunidad[0].'">'.$comunidad[1].'</option>';
                            }
                        ?>
                    </select>
                    <p class="preinput">Selecciona fecha</p>
                    <input class="input" type="date" name="fecha_acta">
                    <p class="preinput">Descripción</p>
                    <textarea class="input textarea" name="descripcion_comunidad" id="descripcion" cols="10" rows="5"
                        placeholder="Ingrese descripción"></textarea>
                    <input class="button secundario" type="submit" value="Crear acta">
                </form>
            </div>
        </div>
    </div>
    <script src="static/js/validacionVarias.js"></script>
</body>

</html>