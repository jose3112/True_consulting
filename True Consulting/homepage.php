<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/estilosHome.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True Consulting</title>
</head>
<body>
<script src="js/jquery.js"></script>
<div class="logo_usuario_cerrar">
<ul>
<li><img class="LogoHome" src="img/TrueConsultingRecortada.jpg" /></li>
<li><?php
    include ("php/conexion.php");

    session_start();
    //Esto de abajo sirve para tomar el nombre completo del usuario de la base de datos
    
    $usuario= $_SESSION['usuario'];
    $consultaNombre= "SELECT usuario, nombre_completo FROM usuarios WHERE usuario='$usuario'";
    $nombreComp= mysqli_query($conexion, $consultaNombre);
    $campoNombre= mysqli_fetch_assoc($nombreComp);
    
    
    $textoNombre=utf8_decode($campoNombre['nombre_completo']);
    echo "Bienvenido/a,<br/> $textoNombre<br/>";
    ?></li>
<li><form action="php/cerrarSesion.php" method="post"><input type="submit" value="Cerrar Sesion" class="boton botonBloque"></form></li>

</ul>
</div>

<div class="contenedor_registros_consultas">
<ul class="contenedor_tabs">
    <li class="tab active">  <a href="#registrar-atencion">Registrar Atencion</a> </li>
    <li class="tab"> <a href="#consultar-atencion">Consultar Atencion</a> </li>
    <script type="text/javascript">
    $(document).ready(function(){

$(".tab a").on("click", function(e){
    e.preventDefault();
    $(this).parent().addClass("active");
    $(this).parent().siblings().removeClass("active");

    target= $(this).attr("href");

    $(".contenido-tab > div").not(target).hide();
    $(target).fadeIn(600);
    
});

});
    </script>
</ul>
<div class="contenido-tab">

<div id="registrar-atencion">
<h1>Registrar Atenciones Medicas</h1>
<form action="php/registrar.php" method="post">
<div class="contenedor-input">
    <label>Numero de atencion:
    </label>
    <input type="text" name="reg-numero" id="reg-numero"  readonly >
</div>

<div class="contenedor-input">
    <label>Nombres:</label>
    <input type="text" name="reg-nombre" id="reg-nombre"  required autofocus>
</div>
<div class="contenedor-input">
    <label>Apellidos:</label>
    <input type="text" name="reg-apell" id="reg-apell" required >
</div>
<div class="contenedor-input">
    <label>Numero de Cedula:</label>
    <input type="text" name="reg-cedula" id="reg-cedula"  required >
</div>
<div class="contenedor-input">
    <label>Telefono:</label>
    <input type="text" name="reg-telef" id="reg-telef"  required >
</div>
<div class="contenedor-input">
    <label>Edad:</label>
    <input type="text" name="reg-edad" id="reg-edad"  required >
</div>
<div class="contenedor-input">
    <label>Sexo:</label>
    <input type="text" name="reg-sexo" id="reg-sexo"  required >
</div>
<div class="contenedor-input">
    <label>Ocupacion:</label>
    <input type="text" name="reg-ocup" id="reg-ocup"  required >
</div>
<div class="contenedor-input">
    <label>Estado Civil:</label>
    <input type="text" name="reg-estado" id="reg-estado"  required >
</div>
<div class="contenedor-input">
    <label>Tipo de Sangre:</label>
    <input type="text" name="reg-sangre" id="reg-sangre"  required >
</div>
<div class="contenedor-input">
    <label>Descripcion de Problema:</label>
    <input type="text" name="reg-descr" id="reg-descr"  required >
</div>
<div class="contenedor-input">
    <label>Tipo de Atencion:</label>
    <input type="text" name="reg-atencion" id="reg-atencion"  required >
</div>
<div class="contenedor-input">
    <label>Registrado por:</label>
    <input type="text" name="reg-regist" id="reg-regist" value="<?php $usuario= $_SESSION['usuario'];
    $consultaNombre= "SELECT usuario, nombre_completo FROM usuarios WHERE usuario='$usuario'";
    $nombreComp= mysqli_query($conexion, $consultaNombre);
    $campoNombre= mysqli_fetch_assoc($nombreComp);
    $textoNombre=utf8_decode($campoNombre['nombre_completo']);
    echo $textoNombre?>" required readonly >
</div>
<input type="submit" class="botonReg boton-blockR" value="Guardar">
</form>
</div>

<div id="consultar-atencion">

<h1>Consultar Atenciones Medicas</h1>
<form action="#" method="post">
<div class="contenedor-input">
    <label>Numero de atencion:
    </label>
    <input name="con-numero" id="con-numero" type="text" required autofocus >
</div>

<div class="contenedor-input">
    <label>Nombres:</label>
    <input type="text" name="con-nombre" id="con-nombre"  readonly>
</div>
<div class="contenedor-input">
    <label>Apellidos:</label>
    <input type="text" name="con-apell" id="con-apell"  readonly >
</div>
<div class="contenedor-input">
    <label>Numero de Cedula:</label>
    <input type="text" name="con-cedula" id="con-cedula"  readonly >
</div>
<div class="contenedor-input">
    <label>Telefono:</label>
    <input type="text" name="con-telef" id="con-telef"  readonly >
</div>
<div class="contenedor-input">
    <label>Edad:</label>
    <input type="text" name="con-edad" id="con-edad"  readonly >
</div>
<div class="contenedor-input">
    <label>Sexo:</label>
    <input type="text" name="con-sexo" id="con-sexo"  readonly >
</div>
<div class="contenedor-input">
    <label>Ocupacion:</label>
    <input type="text" name="con-ocup" id="con-ocup"  readonly >
</div>
<div class="contenedor-input">
    <label>Estado Civil:</label>
    <input type="text" name="con-estado" id="con-estado"  readonly >
</div>
<div class="contenedor-input">
    <label>Tipo de Sangre:</label>
    <input type="text" name="con-sangre" id="con-sangre"  readonly >
</div>
<div class="contenedor-input">
    <label>Descripcion de Problema:</label>
    <input type="text" name="con-descr" id="con-descr" readonly >
</div>
<div class="contenedor-input">
    <label>Tipo de Atencion:</label>
    <input type="text" name="con-atencion" id="con-atencion" readonly >
</div>
<div class="contenedor-input">
    <label>Registrado por:</label>
    <input type="text" name="con-regist" id="con-regist"  readonly >
</div>
<input type="submit" class="botonReg boton-blockR" value="Consultar">
</form>
</div>

</div>
</div>


</body>
</html>