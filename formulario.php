<?php
	require 'php/Funciones.php';
	$obj = new Funciones();

	if(isset($_POST['parrafo1'],$_POST['parrafo2'],$_POST['parrafo3'])){
		$editar = $obj->actualizarPublicacion($_POST['parrafo1'],$_POST['parrafo2'],$_POST['parrafo3']);

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<div class="container">
		
		<div class="row">
			<h5>Editar contenido</h5>
		</div>
		<div class="row">
			
			<form action="" method="post">
				<div class="form-group">
					<textarea name="parrafo1" class="form-control" id="" cols="100" rows="5"></textarea>
					<br>
					<textarea name="parrafo2" class="form-control" id="" cols="100" rows="5"></textarea>
					<br>
					<textarea name="parrafo3" class="form-control" id="" cols="100" rows="5"></textarea>
					<br>
					<input type="submit" class="btn btn-info">
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>