<?php
class persona_model
{

	//Declaramos atributos privados
	private $db;
	private $persona;

	//Declaramos un constructor que sirve para incializar los atributos
	public function __construct()
	{
		require_once("Database/database.php");
		//Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
		//Conectar es la clase y conexion es el metodo
		$this->db = Conectar::conexion();
		//Determinamos que el atributo personas será un array
		$this->persona = array();

	}
	

	public function login($ci)
	{

		$sql = "SELECT * from persona where ci=$ci and tipo='administrador'";
		$consulta = $this->db->query($sql);

		$num_rows = mysqli_num_rows($consulta);

		if ($num_rows != 1) {
			echo '<script>alert("Los datos son incorrectos, intente de nuevo.");</script>';
			return false;
		}else{
			return true;
		}

	}

}
?>