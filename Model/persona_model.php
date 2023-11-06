<?php
class persona_model
{

	//Declaramos atributos privados
	private $db;
	private $persona;

	//Declaramos un constructor que sirve para incializar los atributos
	public function __construct()
	{
		require_once("../Database/database.php");
		//Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
		//Conectar es la clase y conexion es el metodo
		$this->db = Conectar::conexion();
		//Determinamos que el atributo personas será un array
		$this->persona = array();

	}

	//Declaramos un metodo para obtener todos los registros de personas
	public function getPersona()
	{

		$sql = "SELECT TOP 10 * FROM `persona` ORDER BY ci";
		$consulta = $this->db->query($sql);

		while ($filas = $consulta->fetch_assoc()) {
			//Asignamos al atributo personas el resultado de la consulta
			$this->persona[] = $filas;
		}
		//El método devuelve el array resultante
		return $this->persona;

	}

	#Region login
	public function login($ci)
	{

		$sql = "SELECT * from persona where ci=$ci and tipo='administrador'";
		$consulta = $this->db->query($sql);

		$num_rows = mysqli_num_rows($consulta);

		if ($num_rows > 0 || $num_rows < 1) {
			echo '<script>alert("Los datos son incorrectos, intente de nuevo.");</script>';
		}
		//El método devuelve el array resultante
		return $this->persona;

	}
	#end 
	public function ingreso($ci)
	{

		$sql = "SELECT * from persona where ci=$ci";
		$consulta = $this->db->query($sql);

		$num_rows = mysqli_num_rows($consulta);

		if ($num_rows > 1 || $num_rows < 1) {
			echo '<script>alert("Los datos son incorrectos, intente de nuevo.");</script>';
		}
		//El método devuelve el array resultante
		return $this->persona;

	}



	//Declaramos un metodo para crear nuevos registros en la tabla
	public function insertPersona($ci, $nombre, $apellido, $tipo)
	{

		$sql = "INSERT INTO persona(ci, nombre, apellido, tipo) VALUES ('$ci','$nombre','$apellido','$tipo')";
		if ($this->db->query($sql)) {
			return true;
		} else {
			return false;
		}

	}

	//Declaramos un metodo para eliminar registros en la tabla
	public function deletePersona($ci)
	{

		$sql = "DELETE FROM persona WHERE ci = $ci";
		if ($this->db->query($sql)) {
			return true;
		} else {
			return false;
		}

	}

	//Declaramos un metodo para modificar registros en la tabla
	public function updatePersona($ci, $nombre, $apellido, $tipo)
	{

		$sql = "UPDATE `persona` SET `nombre`='$nombre',`apellido`='$apellido',`tipo`='$tipo' WHERE ci = $ci";
		if ($this->db->query($sql)) {
			return true;
		} else {
			return false;
		}

	}

}
?>
