<?php 
	include 'cone.php';


	if (isset($_REQUEST['proye'])) {
		$proye = mysqli_real_escape_string($conexion,$_REQUEST['proye']);
		} else {
		$proye = "";
	}
	if (isset($_REQUEST['id'])) {
		$id= mysqli_real_escape_string($conexion,$_REQUEST['id']);
		} else {
		$id = "";
	}

	if (isset($_REQUEST['control'])) {
		$control = mysqli_real_escape_string($conexion,$_REQUEST['control']);
		} else {
		$control = "";
	}

	if (isset($_REQUEST['appater'])) {
		$appater = mysqli_real_escape_string($conexion,$_REQUEST['appater']);
		} else {
		$appater = "";
	}

	if (isset($_REQUEST['apmater'])) {
		$apmater = mysqli_real_escape_string($conexion,$_REQUEST['apmater']);
		} else {
		$apmater = "";
	}

	if (isset($_REQUEST['nombre'])) {
		$nombre = mysqli_real_escape_string($conexion,$_REQUEST['nombre']);
		} else {
		$nombre = "";
	}

	if (isset($_REQUEST['curp'])) {
		$curp = mysqli_real_escape_string($conexion,$_REQUEST['curp']);
		} else {
		$curp = "";
	}

	if (isset($_REQUEST['gene'])) {
		$gene = mysqli_real_escape_string($conexion,$_REQUEST['gene']);
		} else {
		$gene = "";
	}

	if (isset($_REQUEST['carrer'])) {
		$carrer = mysqli_real_escape_string($conexion,$_REQUEST['carrer']);
		} else {
		$carrer = "";
	}

	if (isset($_REQUEST['opc'])) {
		$opc = mysqli_real_escape_string($conexion,$_REQUEST['opc']);
		} else {
		$opc = "";
	}


	if (isset($_REQUEST['calle'])) {
		$calle = mysqli_real_escape_string($conexion,$_REQUEST['calle']);
		} else {
		$calle = "";
	}

		if (isset($_REQUEST['ext'])) {
		$ext = mysqli_real_escape_string($conexion,$_REQUEST['ext']);
		} else {
		$ext = "";
	}

	if (isset($_REQUEST['int'])) {
		$int = mysqli_real_escape_string($conexion,$_REQUEST['int']);
		} else {
		$int = "";
	}

		if (isset($_REQUEST['colonia'])) {
		$colonia = mysqli_real_escape_string($conexion,$_REQUEST['colonia']);
		} else {
		$colonia = "";
	}

	if (isset($_REQUEST['ciudad'])) {
		$ciudad = mysqli_real_escape_string($conexion,$_REQUEST['ciudad']);
		} else {
		$ciudad = "";
	}

		if (isset($_REQUEST['municipio'])) {
		$municipio = mysqli_real_escape_string($conexion,$_REQUEST['municipio']);
		} else {
		$municipio = "";
	}

	if (isset($_REQUEST['esdo'])) {
		$esdo = mysqli_real_escape_string($conexion,$_REQUEST['esdo']);
		} else {
		$esdo = "";
	}

		if (isset($_REQUEST['tele'])) {
		$tele = mysqli_real_escape_string($conexion,$_REQUEST['tele']);
		} else {
		$tele = "";
	}

	if (isset($_REQUEST['tele2'])) {
		$tele2 = mysqli_real_escape_string($conexion,$_REQUEST['tele2']);
		} else {
		$tele2 = "";
	}

		if (isset($_REQUEST['mail'])) {
		$mail = mysqli_real_escape_string($conexion,$_REQUEST['mail']);
		} else {
		$mail = "";
	}

			if (isset($_REQUEST['face'])) {
		$face = mysqli_real_escape_string($conexion,$_REQUEST['face']);
		} else {
		$face = "";
	}

	if (isset($_REQUEST['o1'])) {
		$o1 = mysqli_real_escape_string($conexion,$_REQUEST['o1']);
		} else {
		$o1 = "";
	}

	if (isset($_REQUEST['o2'])) {
		$o2 = mysqli_real_escape_string($conexion,$_REQUEST['o2']);
		} else {
		$o2 = "";
	}

	if (isset($_REQUEST['o3'])) {
		$o3 = mysqli_real_escape_string($conexion,$_REQUEST['o3']);
		} else {
		$o3 = "";
	}

	if (isset($_REQUEST['o4'])) {
		$o4 = mysqli_real_escape_string($conexion,$_REQUEST['o4']);
		} else {
		$o4 = "";
	}
	if (isset($_REQUEST['o5'])) {
		$o5 = mysqli_real_escape_string($conexion,$_REQUEST['o5']);
		} else {
		$o5 = "";
	}

	if (isset($_REQUEST['o6'])) {
		$o6 = mysqli_real_escape_string($conexion,$_REQUEST['o6']);
		} else {
		$o6 = "";
	}
	if (isset($_REQUEST['o7'])) {
		$o7 = mysqli_real_escape_string($conexion,$_REQUEST['o7']);
		} else {
		$o7 = "";
	}

	if (isset($_REQUEST['o8'])) {
		$o8 = mysqli_real_escape_string($conexion,$_REQUEST['o8']);
		} else {
		$o8 = "";
	}
	if (isset($_REQUEST['o9'])) {
		$o9 = mysqli_real_escape_string($conexion,$_REQUEST['o9']);
		} else {
		$o9 = "";
	}

	if (isset($_REQUEST['o10'])) {
		$o10 = mysqli_real_escape_string($conexion,$_REQUEST['o10']);
		} else {
		$o10 = "";
	}

	if (isset($_REQUEST['o11'])) {
		$o11 = mysqli_real_escape_string($conexion,$_REQUEST['o11']);
		} else {
		$o11 = "";
	}

	if (isset($_REQUEST['o12'])) {
		$o12 = mysqli_real_escape_string($conexion,$_REQUEST['o12']);
		} else {
		$o12 = "";
	}

	if (isset($_REQUEST['oc1'])) {
		$oc1 = mysqli_real_escape_string($conexion,$_REQUEST['oc1']);
		} else {
		$oc1 = "";
	}

	if (isset($_REQUEST['oc2'])) {
		$oc2 = mysqli_real_escape_string($conexion,$_REQUEST['oc2']);
		} else {
		$oc2 = "";
	}

	if (isset($_REQUEST['presidente'])) {
		$presidente = mysqli_real_escape_string($conexion,$_REQUEST['presidente']);
		} else {
		$presidente = "";
	}

	if (isset($_REQUEST['secretario'])) {
		$secretario = mysqli_real_escape_string($conexion,$_REQUEST['secretario']);
		} else {
		$secretario = "";
	}

	if (isset($_REQUEST['vocal'])) {
		$vocal = mysqli_real_escape_string($conexion,$_REQUEST['vocal']);
		} else {
		$vocal = "";
	}


	//INSERT INTO revisor(revisorA, revisorB)

	$insertar6 = "INSERT INTO revisor(revisorA, revisorB) VALUES ('$secretario','$vocal')";
		$resultado6 = mysqli_query($conexion,$insertar6);

			if ($resultado6 == 1) {
					/*echo "string ".$_REQUEST['secretario'];
					echo "<br>";
					
					echo "Registro Exitoso";
					echo "<br>";*/
					$last_id = mysqli_insert_id($conexion);
					$insertar5 = "INSERT INTO asesor(nombreA) VALUES ('$presidente')";
					$resultado5 = mysqli_query($conexion,$insertar5);
					if ($resultado5 == 1) {
				/*echo "string ".$_REQUEST['presidente'];
				echo "<br>";
				
				echo "Registro Exitoso";
				echo "<br>";*/
						$last_id1 = mysqli_insert_id($conexion);
						$insertar1 = "INSERT INTO proyecto (nombrep) VALUES ('$proye')";
						//ejecutar consulta
						$resultad1 = mysqli_query($conexion,$insertar1);
						/*$last_id = $resultado->insert_id;
						$last_id = mysqli_insert_id($conexion);

						echo " ", $last_id;*/
						
						if ($resultad1==1) { 

							$last_id2 = mysqli_insert_id($conexion);
							//INSERT INTO domicilio (calle, ne, ni, colonia, poblacion, municipio, entidad, telefono, celular, correo, facebook)

							$insertar0 = "INSERT INTO domicilio (calle, ne, ni, colonia, poblacion, municipio, entidad, telefono, celular, correo, facebook) VALUES ('$calle', '$ext', '$int', '$colonia', '$ciudad', '$municipio', '$esdo', '$tele', '$tele2', '$mail','$face')";
								$resultado0 = mysqli_query($conexion,$insertar0);

								if ($resultado0==1) {
									$last_id3 = mysqli_insert_id($conexion);//domicilio

									//INSERT INTO opcion (residencia, integral, investigacion, estancia, integrador, tesis, productivo, ceneval, innovacion, promedio, emprendedurismo, otro)

									$insertar3 = "INSERT INTO opcion (residencia, integral, investigacion, estancia, integrador, tesis, productivo, ceneval, innovacion, promedio, emprendedurismo, otro) VALUES ('$o4','$o6','$o8','$o10','$o2','$o1','$o3','$o11','$o7','$o9','$o5','$o12') ";

									$resultado3 = mysqli_query($conexion,$insertar3);

									if ($resultado3==1) {
										$last_id4 = mysqli_insert_id($conexion);//opcion
										$insertar4 = "INSERT INTO forma(individual, equipo) VALUES ('$oc1','$oc2')";
										$resultado4 = mysqli_query($conexion,$insertar4);

										if ($resultado4 == 1) {
											$last_id5 = mysqli_insert_id($conexion);//forma
											$insertar2 = "INSERT INTO datospersonales (nc,ap,am,nombre,curp,generacion,carrera,opcion,id_proyecto) VALUES ('$control', '$appater', '$apmater', '$nombre', '$curp', '$gene', '$carrer', '$opc',".$last_id.")";

											$resultado2 = mysqli_query($conexion,$insertar2);

											$in1 = "INSERT INTO solinicio (`nc`, `id_domicilio`, `id_opcion`, `id_forma`) VALUES ('$control', '".$last_id3."', '".$last_id4."', '".$last_id5."') ";
											$res1 = mysqli_query($conexion,$in1);

											$insert = "INSERT INTO rproyecto (`id_division`, id_proyecto, id_asesor ,id_revisor) VALUES ('$id','".$last_id2."','".$last_id1."','".$last_id."')";
											$resul = mysqli_query($conexion,$insert);

											$insert1 = "INSERT INTO liberacion (`id_division`, id_proyecto, id_asesor ,id_revisor , nc) VALUES ('$id','".$last_id2."','".$last_id1."','".$last_id."','$control')";
											$resul1 = mysqli_query($conexion,$insert1);

											$insert2 = "INSERT INTO `adeudo` (`nc`, `id_area`) VALUES ('$control', '1')";
											$resul2 = mysqli_query($conexion,$insert2);

											$insert2 = "INSERT INTO `inconveniencia` (`id_sub`, `nc`, `id_dje`) VALUES ('1', '$control', '1');";
											$resul2 = mysqli_query($conexion,$insert2);
										}

									}

								}

							
							print "<script languaje='JavaScript'>
							alert ('DATOS CORRECTOS DEBERAS SUBIR TU PROYECTO');
							window.location.href='rep.php';
							</script>";

						}else{
							
							print "<script languaje='JavaScript'>
							alert ('ERROR AL REGISTRAR');
							window.location.href='rep.php';
							</script>";

							

						}
					}
			}
		mysqli_close($conexion);

	

?>
<?php 
	include 'conexion.php';


	if (isset($_REQUEST['control'])) {
		$control = $_REQUEST['control'];
		} else {
		$control = "";
	}


	mysqli_select_db("completo");
	$ins = "UPDATE completo SET proyect  = 'checked' WHERE id_completo = '$control' ";

	$resul = mysqli_query($conexion,$ins);

mysqli_close($conexion);

	

?>