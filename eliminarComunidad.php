<?php

    include 'include/db.php';
    $id_usuario = $_GET['id_usuario'];
    $id_comunidad = $_GET['id_comunidad'];
    $sql_query = "DELETE FROM pertenece WHERE id_usuario = ? AND id_comunidad = ?;";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('ss', $id_usuario, $id_comunidad);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header('Location: comunidades.php?msg=2');

?>