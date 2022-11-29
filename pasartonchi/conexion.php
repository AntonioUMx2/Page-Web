<?php
	$mysqli = new mysqli('localhost', 'root', '', 'registrob');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);	
	}

    

?>