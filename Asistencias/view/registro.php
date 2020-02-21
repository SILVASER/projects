<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header('location:../index.php');
}else{

    
}


/***************************************/
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/cssregis.css">
        <link rel="shortcut icon" href="../public/imagen/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>


	 <?php
    
        $fecha =  date("Y-m-d");

     ?>

<br>
<br>


<div id="mensaje"></div>


<div>
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">REGISTRO</legend> 
            <div class="row" >   
                <form class="form-horizontal" >   
                    <div class="form-group" id="panelControl">
                        <label class="control-label col-md-2"></label>
                        <div class="col-md-9 col-xs-12 col-sm-12">
                            
                            <a class="btn btn-primary" id="guardaringreso" onclick="Guardar();"> <span class="glyphicon glyphicon-save"></span> Registrar Ingreso y Falta</a>
                            
                            <a class="btn btn-success" id="guardarsalida" onclick="GuardarSalida();"><span class="glyphicon glyphicon-open"></span> Registrar Salida</a>
                            
                            <a class="btn btn-warning" onclick="Limpiar();"><span class="glyphicon glyphicon-refresh"></span> Limpiar formulario</a>

                            <a class="btn" style="background-color: #148F93; color: #FFFFFF;" onclick="verHistorial();"><span class="glyphicon glyphicon-eye-open"></span> Ver Historial</a>

                        </div>
                    </div>
                </form>
            </div><br>
            <div class="row">
                <form class="form-horizontal" >

                    <div class="form-group">
                        <label class="control-label col-md-2">Fecha:</label>
                        <div class="col-md-3 col-sm-3">
                            <input type="text" name="fecha" id="fecha" class="form-control"  value="<?php echo $fecha; ?>" disabled>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">   
                <form class="form-horizontal" >   
                    <div class="form-group">
                        <label class="control-label col-md-2">Día:</label>

                        <div class="col-md-3 col-sm-3">                            
                            <select id="tipoDia" class="form-control">
                                <option>Seleccione</option>
                                <option value="Día laborable">Día laborable</option>
                                <option value="Día no laborable">Día no laborable</option>
                            </select>
                        </div>
                        <label class="control-label col-md-2">Tipo de asistencia:</label>

                        <div class="col-md-3 col-sm-3">
                            <select id="tipoAsistencia" onchange="cambioOpciones();" class="form-control" >
                                <option>Seleccione</option>
                                <option value="Ingreso">INGRESO</option>
                                <option value="Salida">SALIDA</option>
                                <option value="No vino">NO VINO</option>

                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">   
                <form class="form-horizontal" >

                    <div class="form-group">
                        <label class="control-label col-md-2 col-xs-12">Doc. de Identidad:</label>
                        <div class="col-md-2 col-xs-9 col-sm-3">
                            <input type="text" name="di" id="di" class="form-control" placeholder="Ingrese Doc.I">
                        </div>
                        <div class="col-md-1 col-xs-3 col-sm-3">
                            <a class="btn btn-primary btnB" onclick="buscar();"><span class="glyphicon glyphicon-search"></span></a>


                        </div>

                        <label class="control-label col-md-2 col-xs-12 col-sm-3">Nombre:</label>
                        <div class="col-md-3 col-xs-12 col-sm-3 grupoDoc" id="res"><br>
                            
                            <input type="text" class="form-control" placeholder="Nombre del Trabajador" disabled>
                            <p style="color: red;font-size: 11px;font-family: arial;">* Debe generar un nombre, Presione el icono buscar</p>
                       <br>
                        </div>
                    </div>
                </form>

            </div>
            <div class="row">   
                <form class="form-horizontal" >   
                    <div class="form-group">
                        <label class="control-label col-md-2">Estado:</label>

                        <div class="col-md-3 col-sm-3">
                            <select id="estado" class="form-control">
                                <option>Seleccione</option>
                                <option value="Temprano">Temprano</option>
                                <option value="Tardanza">Tardanza</option>
                                <option value="Hora Tolerante">Hora Tolerante</option>
                                <option value="Faltó">Faltó</option>
                            </select>
                        </div>

                    </div>
                </form>
            </div>
            <br><br>

            
            <div>
                <fieldset class="scheduler-border2 n2">
                    <legend class="scheduler-border2 n2"><Strong>FECHA Y HORA DE ACTIVIDADES</strong></legend> 

                    <div class="row">

                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="col-md-7 col-xs-12 col-sm-12">
                                <form class="form-horizontal" >   
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Fecha de Actividad:</label>
                                        <div class="col-md-4 col-sm-4 ">
                                            <input type="text" name="fechaActividad" id="fechaActividad" class="form-control" value="<?php echo $fecha; ?>" disabled>
                                        </div>

                                    </div>
                                </form>


                                <form class="form-horizontal" name="horaingreso_javascript">   
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Hora de Ingreso:</label>
                                        <div class="col-md-4">
                                            <!--input type="text" name="horaingreso" id="horaingreso" class="form-control"  value="<//?php echo $hora; ?>" disabled-->
                                                 <!--input type="text" name="reloj" id="horaingreso" class="form-control"  disabled-->
                                                 <input type="text" name="horaingreso" id="horaingreso" class="form-control" disabled>
                                          </div>

                                    </div>
                                </form>
											
                                <form class="form-horizontal" name="horasalida_javascript" >   
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Hora de Salida:</label>
                                        <div class="col-md-4">
                                            <input type="text" name="horasalida" id="horasalida" class="form-control"  disabled>
                                        </div>

                                    </div>
                                </form>


                            </div>

                            <div class="widget col-md-4 col-xs-12 col-sm-12">
                                <div class="fecha">
                                    <p id="diaSemana" class="diaSemana"></p>

                                    <p id="dia" class="dia"></p>
                                    <p>de</p>
                                    <p id="mes" class="mes"></p>
                                    <p>del</p>
                                    <p id="year" class="year"></p>
                                </div>

                                <div class="reloj">
                                    <p id="horas" class="horas"></p>
                                    <p>:</p>
                                    <p id="minutos" class="minutos"></p>
                                    <p>:</p>
                                    <div class="caja-segundos">
                                        <p id="ampm" class="ampm"></p>
                                        <p id="segundos" class="segundos"></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </fieldset>



        </fieldset>




        <script type="text/javascript" src="../public/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../public/bootstrap/js/jquery.min.js"></script>

        <script type="text/javascript">

                    
   /*=============================================
reloj dinamico       
=============================================*/



