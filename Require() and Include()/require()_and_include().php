<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso del require() and include()</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <div class="contenedor">
    
        <?php 
            include("menu.php");
        ?>
        <h3>Este es el contenido principal</h3>

        <?php
            require("footer.php");
        ?>


    </div>


</body> 
</html>