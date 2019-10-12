<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=contmansys','root','');
	}catch(PDOException $e){
		echo "No se pudo conectar a la base de datos ERROR".$e;
	}
?>