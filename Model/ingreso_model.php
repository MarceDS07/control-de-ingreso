<?php
	class ingreso_model{
		
		//Declaramos atributos privados
		private $db;
		private $persona;
	 
		//Declaramos un constructor que sirve para incializar los atributos
		public function __construct(){
			require_once("../Database/database.php");
			//Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
			//Conectar es la clase y conexion es el metodo
			$this->db = Conectar::conexion();
			//Determinamos que el atributo personas será un array
			$this->persona = array();
			
		}

		//Declaramos un metodo para crear nuevos registros en la tabla
		public function insertIngreso($ci){
			
			$sql = "INSERT INTO ingreso(cedula, fecha, hora) VALUES ('$ci',CURRENT_DATE(),CURRENT_TIME())";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
			
		}

		
		

	}
?>