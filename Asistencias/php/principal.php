<?php 
session_start();

$usuario = $_SESSION['usuario'];


if (!isset($_SESSION['usuario'])) {
	header('location:../index.php');
}

 ?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Vista Principal</title>
        <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/menuVertical/css/estilos.css">
        <link rel="stylesheet" href="../public/menuVertical/css/font-awesome.css">
        <link rel="shortcut icon" href="../public/imagen/favicon.ico" type="image/x-icon">

        <style>
            #user{
                color: #fff;
                margin-left: 1130px;
            }

            @media screen and (max-width: 760px){
                #user{margin-left: 180px; margin-top: 2px;}
            }
        </style>
</head>
<body  onload="viewdata()">

	 <div class="col-xs-12 col-md-12">
            <header>
                <span id="button-menu" class="fa fa-bars"></span>
                <strong id="user">
                     <span class="fa fa-user-circle-o" style="font-size:30px;"></span>
                </strong>

                <!--=============== Menú derecho =========================-->

                <nav class="navegacion">
                    <ul class="menu">
                        <!-- TITULO -->
                        <li class="title-menu">Asistencia</li>
                        <!-- TITULO -->
                            
                        <li> 
                            <a onclick="cargar4();"  href="#"><span class="fa fa-save icon-menu"></span>Personal</a>
                        </li> 

                        <li><a onclick="cargar1();"  href="#" ><span class="fa fa-registered icon-menu"></span>Registro Asistencia</a></li>

                        <!--li> 
                            <a onclick="cargar2();"  href="#"><span class="fa fa-history icon-menu"></span>Historial de Asistencia</a>
                        </li--> 

                        <li> 
                            <a onclick="cargar3();"  href="#"><span class="fa fa-search icon-menu"></span>Consultar Registro</a>
                        </li> 

 

                        <li> <a href="cerrarSesion.php"><span class="fa fa-sign-out icon-menu"></span> Cerrar Session</a></li>

                    </ul>
                </nav>
            </header>

        </div>

        

        <div id="div" class="cuerpooo col-xs-12 col-md-12 col-lg-12">
            <br>
            <center>  
                <section>  
                    <h1 class="tituloBienvenida">Beinvenido al Sistema de Asistencia Web <span class="glyphicon glyphicon-link"></span></h1>

                    <br>
                 <div class="i">   <img class="imagen" src="../public/imagen/LOGO.png" /></div>
                </section>
               
            </center>
        </div>


        <script type="text/javascript" src="../public/menuVertical/js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../public/menuVertical/js/mk.js"></script>

        <script type="text/javascript" src="../public/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../public/bootstrap/js/jquery.min.js"></script>

        <script>
                                function cargar1() {

                                    var url = '../view/registro.php';
                                    $.ajax({
                                        type: 'POST',
                                        url: url,
                                        data: {},
                                        success: function (datos) {
                                            $('#div').html(datos);
                                        }
                                    });
                                }

                               /* function cargar2() {

                                    var url = '../view/historial.php';
                                    $.ajax({
                                        type: 'POST',
                                        url: url,
                                        data: {},
                                        success: function (datos) {
                                            $('#div').html(datos);
                                        }
                                    });
                                }*/
                                function cargar3() {

                                    var url = '../view/ConsultaPorFechas.php';
                                    $.ajax({
                                        type: 'POST',
                                        url: url,
                                        data: {},
                                        success: function (datos) {
                                            $('#div').html(datos);
                                        }
                                    });
                                }

                                function cargar4() {

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
        </script>

</body>
</html>