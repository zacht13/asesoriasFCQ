<?php	
	include("config.php");
	$link=conectarse();

		$fecha = $_POST['fecha'];

		//echo $fecha;
		$fecha = explode(" ", $fecha);
		switch($fecha[3]){
			case 'Enero':
				$fecha[3] = 01;
				break;
			case 'Febrero':
				$fecha[3] = 02;
				break;
			case 'Marzo':
				$fecha[3] = 03;
				break;
			case 'Abril':
				$fecha[3] = 04;
				break;
			case 'Mayo':
				$fecha[3] = 05;
				break;
			case 'Junio':
				$fecha[3] = 06;
				break;
			case 'Julio':
				$fecha[3] = 07;
				break;
			case 'Agosto':
				$fecha[3] = "08";
				break;
			case 'Septiembre':
				$fecha[3] = "09";
				break;
			case 'Octubre':
				$fecha[3] = 10;
				break;
			case 'Noviembre':
				$fecha[3] = 11;
				break;
			case 'Diciembre':
				$fecha[3] = 12;
				break;
		}
		$clave = $_POST['materia'];
		$clave = explode(" ", $clave);
		$clave = $clave[0];
		$dia = $fecha[0];
		$fecha= "2014-$fecha[3]-$fecha[1]";
		//echo $resultado = $fecha."<br>".$clave; 
			$sql = "SELECT usuario, DATE_FORMAT(hora1, '%H:%i') AS hora 
						FROM  ( asesores_materias JOIN usuarios ON id = asesores_materias.asesor_id ) 
							JOIN asesores_horas  ON asesores_materias.asesor_id = asesores_horas.asesor_id 
							WHERE asesores_materias.clave = '$clave' AND (asesores_horas.dia1 = '$dia') 
					UNION 
					SELECT usuario, DATE_FORMAT(hora2, '%H:%i') as hora 
						FROM ( asesores_materias JOIN usuarios ON id = asesores_materias.asesor_id) 
							JOIN asesores_horas  ON asesores_materias.asesor_id = asesores_horas.asesor_id 
							WHERE asesores_materias.clave = '$clave' AND (asesores_horas.dia2 = '$dia')";
	    
	    	$result=mysql_query($sql,$link);
				while ($row=mysql_fetch_array($result)){												
					echo "<option>".$row["usuario"]." - " .$row["hora"]."</option>";
					}
?>