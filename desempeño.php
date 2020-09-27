<?php 
	include 'conexion.php';
	
if (isset($_REQUEST['submit'])) {

	$op1 = mysqli_real_escape_string($conexion,$_REQUEST["op1"]);
	$op2 = mysqli_real_escape_string($conexion,$_REQUEST["op2"]);
	$op3 = mysqli_real_escape_string($conexion,$_REQUEST["op3"]);
	$op4 = mysqli_real_escape_string($conexion,$_REQUEST["op4"]);
	$op5 = mysqli_real_escape_string($conexion,$_REQUEST["op5"]);
	$op6 = mysqli_real_escape_string($conexion,$_REQUEST["op6"]);
	$op7 = mysqli_real_escape_string($conexion,$_REQUEST["op7"]);
	$op8 = mysqli_real_escape_string($conexion,$_REQUEST["op8"]);
	$op9 = mysqli_real_escape_string($conexion,$_REQUEST["op9"]);
	$op10 = mysqli_real_escape_string($conexion,$_REQUEST["op10"]);
	$op11 = mysqli_real_escape_string($conexion,$_REQUEST["op11"]);
	$op12 = mysqli_real_escape_string($conexion,$_REQUEST["op12"]);
	$op13 = mysqli_real_escape_string($conexion,$_REQUEST["op13"]);
}


$insertar = "INSERT INTO `apartad4` (`eficiencia`, `formacion`, `utilidad`, `aspectos`, `area`, `titulacion`, `experiencia`, `competencias`, `posicionamiento`, `conocimiento`, `personalidad`, `capacidad`, otro) VALUES ('$op1','$op2','$op3','$op4','$op5','$op6','$op7','$op8','$op9','$op10','$op11','$op12','$op13')";


//ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if ($resultado) {
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