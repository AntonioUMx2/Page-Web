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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="elaborado" class="col-sm-2 control-label">Elaborado por: </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="elaborado" name="elaborado" placeholder="Elaborado" required>
					</div>
				</div>

				<div class="form-group">
					<label for="carrera" class="col-sm-2 control-label">Carrera </label>
					<div class="col-sm-10">
						<select class="form-control" id="carrera" name="carrera">
							<option value="Ingeniería Informatica">Ingeniería Informatica</option>
							<option value="Ingeniería Civil">Ingeniería Civil</option>
							<option value="Ingeniería Gestion Empresarial">Ingeniería Gestion Empresarial</option>
							<option value="Otro">Otro</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="tipo" class="col-sm-2 control-label">Tipo de documento</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipo" name="tipo">
							<option value="Residencias">Residencias</option>
							<option value="Tesis">Tesis</option>
							<option value="Tesina">Tesina</option>
							<option value="Libro">Libro</option>
						</select>
					</div>
				</div>

                <div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre del Proyecto </label>
					<div class="col-sm-10">
						<input type="nombre" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Proyecto" required>
					</div>
				</div>

                <div class="form-group">
					<label for="año" class="col-sm-2 control-label">Año de realizacion</label>
					<div class="col-sm-10">
						<input type="año" class="form-control" id="año" name="año" placeholder="Año de realizacion" required>
					</div>
				</div>

                <div class="form-group">
					<label for="tomos" class="col-sm-2 control-label">Numero de Tomos </label>
					<div class="col-sm-10">
						<input type="tomos" class="form-control" id="tomos" name="tomos" placeholder="Numero de tomos" required>
					</div>
				</div>

				<div class="form-group">
					<label for="total" class="col-sm-2 control-label">Total de libros </label>
					<div class="col-sm-10">
						<input type="total" class="form-control" id="total" name="total" placeholder="Total de libros" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="numeroad" class="col-sm-2 control-label">Numero de Adquisicion </label>
					<div class="col-sm-10">
						<input type="numeroad" class="form-control" id="numeroad" name="numeroad" placeholder="Numero de Adqusicion" required>
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