<?php
	require 'conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE elaborado LIKE '%$valor%'";
		}
	}
	$sql = "SELECT * FROM registrobi $where";
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
				<h2 style="text-align:center">Registro de libros TecNM</h2>
			</div>
			
			<div class="row">

				<a href="logout.php" class="btn btn-primary">Cerrar Sesion</a>
				<a href="registro.php" class="btn btn-primary">Nuevo Registro</a>
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID libro</th>
							<th>Elaborado</th>
							<th>Carrera</th>
							<th>Tipo de Documento</th>
							<th>Nombre del Proyecto</th>
							<th>Año</th>
							<th>Numero de Tomos</th>
							<th>Total de libros</th>
							<th>Numero de Adquision</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>

								<td><?php echo $row['libros_id']; ?></td>
								<td><?php echo $row['elaborado']; ?></td>
								<td><?php echo $row['carrera']; ?></td>
								<td><?php echo $row['tipo']; ?></td>
								<td><?php echo $row['nombrep']; ?></td>
								<td><?php echo $row['año']; ?></td>
								<td><?php echo $row['tomos']; ?></td>
								<td><?php echo $row['total']; ?></td>
								<td><?php echo $row['numeroad']; ?></td>
								<td><a href="modificar.php?id=<?php echo $row['libros_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['libros_id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Esta seguro de que desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>

