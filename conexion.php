<?php
	$conectar = mysql_connect('localhost:84','prueba','');
	if(!conectar){
		echo "No se pudo conectar con el servidor";
	} else{
		$base = mysql_select_db('tarea_php')
		if(!$base){
			echo "No se encontró la Base de Datos";
		}
	}
	$id = $_POST['id'];
	$nombre = $_POST['nombres'];
	$apellido = $_POST['apellidos'];
	$edad = $_POST['edad'];
	$correo = $_POST['correo'];

	$sql = "INSERT INTO datos VALUES('$id',
									'$nombre',
									'$apellido',
									'$edad',
									'$correo';
	$ejecutar = mysql_query($sql);
	if(!$ejecutar){
		echo = "Hubo algún error";
	}else{
		echo "datos guardados correctamente<br><a href = 'index.html'>Volver</a>";
	}
?>
