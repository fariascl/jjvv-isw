<?php
$userdb = 'bongo';
$passdb = '13146519';
$dbname = 'isw';
$host = 'localhost';

$conn = new mysqli($host, $userdb, $passdb, $dbname);
if ($conn->connect_error){
    die('Error al conectar al servidor SQL' . $conn->connect_error);
}
?>