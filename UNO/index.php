<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div id="conteiner">
        <h2>Multiplicacion</h2>
        <!-- <form action="" method="post">
            <input type="text" name="numero01">
            <input type="text" name="numero02">
        
            <input type="submit" value="Clacular">

        </form> -->

        <?php 
           /*  include("operaciones.php");
            echo validar_datos(); */
        ?>

    </div>

 <?php
      /*   // SINTAXIS Y VARIABLES EN PHP
        $variable = 35;
        $nombre = "Marco";

        echo $nombre . " tiene " . $variable . "<br>";
        print "esto tambien imprime en el documente <br>"; */

    ?>

    <?php 
      /*   //TIPOS DE DATOS Y ARREGLOS
        //CARACTER:
            $letra = "c";
        //NUMERO:
            $numero = 45;
        //CADENA
            $cadena = "esta variable es una cadena <br>";
        //FLOTANTE
            $decimal = 8.123456;
        //BOOLEANO
            $verdadero = true;
        //ARREGLO
            $carros = array("chico","camion","convertible");
            $edad = array(12,15,45,35);
        //NULO
            $nulo = null;

        echo $cadena . "<br>";
        echo $decimal . "<br>";

        //PARA IMORIMIR ARREGLOS
            print_r($carros);  */
    
    ?>



    <?php
    /* 
        echo "<br> fecha: " . date("l") . date("d") ; */
    
    ?>

    <?php
   /*  //Funciones para strings
    $mensaje = "Hoy voy a aprender mucho";
    echo $mensaje . "<br>";
    // Longitud
    echo strlen($mensaje) . "<br>";
    
    // Numero de palabras
    echo str_word_count($mensaje) . "<br>";

    // Revertir arreglo
    echo strrev($mensaje) . "<br>";

    //Encontrar texto
    echo strpos($mensaje ,"aprender") . "<br>";

    //Remplazar texto
    echo str_replace("a","4",$mensaje) . "<br>";

    // Convertir en minuscula
    echo strtolower($mensaje)."<br>";

    //Convertir en Mayuscula
    echo strtoupper($mensaje) . "<br>";

    //Comparar Cadenas 
    echo strcmp("a","b") . "<br>";

    // Substraer cadena, variable, idenx, numero de valores
    echo substr($mensaje, 10, 1) . "<br>";

    //Remover espacios en blancos
    echo trim("esto            es una  prueba"); */

/* 
    $x = 5;
    $y = "5";
    echo $x      = $x +$y;
    echo $x +=$y;
    echo $x++;
    echo ++$x;


    // PARA PODER DIFERENCIAR VALORES CON EL TIPO DE LAS 
    // VARIABLES UTILIZAMOS (===)
 
    echo var_dump($x === $y); */

    //CONDICONALES -------------------------------------------------------------
/* 
     $hora =24;

     if($hora > 6 && $hora <12){
        echo "Hola buenos dias";
     }else if($hora >= 12){
        echo "Buneas tardes";
     }else{
         echo "Buenas noches";
     }
 */

     // CICLOS:

   /*   for($i= 0; $i<10;$i++){
        ?>
        <img src="https://i.pinimg.com/236x/ba/5e/2a/ba5e2a84f9766d492c1af836b2ab5bed.jpg" alt="">
        <?php
     }
      */
   /*   $i = 0;
    while($i !== 5){
        ?>
        <img src="https://i.pinimg.com/236x/ba/5e/2a/ba5e2a84f9766d492c1af836b2ab5bed.jpg" alt="">
        <?php
        $i++;
    } */

/* 
    $frutas = array("uva","manzana","melon","naranja");

    print_r($frutas) . "<br>";
    echo "<br>".  $frutas[3] . "<br>";
    echo count($frutas) . "<br>";

    for($i = 0 ; $i<count($frutas);$i++ ){
        echo $frutas[$i] . "<br>";
    }

    $edades = array("Marcos" => 5,"Juan" => 6,"Luis" => 7, 00=>8);

    print_r($edades);
    echo  "<br>". $edades[00] . "<br>";
    echo $edades["Luis"] . "<br>";

    foreach($edades as $key => $value){
        echo $key . " tiene el valor de " . $value . "<br>";
    } */

    ?>
    <!-- METODOS DE POST AND GET ------------------------------------------------------------------------------>
    <!-- <div id="formulario">


        <form action="recibir_post.php" id="form_session" method="post">
        <p>Correo electronico</p>
        <div class="field-conteiner">
            <input type="text" name="usuario" class="field" id="" placeholder="user@example.com">
        </div>

        
        <p>Contraseña</p>
        <div class="field-conteiner">
            <input type="password" name="password" class="field" id="" placeholder="****************">
        </div>

        <p class="center-conteiner">
            <input type="submit" class="boton" value="Iniciar sesion"><br>
            <a href="recibir_get.php?tipo_usuario=Carlos&navegador=chrome">Registrar Cuenta</a>
        </p>

        </form>

    </div> -->

<!--   VALIAR FORMULARIO SIMPLE:  -->

    <form action="index.php" method="post">

        <?php

            if(isset($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                $password = $_POST['password'];
                $email  = $_POST['email'];
                $campo = array();
                if($nombre == ""){
                    array_push($campo, "El campo no puedeestar vacio");
                }
                if($password == "" || strlen($password)<6){
                    array_push($campo,"El campo de password no puede estar vacio, ni tener menos de 6 caracteristicas");
                    
                }
                if($email == "" || strpos($email,"@")===false){
                   array_push($campo,"Ingresa un correo electronico valido"); 
                }
                if(count($campo)>0){
                    for($i=0;$i<count($campo);$i++){
                        echo $campo[$i] . "<br>";
                    }

                }else{
                    echo "Datos correctos";
                }


            }

        ?>


        <p>Nombre: <br>
            <input type="text" name="nombre" id="">
        </p>

        <p>Password: <br>
            <input type="text" name="password" id="">
        </p>

        <p>Correo electronico: <br>
            <input type="text" name="email">
        </p>

        <p><input type="submit" value="Enviar datos" id=""></p>
    </form>


</body>
</html>