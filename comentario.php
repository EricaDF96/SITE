<?php 
	include 'conexion.php';
	
	if (isset($_REQUEST['submit'])) {
		$mensaje = mysqli_real_escape_string($conexion,$_REQUEST["mensaje"]);
	}


$insertar = "INSERT INTO `apartado7` (`comentario`) VALUES ('$mensaje')";

//ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if ($resultado) {
	$insertar1 = "INSERT INTO  egresados (id_perfil, id_per, id_ubi, id_des, id_esp, id_com, id_espe) select (max(id_perfil)), (max(id_per)), (max(id_ubi)), (max(id_des)), (max(id_esp)), (max(id_com)), (max(id_espe)) from apartado1, apartado2, apartado3, apartad4, apartado5, apartado6, apartado7";

	//ejecutar consulta
	$resultado1 = mysqli_query($conexion,$insertar1);

	
print "<script languaje='JavaScript'>
            alert ('GRACIAS POR COMPLETAR EL CUESTIONARIO');
            window.location.href='rep.php';
            </script>";
}else {
	print "<script languaje='JavaScript'>
            alert ('ERROR VERIFICA DATOS');
            window.location.href='egre.html';
            </script>";
}

mysqli_close($conexion);

 ?>