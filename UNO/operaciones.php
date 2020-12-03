<?php
/* 
function multiplicar($n1,$n2){
    return $n1*$n2;
}

function esNumero($n1,$n2){
    if(is_numeric($n1) && is_numeric($n2)){
        return true;
    }else{
        return false;
    }
}

function mostrar_error(){
    echo "<span>OCURRIO UN ERROR :(</span>";
}


function validar_campo(){
    if(isset($_POST['numero01']) && isset($_POST['numero02'])){
        $n1 = $_POST['numero01'];
        $n2 = $_POST['numero02'];

        if(esNumero($n1,$n2)){
            echo multiplicar($n1,$n2);
        }else{
            mostrar_error();
        }


    }
}

 */

function multiplicar($n1,$n2){
    return $n1*$n2;
}

function esNumero($n1,$n2){
    if(is_numeric($n1) && is_numeric($n2)){
        return true;
    }else{
        return false;
    }
}

function mostrar_error(){
    echo "<span>ESTO ES UN ERROR</span>";

}

function validar_datos(){
    if(isset($_POST['numero01']) && $_POST['numero02']){
        $n1 = $_POST['numero01'];
        $n2 = $_POST['numero02'];
        if(esNumero($n1,$n2)){
            echo multiplicar($n1,$n2);
        }else{
            mostrar_error();
        }
    }
}


?>