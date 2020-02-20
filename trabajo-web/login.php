

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Nuestro Sitio Web</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="estiloscss/estilosLogin.css">


	
</head>
<body>

<div class="jumbotron boxlogin">
		<div class="container">


<?php
	session_start("curso");
	$usuario = $_POST["usuario"];
	$clave = $_Post["clave"];
	
	if(!empty($_POST)){
		if($usuario == "admin" && $clave =="admin"){
			$_SESSION["INICIOSESSION"] = 1;
			header("location: index.php");//redirecciona
		}
		else
		{
			$respuesta = "Usuario y/o Clave no valido";
		}
	}
?>

		
		<form method="POST">

					<label>Nombre de usuario:</label>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="usuario" id="usuario" class="form-control">
						</div>
					</div>
					<br>

					<label>Contraseña:</label>
					<div class="form-group">
		      			<div class="input-group">
		      				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
		      				<input type="text" name="clave" id="password" class="form-control">
		      			</div>
		      		</div>

		      		<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-circle-arrow-left"></span> volver </button>
		      		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Entrar </button>
		</form>
			<?php echo $respuesta?>
		</div>
</div>


<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>