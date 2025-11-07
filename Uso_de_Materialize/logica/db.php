<?php

$host = 'sql100.infinityfree.com';
$dbname = 'if0_40277802_crud_app';
$user = 'if0_40277802'; 
$password = 'upzBpFbxpMMd';

$conexion = new mysqli($host, $user, $password, $dbname);
if ($conexion->connect_error) {
    die('Error en la conexion a la DB: ' . $conexion->connect_error);
}
?>