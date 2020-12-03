<?php
    function multiplicar($n1,$n2){
        return $n1*$n2;
    }

    function validar_numeros($n1,$n2){
        if(is_numeric($n1) && is_numeric($n2)){
                return true;
        }else{
            return false;
        }
    }

    function validar_campos(){
        if(isset($_POST['numero1']) && isset($_POST['numero2'])){
            $n1 = $_POST['numero1'];
            $n2 = $_POST['numero2'];

            if(validar_numeros($n1,$n2)){
                echo multiplicar($n1,$n2);
            }else{
                echo "<span class='error'>Por favor ingrese numeros </span>";
            }
       }
    }

?>
