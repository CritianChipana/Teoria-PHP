<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <!-- CONDICIONALES : vamos ppor mas!! -->
    <div>

    <?php
     
        $hora = 15;

        if($hora >= 6 && $hora<12){
            echo "<h1> hola buenos dias </h1> " . "<br>";
        }else if ($hora>=12 && $hora<=18){
            echo "<h1>Hola buenas tardes </h1> " . "<br>";
        }else if($hora >18 && $hora <= 24){
            echo "<h3>Buenas noches estimados </h3>";
        }else{
            echo "Buenas madrugadas :D";
        }
    
    ?>
    </div>
<!-- **************************************************************** -->
        <!-- CICLOS FOR  AND WHILE -->

    <div>
        <!-- CICLO FOR -->
        <?php

        for($i=0;$i<10;$i++){
        ?>    
            <img src="asfasc" alt="esta es la imgagen">

        <?php    
        }
        ?>
    </div>

    <div>
        <!-- CICLO WHILE -->

        <?php
        while(rand(1,3)!=1){
        ?>
            <img src="asfasc" alt="esta es la imgagen">

         <?php   
        }

        ?>

    </div>        


    <div class="div2">
        <!-- CICLO DO WHILE -->
    <?php

        do{
    ?>
            <img src="asfasc" alt="esta es la imgagen">
    <?php
        }while(rand(1,3)!=1);

    ?>
    </div>


</body>
</html>