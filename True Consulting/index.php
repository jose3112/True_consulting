<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"> 
   
    <!--Hoja de estilo weones-->
    <link rel="stylesheet" href="css/estilos.css">
    
    <!--Fuentes que usamos-->
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    
    <title>Bienvenido a True Consulting</title>
</head>
<body>
        <script src="js/jquery.js"></script>
        <script src="js/main.js"></script>

    <!--Aqui estan los formularios (Botones, labels, y esas cosas)-->
<div class="contenedorFormularios">

    <div class="contenedorLogo">
<img src="img/TrueConsultingRecortada.jpg"  />
    </div>
<!--Contenido de los formularios-->
<div class="contenidoTabla">
<h1>Iniciar Sesión</h1>
<form action="php/validarUsuario.php" method="post" class="form-inicio" onsubmit="return validarCampos();">
<div class="contenedor-input">
    <label>Usuario <span class="req">*</span>
    </label>
    <input type="text" name="usuario" id="usuario" required autofocus>
</div>
<div class="contenedor-input">
        <label>Contraseña <span class="req">*</span>
        </label>
        <input type="password" name="pass" id="pass" required>
    </div>
<input type="submit" class="button button-block" value="Iniciar Sesión">

</form>
</div>


</div>
    
</body>
</html>