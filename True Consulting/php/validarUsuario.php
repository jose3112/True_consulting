<?php
if (isset($_POST['usuario']) and isset($_POST['pass'])){
include('conexion.php');
session_start();


$usuario=$_POST['usuario'];
$pass=$_POST['pass'];


$verificarUsuario="SELECT COUNT(*) as contar FROM usuarios WHERE usuario='$usuario' and clave='$pass'";
$consultaUsuario=mysqli_query($conexion, $verificarUsuario);
$arregloUsuario= mysqli_fetch_array($consultaUsuario);

if($arregloUsuario['contar']>0){
    
    $_SESSION['usuario']= $usuario;
    header("location:../homepage.php");

}
else{
    
header('location:../index.php');

}

}
else{
    header('location:../index.php');
}
?>