<?php

    $servidor = "localhost";
    $usuario = "root";
    $password = "12345678";
    $dato = "alimentos";


    $conexion = new mysqli($servidor,$usuario,$password,$dato);

    if($conexion-> connect_error){
        die("Conexion fallida: ". $conexion->connect_error);
    }
    
    echo "Conexion exitosa... :D";

    
?>