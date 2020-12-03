<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de las fechas:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="contenedor">
        <!-- 
            COMANDO PARA ACTIVAR ES "date();"
            d - dia del mes  (1-31)
            m - mes del años (1-12)
            y - años (4 digitos) ;
            l - nombre de la semana

            h - hora en formato 1-12
            i - minutos 0-59
            s - segundo 0-59
            a - para indicar si queremos mostrar ( am or pm )

             Es * requerido * que use la configuración date.timezone o la función date_default_timezone_set ().

         -->


         <?php

            date_default_timezone_set('America/Lima');

            echo "Fecha: " . date("d"). " ". date("m")." ". date("Y") ."<br>";
            echo "La hora es: ".date("h: i: s a"). "<br>";        
            echo "Otra forma de fecha: ". date("d-m-y") . "<br>";
         ?>

    </div>

</body>
</html>