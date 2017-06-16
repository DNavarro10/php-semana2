<?php 
	
	include ('persona.php');
		
		$trabajador1 = new persona('101230456',"juan Pablo","Fernández González",'1980','37');
		$trabajador1 -> calcularEdad();
		$trabajador1 -> mostrarDatos();
		echo '<br>';
		$trabajador2 = new persona('00000000',"Luis Carlos","Pérez Bolaños",'1990','17');
		$trabajador2 -> calcularEdad();
		$trabajador2 -> mostrarDatos();
	
?>