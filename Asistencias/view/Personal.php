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
        <title>registro</title>
        <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/cssregis.css">
         <link rel="stylesheet" href="../public/css/cssPagina.css">
        <link rel="shortcut icon" href="../public/imagen/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/sweetalert.css">
</head>

<body>

<div id="info">
  <div class="container">
      <br><br>
      <!-- Button modal -->
       <div class="row">
        
        <form class="form-horizontal">
         <div class="col-sm-12">

      <button type="button" class="btn b btn-primary active" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-plus"> </span> Registrar trabajador
      </button>

       </div>
      </form>
    </div>

     
      

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">


              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="act();"><span aria-hidden="true">&times;</span></button>

              <h2 class="modal-title" id="myModalLabel">Registrar trabajador</h2>
            </div>
            <div id="info2"></div>

        <div class="modal-body">
                <!--formulario-->         
            <div class="row">   
                    <form class="form-horizontal" >

                        <div class="form-group">
                            <label class="control-label col-md-2">Doc. de Identidad:</label>
                            <div class="col-md-3 col-xs-9">
                                <input type="text" name="di" id="di" class="form-control" placeholder="Ingrese el Numero D.I"/>
                            </div>
                            

                            <label class="control-label col-md-2 col-xs-12">Nombre:</label>
                            <div class="col-md-4 col-xs-12" id="res">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Trabajador" value="">
                            </div>
                        </div>
                    </form>

                </div>

                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">Apellido:</label>

                            <div class="col-md-3">                            
                                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese apellido">
                            </div>
                            <label class="control-label col-md-2">Fecha Nacimiento:</label>

                            <div class="col-md-4">
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control">

                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">Celular:</label>

                            <div class="col-md-3">                            
                                <input type="number" name="celular" id="celular" class="form-control" placeholder="Ingrese N° Celular">

                            </div>
                            <label class="control-label col-md-2">Dirección:</label>

                            <div class="col-md-4">
                                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese dirección">

                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">Email:</label>

                            <div class="col-md-4">                            
                                <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese email">

                            </div>
                            <label class="control-label col-md-2">Edad:</label>

                            <div class="col-md-3">
                                <input type="number" name="edad" id="edad" class="form-control" placeholder="Ingrese edad">

                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">N° Hijos:</label>

                            <div class="col-md-4">                            
                                <input type="number" name="nhijos" id="nhijos" class="form-control" placeholder="Ingrese N° hijos">

                            </div>
                            <label class="control-label col-md-2">Cargo:</label>

                            <div class="col-md-4">
                                <input type="text" name="cargo" id="cargo" class="form-control" placeholder="Ingrese el cargo">

                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">Estado Civil:</label>

                            <div class="col-md-4">                            
                                <select id="estadocivil" class="form-control">
                                    <option>Seleccione</option>
                                    <option value="soltero">Soltero</option>
                                    <option value="casado">Casado</option>
                                </select>
                            </div>
                            <label class="control-label col-md-2">Sexo:</label>

                            <div class="col-md-4">
                                <select id="sexo" onchange="cambioOpciones();" class="form-control" >
                                    <option>Seleccione</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>

                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">Fecha Inicio:</label>

                            <div class="col-md-4">                            
                                <input type="date" name="fechainicio" id="fechainicio" class="form-control" >
                            </div>
                            <label class="control-label col-md-2">Fecha Cese:</label>

                            <div class="col-md-4">
                                <input type="date" name="fechacese" id="fechacese" class="form-control" >

                            </div>
                        </div>
                    </form>
                </div>


                <br>

      <!--******************-->
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn b btn-danger" data-dismiss="modal"  onclick="act();" style=" color: #FFFFFF;">Cerrar</button>
              <button type="button" id="guardar" class="btn b btn-primary">Guardar</button>
              <a class="btn b btn-warning" onclick="Limpiar();"><span class="glyphicon glyphicon-refresh"></span> Limpiar</a>

            </div>
          </div>
        </div>
      </div>  


      
      <br/>
     

