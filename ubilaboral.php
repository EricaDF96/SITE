<?php 
	include 'conexion.php';
	
if (isset($_REQUEST['submit'])) {

	//Datos de la ubicacion laboral JPvTcy72tb7DnW4
	//viyu(b^xInQaqET5e3QC 
	$op1 = mysqli_real_escape_string($conexion,$_REQUEST["op1"]);
	$op2 = mysqli_real_escape_string($conexion,$_REQUEST["op2"]);
	$op3 = mysqli_real_escape_string($conexion,$_REQUEST["op3"]);
	$otros = mysqli_real_escape_string($conexion,$_REQUEST["otros"]);
	$mensaje = mysqli_real_escape_string($conexion,$_REQUEST["mensaje"]);
	//Datos Egresado por la empresa
	$carrera = mysqli_real_escape_string($conexion,$_REQUEST["carrera"]);
	$mando1 = mysqli_real_escape_string($conexion,$_REQUEST["mando1"]);
	$mando2 = mysqli_real_escape_string($conexion,$_REQUEST["mando2"]);
	$supervisor = mysqli_real_escape_string($conexion,$_REQUEST["supervisor"]);
	$tecnico = mysqli_real_escape_string($conexion,$_REQUEST["tecnico"]);
	$otro = mysqli_real_escape_string($conexion,$_REQUEST["otro"]);
}


		//INSERT INTO `pseis` (`id_pseis`, `carreras`, `superior`, `inferior`, `supervisor`, `tecnico`, `otro`) VALUES ('1', NULL, NULL, NULL, NULL, NULL, NULL);
		$insertar = "INSERT INTO `pseis` (`carreras`, `superior`, `inferior`, `supervisor`, `tecnico`, `otro`) VALUES ('$carrera','$mando1','$mando2','$supervisor','$tecnico','$otro')";
		$resultado = mysqli_query($conexion,$insertar);

		if ($resultado == 1) {
			$last_id = mysqli_insert_id($conexion);
			$insertar2 = "INSERT INTO  `apartadob` (`pcinco`, `id_pseis`, `psiete`, `pocho`, otro, `pnueve`) VALUES ('$op1','".$last_id."','$op2','$op3','$otros','$mensaje')";

			$resultado = mysqli_query($conexion,$insertar2);
		
		print "<script languaje='JavaScript'>
            window.location.href='emp.html';
            </script>";
			
			
		}else {
			print "<script languaje='JavaScript'>
            window.location.href='emp.html';
            </script>";
		}

		mysqli_close($conexion);
 ?>