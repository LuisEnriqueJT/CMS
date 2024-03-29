<?php
	require 'conexion.php';

	class Funciones{

		public function obtenerPublicacion(){
			global $pdo;

			$query = $pdo->prepare("SELECT * from proyecto");
			$query->execute();

			return $query->fetchAll();
		}

		public function actualizarPublicacion($parrafo1, $parrafo2, $parrafo3){
			global $pdo;


			$query = $pdo->prepare("UPDATE proyecto SET parrafo1=:p1, parrafo2=:p2, parrafo3=:p3 WHERE id=2");

			$data = [
				'p1' => $parrafo1,
    			'p2' => $parrafo2,
    			'p3' => $parrafo3,
   			];

			$query->execute($data); 
		}
	}
?>