<!--tabla-->


            <div class="row">
              <form class="form-horizontal">
                
              
                <div class="form-group">

                    <div class="col-md-3 col-ms-12">
                        <input type="text" name="buscarTexto" id="buscarTexto"  onkeyup="Buscar();" class="form-control btnBuscarPersonal"  placeholder="BUSCAR REGISTRO">
                    </div>
                </div>
                </form>
            </div><br><br>

<div class="table-responsive">

<table id="resultado" class=" table table-bordered table-striped">

  <thead>
    <tr style="background:#317CB6; color :#FFFFFF;" >
      <th>Nombre</th>
      <th>Apellido</th>
      <th>DI</th>
      <th>Fecha Nacimiento</th>
      <th>Celular</th>
      <th>Dirección</th>
      <th>Email</th>
      <th>Edad</th>
      <th>N° Hijos</th>
      <th>Cargo</th>
      <th>Estado Civil</th>
      <th>Sexo</th>
      <th>Fecha Inicio</th>
      <th>Fecha Cese</th>
      <th>&nbsp;&nbsp;&nbsp;Acción&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
  </thead>
  <tbody>
<?php
require_once ("../conexion/conexion.php");
$res = $conn->query("SELECT * FROM personal ORDER BY Nombre ASC");
while ($row = $res->fetch_assoc()) {
?>
    
    <tr>
      <td><p><?php echo $row['Nombre']; ?></p></td>
      <td><p><?php echo $row['Apellido']; ?></p></td>
      <td><p><?php echo $row['DI']; ?></p></td>
      <td><p><?php echo $row['FechaNacimiento']; ?></p></td>
      <td><p><?php echo $row['Celular']; ?></p></td>
      <td><p><?php echo $row['Direccion']; ?></p></td>
      <td><p><?php echo $row['Email']; ?></p></td>
      <td><p><?php echo $row['Edad']; ?></p></td>
      <td><p><?php echo $row['NHijos']; ?></p></td>
      <td><p><?php echo $row['Cargo']; ?></p></td>
      <td><p><?php echo $row['EstadoCivil']; ?></p></td>
      <td><p><?php echo $row['Sexo']; ?></p></td>
      <td><p><?php echo $row['FechaInicio']; ?></td>
      <td><p><?php echo $row['FechaCese']; ?></td>
      <td>
      <a class="btn btn-warning btn-sm btnEditar" data-toggle="modal" data-target="#myModal<?php echo $row['DI']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
      
      <a class="btn btn-danger btnEliminar btn-sm"  onclick="Eliminar('<?php echo $row['DI']; ?>')" id="cargar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['DI']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['DI']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="act();" ><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel<?php echo $row['DI']; ?>">Editar Datos</h2>
      </div>

      <div id="mensaje"></div>

      <div class="modal-body">
<!--Editar datos-->
   

        <div class="row">   
                    <form class="form-horizontal" >

                        <div class="form-group">
                            <label class="control-label col-md-2">Doc. de Identidad:</label>
                            <div class="col-md-4 col-xs-9">
                                <input type="text"  class="form-control" id="DI<?php echo $row['DI']; ?>" value="<?php echo $row['DI']; ?>" disabled/>
                            </div>
                          

                            <label class="control-label col-md-2 col-xs-12">Nombre:</label>
                            <div class="col-md-4 col-xs-12" id="res">
                                <input type="text" class="form-control" id="Nombre<?php echo $row['DI']; ?>" value="<?php echo $row['Nombre']; ?>" disabled/>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">Apellido:</label>

                            <div class="col-md-4">                            
                                <input type="text" class="form-control" id="Apellido<?php echo $row['DI']; ?>" value="<?php echo $row['Apellido']; ?>" disabled/>
                            </div>
                            <label class="control-label col-md-2">Fecha Nacimiento:</label>

                            <div class="col-md-4">
                                <input type="date" class="form-control" id="FechaNacimiento<?php echo $row['DI']; ?>" value="<?php echo $row['FechaNacimiento']; ?>" disabled>

                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">Celular:</label>

                            <div class="col-md-4">                            
                                <input type="number" class="form-control" id="Celular<?php echo $row['DI']; ?>" value="<?php echo $row['Celular']; ?>">

                            </div>
                            <label class="control-label col-md-2">Dirección:</label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" id="Direccion<?php echo $row['DI']; ?>" value="<?php echo $row['Direccion']; ?>">

                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">Email:</label>

                            <div class="col-md-4">                            
                                <input type="email" class="form-control" id="Email<?php echo $row['DI']; ?>" value="<?php echo $row['Email']; ?>">

                            </div>
                            <label class="control-label col-md-2">Edad:</label>

                            <div class="col-md-4">
                                <input type="number" class="form-control" id="Edad<?php echo $row['DI']; ?>" value="<?php echo $row['Edad']; ?>" >

                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">N° Hijos:</label>

                            <div class="col-md-4">                            
                                <input type="number" class="form-control" id="NHijos<?php echo $row['DI']; ?>" value="<?php echo $row['NHijos']; ?>">

                            </div>
                            <label class="control-label col-md-2">Cargo:</label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" id="Cargo<?php echo $row['DI']; ?>" value="<?php echo $row['Cargo']; ?>">

                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">Estado Civil:</label>

                            <div class="col-md-4">                            
                                <select class="form-control" id="EstadoCivil<?php echo $row['DI']; ?>" value="<?php echo $row['EstadoCivil']; ?>" >
                                    <option><?php echo $row['EstadoCivil']; ?></option>
                                    <option value="soltero">Soltero</option>
                                    <option value="casado">Casado</option>
                                </select>
                            </div>
                            <label class="control-label col-md-2">Sexo:</label>

                            <div class="col-md-4">
                                <select onchange="cambioOpciones();" class="form-control" id="Sexo<?php echo $row['DI']; ?>" value="<?php echo $row['Sexo']; ?>" disabled>
                                    <option><?php echo $row['Sexo']; ?></option>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>

                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">   
                    <form class="form-horizontal" >   
                        <div class="form-group">
                            <label class="control-label col-md-2">Fecha Inicio:</label>

                            <div class="col-md-4">                            
                                <input type="date" class="form-control" id="FechaInicio<?php echo $row['DI']; ?>" value="<?php echo $row['FechaInicio']; ?>" disabled>
                            </div>
                            <label class="control-label col-md-2">Fecha Cese:</label>

                            <div class="col-md-4">
                                <input type="date" class="form-control" id="FechaCese<?php echo $row['DI']; ?>" value="<?php echo $row['FechaCese']; ?>">

                            </div>
                        </div>
                    </form>
                </div>

      <!--**********************************-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn b btn-danger " data-dismiss="modal" onclick="act();" style="color: #FFFFFF;">Cerrar</button>
        <button type="button" onclick="Actualizar('<?php echo $row['DI']; ?>')" class="btn b btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
      
      </td>
    </tr>
<?php
}
?>
  </tbody>
      </table>
    </div>

