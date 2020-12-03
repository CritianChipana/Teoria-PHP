<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <?php

    $fruta = array("platano","manzana","uvas","fresa","freeshet");
    print_r($fruta );
    echo "<br>";
    echo $fruta[3] . "<br>";    
    echo count($fruta) . " elementos" . "<br>";

    //MOSTRAR TODOS LOS ELEMENTOS DEL ARREGLO

    for($i=0;$i<count($fruta);$i++){

        echo $fruta[$i] . "<br>";
    }

    // UTILIZAMOS ARREGLOS ASOCIATIVOS:

    $edad = array("lucas"=> 45,"mateo" => 12 , "juan" => 8, "marcos" =>10);

    print_r($edad);
    echo $edad["lucas"] . "<br>";

    foreach($edad as $llave => $contenido){
        echo $llave . " tiene el valor de ". $contenido . "<br>";
    }

    ?>
</body>
</html>