<?php
include_once('db.php');
/* Funcion para registrar usuario normal, sin permisos de administrador */
function register($nombre, $correo, $clave){
    /*Falta agregar el try catch*/
    $seed = new DateTime();
    $random_id = md5($seed->getTimestamp()); /* Se crea un hash para ID y evitar que sea consecutivo */
    $sql_query = "INSERT INTO usuario VALUES (%s,%s,%s,%s);"; /* SQL para insertar en usuarios */
    $sql_query_2 = "INSERT INTO usuario_normal VALUES (%s)"; /* SQL para insertar en usuarios normal */
    $stmt = $conn->prepare($sql_query);
    $stmt_2 = $conn->prepare($sql_query_2);

    $stmt->bind_param('ssss', $random_id, $nombre, $correo, $clave); // Se bindean los parametros para evitar inyecciones de codigo SQL
    $stmt_2->bind_param('s', $random_id); // Lo mismo que la linea anterior
    $stmt->execute(); // Se ejecuta la insercion en los usuarios
    $stmt_2->execute(); // Se ejecuta la insercion en los usuarios_normal
    $stmt->close();
    $stmt_2->close();
    $conn->close();
    return 1;
}

function login($correo, $clave){
    $sql_query = "SELECT COUNT(*), clave FROM usuarios WHERE correo = ? GROUP BY clave;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $correo);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $stmt->fetch_assoc();
    $contador = $row['COUNT(*)'];
    $clave_temp = $row['clave'];
    $stmt->close();
    if ($contador == 1){
        if ($clave == $clave_temp){
            return 1; // la clave es la correcta
        }

        return 3; // la clave es incorrecta
    }
    else{
        return 0; // no existe ninguna cuenta con ese correo
    }
    
    
}
?>