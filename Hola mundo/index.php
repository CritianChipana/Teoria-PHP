<?php

print "camila <br>";
$_caca ="abeja mole <br>";

print $_caca;
print 'mmmgv <br>';
$numero = 12;
$numero2 = 6;
print (($numero + $numero2) . ' hola');
print '<br>';
echo ($numero-$numero2 . " ");

// TIPOS DE DATOS

// caracteres
$letra = 'c';
// enteros
$numero = 45;
// cadena
$cadena = "esta es una cadena, vamos de nuevo :#";
// flotante
$decimal = 4.2564;
// booleano
$booleano = true;
// arreglo
$carros = array("chico","camion",4,"perra");
$edad = array("camila", 12, 13, 14);

// nulo
$nada = null;

echo $cadena . " ". $carros[2]." ". $edad . "<br>";

print_r($carros);
print_r($edad . " hola <br>");

// *****************************************************************

// FUNCIONES PARA LOS STRING:

// fUNCION PARA String
// *Longitud
$mensaje = "Hoy voy a aprender mucho";

$tamaño_arreglo = strlen($mensaje);
echo $tamaño_arreglo;

// numero de palabras
echo "<br>";
echo str_word_count($mensaje);

// Reserva
echo "<br>";
echo strrev($mensaje);

//ENCONTRAR TEXTO
echo "<br>";
echo strpos($mensaje,"o");

// Remplazar texto
echo "<br>";
echo str_replace("aprender", "nada", $mensaje);

//Convertir a minusculas
echo "<br>";
echo strtolower($mensaje);

// CONVERTIR A MAYUSCULAS

echo "<br>";
echo strtoupper($mensaje);

//comparar cadenas 
echo "<br>";
echo strcmp("a","a") . "<br>";
echo strcmp("b","a") . "<br>";
echo strcmp("a","b");

//SUBTRAER CADENA
echo "<br>";
echo substr($mensaje, 10,1);
// primer parametro es la variable, posicion desde donde inicia, el tamaño de letras que va a coger de la variable 

//REMOVER ESPACIOS EN BLANCO
echo trim("     camila  esta         rota 45       ");


//********************************************************* */
echo "<br>" . "<br>" . "<br>";


//OPERADORES!!!
$x = 5;
$y =4;

echo $x +$y . "<br>";
echo $x - $y ."<br>";
echo $x * $y . "<br>";
echo $x / $y . "<br>";

//operador para saber si es verdaddero o falso

var_dump($y == $x); //compara si los valores son iguales
var_dump($x === $y); // compara los valores y tambien el tipo que esta tenga

// operador de incremento:
echo "<br>";
echo $y++;
echo "<br>";
echo $y;

?>

<!-- <h1>caminar</h1> -->