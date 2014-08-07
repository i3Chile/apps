<?php
    session_start();
    
	define("error01", "No se pudo conectar a la SQL - Error 001.");
    define("error02", "Contraseña y/o Usuario inconecto - Error 002.");
    define("error03", "No se pudo procesar el registro - Error 003.");
    define("error04", "Las contraseñas no coinsiden - Error 004.");
    define("error05", "El usuario ya existe - Error 005.");
    define("error06", "Seccion Inexistente - Error 006.");
	
	$servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $nombrebd = "safemans";
    $conexion = mysql_connect($servidor, $usuario, $contrasena) or die("Error: ".error01."");
    mysql_select_db($nombrebd, $conexion);
        
?>