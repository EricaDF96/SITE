<!DOCTYPE HTML>
<html lang="es">
	<head "Content-Type: text/html;charset=utf-8">
		<title>Sistema Integral de Titulación y Egresados</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<meta charset="utf-8">
		<meta name="googlebot" content="noindex" />
		<meta name="robots" content="noindex">
		<!--Responsive-->
		<meta name="viewport" content="width-device-width, user-scalable=no, inicial-scale=1, maximum-scale=1, minimum scale=1"/>
		<!--Iconos-->
		<link rel="stylesheet" type="text/css" href="css/fontello.css">
		<link rel="stylesheet" href="https://necolas.github.io/normalize.css/7.0.0/normalize.css"/>
    	<link rel="stylesheet" href="https://i.icomoon.io/public/temp/8a8afbdc87/UntitledProject/style.css">
		<!--Estilo-->
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/rep.css">
		<link rel="stylesheet" type="text/css" href="css/fomr.css">
		

		<!--Dinamismo-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/egem.js" defer></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
		
		
		

	</head>

<!--Pagina contenedora-->
	<body oncontextmenu="return false;">
		<header>
			<!--Contenedor de menu-->
			<div class="contenedor">
				
				<input type="checkbox" id="menu-bar">
				<label class="icon-menu" for="menu-bar"></label>
				<nav class="menu">
					<a href="index.html">Incio</a>
					<a href="infr.html">Titulación</a>
					<a href="rep.php">Repositorio</a>
					<a href="tram.html">Trámites</a>
					<a href="egre.html">Seguimiento de Egresados</a>
					<a href="emp.html">Cuestionario para Empleadores</a>
					
				</nav>
			</div>
		</header>

		<!--Modal Mensaje Emergente-->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script src="js/modal.js"></script>
		<script type="text/javascript">
			function Confirm(){
				var res = confirm("Registro Guardado");
				if (res = true) {
					return true;
				}
			}return false;
		</script>

		<main>
			
			<!--Imagen de Cabecera-->
			<section id="bnnr1">
				<img src="img/bnrc(2).png">
				<img src="img/bnrc (3).png">
				<img src="img/bnrc (4).png">
				<img src="img/bnrc (5).png">
				<img src="img/bnrc (6).png">
					<div class="contenedor">
						<h2 >REPOSITORIO</h2><hr>
					</div>
			</section>
		</main>

		<button class="tablink" onclick="openPage('uno',this,'#019733')"id="defaultOpen">Registro de Proyecto</button>
		<button class="tablink" onclick="openPage('dos',this,'#019733')">REPOSITORIO</button>
		

		<div id="uno" class="tabcontent">
