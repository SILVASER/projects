<?php
include "config.php";
$nm = $_POST['nm'];
$gd = $_POST['gd'];
$pn = $_POST['pn'];
$al = $_POST['al'];
if($nm != null && $gd != null && $pn != null && $al != null){
$stmt = $conn->prepare("INSERT INTO ajaxtrap VALUES ('',?,?,?,?)");
$stmt->bind_param('ssss', $nm, $gd, $pn, $al);

if($stmt->execute()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Se las arregló para agregar datos.
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
  <strong>Warning!</strong> Se agragara en en formulario.
</div>
<?php
}
?>