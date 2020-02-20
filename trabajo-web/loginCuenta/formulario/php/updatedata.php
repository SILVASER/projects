<?php
include "config.php";
if(isset($_GET['id'])){
$stmt = $conn->prepare("update tusuario set nombre=?, email=?, telefono=?, direccion=? where codigo=?");
$stmt->bind_param('sssss', $n, $em, $tel, $dir, $id);

$n = $_POST['n'];
$em = $_POST['em'];
$tel = $_POST['tel'];
$dir = $_POST['dir'];
$id = $_GET['id'];

if($stmt->execute()){
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