<p class="infor"><b>LOS CAMPOS MARCADOS * SON OBLIGATORIOS</b></p>
			
			<form action="registro.php" method="POST">
				
				<label>DATOS GENERALES *</label><br><br>
				<label>No.Control*:</label>
				<input type="text" name="control" size="10" placeholder="2012123003" required>
				<label>Nombre*:</label>
				<input type="text" name="appater" size="20" placeholder="Apellido Paterno *" required>
				<input type="text" name="apmater" size="20" placeholder="Apellido Materno *" required>
				<input type="text" name="nombre" size="25" placeholder="Nombre(s) *" required><br>
				<label>CURP*:</label><input type="text" size="20" name="curp" id="" placeholder="CURP*" required>
				<label>Generación*:</label><input type="text" name="gene" size="10" placeholder="2016-2020*" required>
				<label>Carrera*:</label>
				<input type="text" size="35" name="carrer" id="" placeholder="Nombre de la Carrera sin Abreviaturas" required><br>
				<hr><br>


				<label>DOMICILIO:</label><br><br>
				<input type="text" name="calle" placeholder="Calle*" required>
				<input type="text" name="ext" size="4" placeholder="N.Ext*" required>
				<input type="text" name="int" size="4" placeholder="N.Int">
				<input type="text" name="colonia" placeholder="Colonia"><br>
				
				<input type="text" name="ciudad" placeholder="Ciudad*" required>
				<input type="text" name="municipio" placeholder="Municipio*" required>
				<input type="text" name="esdo" placeholder="Estado*" required><br>

				<label>Teléfono de casa:</label>
				<input type="text" name="tele" placeholder="(000) 000 000 00 00">
				<label>Celular*:</label>
				<input type="text" name="tele2" placeholder="(000) 000 00 0 00 00" required>
				<label>E-mail*:</label>
				<input type="text" name="mail" placeholder="username@dominio.com" required>
				<label>Facebook:</label>
				<input type="text" name="face"><br><hr><br>

				<label>OPCIÓN DE TITULACIÓN INTEGRAL*:<br>&nbsp;&nbsp;&nbsp;Deberas marcar con "x" la opción.</label><br><br>

				<label>Tesis</label>
				<input type="text" size="1" name="o1" > &nbsp;&nbsp;&nbsp;
				<label>Estancia:</label>
				<input type="text" size="1" name="o10" >


				<table class="egt">
					<tr>
					    <td>
						    <label>Proyecto Integrador</label>
							<input type="text" size="1" name="o2" ><br>
						</td>
						<td>
						    <label>&nbsp;&nbsp;&nbsp;Proyecto Productivo</label>
							<input type="text" size="1" name="o3" ><br>
						</td>
					    <td>
						    <label>&nbsp;&nbsp;&nbsp;Residencia Profesional</label>
							<input type="text" size="1" name="o4" ><br>
						</td>
				  	</tr>

				  	<tr>
					    <td>
						    <label>Proyecto de Emprendurismo</label>
							<input type="text" size="1" name="o5" ><br>
						</td>
						<td>
						    <label>&nbsp;&nbsp;&nbsp;Proyecto Integral de Educación DUAL</label>
							<input type="text" size="1" name="o6" ><br>
						</td>
					    <td>
						   <label>&nbsp;&nbsp;&nbsp;Proyecto de Innovación Tecnológica</label>
							<input type="text" size="1" name="o7" ><br>
						</td>
				  	</tr>

				  	<tr>
					    <td>
						    <label>Proyecto de Investigación y/o <br> Desarrollo Tecnológico</label>
							<input type="text" size="1" name="o8" ><br>
						</td>
						<td>
						    <label>&nbsp;&nbsp;&nbsp;Promedio General Sobresaliente <br>&nbsp;&nbsp;&nbsp;de 90 a 100 en su Plan de Estudios</label>
							<input type="text" size="1" name="o9" ><br>
						</td>
					    <td>
						   
						</td>
				  	</tr>
				</table>
				
				
				<label>Obtención de un Testimonio de Desempeño Satisfactorio o Sobresaliente en el Examen General de Egreso de Licenciatura (EGEL-Ceneval)</label>
				<input type="text" size="1" name="o11" ><br>
				<label>Otro:</label>
				<input type="text" size="" name="o12" placeholder="Especificar"><br><hr><br>

				<label>FORMA DE TITULACIÓN*<br>&nbsp;&nbsp;&nbsp;Deberas marcar con "x" la opción.</label><br><br>
				<label>Individual</label>
				<input type="text" size="1" name="oc1" >&nbsp;&nbsp;&nbsp;
				<label>Equipo</label>
				<input type="text" size="1" name="oc2"><br><hr><br>

				<label>DATOS DEL PROYECTO*</label><br><br>
				<label>Opción de Titulación*:</label>
				<input type="text" size="35" name="opc" id="" placeholder="Escriba aqui" required>
				<label>Nombre del Proyecto*:</label>
				<input type="text" size="35" name="proye" id="" placeholder="Escriba aqui" required><br>
				<label>Jefatura que lo Autoriza*:</label>
				<div style="padding: 0 20px;">
					<div style="width: 50%; float:left; text-align: justify;">
						<input type="radio" name="id" value="1" id="sistemas"><label>Ingeniería en Sistemas Computacionales </label><br><br>
						<input type="radio" name="id" value="2" id="electronica"><label>Ingeniería en Electronica</label><br><br>
						<input type="radio" name="id" value="3" id="innovacion"><label>Ingeniería en Innovación Agricola </label><br><br>

					</div>

					<div style="width: 50%; float:right; text-align: justify;">
					   <input type="radio" name="id" value="4" id="turismo"><label>Licenciatura en Turismo</label><br><br>
						<input type="radio" name="id" value="5" id="industrias"><label>Ingeniería en Industrias Alimentarias </label><br><br>
						<input type="radio" name="id" value="6" id="administracion"><label>Licenciatura en Administración</label><br><br>
					</div>
				</div>
				<div style="padding: 0 20px;">
					<input type="radio" name="id" value="7" id="industrial"><label>Ingeniería Industrial </label>
				</div>
				<label>Nombre del Asesor*:</label>
				<input type="text" name="presidente" required><br>
				<label>Nombre de Revisores*:</label><br>
				
				<label>Revisor 1*:</label>
				<input type="text" name="secretario" required>
				<label>Revisor 2*:</label>
				<input type="text" name="vocal"><br>


				<input type="submit" value="Enviar" name="subir" id="boton" onclick="return">

			</form>


		<hr>

			<form action="repositorio.php" method="POST" enctype="multipart/form-data">
				<label>DOCUMENTO DEL PROYECTO*:</label><br>
				<input type="file" name="archivo" accept="application/pdf">
				<input type="submit" value="subir" name="subir" id="boton">
			</form>


					
		</div>


		<div id="dos" class="tabcontent">
			
				<h2>PROYECTOS</h2><br><hr>
			<table>
		       <?php
		        include 'config.inc.php';
		        $db=new Conect_MySql();
		            $sql = "select*from repositorio";
		            $query = $db->execute($sql);
		            while($datos=$db->fetch_row($query)){?>
		            <tr>	                
		                <td><a href="archivo.php?id=<?php echo $datos['id_documento']?>"><?php echo $datos['nombre']; ?></a></td>
		            </tr>
		                
		        <?php  } ?>
	        </table>
					
		</div>

		


		<!--Pie de la pagina derechos de autor-->
		<footer>
			<div class="contenedor">
				<p class="copy"><br>Tecnológico de Estudios Superiores de Villa Guerrero &copy; 2020</p>
				<div class="sociales">
					<a class="icon-fac" href="https://www.facebook.com/TECVILLAGUERRERO/"></a>
					<a class="icon-ins" href=""></a>
					<a class="icon-twi" href="https://twitter.com/TESVGMex"></a>
					<a class="icon-you" href=""></a>
				</div>
			</div>
				
		</footer>

	</body>

</html>