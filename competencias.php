<?php 
	include 'conexion.php';
	
if (isset($_REQUEST['submit'])) {

	$a = mysqli_real_escape_string($conexion,$_REQUEST["a"]);
	$b = mysqli_real_escape_string($conexion,$_REQUEST["b"]);
	$c = mysqli_real_escape_string($conexion,$_REQUEST["c"]);
	$d = mysqli_real_escape_string($conexion,$_REQUEST["d"]);
	$e = mysqli_real_escape_string($conexion,$_REQUEST["e"]);
	$f = mysqli_real_escape_string($conexion,$_REQUEST["f"]);
	$g = mysqli_real_escape_string($conexion,$_REQUEST["g"]);
	$h = mysqli_real_escape_string($conexion,$_REQUEST["h"]);
	$i = mysqli_real_escape_string($conexion,$_REQUEST["i"]);
	$j = mysqli_real_escape_string($conexion,$_REQUEST["j"]);
	$k = mysqli_real_escape_string($conexion,$_REQUEST["k"]);
	$l = mysqli_real_escape_string($conexion,$_REQUEST["l"]);
	$m = mysqli_real_escape_string($conexion,$_REQUEST["m"]);
	$n = mysqli_real_escape_string($conexion,$_REQUEST["n"]);
	$o = mysqli_real_escape_string($conexion,$_REQUEST["o"]);
	$p = mysqli_real_escape_string($conexion,$_REQUEST["p"]);
	$q = mysqli_real_escape_string($conexion,$_REQUEST["q"]);
	
	$exc = mysqli_real_escape_string($conexion,$_REQUEST["exc"]);
	$mb = mysqli_real_escape_string($conexion,$_REQUEST["mb"]);
	$bue = mysqli_real_escape_string($conexion,$_REQUEST["bue"]);
	$reg = mysqli_real_escape_string($conexion,$_REQUEST["reg"]);
	$mal = mysqli_real_escape_string($conexion,$_REQUEST["mal"]);
	$mensaje = mysqli_real_escape_string($conexion,$_REQUEST["mensaje"]);
	$mensaje2 = mysqli_real_escape_string($conexion,$_REQUEST["mensaje2"]);



}


$insertar = "INSERT INTO `competencias` (`a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`)VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p', '$q')";

	$resultado = mysqli_query($conexion,$insertar);

if ($resultado == 1) {
	$last_id = mysqli_insert_id($conexion);

	$insertar2 = "INSERT INTO `pdoce` (`auno`, `buno`, `cuno`, `duno`, `euno`) VALUES ('$exc','$mb','$bue','$reg','$mal')";
		$resultado2 = mysqli_query($conexion,$insertar2);
		if ($resultado2 == 1) {

			$last_id1 = mysqli_insert_id($conexion);

			$insertar3 = "INSERT INTO `apartadoc` (`id_com`, `id_doce`, `ptrece`, `pcatorce`)  VALUES ('".$last_id."','".$last_id1."','$mensaje','$mensaje2')";
			$resultado3 = mysqli_query($conexion,$insertar3);
			if ($resultado3 == 1) {
					$last_id2 = mysqli_insert_id($conexion); 

						$insertar4 = "INSERT INTO  empleadores (id_empresa, id_apartadob, id_apartadoc) select (max(id_empresa)), (max(id_apartadob)), (max(id_apartadoc)) from apartadoa, apartadob, apartadoc";
						$resultado4 = mysqli_query($conexion,$insertar4);
						if ($resultado4) {
							# code...
						}
					

				
			}

				print "<script languaje='JavaScript'>
	            alert ('GRACIAS POR COMPLETAR EL CUESTIONARIO');
	            window.location.href='index.html';
	            </script>";


			}else {
				print "<script languaje='JavaScript'>
			            alert ('ERROR VERIFICA DATOS');
			            window.location.href='emp.html';
			            </script>";
			}
	
}



mysqli_close($conexion);

 ?>