<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header('location:../index.php');
}
/***************************************/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>historial</title>
        <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/cssregisHA.css">
        <link rel="stylesheet" href="../public/css/cssPagina.css">
        <link rel="shortcut icon" href="../public/imagen/favicon.ico" type="image/x-icon">


</head>
 <body onload="tablas();">


        <br>
        
    
        <div class="container">

<h5><strong><b>Historial. </b></strong></h5><br>



            <div class="row">
                <div class="form-group">

                    <div class="col-md-3 col-sm-12 col-xs-8">
                        <input type="text" name="buscarTexto" id="buscarTexto"  onkeyup="Buscar();" class="form-control"  placeholder="BUSCAR REGISTRO">
                    </div>


                    <div class="col-md-1 col-sm-12 col-xs-1 ">
                        <a class="btn btn-primary"  id="btnImprimir"> <span class="glyphicon glyphicon-print"></span> Imprimir</a>

                    </div>
                    <div class="col-md-1 col-sm-0 col-xs-0">
                    </div>
                </div>
            </div><br><br>

     <div  id="secImpresa">
                <div class="table-responsive">
                    <table class=" table table-bordered table-striped"  id="resultado"> 
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

$res = $conn->query("SELECT * FROM asistencia ORDER BY IdAsistencia DESC");
while ($row = $res->fetch_assoc()) {
?>  
      <tr>

         <td><p class='getPC'> <?php echo $row['Dia']; ?> </p></td>
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
</tbody>
    </table>
   </div>
 </div> 


 <div class="row">
                <div class="col-md-2 col-xs-2"></div>
                <!--cantidad de expedientes-->

                <!--paginación de la tabla-->
                <div class="col-md-4 col-xs-6" id="insertarPafinacion"></div>
            </div>
        </div>



  <script type="text/javascript" src="../public/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../public/bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="../public/js/jspg1.js"></script>

        <script type="text/javascript">

                            /*insertar paginación*/
                            var paginacion = new Pager('resultado', 7);
                            paginacion.init();
                            paginacion.showPageNav('paginacion', 'insertarPafinacion');
                            paginacion.showPage(1);

                            /*contador de filas*/
                            function tablas() {

                                var cont = document.getElementById("resultado").rows.length;
                                contador = cont - 1;
                                document.getElementById("contenido2").innerHTML = contador;
                            }


                            document.querySelector("#btnImprimir").addEventListener("click", function () {
                                var div = document.querySelector("#secImpresa");
                                imprimirElemento(div);
                            });

                            function imprimirElemento(elemento) {
                                var ventana = window.open('', 'PRINT', 'height=600,width=1300');
                                ventana.document.write('<html><head><center><table><tr><td><h3>SERVICOS GENERALES VIVIANA</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><img src="../public/imagen/LOGO.png" style="width:100px;height:100px;" /></td></tr></table></center>');
                                ventana.document.write('<link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css"><br><br><br>'); //Aquí agregué la hoja de estilos
                                ventana.document.write('</head><body >');
                                ventana.document.write(elemento.innerHTML);
                                ventana.document.write('</body></html>');
                                ventana.document.close();
                                ventana.focus();
                                ventana.onload = function () {
                                    ventana.print();
                                    ventana.close();
                                };

                                return true;
                            }
                 



        </script>
</body>
</html>