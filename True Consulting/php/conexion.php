<?php
//Estas son las variables que utilizamos para almacenar el nombre del servidor y esas cosas, para no enredarnos
$servidorBD="localhost";
$usuarioServidor="root";
$claveServidor="";
$baseDatos="true_consulting";

//Esta es la variable de conexion, aqui introducimos los datos para la conexion con la base de datos
$conexion= mysqli_connect($servidorBD,$usuarioServidor,$claveServidor,$baseDatos) or die("Problemas al conectar");







