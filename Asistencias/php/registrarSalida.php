<?php 

include "../conexion/conexion.php";

$tipoAsistencia = $_POST['tipoAsistencia'];
$di= $_POST['di'];
$fechaActividad = $_POST['fechaActividad'];
$horasalida = $_POST['horasalida'];

 		if ($di == "") {
          echo " <div class='alert alert-danger'>
            <button class='close' data-dismiss='alert'><span>&times;</span></button>
            <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar un <Strong>DOC. IDENTIDAD</Strong> de un trabajador registrado
            </div>";
            return;
        }
       
        if ($tipoAsistencia == "Ingreso") {
           echo "<div class='alert alert-danger'>
            <button class='close' data-dismiss='alert'><span>&times;</span></button>
            <Strong>Default!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe elegir otro Tipo de Asistencia: SALIDA
            </div>";
            return;
        }

        if ($tipoAsistencia == "No vino") {
           echo "<div class='alert alert-danger'>
            <button class='close' data-dismiss='alert'><span>&times;</span></button>
            <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe elegir otro Tipo de Asistencia: SALIDA
            </div>";
            return;
        }

        if ($tipoAsistencia == "Seleccione") {

           echo "<div class='alert alert-danger'>
            <button class='close' data-dismiss='alert'><span>&times;</span></button>
            <Strong>Éxito!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe elegir el Tipo de Asistencia: SALIDA
            </div>";
            return;
        }


$stmt = $conn->prepare("UPDATE Asistencia SET HoraSalida =? WHERE DI =? AND FechaActividad=? AND HoraIngreso <> '-' AND HoraIngreso <> '';");

$stmt->bind_param('sss', $horasalida, $di, $fechaActividad);

if($stmt->execute()){
?>

 		<div class='alert alert-success'>
        <button class='close' data-dismiss='alert'><span>&times;</span></button>
        <Strong>Éxito!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Hora de Salida Registrada correctamente
        </div>

<?php

}

?>
