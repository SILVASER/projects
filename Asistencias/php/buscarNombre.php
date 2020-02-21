
<?php


include "../conexion/conexion.php";

$valor = $_POST['valor'];


$res = $conn->query("SELECT CONCAT_WS(' ', Nombre, Apellido) AS resultado FROM personal WHERE DI='" . $valor . "';");

if ($row = $res->fetch_assoc()) {

	     $nombre =  $row['resultado'];
?>
	  <input type='text' class='form-control' id='letra' disabled value='<?php echo $nombre; ?>'>
	    <p style='color: red;font-size: 12px;'>* Debe generar un nombre, Presione el icono buscar</p>
	    	
	    	


	    
<?php 
}else{
?>
			<div class='alert alert-danger'>
  			<button class='close' data-dismiss='alert'><span>&times;</span></button>
  			<Strong>Error!</Strong> <Strong>DOC. Identidad No existe!</Strong>
  			</div>

<?php
}
?>