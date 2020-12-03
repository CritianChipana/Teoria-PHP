<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos get y Post de PHP </title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor-padre">

    <div id="menu" class="menu">
        <ul>
        <li><a  class="inicio" href="#">Iniciar Secion</a></li>
        </ul>
    </div>

    <div id="formulario" class="formulario">
        <form action="recibir_post.php" id="form_session" method="POST">
            <p>Correo Electronico:</p>
            <div class="field-conteiner">
                <input name="usuario" type="text" class="field" placeholder=" user@example.com">
            </div>
            <p>Contraseña:</p>
            <div class="field-conteiner">
                <input name="password"  type="password" class="field" placeholder=" *************">
            </div>

            <p class="center-content">
                <input type="submit" value="Iniciar Seccion">
                <a  class="registrar" href="recibir_get.php ?  tipo_usuario=nuevo & navegador=chome">Registrar cuenta</a>
            </p>

        </form>
    
    </div>


    </div>
    

</body>
</html>