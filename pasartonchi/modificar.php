<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM registrobi WHERE libros_id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="elaborado" class="col-sm-2 control-label">Elaborado por:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="elaborado" name="elaborado" placeholder="Elaborado por: " value="<?php echo $row['elaborado']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="libros_id" name="libros_id" value="<?php echo $row['libros_id']; ?>" />

				<div class="form-group">
					<label for="carrera" class="col-sm-2 control-label">Carrera</label>
					<div class="col-sm-10">
						<select class="form-control" id="carrera" name="carrera">
							<option value="Ingeniería Informatica" <?php if($row['tipo']=='Ingeniería Informatica') echo 'selected'; ?>>Ingeniería Informatica</option>
							<option value="Ingeniería Civil" <?php if($row['tipo']=='Ingeniería Civil') echo 'selected'; ?>>Ingeniería Civil</option>
							<option value="Ingeniería Gestion Empresarial" <?php if($row['tipo']=='Ingeniería Gestion Empresarial') echo 'selected'; ?>>Ingeniería Gestion Empresarial</option>
							<option value="Otro" <?php if($row['tipo']=='Otro') echo 'selected'; ?>>Otro</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="tipo" class="col-sm-2 control-label">Tipo</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipo" name="tipo">
							<option value="Residencias" <?php if($row['tipo']=='Residencias') echo 'selected'; ?>>Residencias</option>
							<option value="Tesis" <?php if($row['tipo']=='Tesis') echo 'selected'; ?>>Tesis</option>
							<option value="Tesina" <?php if($row['tipo']=='Tesina') echo 'selected'; ?>>Tesina</option>
							<option value="Libro" <?php if($row['tipo']=='Otro') echo 'selected'; ?>>Libro</option>
						</select>
					</div>
				</div>

                <div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre del proyecto. </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del proyecto " value="<?php echo $row['nombrep']; ?>" required>
					</div>
				</div>

                <div class="form-group">
					<label for="año" class="col-sm-2 control-label">Año de realizacion:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="año" name="año" placeholder="Año de realizacion " value="<?php echo $row['año']; ?>" required>
					</div>
				</div>

                <div class="form-group">
					<label for="tomos" class="col-sm-2 control-label">Numero de tomo: </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tomos" name="tomos" placeholder="Numero de tomo " value="<?php echo $row['tomos']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="total" class="col-sm-2 control-label">Total de libros adquiridos  </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="total" name="total" placeholder="Total de tomos adquiridos" value="<?php echo $row['total']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="numeroad" class="col-sm-2 control-label">Numero de adquisicion </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="numeroad" name="numeroad" placeholder="Numero de adquisicion " value="<?php echo $row['numeroad']; ?>" required>
					</div>
				</div>

				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="libros.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>