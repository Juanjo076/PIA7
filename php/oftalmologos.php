<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	 <link rel="shortcut icon" href="../img/icono.png">
	<link rel="stylesheet" type="text/css" href="../css/encuesta.css">
	<title>Inicio de Sesion</title>
</head>
<body>
	<section class="form-login">
		<center>
			<table width="550px" cellspacing="10px">
			<tr><th><p>NOMBRE OFTALMOLOGO </p></th>
				<th><p>CORREO </p></th>
				<th><p>NÚMERO CONTACTO </p></th>
				<th><p>CALIFICACIÓN</p></th>
			</tr>

	<?php
	include_once"../php/conexion.php";
	$consulta= "SELECT * FROM oftalmologos";
	$resultado= $conexion ->query ($consulta);
	while($usuario=$resultado -> fetch()){;
	echo '
	<tr>
	<td><p class="texto">'.$usuario["nombre"].'</p></td>
	<td><p class="texto">'.$usuario["correo"].'</p></td>
	<td><p class="texto">'.$usuario["telefono"].'</p></td>
	<td><p class="texto">'.$usuario["calificacion"].'</p></td>
	</tr>';
}
	?>
	</table>
	<br><br><br>
	<a href="perfil.php" ><button class="buttons">Regresar</button></a>
	<a href="calificar.php" ><button class="buttons">Calificar</button></a>
	</center>
	</section>
</body>