<!--*****************-->

 <div class="row">
                <div class="col-md-2 col-xs-2"></div>

                <!--paginación de la tabla-->
                <div class="col-md-4 col-xs-6" id="insertarPafinacion"></div>
            </div>


</div>

         


        <script type="text/javascript" src="../public/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../public/bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="../public/js/jspg1.js"></script>
        <script type="text/javascript" src="../public/js/sweetalert.min.js"></script>

         <script>

          $('#guardar').click(function(){
            
                                

                                    var di = $("#di").val();
                                    var nombre = $("#nombre").val();
                                    var apellido = $("#apellido").val();
                                    var fechaNacimiento = $("#fechaNacimiento").val();
                                    var celular = $("#celular").val();
                                    var direccion = $("#direccion").val();
                                    var email = $("#email").val();
                                    var edad = $("#edad").val();
                                    var nhijos = $("#nhijos").val();
                                    var cargo = $("#cargo").val();
                                    var estadocivil = $("#estadocivil").val();
                                    var sexo = $("#sexo").val();
                                    var fechainicio = $("#fechainicio").val();
                                    var fechacese = $("#fechacese").val();

                                    
        
        var datas="di="+di+"&nombre="+nombre+"&apellido="+apellido+"&fechaNacimiento="+fechaNacimiento+"&celular="+celular+"&direccion="+direccion+"&email="+email+"&edad="+edad+"&nhijos="+nhijos+"&cargo="+cargo+"&estadocivil="+estadocivil+"&sexo="+sexo+"&fechainicio="+fechainicio+"&fechacese="+fechacese;
            
        $.ajax({
           type: "POST",
           url: "../php/personal/registro.php",
           data: datas
        }).done(function( data ) {
          $('#info2').html(data);
        
        });
    });

   
