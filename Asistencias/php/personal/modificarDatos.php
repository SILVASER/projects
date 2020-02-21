<?php
require_once ("../../conexion/conexion.php");

if(isset($_GET['di'])){
  
$stmt = $conn->prepare("UPDATE personal SET Celular =?,Direccion=?,Email=?,Edad=?,NHijos=?,Cargo=?,EstadoCivil=?,FechaCese=? WHERE DI =?;");
$stmt->bind_param('sssssssss', $celular, $direccion, $email, $edad, $nhijos, $cargo, $estadocivil, $fechacese, $di);

			       $celular = $_POST['celular'];
             $direccion = $_POST['direccion'];
             $email = $_POST['email'];
             $edad = $_POST['edad'];
             $nhijos = $_POST['nhijos'];
             $cargo = $_POST['cargo'];
             $estadocivil = $_POST['estadocivil'];
             $fechacese = $_POST['fechacese'];
             $di = $_GET['di'];

if($stmt->execute()){
	//header('Location: ../../view/Personal.php');
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Exito!</strong> Ha cambiado correctamente los datos.
</div>
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Lo sentimos se produce un error, el error de datos.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Fault!</strong> Lo sentimos tienes la dirección equivocada.
</div>

<br><br><br><br>

<?php
}
?>