<?php

    print_r($_GET);

    echo   "<br>";

// Con el metodo GET que se usa en link nosotros mandamos infomacion primero la ubicacion luego las variables
// href="recibir.php?tipo_datos=nuevo & navegador=chome"
// con $_GET['tipo de usuario']; se captura el valor


    $usuario_get = $_GET['tipo_usuario'];

    $navegador = $_GET['navegador'];

echo "Usuario: " . $usuario_get . "<br>";

echo "Navegador: ". $navegador . "<br>"




?>