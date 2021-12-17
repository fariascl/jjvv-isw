<?php
//Verificar si está logeado
require_once('include/session.php'); 
if (check_session()){
    header('Location: login.php');
    exit;
}

//

if(!isset($_GET['comunidad']) && isset($_GET['msg']) && $_GET['msg'] == 1){ //Muestra el mensaje de eliminacion de acta con éxito y redirecciona a la comunidad de la acta
    
    include 'include/functions.php';
    $row = listing_comunidades($_SESSION['id_usuario']);
    header('Location: ?comunidad='.$row[0][0].'&msg=1');

}

if (!isset($_GET['comunidad'])){ //Redirecciona a la primera comunidad
    include 'include/functions.php';
    $row = listing_comunidades($_SESSION['id_usuario']);
    //echo var_dump($row);
    header('Location: ?comunidad='.$row[0][0].'');
}


if (isset($_GET['eliminar'])){ //Elimina el acta
    include 'include/functions.php';
    $eliminado = delete_acta(intval($_GET['eliminar']));
    if ($eliminado == 1){
        $msg = "Acta eliminada";
        header('Location: configuracionActas.php?msg=1');
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
                    <?php
                        if(isset($_GET['msg']) && $_GET['msg'] == '1') // Muestra el mensaje con el estilo css
                        {
                            echo '<p class="alerta exito">Acta eliminada con éxito</p>';
                        }
                        ?>  
                    <select class="input" name="comunidad" onchange="location = this.value";>

                        <?php
                            require_once('include/functions.php'); // Listado de comunidades en el selector y solamente a las que es admin
                            
                            $id_usuario = $_SESSION['id_usuario'];
                            $row = listing_comunidades($id_usuario);
                            foreach ($row as $comunidad){
                                echo '<option value="?comunidad='.$comunidad[0].'">'.$comunidad[1].'</option>';
                            }
                        
                    echo '</select>';
                        $id_comunidad = $_GET['comunidad']; //Muestra las actas por comunidad y
                        $row_2 = get_actas_by_comun($id_comunidad);
                        foreach ($row_2 as $acta){
                            echo '
                                <div class="contenedor">
                                <p class="parrafo negrita"> '.$acta[1].':</p>
                                    <div class="conenedorBoton">
                                        <!--<a class="button modificar" href="editarActa.php"><i class="fas fa-edit"></i></a>-->
                                        <a class="button eliminar" href="?comunidad='.$id_comunidad.'&eliminar='.$acta[0].'"><i class="fas fa-trash-alt"></i></a>
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
