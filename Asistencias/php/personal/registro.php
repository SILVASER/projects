<?php
require_once ("../../conexion/conexion.php");


            $di = $_POST['di'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fechaNacimiento = $_POST['fechaNacimiento'];
            $celular = $_POST['celular'];
            $direccion = $_POST['direccion'];
            $email = $_POST['email'];
            $edad = $_POST['edad'];
            $nhijos = $_POST['nhijos'];
            $cargo = $_POST['cargo'];
            $estadocivil = $_POST['estadocivil'];
            $sexo = $_POST['sexo'];
            $fechainicio = $_POST['fechainicio'];
            $fechacese = $_POST['fechacese'];



            if ($di == "") {
                   echo "<div class='alert alert-danger'>
                            <button class='close' data-dismiss='alert'><span>&times;</span></button>
                            <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar un <Strong>DOC. IDENTIDAD</Strong> de un trabajador!
                        </div>";
                return;
            }

            if ($nombre == "") {
                echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar un <Strong>nombre</Strong> de un trabajador
                </div>";
                return;
            }
            if ($apellido == "") {
                echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar un <Strong>Apellido</Strong> de un trabajador 
                </div>";
                return;
            }

            if ($fechaNacimiento == "") {
                echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar una <Strong>Fecha de nacimiento</Strong>
                </div>";
                return;
            }
            if ($direccion == "") {
                echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar una <Strong>Dirección</Strong>
                </div>";
                return;
            }
            if ($edad == "") {
                echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar una <Strong>Edad</Strong> de un trabajador
                </div>";
                return;
            }
            if ($cargo == "") {
                echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar un <Strong>Cargo</Strong>
                </div>";
                return;
            }
            if ($estadocivil == "Seleccione") {
               echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar un <Strong>Estado civil</Strong>
                </div>";
                return;
            }
            if ($sexo == "Seleccione") {
               echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar una tipo de <Strong>Sexo</Strong>
                </div>";
                return;
            }
            if ($fechainicio == "") {
               echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar una <Strong>Fecha de Inicio</Strong>
                </div>";
                return;
            }
            if ($fechacese == "") {
               echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar una <Strong>Fecha de cese</Strong>
                </div>";
                return;
            }

$stmt = $conn->prepare("INSERT INTO personal VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param('ssssssssssssss', $nombre, $apellido, $di, $fechaNacimiento, $celular,$direccion,$email,$edad,$nhijos,$cargo,$estadocivil,$sexo,$fechainicio,$fechacese);

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
  <strong>Error!</strong> Error en ingresar los datos;...verifique el Doc.IDENTIDAD que no Éxista.
</div>
<?php
 }
?> 
