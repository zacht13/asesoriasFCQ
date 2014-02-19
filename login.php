<?php session_start();
//datos para establecer la conexion con la base de mysql.
	include ("config.php");
		$link=conectarse();
			function quitar($mensaje){
			$nopermitidos = array("'",'\\','<','>',"\"");
			$mensaje = str_replace($nopermitidos, "", $mensaje);
			return $mensaje;
			}
	if(trim($_POST["user"]) != "" && trim($_POST["passw"]) != ""){
		// Funcion para eliminar algun caracter en especifico
		$user = strtolower(quitar($_POST["user"]));
		$passw = $_POST["passw"];
				$user = strtolower(htmlentities($_POST["user"], ENT_QUOTES));
				$passw = $_POST["passw"];
			$result = mysql_query( "SELECT password, id FROM usuarios WHERE id='$user'");
				//// lo necesito !!!!
				if($row = mysql_fetch_array($result)){
						if($row["password"] == $passw){
					$_SESSION["k_user"] = $row['id'];
			echo 'Has sido logueado correctamente '.$_SESSION['k_user'].' <p>';
			header("location:testalx.php"); //si se cumplio todo regresa a la pagina de index
						}
		else{
					echo 'Password incorrecto';
					header("location:index.php");
			}
					}
		else{
					echo 'Usuario no existente en la base de datos';
					header("location:index.php");
			}
					mysql_free_result($result);
		}
		else{
					echo 'Debe especificar un usuario y password';
					header("location:index.php");
			}
			mysql_close();
?>
