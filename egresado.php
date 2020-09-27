<?php 
	include 'conexion.php';

	$appater = mysqli_real_escape_string($conexion,$_POST["appater"]);
	$apmater = mysqli_real_escape_string($conexion,$_POST["apmater"]);
	$nombre = mysqli_real_escape_string($conexion,$_POST["nombre"]);
	$control= mysqli_real_escape_string($conexion,$_POST["control"]);
	$fecha = mysqli_real_escape_string($conexion,$_POST["fecha"]);
	$curp = mysqli_real_escape_string($conexion,$_POST["curp"]);
	$sex = mysqli_real_escape_string($conexion,$_POST["sex"]);
	$civil = mysqli_real_escape_string($conexion,$_POST["civil"]);
	$calle = mysqli_real_escape_string($conexion,$_POST["calle"]);
	$colonia = mysqli_real_escape_string($conexion,$_POST["colonia"]);
	$cp = mysqli_real_escape_string($conexion,$_POST["cp"]);
	$ciudad = mysqli_real_escape_string($conexion,$_POST["ciudad"]);
	$municipio = mysqli_real_escape_string($conexion,$_POST["municipio"]);
	$esdo = mysqli_real_escape_string($conexion,$_POST["esdo"]);
	$tele = mysqli_real_escape_string($conexion,$_POST["tele"]);
	$tele2 = mysqli_real_escape_string($conexion,$_POST["tele2"]);
	$mail = mysqli_real_escape_string($conexion,$_POST["mail"]);
	$carrera= mysqli_real_escape_string($conexion,$_POST["carrera"]);
	$feingreso = mysqli_real_escape_string($conexion,$_POST["feingreso"]);
	$titu = mysqli_real_escape_string($conexion,$_POST["titu"]);
	$xcen = mysqli_real_escape_string($conexion,$_POST["xcen"]);
	$porcen = mysqli_real_escape_string($conexion,$_POST["porcen"]);
	$pack = mysqli_real_escape_string($conexion,$_POST["pack"]);
	$maestria = mysqli_real_escape_string($conexion,$_POST["maestria"]);
	$feegreso = mysqli_real_escape_string($conexion,$_POST["feegreso"]);
	$titu2 = mysqli_real_escape_string($conexion,$_POST["titu2"]);
	$negocio = mysqli_real_escape_string($conexion,$_POST["negocio"]);
	/**********************************************************/


	

	

	//font-family: 'robotomedium';

$insertar = "INSERT INTO `domicilio` (`calle`, `colonia`, `cp`, `ciudad`, `municipio`, `estado`, `telefono`, `telcasa`, `email`) VALUES ('$calle','$colonia','$cp','$ciudad','$municipio','$esdo','$tele','$tele2','$mail')";

	$resultado = mysqli_query($conexion,$insertar);

	if ($resultado == 1) {
		$last_id = mysqli_insert_id($conexion);//domicilio

		$insertar2 = "INSERT INTO `dominio` (`ingles`, `otro`) VALUES ('$xcen','$porcen')";

			$resultado2 = mysqli_query($conexion,$insertar2);

			if ($resultado2 == 1) {
				$last_id1 = mysqli_insert_id($conexion);//dominio

				$insertar3 = "INSERT INTO `carrera` (`carrera`, `figreso`, `titulado1`) VALUES ('$carrera','$feingreso','$titu')";

				$resultado3 = mysqli_query($conexion,$insertar3);

				if ($resultado3 == 1) {
					$last_id2 = mysqli_insert_id($conexion);//carrera

					$insertar4 = "INSERT INTO `maestria` (`maestria`, `fegreso`, `titulado`) VALUES ('$maestria','$feegreso','$titu2')";

					$resultado4 = mysqli_query($conexion,$insertar4);

					if ($resultado4 == 1) {
						$last_id3 = mysqli_insert_id($conexion);//maestria

						$insertar5 = "INSERT INTO `apartado1` (`ap`, `am`, `nombre`, `nc`, `fn`, `curp`, `sexo`, `ecivil`, `id_domicilio`, `id_dominio`, `id_carrera`, `id_maestria`, negocio) VALUES ('$appater','$apmater','$nombre','$control','$fecha','$curp','$sex','$civil','".$last_id."','".$last_id1."','".$last_id2."','".$last_id3."', '$negocio')";

						$resultado5 = mysqli_query($conexion,$insertar5);

						if ($resultado5) {
							# code...
						}

					}
				}
			}
	}

	$in = $nombre.' '.$appater.' '.$apmater;

	$insertar = "INSERT INTO `completo` (id_completo,`nombre`, cegresados)  VALUES ('$control','$in', 'checked')";

	$resultado = mysqli_query($conexion,$insertar);
	if ($resultado5 == 1) {
		print "<script languaje='JavaScript'>
            window.location.href='egre.html';
            
            </script>";

	}else {
		print "<script languaje='JavaScript'>
	            window.location.href='egre.html';
	            </script>";
            
}

mysqli_close($conexion);










