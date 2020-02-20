<?php
session_start();
include("includes/config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	//$myusername = addslashes($_POST["nombre"]);
	//$mypassword = md5(addslashes($_POST["password"]));
	$myusername = $_POST["nombre"];
	$mypassword = $_POST["password"];

	$sql = "SELECT id FROM user WHERE nombre='$myusername' and password='$mypassword'";
	$result = mysql_query($sql);

	$count = mysql_num_rows($result);


	if($count)
	{
	$_SESSION['login_admin']=$myusername;
	
	header("location:formulario/index.html");
	}
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Nuestro Sitio Web</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="estiloscss/estiloslogin.css">

</head>


<header>
<div class="fixed-top container row">

	<div class="col-xs-8 col-sm-8 col-md-7">
		<h1 align="center"><strong>TiendaOnline.com<br><small>A tu Servicio</small><br><br></strong></h1>
	</div>

	<div class="hidden-xs hidden-sm col-md-5">
		<img src="Imagenes/imagenesblog/11.png" height="120px" width="390px">

	</div> 
</div>
</header>

<style>
body{
	background:#DCDCDC;
}

</style>
<body>
<div class="container">
	<section class="row">

	<article class="col-xs-12 col-ms-6 col-md-10 col-lg-10">
	
	<div class="container fcrud">
		<form  method="post">
			<h2 class="form-signin-heading">INICIAR SESSIÓN</h2>
			<hr>
			<br><br>
			<label for="inputEmail" class="sr-only">Email:</label>
			<div class="form-group">
			<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>

			<input name="nombre" type="email" id="inputEmail" class="form-control" placeholder="Email:" required autofocus>

			</div>
			</div>
			<label for="inputpassword" class="sr-only">Contraseña</label>

			<div class="form-group">
		      	<div class="input-group">
		      		<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
					<input name="password" type="password" id="inputpassword" class="form-control" placeholder="password:" required>
				</div>
			</div>

			<div class="checkbox">
			 	<label>
			 		<input type="checkbox" value="remember-me">Recordarme
			 	</label>
			</div>


			<a class="btn btn-success" href="../Index.html"><span class="glyphicon glyphicon-circle-arrow-left">
			</span> Volver</a>	
		    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Entrar </button>
		    <br><br><br>	
		</form>

		</div>
		</article>
		</section>
		<br><br><br>
	</div>

	

<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</body>
</html>