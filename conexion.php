<?php
$host = 'localhost';
$nom = 'root';
$pw = '';
$db = 'uspg';


$conn = mysqli_connect($host, $nom, $pw, $db);
if (!$connection) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>