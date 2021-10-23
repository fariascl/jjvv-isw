<?php

if ($_SERVER['PHP_SELF'] == '/index.php'){
    echo '<a href="index.php" class="active">Home</a>';
}
else {
    echo '<a href="index.php">Home</a>';
}

if ($_SERVER['PHP_SELF'] == '/reuniones.php'){
    echo '<a href="reuniones.php" class="active">Reuniones</a>';
}
else {
    echo '<a href="reuniones.php">Reuniones</a>';
}
if ($_SERVER['PHP_SELF'] == '/comunidades.php'){
    echo '<a href="comunidades.php" class="active">Comunidades</a>';
}
else {
    echo '<a href="comunidades.php">Comunidades</a>'; 
}
if ($_SERVER['PHP_SELF'] == '/actas.php'){
    echo '<a href="actas.php" class="active">Actas</a>';
}
else {
    echo '<a href="actas.php">Actas</a>';
}
if ($_SERVER['PHP_SELF'] == '/perfil.php'){
   echo '<a href="perfil.php" class="active">Perfil</a>';
}
else {
    echo '<a href="perfil.php">Perfil</a>';
}
if (isset($_GET['salir']) && $_GET['salir'] == true){
    session_destroy();
    header('Location: login.php');
    exit;
}
try {
    if (!check_session()){
        echo '<a href="?salir=true">Cerrar sesión</a>';
    }
    else {
        echo '<a href="login.php">Iniciar Sesión</a>
        <a href="register.php">Registro</a>';
        exit;
    }
} catch (\Throwable $th) {
    include 'session.php';
    if (!check_session()){
        echo '<a href="?salir=true">Cerrar sesión</a>';
    }
    else {
        echo '<a href="login.php">Iniciar Sesión</a>
        <a href="register.php">Registro</a>';
        exit;
    }

}


?>
