<?php

/* Funcion para registrar usuario normal, sin permisos de administrador */
function register($nombre, $correo, $clave, $rut){
    include 'db.php';
    /*Falta agregar el try catch*/
    $seed = new DateTime();
    $random_id = md5($seed->getTimestamp()); /* Se crea un hash para ID y evitar que sea consecutivo */
    $sql_query = "INSERT INTO usuario VALUES (?,?,?,?,?);"; /* SQL para insertar en usuarios */
    $sql_query_2 = "INSERT INTO usuario_normal VALUES (?);"; /* SQL para insertar en usuarios normal */
    $stmt = $conn->prepare($sql_query);
    $stmt_2 = $conn->prepare($sql_query_2);

    $stmt->bind_param('sssss', $random_id, $nombre, $correo, $clave, $rut); // Se bindean los parametros para evitar inyecciones de codigo SQL
    $stmt_2->bind_param('s', $random_id); // Lo mismo que la linea anterior
    $stmt->execute(); // Se ejecuta la insercion en los usuarios
    $stmt_2->execute(); // Se ejecuta la insercion en los usuarios_normal
    $stmt->close();
    $stmt_2->close();
    $conn->close();
    return 1;
}

function login($correo, $clave){
    include 'db.php';
    $sql_query = "SELECT COUNT(*), clave FROM usuario WHERE correo = ? GROUP BY clave;";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('s', $correo);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $contador = $row['COUNT(*)'];
    $clave_temp = $row['clave'];
    $stmt->close();
    if ($contador == 1){
        if ($clave == $clave_temp){
            return 1; // la clave es la correcta
        }

        return 2; // la clave es incorrecta
    }
    else{
        return 0; // no existe ninguna cuenta con ese correo
    }   
}

function get_user_data($correo){
    include 'db.php';
    $sql_query = "SELECT * FROM usuario WHERE correo = ?;";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('s', $correo);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row;

}

function get_actas(){
    include 'db.php';
    $sql_query = "SELECT * FROM acta;";
    $stmt = $conn->prepare($sql_query);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_all();
    $stmt->close();
    $conn->close();
    return $row;
}

function get_actas_by_comun($id_comunidad){
    include 'db.php';
    $sql_query = "SELECT acta.id_acta, acta.titulo_acta, acta.fecha_acta FROM acta, registra, reunion, comunidad WHERE acta.id_acta = registra.id_acta AND registra.id_reunion = reunion.id_reunion AND reunion.id_comunidad = comunidad.id_comunidad AND comunidad.id_comunidad = ?;";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('i', $id_comunidad);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_all();
    $stmt->close();
    $conn->close();
    return $row;

}

function get_acta_by_id($id_acta){
    include 'db.php';
    $sql_query = "SELECT * FROM acta WHERE id_acta = ?;";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('i', $id_acta);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    $conn->close();
    return $row;
}

function get_reunion(){
    try {
        include 'db.php';
        $sql_query = "SELECT * FROM reunion;";
        $stmt = $conn->prepare($sql_query);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_all();
        $stmt->close();
        $conn->close();
        return $row;
    } catch (Exception $e) {
        $msg = $e->getMessage();
        return $msg;
    }
    
}

function get_reunion_by_comun($id_comunidad){
    include 'db.php';
    $sql_query = "SELECT reunion.id_reunion, reunion.tema_reunion, reunion.fecha_reunion FROM reunion, tiene, comunidad WHERE reunion.id_reunion = tiene.id_reunion AND tiene.id_comunidad = comunidad.id_comunidad AND comunidad.id_comunidad = ?";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('i', $id_comunidad);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_all();
    $stmt->close();
    $conn->close();
    return $row;
}

function get_reunion_by_id($id_reunion){
    include 'db.php';
    $sql_query = "SELECT * FROM reunion WHERE id_reunion = ?;";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('i', $id_reunion);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    $conn->close();
    return $row;
}

function get_comunidad(){
    try {
        include 'db.php';
        $sql_query = "SELECT * FROM comunidad;";
        $stmt = $conn->prepare($sql_query);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_all();
        $stmt->close();
        $conn->close();
        return $row;
    } catch (Exception $e) {
        $msg = $e->getMessage();
        return $msg;
    }
}

function get_desc_by_comunidad($id){
    try {
        include 'db.php';
        $sql_query = "SELECT * FROM comunidad WHERE id_comunidad = ?;";
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
        $conn->close();
        return $row;
    } catch(Exception $e){
        $msg = $e->getMessage();
    }
}

function get_comunidad_by_id($id_comunidad){
    try {
        include 'db.php';
        $sql_query = "SELECT * FROM comunidad WHERE id_comunidad = ?;";
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('i', $id_comunidad);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
        return $row;
    } catch (Exception $e){
        $msg = $e->getMessage();
    }
}
function get_comunidad_by_acta($id_acta){
    try {
        include 'db.php';
        $sql_query = "SELECT comunidad.nombre_comunidad FROM comunidad, reunion, registra, acta WHERE comunidad.id_comunidad = reunion.id_comunidad AND reunion.id_reunion = registra.id_reunion AND registra.id_acta = ?;";
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('i', $id_acta);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
        return $row;
    } catch (Exception $e) {
        $msg = $e->getMessage();
    }
}

function create_reunion($nombre_reunion, $fecha_reunion, $hora_reunion, $ubicacion_reunion, $descripcion, $id_comunidad, $id_usuario){
    try {
        include 'db.php';
        $sql_query = "INSERT INTO reunion(tema_reunion, fecha_reunion, hora_reunion, ubicacion_reunion, descripcion_reunion, id_comunidad, id_usuario) VALUES (?,?,?,?,?,?,?);";
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('sssssis', $nombre_reunion, $fecha_reunion, $hora_reunion, $ubicacion_reunion, $descripcion, $id_comunidad, $id_usuario);
        $stmt->execute();

        $sql_query_2 = "INSERT INTO tiene VALUES (?,?);";

        $stmt_2 = $conn->prepare($sql_query_2);
        $stmt_2->bind_param('ii', intval($stmt->insert_id), $id_comunidad);
        $stmt_2->execute();
        
        $stmt->close();
        $stmt_2->close();
        $conn->close();
    } catch (Exception $e) {
        $msg = $e->getMessage();
        echo $msg;
    }
    
}

function create_comunidad($nombre_comunidad, $descr_comunidad){
    try {
        include 'db.php';
        $sql_query = "INSERT INTO comunidad(nombre_comunidad, descripcion_comunidad) VALUES (?,?);";
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('ss', $nombre_comunidad, $descr_comunidad);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        return 1;
    } catch (Exception $e) {
        $msg = $e->getMessage();
        return 0;
    }   
}

function get_usuario_by_acta($id_acta){
    try {
        include 'db.php';
        $sql_query = "SELECT usuario.nombre, acta.fecha_acta, reunion.fecha_reunion FROM registra, reunion, usuario, acta WHERE usuario.id_usuario = reunion.id_usuario AND reunion.id_reunion = registra.id_reunion AND registra.id_acta = acta.id_acta AND acta.id_acta = ? 
        GROUP BY nombre, fecha_acta, fecha_reunion;";
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('i', $id_acta);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
        $conn->close();
        return $row;
    }
    catch (Exception $e){
        $msg = $e->getMessage();
        return 0;

    }
}
?>


