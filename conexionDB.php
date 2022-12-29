<?php

$host = "localhost:3305";
$usuario = "root";
$password = '';
$DB = "tienda";

$conexion = new mysqli($host, $usuario, $password, $DB);

if (mysqli_connect_errno()){
    echo "Fallo al conectar MySQL: " . mysqli_connect_error();
}

?>  