<?php 
	class persona {
		//atrubutos
		public $cedula;
		public $nombre;
		public $apellidos;
		public $anioNacimiento;
		public $edad;
		
		//constructor
		function _construct($cedula, $nombre, $apellidos, $anioNacimiento, $edad){
			$this -> cedula = $cedula;
			$this -> nombre = $nombre;
			$this -> apellido = $apellidos;
			$this -> anioNacimiento = $anioNacimiento;
			$this -> edad = $edad;				
		}
		//Metodos
		public function setCedula($cedula){
		 	$this -> cedula = $cedula;
		}
		public function setnombre($nombre){
		 	$this -> nombre = $nombre;
		}
		public function setapellidos($apellidos){
		 	$this -> apellidos = $apellidos;
		}
		public function setanioNacimiento($anioNacimiento){
		 	$this -> anioNacimiento = $anioNacimiento;
		}
		public function calcularEdad(){
		 	$this -> edad = date('Y') - $this ->anioNacimiento;
		}
		public function mostrarDatos(){
			echo 'Cédula: ' .$this ->cedula.
				 '<br>Nombre: ' .$this ->nombre.
				 '<br>Apellidos: ' .$this ->apellidos.
				 '<br>Fecha de Nacimiento: ' .$this ->anioNacimiento.
				 '<br>Edad Calculada: ' .$this ->edad;
		}
	}
		
?>