<?php 
	include 'conexion.php';
	
	if (isset($_REQUEST['submit'])) {

		$calle = mysqli_real_escape_string($conexion,$_REQUEST["calle"]);
		$colonia = mysqli_real_escape_string($conexion,$_REQUEST["colonia"]);
		$cp = mysqli_real_escape_string($conexion,$_REQUEST["cp"]);
		$ciudad = mysqli_real_escape_string($conexion,$_REQUEST["ciudad"]);
		$municipio = mysqli_real_escape_string($conexion,$_REQUEST["municipio"]);

		$op1 = mysqli_real_escape_string($conexion,$_REQUEST["op1"]);
		$op2 = mysqli_real_escape_string($conexion,$_REQUEST["op2"]);
		$op3 = mysqli_real_escape_string($conexion,$_REQUEST["op3"]);
		$otra = mysqli_real_escape_string($conexion,$_REQUEST["otra"]);
		$nom = mysqli_real_escape_string($conexion,$_REQUEST["nom"]);
		$esdo = mysqli_real_escape_string($conexion,$_REQUEST["esdo"]);
		$tele = mysqli_real_escape_string($conexion,$_REQUEST["tele"]);
		$mail = mysqli_real_escape_string($conexion,$_REQUEST["mail"]);

		$empleado = mysqli_real_escape_string($conexion,$_REQUEST["empleado"]);
	}



	$insertar = "INSERT INTO `domempresa` (`calle`, `colonia`, `cp`, `ciudad`, `municipio`, `estado`) VALUES ('$calle','$colonia','$cp','$ciudad','$municipio','$esdo')";

	$resultado = mysqli_query($conexion,$insertar);

	if ($resultado == 1) {
		$last_id = mysqli_insert_id($conexion);

		$insertar2 = "INSERT INTO `apartadoa` (`organismo`, `tamano`, `avtividad`, `otra`, `nombre`, `id_dom`, `telefono`, `correo`) VALUES ('$op1','$op2','$op3','$otra','$nom','".$last_id."','$tele','$mail')";

			$resultado2 = mysqli_query($conexion,$insertar2);
		
	}

	if ($resultado2 == 1) {
			print "<script languaje='JavaScript'>
			        window.location.href='emp.html';
			        </script>";

			}else {
			print "<script languaje='JavaScript'>
			        window.location.href='emp.html';
			        </script>";

	}

		mysqli_select_db("completo");
		$ins = "UPDATE completo SET cempleadores = 'checked' WHERE nombre = '$empleado' ";

		$resul = mysqli_query($conexion,$ins);

	mysqli_close($conexion);

?>