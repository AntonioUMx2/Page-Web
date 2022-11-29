<?php
	
	require 'conexion.php';
	
    $id = $_POST['libros_id'];
	$elaborado = $_POST['elaborado'];
	$carrera = $_POST['carrera'];
	$tipo = $_POST['tipo'];
	$nombre = $_POST['nombre'];
    $año = $_POST['año'];
    $tomos = $_POST['tomos'];
	$total = $_POST['total'];
	$numeroad = $_POST['numeroad'];
	
	$sql = "UPDATE registrobi SET elaborado='$elaborado', carrera='$carrera', tipo='$tipo', nombrep='$nombre', año='$año', tomos='$tomos', total= '$total', numeroad='$numeroad' WHERE libros_id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="libros.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>