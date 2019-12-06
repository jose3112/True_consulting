<?php
if (isset($_POST['reg-nombre']) and isset($_POST['reg-cedula'])){
include 'conexion.php';
session_start();

$regNumero=$_POST['reg-numero'];
$regNombre=$_POST['reg-nombre'];
$regApellido=$_POST['reg-apell'];
$regCedula=$_POST['reg-cedula'];
$regTelef=$_POST['reg-telef'];
$regEdad=$_POST['reg-edad'];
$regSexo=$_POST['reg-sexo'];
$regOcupacion=$_POST['reg-ocup'];
$regEstado=$_POST['reg-estado'];
$regSangre=$_POST['reg-sangre'];
$regDescr=$_POST['reg-descr'];
$regAtencion=$_POST['reg-atencion'];
$regRegist=$_POST['reg-regist'];

$insertar = "INSERT INTO atenciones(nombres,apellidos,no_cedula,telefono, edad, sexo, ocupacion, estado_civil, tipo_sangre, descripcion_proble, tipo_atencion, registrado_por) VALUES ('$regNombre','$regApellido','$regCedula','$regTelef','$regEdad','$regSexo','$regOcupacion','$regEstado','$regSangre','$regDescr','$regAtencion','$regRegist')";


$resInserta= mysqli_query($conexion,$insertar);


header('location:../homepage.php');


}
else{
    
header('location:../index.php');
}