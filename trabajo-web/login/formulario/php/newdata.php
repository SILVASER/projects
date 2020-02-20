<?php
include "config.php";
$n = $_POST['n'];
$em = $_POST['em'];
$tel = $_POST['tel'];
$dir = $_POST['dir'];
if($n != null && $em != null && $tel != null && $dir != null){
$stmt = $conn->prepare("INSERT INTO tusuario VALUES ('',?,?,?,?)");
$stmt->bind_param('ssss', $n, $em, $tel, $dir);

if($stmt->execute()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Exito!</strong> Se agregarón los Datos.
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
  <strong>Fault!</strong> Rellene todos los Datos del formulario.
</div>
<?php
}
?>