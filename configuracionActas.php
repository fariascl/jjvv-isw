<?php
require_once('include/session.php');
if (check_session()){
    header('Location: login.php');
    exit;
}

if (!isset($_GET['comunidad'])){
    include 'include/functions.php';
    $row = listing_comunidades($_SESSION['id_usuario']);
    //echo var_dump($row);
    header('Location: ?comunidad='.$row[0][0].'');
}

if (isset($_GET['eliminar'])){
    $eliminado = delete_acta($_GET['eliminar']);
    if ($eliminado == 1){
        echo "Acta eliminada";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title>Configuración actas</title>
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="static/css/configuracionGeneral.css">
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
                <a href="crearActa.php">Crear nueva acta</a>
                <a href="actas.php">Historial de actas</a>
                <a class="active" href="configuracionActas.php">Configuración actas</a>
            </div>
        </div>
        <div class="main">
            <div class="center">
                <form id="form" action="#" method="" onclick="">
                    <select class="input" name="comunidad" onchange="location = this.value";>
                        <?php
                            require_once('include/functions.php');
                            
                            $id_usuario = $_SESSION['id_usuario'];
                            $row = listing_comunidades($id_usuario);
                            foreach ($row as $comunidad){
                                echo '<option value="?comunidad='.$comunidad[0].'">'.$comunidad[1].'</option>';
                            }
                        
                    echo '</select>';
                        $id_comunidad = $_GET['comunidad'];
                        $row_2 = get_actas_by_comun($id_comunidad);
                        echo var_dump($row_2);
                        foreach ($row_2 as $acta){
                            echo '
                                <div class="contenedor">
                                <p class="parrafo negrita">Título Acta: '.$acta[1].'</p>
                                    <div class="conenedorBoton">
                                        <!--<a class="button modificar" href="editarActa.php"><i class="fas fa-edit"></i></a>-->
                                        <a class="button eliminar" href="?eliminar='.$acta[0].'"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </div>
                            ';
                        }
                    ?>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
/*

    Hice esto por si acaso en vola algo sirve uwu, con cariño metal <3.

    $ID_ACTA = $_GET['ID_ACTA'];
    $eliminar = "DELETE FROM ACTA WHERE ID_ACTA = '$ID_ACTA';";
    $resultado = mysqli_query($conection, $eliminar);
    if($resultado){
        echo "<script>alert('Eliminado con exito'); </script>";
        header('Location: configuracionActas.php');
    }
*/
?>