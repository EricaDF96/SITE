<?php 
	include 'conexion.php';
	
if (isset($_REQUEST['submit'])) {
	//HABILIDADES
	$ha = mysqli_real_escape_string($conexion,$_REQUEST["ha"]);
	$es = mysqli_real_escape_string($conexion,$_REQUEST["es"]);
	$le = mysqli_real_escape_string($conexion,$_REQUEST["le"]);
	$esc = mysqli_real_escape_string($conexion,$_REQUEST["esc"]);
	//EMPRESA
	$opc = mysqli_real_escape_string($conexion,$_REQUEST["opc"]);
	$empre = mysqli_real_escape_string($conexion,$_REQUEST["empre"]);
	$calle = mysqli_real_escape_string($conexion,$_REQUEST["calle"]);
	$colonia = mysqli_real_escape_string($conexion,$_REQUEST["colonia"]);
	$cp = mysqli_real_escape_string($conexion,$_REQUEST["cp"]);
	$ciudad = mysqli_real_escape_string($conexion,$_REQUEST["ciudad"]);
	$municipio = mysqli_real_escape_string($conexion,$_REQUEST["municipio"]);
	$esdo = mysqli_real_escape_string($conexion,$_REQUEST["esdo"]);
	$tele = mysqli_real_escape_string($conexion,$_REQUEST["tele"]);
	$tele2 = mysqli_real_escape_string($conexion,$_REQUEST["tele2"]);
	$mail = mysqli_real_escape_string($conexion,$_REQUEST["mail"]);
	$web = mysqli_real_escape_string($conexion,$_REQUEST["web"]);
	$jef = mysqli_real_escape_string($conexion,$_REQUEST["jef"]);
	//DATOS
	$espe=mysqli_real_escape_string($conexion,$_REQUEST["espe"]);
	$insti=mysqli_real_escape_string($conexion,$_REQUEST["insti"]);
	
	
	$op = mysqli_real_escape_string($conexion,$_REQUEST["op"]);
	$op01 = mysqli_real_escape_string($conexion,$_REQUEST["op01"]);
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
}
	//Linea de codigo de la tabla de HABILIDADES que aun no carga simultaneamente
	//$insertar = "INSERT INTO habilidades(habla,escri,lee,escuch) VALUES ('$ha','$es','$le','$esc')";



//$insertar = "INSERT INTO ubicacion(activi, indicar, trabajar, emple, requisitos, idioma, antig, ingres, nivel, condicion, rela, sector, tam) VALUES ('$op','$op1','$op2','$op3','$op4','$op5','$op6','$op7','$op8','$op9','$op10','$op11','$op12')";
//$insertar2 = "INSERT INTO empresa(organismo, empresa, calle, colonia, cp, ciudad, municipio, estado, tel1, tel2, mail, web, jefe) VALUES ('$opc', '$empre', '$calle','$colonia','$cp','$ciudad','$municipio','$esdo','$tele','$tele2','$mail','$web','$jef')";
$insertar = "INSERT INTO `domicilio` (`calle`, `colonia`, `cp`, `ciudad`, `municipio`, `estado`, `telefono`, `telcasa`, `email`) VALUES ('$calle','$colonia','$cp','$ciudad','$municipio','$esdo','$tele','$tele2','$mail')";

	$resultado = mysqli_query($conexion,$insertar);

if ($resultado == 1) {

	$last_id = mysqli_insert_id($conexion);//domicilio
	//INSERT INTO `empresa` (`id_empresa`, `organismo`, `nombre`, `id_domicilio`, `tel`, `fax`, `correo`, `pagina`, `npj`, `sector`, `tamano`, `id_primario`, `id_secundario`, `id_terciario`) VALUES ('2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
	$insertar2 = "INSERT INTO `empresa` (`organismo`, `nombre`, `id_domicilio`, `pagina`, `npj`, `sector`, tamano) VALUES ('$opc','$empre','".$last_id."','$web','$jef','$op11','$op12')";
		$resultado2 = mysqli_query($conexion,$insertar2);

		if ($resultado2 == 1) {
			$last_id1 = mysqli_insert_id($conexion);//empresa
			$insertar3 = "INSERT INTO `idiomas` (`hablar`, `escribir`, `leer`, `escuchar`)  VALUES ('$ha','$es','$le','$esc')";
			$resultado3 = mysqli_query($conexion,$insertar3);

			if ($resultado3 == 1) {
				$last_id2 = mysqli_insert_id($conexion);//idiomas
				$insertar4 = "INSERT INTO  `trabaja` (`tiempo`, `medio`, `requisitos`, `idioma`, `id_idiomas`, `antiguedad`, `igreso`, `nivel`, `condicion`, `relacion`, `id_empresa`) VALUES ('$op2', '$op3', '$op4', '$op5', '".$last_id2."', '$op6', '$op7', '$op8', '$op9', '$op10', '".$last_id1."')";
				$resultado4 = mysqli_query($conexion,$insertar4);
				if ($resultado4 == 1 ) {

					$last_id3 = mysqli_insert_id($conexion);//trabaja
					$insertar5 = "INSERT INTO  `estudia` (`especialidad`, `nombrei`, `istitucion`) VALUES ('$op1','$espe', '$insti')";
					$resultado5 = mysqli_query($conexion,$insertar5);

					if ($resultado5 == 1) {
						$last_id4 = mysqli_insert_id($conexion);//estudia
						$insertar6 = "INSERT INTO  `apartado3` (`trabaja`, `estudia`, `id_estudia`, `id_trabaja`) VALUES ('$op','$op01', '".$last_id4."','".$last_id3."')";
						$resultado6 = mysqli_query($conexion,$insertar6);
						
					}
				}
			}
		}

//if ($resultado == 1) {


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