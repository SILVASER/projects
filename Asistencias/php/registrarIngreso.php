<?php 

include "../conexion/conexion.php";
 error_reporting(E_ERROR | E_WARNING | E_PARSE);
       // error_reporting(0);

$tipoDia = $_POST['tipoDia'];
$di= $_POST['di'];
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$fechaActividad = $_POST['fechaActividad'];
$horaingreso = $_POST['horaingreso'];
$horasalida = $_POST['horasalida'];
$tipoAsistencia = $_POST['tipoAsistencia'];

$horasalida2 = '-';
$horaingreso2 = '-';





    if ($di == "") 
    {
        echo "<div class='alert alert-danger'>
              <button class='close' data-dismiss='alert'><span>&times;</span></button>
              <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Ingresar un <Strong>DOC. IDENTIDAD</Strong> de un trabajador registrado y presionar el boton del icono buscar!
              </div>";
              return;
          
    }
     if ($nombre == "") {
         
          echo  "<div class='alert alert-danger'>
            <button class='close' data-dismiss='alert'><span>&times;</span></button>
            <Strong>Error!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Generar un nombre!, Presione el Icono uscar
            </div>";

       return;
    }

        if ($tipoDia == "Seleccione") {

              echo "<div class='alert alert-danger'>
               <button class='close' data-dismiss='alert'><span>&times;</span></button>
               <Strong>Éxito!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Seleccionar <Strong>un Tipo de día</Strong>
               </div>";

               return;

            
    }

            
            
            if ($tipoDia == "") {

              echo "<div class='alert alert-danger'>
               <button class='close' data-dismiss='alert'><span>&times;</span></button>
               <Strong>Éxito!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe Seleccionar <Strong>un Tipo de día</Strong>
               </div>";
               
               return;
                
            }
        
          /*  if (tipoAsistencia=="Ingreso") {

              echo "<div class='alert alert-success'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Éxito!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Hora y Fecha de Ingreso Registrado correctamente
                </div>";
            }
          

            if (tipoAsistencia=="No vino") {
               echo "<div class='alert alert-info'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Éxito!&nbsp;&nbsp;&nbsp;&nbsp;</Strong> Falta registrada correctamente 
                </div>"
            }*/

            if ($tipoAsistencia == "Seleccione") {

               echo  "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Éxito!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe elegir el <Strong>Tipo de Asistencia</Strong>
                </div>";

               return;
            }
            
          
              if ($estado=="Seleccione") {

               echo "<div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                <Strong>Éxito!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Debe elegir <Strong> otro Tipo de Estado</Strong>
                </div>";

                return;
               
            }
              
        
           if ($tipoAsistencia == "No vino") {

              $stmt = $conn->prepare("INSERT INTO asistencia (Dia,DI,Estado,Nombre,FechaActividad,HoraIngreso,HoraSalida)VALUES(?,?,?,?,?,?,?);");

            $stmt->bind_param('sssssss', $tipoDia, $di,$estado,$nombre, $fechaActividad, $horaingreso2, $horasalida2);

            if($stmt->execute()){
              ?>

              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <Strong>Éxito!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Hora y Fecha de Ingreso Registrado correctamente.
              </div>

            <?php

            }
          }else{

             $stmt = $conn->prepare("INSERT INTO asistencia (Dia,DI,Estado,Nombre,FechaActividad,HoraIngreso,HoraSalida)VALUES(?,?,?,?,?,?,?);");

              $stmt->bind_param('sssssss', $tipoDia, $di,$estado,$nombre, $fechaActividad, $horaingreso, $horasalida2);

              if($stmt->execute()){
              ?>

              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <Strong>Éxito!&nbsp;&nbsp;&nbsp;&nbsp;</Strong>Hora y Fecha de Ingreso Registrado correctamente.
              </div>
         

             
<?php
      }
        
      }


?>

