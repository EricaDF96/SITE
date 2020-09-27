<?php 
	include 'conexion.php';
	
if (isset($_REQUEST['submit'])) {

	$op1 = mysqli_real_escape_string($conexion,$_REQUEST["op1"]);
	$kual = mysqli_real_escape_string($conexion,$_REQUEST["kual"]);
	$op2 = mysqli_real_escape_string($conexion,$_REQUEST["op2"]);
	$kual2 = mysqli_real_escape_string($conexion,$_REQUEST["kual2"]);
	
}


$insertar = "INSERT INTO `uno` (`si1`,  `cuales1`) VALUES ('$op1','$kual')";


//ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if ($resultado == 1) {
	$last_id = mysqli_insert_id($conexion);

	$insertar2 = "INSERT INTO `dos` (`si2`,  `cuales2`) VALUES ('$op2','$kual2')";

	//ejecutar consulta
	$resultado2 = mysqli_query($conexion,$insertar2);

	if ($resultado2 == 1) {
		$last_id1 = mysqli_insert_id($conexion);

		$insertar3 = "INSERT INTO `apartado5` (`id_uno`, `id_dos`) VALUES ('".$last_id."','".$last_id1."')";

		//ejecutar consulta
		$resultado3 = mysqli_query($conexion,$insertar3);
	}

	
	print "<script languaje='JavaScript'>
            window.location.href='egre.html';
            
            </script>";



}else {
	print "<script languaje='JavaScript'>
            window.location.href='egre.html';
            </script>";
}

mysqli_close($conexion);

 ?>