 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Validar Formulario</title>
     <link rel="stylesheet" href="estilos.css">
 </head>
 <body>

    <div class="contenedor">
        <form class="formulario" action="validarFormulario.php" method="post">

        <?php

            $nombre = $_POST[''];
            $password = $_POST[''];
            $correo = $_POST[''];
            $pais = $_POST[''];
            $radio = $_POST[''];
            $lenguajes= array();

            if(isset($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                $password = $_POST['password'];
                $correo = $_POST['correo'];
                $pais = $_POST['pais'];

                if(isset($_POST['radio'])){
                    $radio = $_POST['radio'];
                }else{
                    $radio = $_POST[''];
                }

                if(isset($_POST['lenguajes'])){
                    $lenguajes = $_POST['lenguajes'];
                }else{
                    $lenguajes = [];
                }

                $campos = array();

                if($nombre == ""){
                    array_push($campos,"El compo nombre no debe de estar vacio");
                }
                if($password == "" || strlen($password)<6){
                    array_push($campos, "No puede estar vacio ni tener menos de 6 carracteristicas ");
                }
                if($correo == "" || strpos($correo,"@")=== false){
                    array_push($campos,"El correo esta vacion o no es valido");
                }
                if($pais==""){
                    array_push($campos,"Seleccione un Pais.");
                }

                if($radio == ""){
                    array_push($campos,"Seleccione Nivel");
                }

                if($lenguajes == "" || count($lenguajes)<3){
                    array_push($campos,"Seleccione  3 o mas lenguajes");
                }


                if(count($campos) > 0){
                    echo "<div class='error'>";
                    echo "<ol>";
                    for($i=0;$i<count($campos);$i++){
                        echo "<li>".$campos[$i]."</li>";
                    }
                    echo "</ol>";
                }else{
                    echo "<div class='correcto'> DATOS CORRECTOS";

                }
                echo "</div>";
// mrjc
            }
            echo "esto es una prueba";
    ?>



            <p>Nombre: <br>
                <input type="text" name="nombre" id="" value="<?php echo $nombre;?>" >
            </p>
            <p>Password: <br>
                <input type="password" name="password" id="" value="<?php echo $password; ?>">
            </p>
            <p>Correo: <br>
                <input type="text" name="correo" id="" value="<?php echo $correo; ?>">
            </p>
            
            <p>
                Pais: <br>
                <select name="pais" id="">

                    <option value="" >Selecciona un pais</option>
                    <option value="mx" <?php if($pais=="mx") echo "selected" ?>>Mexico</option>
                    <option value="eu" <?php if($pais=="eu") echo "selected" ?>>Estados Unidos</option>
                    <option value="es" <?php if($pais=="es") echo "selected"?> >España</option>
                    <option value="ar" <?php if($pais=="ar") echo "selected"?>>Argentina</option>
                    <option value="ch" <?php if($pais =="ch") echo "selected"?> >China</option>
                    <option value="pe" <?php if($pais == "pe") echo "selected" ?> >Peru</option>


                </select>

            </p>

            <p>
                Seleccione Nivel: <br>

                <label for="principiante">
                    <input type="radio" name="radio" id="principiante" value="principiante" <?php if($radio=="principiante" ) echo "checked" ?> > Principiante

                </label>

                <label for="intermedio">
                    <input type="radio" name="radio" id="intermedio" value="intermedio" <?php if($radio=="intermedio") echo "checked" ?>> Intermedio

                </label>

                <label for="avanzado">
                    <input type="radio" name="radio" id="avanzado" value="avanzado" <?php if($radio=="avanzado") echo "checked" ?> >  Avanzado

                </label>
            </p>

            <p>
                Seleccione lenguaje: <br>

                <label for="html">
                    <input type="checkbox" name="lenguajes[]" id="html" value="html" <?php if(in_array("html",$lenguajes)) echo "checked"; ?> > HTML<br>

                </label>
                <label for="css">
                    <input type="checkbox" name="lenguajes[]" id="css" value="css" <?php if(in_array("css",$lenguajes)) echo "checked"; ?> >css<br>
                </label>

                <label for="js">
                    <input type="checkbox" name="lenguajes[]" id="js" value="js" <?php if(in_array("js",$lenguajes)) echo "checked" ?>>JS<br>
                </label>

                <label for="java">
                    <input type="checkbox" name="lenguajes[]" id="java" value="java" <?php if(in_array("java",$lenguajes)) echo "checked"?>>JAVA<br>
                </label>

                <label for="php">
                    <input type="checkbox" name="lenguajes[]" id="php" value="php" <?php if(in_array("php",$lenguajes)) echo "checked" ?>>PHP <br>
                </label>

            </p>

            <p><input type="submit" value="Enviar datos"></p>
            
        </form>
    
    </div>
     
 </body>
 </html>