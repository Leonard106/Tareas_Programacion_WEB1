<?php

$host = '127.0.0.1:3306';
$user='root';
$password='r4T8n34*';
$dbname='crud_app';

$conexion = new mysqli($host,$user,$password,$dbname);


if($conexion -> connect_error){
    die('Error en la conexion a la DB :( : '.$conexion -> connect_error);
}