<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Insertar, Eliminar and Modificar</title>
</head>

<body>
    <div id="main-conteiner">
        
        <form action="index.php" method="post">
            <input type="text" name="texto" id="texto">
            <input type="submit" value="Añadir pendiente">
        </form>

        <div id="mostrar-todo-container">
            <form id="formMostrarTodo" action="index.php" method="post">
                <input type="checkbox" name="mostrar-todo" id="" onchange="mostrarTodo(this)"> Mostrar Todo
            </form>
        </div>

    </div>
  

<div id="todolist">
    <!-- CONECCION A LA BASE DE DATOS -->
    <?php
        $servidor = "localhost";
        $usuario = "root";
        $password = "12345678";
        $db = "todolistbd";
        $conexion = new mysqli($servidor,$usuario,$password,$db);
        if($conexion->connect_error){
            die("CONEXION FALLIDA: ". $conexion-> connect_error. "<br>");
        }
    // VALIDACION DE DATOS, DEL INPUT TYPE TEXT --> AQUI ESTAMOS INTERTANDO VALORES A LA BASE DE DATOS
        if(isset($_POST['texto'])){
            $texto = $_POST['texto'];
            
            $sql = "INSERT INTO todotable(texto,completado) VALUES('$texto',true)";
            
            if($conexion->query($sql)=== true){
                // echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                
            }else{
                die("Error al insertar datos: ". $conexion->error);
            }
            //VALIDACION PARA ACTUALIZAR LA BASE DE DATOS
        }else if(isset($_POST['completar'])){
                $id = $_POST['completar'];
            $sql = "UPDATE todotable SET completado=1 WHERE id=$id";

            if($conexion->query($sql)=== true){
                // echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                
            }else{
                die("Error al insertar datos: ". $conexion->error);
            }


            //Validacion para ELIMINAR ELEMENTOS:
        }else if(isset($_POST['eliminar'])){

            $id = $_POST['eliminar'];
            $sql = "DELETE FROM todotable  WHERE id=$id";


            if($conexion->query($sql)=== true){
                // echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                
            }else{
                die("Error al insertar datos: ". $conexion->error);
            }
        }




        // Obtener datos de la tabla --> TODOTABLE
        $sql = "SELECT * FROM todotable WHERE completado = 0";
        $resultado = $conexion->query($sql);
        
        if($resultado->num_rows>0){
            while($row=$resultado->fetch_assoc()){
                
                ?>
                
                <div class="Lista">
                    <form  class="formulario1" method="POST" id="formulario<?php echo $row['id'];?>" action="">
                        <input name="completar" value="<?php echo $row['id'];?>" id="<?php echo $row['id']; ?>" type="checkbox" onchange="completarPendiente(this)"><?php echo $row['texto'] ?>
                    </form>

                    <form class="formulario2" method="POST" id="formulario_eliminar<?php echo $row['id'];?>" action="index.php">
                        <input type="hidden" name="eliminar" value="<?php echo $row['id'] ?>">
                        <input type="submit" value="Eliminar">
                    </form>

                </div>
                <?php
              
            }
        }
            /*         
        if($resultado->num_rows>0){
            while($row=$resultado->fetch_assoc()){
                echo '<div>
                <form action="">
                <input type="checkbox">'.$row['texto'].'
                <input type="radio">'.$row['id'].'

                </form>
                </div>';
                echo $row['completado'];
            }
        } */

        $conexion->close();
        ?>
        
        <script>

            function completarPendiente(e){
                var id="formulario"+e.id;
                var formulario = document.getElementById(id);
                formulario.submit();
            }

        </script>
     
</div>    

</body>
</html>