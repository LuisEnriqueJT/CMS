<?php
	require 'php/Funciones.php';

	$variable = new Funciones();

	$publicacion = $variable->obtenerPublicacion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>
	
	<div class="container">
		<h3>Proyectos exitosos</h3>
		<div class="row">
			<?php foreach($publicacion as $listado):?>
				<div class="col lg-3">			
					<p> <?php echo $listado['parrafo1']?> </p>
					<p>	<?php echo $listado['parrafo2']?> </p>
					<p>	<?php echo $listado['parrafo3']?> </p>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

<!--
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, fuga Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, magnam.

	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam ex similique voluptatum, cupiditate. Harum voluptates, natus. Fugit autem reiciendis sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus hic, eligendi cumque ipsa. Mollitia, soluta, consectetur! Rem adipisci in, modi.

	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nulla pariatur, recusandae et delectus iusto. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi dignissimos dolore inventore libero sapiente optio.
	-->