function horaingreso(){

<?php date_default_timezone_set("Atlantic/Cape_Verde");?>

  hora = '<?php echo date("H");?>'
  minutos = '<?php echo date("i");?>'
  segundos = '<?php echo date("s");?>'
  meridiano = '<?php echo date("a");?>'
  
  setInterval(function(){

    if(segundos == 59){

      segundos = "0" + 0;

      minutos = Number(minutos) + 1;

    }

    else{

      segundos++;

      if(segundos > 0 && segundos < 10){

        segundos = "0" + segundos++;

      }

    }

    if(minutos > 59){

      window.location.reload();

    }
      verhora = hora+":"+minutos+":"+segundos+" "+meridiano
      document.horaingreso_javascript.horaingreso.value = verhora


  },1000);

}

horaingreso();
/***************************************************************/
function horasalida(){
	
  hora = '<?php echo date("H");?>'
  minutos = '<?php echo date("i");?>'
  segundos = '<?php echo date("s");?>'
  meridiano = '<?php echo date("a");?>'
  
  setInterval(function(){

    if(segundos == 59){

      segundos = "0" + 0;

      minutos = Number(minutos) + 1;

    }

    else{

      segundos++;

      if(segundos > 0 && segundos < 10){

        segundos = "0" + segundos++;

      }

    }

    if(minutos > 59){

      window.location.reload();

    }
      verhora = hora+":"+minutos+":"+segundos+" "+meridiano
      document.horasalida_javascript.horasalida.value = verhora


  },1000);

}

