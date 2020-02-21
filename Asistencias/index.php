<DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/cssLogx.css">
        <link rel="shortcut icon" href="public/imagen/favicon.ico" type="image/x-icon">
</head>
<body>

	    <div class="container">
            <div class="contenedor">

                <img class="imagen" src="public/imagen/LOGO.png" />

                <p class="titulo1">SERVICIOS GENERALES</p>

                <form class="formulario" method="POST" name="form1" action="php/validar.php">

                    <span class="titulo2">VIVIANA</span>

                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nombre de usuario" required autofocus>

                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>

                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me" disabled> Recordar contraseña
                        </label>
                    </div>

                    <button  type="submit"  class="btn btn-primary btn-block boton">Iniciar sesión</button>
                </form>

            </div>
        </div>


        <script src="public/bootstrap/js/jquery.js"></script>
        <script src="public/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
