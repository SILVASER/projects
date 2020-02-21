<?php
require_once ("../../conexion/conexion.php");

if(isset($_GET['di'])){
$stmt = $conn->prepare("DELETE FROM personal WHERE DI=?");
$stmt->bind_param('s', $di);

$di = $_GET['di'];

if($stmt->execute()){

	header('Location: ../../view/Personal.php');
?>

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Éxito!</strong> Se Elimino el registro.
</div>
<?php

} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong>Lo sentimos se produce un error, el los datos.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Fault!</strong> Lo sentimos tienes la dirección equivocada.
</div>
<?php
}
?>