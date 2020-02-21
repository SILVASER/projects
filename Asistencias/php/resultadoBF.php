 <div  id="secImpresa">
                <div class="table-responsive">
                    <table id="resultado" class="table table-bordered table-striped"> 
                    	 <thead>
                        <tr style="background:#317CB6; color :#FFFFFF;" >

                            <th>TIPO DÍA</th>
                            <th>DOC. IDENTIDAD</th>
                            <th>NOMBRE</th>
                            <th>ESTADO</th>
                            <th>FECHA ACTIVIDAD</th>
                            <th>HORA INGRESO</th>
                            <th>HORA SALIDA</th>
                        </tr>
                         <thead>
                         	<tbody>
<?php
require_once ("../conexion/conexion.php");

$fecha1 = $_POST['valor1'];
$fecha2 = $_POST['valor2'];


$res = $conn->query("SELECT * FROM asistencia WHERE FechaActividad >= CAST(' $fecha1 ' AS DATE) AND FechaActividad <= CAST(' $fecha2 ' AS DATE);");

/*$res = $conn->query("SELECT * FROM asistencia");*/

while ($row = $res->fetch_assoc()) {
?>  
	  <tr class="letra">


		 <td ><p class='getPC'> <?php echo $row['Dia']; ?> </p></td>
		 <td><p class='getPC'> <?php echo $row['DI']; ?> </p></td>
		 <td><p class='getPC'> <?php echo $row['Nombre']; ?> </p></td>
		 <td><p class='getPC'> <?php echo $row['Estado']; ?> </p></td>
		 <td><p class='getPC'> <?php echo $row['FechaActividad']; ?> </p></td>
		 <td><p class='getPC'> <?php echo $row['HoraIngreso']; ?> </p></td>
		 <td><p class='getPC'> <?php echo $row['HoraSalida']; ?> </p></td>
		    
	  </tr>
	
<?php
}
?> 
<tbody>
	</table>
   </div>
 </div> 