<?php 
	session_start();

	require_once ("../conexion/conexion.php");

			$user=$_POST['usuario'];
			$pass=$_POST['password'];
			$error='';


					$datos = $conn->prepare("CALL proc_UsuariosValidar(?,?)");
				
					$datos->bind_param('ss',$user, $pass);
					$datos->execute();

					$resultado = $datos->fetch();

			if(is_null($resultado)) {
				//if($user=="admin" && $pass=="admin"){

				 header('Location: ../index.php');
 				$error .= '<li class="alert alert-danger"> Los Datos ingresados son Incorrecto </li>';	
			}
			else
			{

				$_SESSION['usuario'] = $user;
				header('Location: principal.php');	
			}
 ?>