/* redireccionar vinculo  */
 function act() {

                                    var url = '../view/Personal.php';
                                    $.ajax({
                                        type: 'POST',
                                        url: url,
                                        data: {},
                                        success: function (datos) {
                                            $('#div').html(datos);
                                        }
                                    });
                                }

                               /* $(document).ready(function(){

                                  $("#cargar").click(function(){
                              
                                    var url = '../view/Personal.php';
                                    $.ajax({
                                        type: 'POST',
                                        url: url,
                                        data: {},
                                        success: function (datos) {
                                            $('#div').html(datos);
                                        }
                                    });

                                  });


                                });*/

                                    
                                



          function Actualizar(str){
        
              var di = str;
              var celular = $('#Celular'+str).val();
              var direccion = $('#Direccion'+str).val();
              var email = $('#Email'+str).val();
              var edad = $('#Edad'+str).val();
              var nhijos = $('#NHijos'+str).val();
              var cargo = $('#Cargo'+str).val();
              var estadocivil = $('#EstadoCivil'+str).val();
              var fechacese = $('#FechaCese'+str).val();
        
         var datas="celular="+celular+"&direccion="+direccion+"&email="+email+"&edad="+edad+"&nhijos="+nhijos+"&cargo="+cargo+"&estadocivil="+estadocivil+"&fechacese="+fechacese;

                $.ajax({
                   type: "POST",
                   url: "../php/personal/modificarDatos.php?di="+di,
                   data: datas
                }).done(function( data ) {
                  $('#mensaje').html(data);
                 
                });
          }


          function Eliminar(str){

             var di = str;
                                    
                                $.ajax({
                                   type: "GET",
                                   url: "../php/personal/eliminarDatos.php?di="+di
                                }).done(function( data ) {
                                  $('#info').html(data);
                                  
                                });

             /*swal({
                    title: "¿Estás seguro?",
                    text: "¡No podrás recuperar este archivo!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Aceptar",
                    closeOnConfirm: false
                },
                        function () {
                           if(showCancelButton==true){
        
                                var di = str;
                                    
                                $.ajax({
                                   type: "GET",
                                   url: "../php/personal/eliminarDatos.php?di="+di
                                }).done(function( data ) {
                                  $('#info').html(data);
                                  
                                });
                              }else{

                            swal("Eliminado!", "Tu archivo ha sido eliminado.", "success");
                          }
                        });*/

            
          }

       function Limpiar() {
                                 document.getElementById("di").value = "";
                                 document.getElementById("nombre").value = "";
                                 document.getElementById("apellido").value = "";
                                 document.getElementById("fechaNacimiento").value = "";
                                 document.getElementById("celular").value = "";
                                 
                                    document.getElementById("direccion").value = "";
                                 document.getElementById("email").value = "";
                                 document.getElementById("edad").value = "";
                                 document.getElementById("nhijos").value = "";
                                 document.getElementById("cargo").value = "";
                                 
                                   document.getElementById("estadocivil").value = "Seleccione";
                                 document.getElementById("sexo").value = "Seleccione";
                                 document.getElementById("edad").value = "";
                                 document.getElementById("fechainicio").value = "";
                                 document.getElementById("fechacese").value = "";
                                 
                                 
                                 }

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


          </script>


</div>
</body>
</html>