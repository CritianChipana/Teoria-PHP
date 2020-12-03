<?php
    $servidor = "localhost";
    $user = "root";
    $password = "12345678";


    $conexio = new mysqli($servidor,$user,$password);

    if($conexio->connect_error){
        die($conexio->connect_error. "Este es un error");
    }
    echo "exito al conectarse";

?>