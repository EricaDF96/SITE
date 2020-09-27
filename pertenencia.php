<?php 
	include 'conexion.php';

	

if (isset($_REQUEST['submit'])) {
	$op = mysqli_real_escape_string($conexion,$_REQUEST["op"]);
	$opc = mysqli_real_escape_string($conexion,$_REQUEST["opc"]);
	$opci = mysqli_real_escape_string($conexion,$_REQUEST["opci"]);
	$opcio = mysqli_real_escape_string($conexion,$_REQUEST["opcio"]);
	$opcion = mysqli_real_escape_string($conexion,$_REQUEST["opcion"]);
	$opcion2 = mysqli_real_escape_string($conexion,$_REQUEST["opcion2"]);

}

	//consulta para insertar (lo que esta en parentecis son los campos de la tabla y los que tienen simbolo de "$" son los nombres de los input )


$insertar = "INSERT INTO `apartado2` (`calidad`, `plan`, `oportunidad`, `enfasis`, `satisfaccion`, `experiencia`) VALUES ('$op','$opc','$opci','$opcio','$opcion','$opcion2')";


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