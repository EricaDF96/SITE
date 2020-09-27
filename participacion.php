<?php 
	include 'conexion.php';
	
if (isset($_REQUEST['submit'])) {

	$op1 = mysqli_real_escape_string($conexion,$_REQUEST["op1"]);
	$k1 = mysqli_real_escape_string($conexion,$_REQUEST["k1"]);
	$op2 = mysqli_real_escape_string($conexion,$_REQUEST["op2"]);
	$k2 = mysqli_real_escape_string($conexion,$_REQUEST["k2"]);
	$op3 = mysqli_real_escape_string($conexion,$_REQUEST["op3"]);
	$k3 = mysqli_real_escape_string($conexion,$_REQUEST["k3"]);
	
}


$insertar = "INSERT INTO  `tres` ( `si3`, `cuales3`)  VALUES ('$op1','$k1')";


//ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if ($resultado == 1) {
	$last_id = mysqli_insert_id($conexion);

	$insertar2 = "INSERT INTO `cuatro` (`si4`, `cuales4`)  VALUES ('$op2','$k2')";

	//ejecutar consulta
	$resultado2 = mysqli_query($conexion,$insertar2);

	if ($resultado2 == 1) {
		$last_id1 = mysqli_insert_id($conexion);

		$insertar3 = "INSERT INTO `cinco` (`si5`, `cuales5`) VALUES ('$op3','$k3')";

		//ejecutar consulta
		$resultado3 = mysqli_query($conexion,$insertar3);

		if ($resultado3 == 1) {
			$last_id2 = mysqli_insert_id($conexion);

			$insertar4 = "INSERT INTO `apartado6` ( `id_tres`, `id_cuatro`, `id_cinco`) VALUES ('".$last_id."','".$last_id1."', '".$last_id2."')";

			//ejecutar consulta
			$resultado4 = mysqli_query($conexion,$insertar4);
		}
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