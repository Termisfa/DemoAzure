<?php 

header("Access-Control-Allow-Origin: *");


$hostname = '';
$database = '';
$username = '';
$password = '';

//establecer la conexion con la BBDD
$conexion = new mysqli($hostname, $username, $password, $database);



if($conexion -> connect_errno){//si no puede establecer la conexion

	echo ($conexion->connect_error);
}

?>
