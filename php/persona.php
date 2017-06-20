<meta charset="utf-8">
<?php 
	class Persona {
		//atrubutos
		public $cedula;
		public $nombre;
		public $apellidos;
		public $anioNacimiento;
		public $edad;
		//constructor
		function __construct($cedula, $nombre, $apellidos, $anioNacimiento, $edad){
			$this -> cedula = $cedula;
			$this -> nombre = $nombre;
			$this -> apellidos = $apellidos;
			$this -> anioNacimiento = $anioNacimiento;
			$this -> edad = $edad;				
		}
		//Metodos
		public function setCedula($cedula){
		 	$this->cedula = $cedula;
		}
		public function setNombre($nombre){
		 	$this->nombre = $nombre;
		}
		public function setApellidos($apellidos){
		 	$this->apellidos = $apellidos;
		}
		public function setAnioNacimiento($anioNacimiento){
		 	$this->anioNacimiento = $anioNacimiento;
		}
		public function calcularEdad(){
		 	$this->edad = date('Y') - $this->anioNacimiento;
		}
		public function mostrarDatos(){
			echo 'Cédula: ' .$this->cedula.
				 '<br>Nombre: ' .$this->nombre.
				 '<br>Apellidos: ' .$this->apellidos.
				 '<br>Fecha de Nacimiento: ' .$this->anioNacimiento.
				 '<br>Edad Calculada: ' .$this->edad;
		}
	}
	
?>
