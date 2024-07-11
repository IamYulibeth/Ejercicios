<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "users";

$conexion = new mysqli($hostname, $username, $password, $database);

if ($conexion->connect_errno){
    echo "Lo sentimos, este sitio web está experimentado problemas.";
    echo "Error: Falló al conectarse a MySQL debido a: \n";
    echo "Errno: " . $conexion->connect_errno . "\n";
    echo "Error: " . $conexion->connect_error . "\n";
    exit;
} else {
    echo "Conexión exitosa";
}

?>