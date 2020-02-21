<?php 

/*require ("config.php");

class Conexion{

	protected $conn;

	public function Conexion(){

			$this->conn=new mysqli(BD_SERVIDOR, BD_USUARIO, BD_PASSWORD, BD);

		if($this->conn->connect_errno)
			{

				echo "Error en conexion: " . $this->conn->connect_error;
				return;
			}

		$this->conn->set_charset(BD_CHARSET);
	}
}*/
		 
$conn = new mysqli("localhost", "root", "", "bdasistencia");
$conn->set_charset('utf8');
if ($conn->connect_errno) {
    echo "Error en conectar con mysql: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

//

 ?>