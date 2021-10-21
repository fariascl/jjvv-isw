<?php
$userdb = 'root';
$passdb = '';
$dbname = 'isw';
$host = 'localhost';

$conn = new mysqli($host, $userdb, $passdb, $dbname);
if ($conn->connect_error){
    die('Error al conectar al servidor SQL' . $conn->connect_error);
}
?>