horasalida();
/***************************************/


                                function buscar() {

                                    var valor = $("#di").val();
                                    $.ajax({
                                        url: '../php/buscarNombre.php',
                                        type: 'POST',
                                        data: {
                                            valor: valor
                                        },
                                        success: function (result) {
                                            $('#res').html(result);
                                        }
                                    });
                                }

                                function Guardar() {


                                    var tipoDia = $("#tipoDia").val();
                                    var tipoAsistencia = $("#tipoAsistencia").val();
                                    var di = $("#di").val();
                                    var nombre = $("#letra").val();
                                    var estado = $("#estado").val();
                                    var fechaActividad = $("#fechaActividad").val();
                                    var horaingreso = $("#horaingreso").val();
                                    var horasalida = $("#horasalida").val();

                                    $.ajax({
                                        url: '../php/registrarIngreso.php',
                                        type: "POST",
                                        data: {
                                            tipoDia: tipoDia,
                                            tipoAsistencia: tipoAsistencia,
                                            di: di,
                                            nombre: nombre,
                                            estado: estado,
                                            fechaActividad: fechaActividad,
                                            horaingreso: horaingreso,
                                            horasalida: horasalida
                                        },
                                        success: function (result) {
                                            $('#mensaje').html(result);
                                        }
                                    });
                                }

                                function GuardarSalida() {

                                    var tipoAsistencia = $("#tipoAsistencia").val();
                                    var di = $("#di").val();
                                    var fechaActividad = $("#fechaActividad").val();
                                    var horasalida = $("#horasalida").val();

                                    

                                    $.ajax({
                                        url: '../php/registrarSalida.php',
                                        type: "POST",
                                        data: {
                                            tipoAsistencia: tipoAsistencia,
                                            di: di,
                                            fechaActividad: fechaActividad,
                                            horasalida: horasalida
                                        },
                                        success: function (result) {
                                            $('#mensaje').html(result);
                                        }
                                    });
                                }

                                  function verHistorial() {

                                    var url = '../view/historialAsistencia.php';
                                    $.ajax({
                                        type: 'POST',
                                        url: url,
                                        data: {},
                                        success: function (datos) {
                                            $('#div').html(datos);
                                        }
                                    });
                                }

                                function Limpiar() {
                                    document.getElementById("tipoDia").value = "Seleccione";
                                    document.getElementById("tipoAsistencia").value = "Seleccione";
                                    document.getElementById("di").value = "";
                                    document.getElementById("estado").value = "Seleccione";
                                    document.getElementById("letra").value = "";


                                }

                                

                                function cambioOpciones()

                                {
                                    var TipoAsistencia = document.getElementById('tipoAsistencia');
                                    var op = TipoAsistencia.value;
                               
                                   
                                    if (op === "Ingreso") {
                                       document.getElementById("horasalida").style.visibility = 'hidden';
                                      document.getElementById("horaingreso").style.visibility = 'visible';
                                        document.getElementById("estado").disabled = false;
                                        document.getElementById("tipoDia").disabled = false;
                                        document.getElementById("estado").value = "Temprano";
                                        document.getElementById("guardarsalida").style.visibility = 'hidden';
                                        document.getElementById("guardaringreso").style.visibility = 'visible';

                                    }

                                    if (op === "Salida") {
                                       document.getElementById("horasalida").style.visibility = 'visible';
                                      document.getElementById("horaingreso").style.visibility = 'hidden';
                                        document.getElementById("estado").disabled = true;
                                        document.getElementById("tipoDia").disabled = true;
                                        document.getElementById("estado").value = "";
                                        document.getElementById("tipoDia").value = "";
                                        document.getElementById("guardaringreso").style.visibility = 'hidden';
                                        document.getElementById("guardarsalida").style.visibility = 'visible';

                                    }

                                    if (op === "No vino") {
                                       document.getElementById("horasalida").style.visibility = 'hidden';
                                      document.getElementById("horaingreso").style.visibility = 'hidden';
                                        document.getElementById("estado").disabled = false;
                                        document.getElementById("tipoDia").disabled = false;
                                        document.getElementById("estado").value = "Faltó";
                                        document.getElementById("estado").disabled = true;
                                         document.getElementById("guardarsalida").style.visibility = 'hidden';
                                        document.getElementById("guardaringreso").style.visibility = 'visible';
                                    }

                                }

                                (function () {

                                    var actualizarHora = function () {
                                        var fecha = new Date();
                                        horas = fecha.getHours(),
                                                ampm,
                                                minutos = fecha.getMinutes(),
                                                segundos = fecha.getSeconds(),
                                                diaSemana = fecha.getDay(),
                                                dia = fecha.getDate(),
                                                mes = fecha.getMonth(),
                                                year = fecha.getFullYear();

                                        var pHoras = document.getElementById('horas'),
                                                pAMPM = document.getElementById('ampm'),
                                                pMinutos = document.getElementById('minutos'),
                                                pSegundos = document.getElementById('segundos'),
                                                pDiaSemana = document.getElementById('diaSemana'),
                                                pDia = document.getElementById('dia'),
                                                pMes = document.getElementById('mes'),
                                                pYear = document.getElementById('year');



                                        var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sábado'];
                                        pDiaSemana.textContent = semana[diaSemana];

                                        pDia.textContent = dia;

                                        var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Nomviembre', 'Diciembre'];
                                        pMes.textContent = meses[mes];

                                        pYear.textContent = year;

                                        if (horas >= 12) {

                                            horas = horas - 12;
                                            ampm = 'PM';
                                        } else {
                                            ampm = 'AM';
                                        }

                                        if (horas === 0) {
                                            horas = 12;
                                        }

                                        pHoras.textContent = horas;
                                        pAMPM.textContent = ampm;

                                        if (minutos < 10) {
                                            minutos = "0" + minutos;
                                        }


                                        if (segundos < 10) {
                                            segundos = "0" + segundos;
                                        }


                                        pMinutos.textContent = minutos;
                                        pSegundos.textContent = segundos;
                                    };



                                    actualizarHora();
                                    var intervalo = setInterval(actualizarHora, 1000);

                                }());
/**************************************************************/
        </script>


</body>
</html>