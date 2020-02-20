<?php
include "config.php";
if(isset($_GET['id'])){
$stmt = $conn->prepare("delete from tusuario where codigo=?");
$stmt->bind_param('s', $id);

$id = $_GET['id'];

if($stmt->execute()){
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