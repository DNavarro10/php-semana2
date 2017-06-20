<?php 
	
	include 'Persona.php';
		
		$trabajador1 = new Persona ('101230456','Juan','Pérez Bolaños','1990','37');
		$trabajador1 -> calcularEdad();
		$trabajador1 -> mostrarDatos();
		echo '<br>';
		echo '<hr>';
		$trabajador2 = new Persona ('1012356','juan Pablo','Fernández González','1980','37');
		$trabajador2 -> calcularEdad();
		$trabajador2 -> mostrarDatos();
		echo '<br>';
		echo '<hr>';
		$trabajador3 = new Persona ('00000000','Luis Carlos','Pérez Bolaños','1960','17');
		$trabajador3 -> calcularEdad();
		$trabajador3 -> mostrardatos();
		echo '<br>';
		echo '<hr>';

?>
