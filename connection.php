<?php
$servername = "db";
$username = "root";
$password = "root";
$dbname = "edoc"; 

$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("Error de conexión: " . $database->connect_error);
}
?>