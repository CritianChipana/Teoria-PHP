<?php

$servidor = "localhost";
$usuario = "root";
$password = "12345678";
$db = "todolistbd";


$conexion = new mysqli($servidor,$usuario,$password,$db);
/* 
if($conexion->connect_error){
    die("Error al cargar la pagina: ". $conexion->connect_error ."<br>");
}

$sql = "CREATE DATABASE todolistBD";

if($conexion->query($sql) === true){
    echo "Base de datos creada correctamente...";
}else{
    die("Error al crear la base de datos" . $conexion->connect_error);
} */


$sql2= "CREATE TABLE todoTable(
    id Int (11) auto_increment primary key,
    texto varchar(100) not null,
    completado boolean not null,
    tiempodePC TIMESTAMP 
)";

if($conexion->query($sql2) === true){
    echo "L a tabla fue creada";
}else{
    die("ERROR EN : ". $conexion->connect_error);
}


?>