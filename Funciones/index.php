<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
    
    <div class="conteiner">
        <h2>Multiplicacion</h2>
        <form action="" method="post">
            <input type="text" name="numero1" >
            <input type="text" name="numero2" id="">

            <input type="submit" value="Calcular">
        </form>
        <?php
            include("operaciones.php");
             echo validar_campos();
        ?>

    </div>


</body>
</html>