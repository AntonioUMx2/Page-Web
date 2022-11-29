<?php
	
	require 'conexion.php';
	
	$elaborado = $_POST['elaborado'];
	$carrera = $_POST['carrera'];
	$tipo = $_POST['tipo'];
	$nombre = $_POST['nombre'];
    $año = $_POST['año'];
    $tomos = $_POST['tomos'];
	$total = $_POST['total'];
	$numeroad = $_POST['numeroad'];
	
	
	$sql = "INSERT INTO registrobi (elaborado, carrera, tipo, nombrep, año, tomos, total, numeroad) VALUES ('$elaborado', '$carrera', '$tipo', '$nombre', '$año', '$tomos', '$total', '$numeroad')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>BIEN REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>OH NO ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="libros.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>