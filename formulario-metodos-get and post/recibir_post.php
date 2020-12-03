<?php

    print_r($_POST);
echo   "<br>";
// Lo que va dentro de post son los nombre de cada input
// ejemplo name="adm" ----> esto genera --->  $_POST['adm'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];



    echo "El usuario: " . $usuario . "<br>" ;  
    echo "La contraseña es: " . $password . "<br>";

?>