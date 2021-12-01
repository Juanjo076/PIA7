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
			<table width="300px" >
			<tr><td><p>Nombre Usuario </p></td>
	<?php
	include_once"../php/conexion.php";
	$id=$_SESSION["id_usuario"];
	$consulta= "SELECT * FROM usuario WHERE id='$id'";
	$resultado= $conexion ->query ($consulta);
	$usuario=$resultado -> fetch();
	$consulta2= "SELECT * FROM resultado_general WHERE id_usuario ='$id'";
	$resultado2= $conexion ->query ($consulta2);
	$usuario2=$resultado2 -> fetch();
	$consulta3= "SELECT * FROM resultado_daltonismo WHERE id_usuario ='$id'";
	$resultado3= $conexion ->query ($consulta3);
	$usuario3=$resultado3 -> fetch();
	$consulta4= "SELECT * FROM resultado_miopia WHERE id_usuario ='$id'";
	$resultado4= $conexion ->query ($consulta4);
	$usuario4=$resultado4 -> fetch();
	echo '<td><p>'.$usuario["nombre"].'</p></td>
	<tr><td><p>Resultado Vision General</p></td><td><center><p>'.$usuario2["resultado"].'/10</p></center></td></tr>
	<tr><td><p>Resultado Miopia</p></td><td><center><p>'.$usuario4["resultado"].'/5</p></center></td></tr>
	<tr><td><p>Total Nivel De Daltonismo</p></td><td><center><p>'.$usuario3["resultado"].'/3</p></center></td></tr>';
	?>

	</table>
	<center>
	<br>
	<a href="segunda_encuesta/instrucciones.php" ><button class="buttons">Miopia</button></a>
	<a href="../daltonismo_encuesta/instrucciones_daltonismo.php" ><button class="buttons">Daltonismo</button></a>
	<a href="oftalmologos.php" ><button class="buttons">Oftalmólogos</button></a>
	<br><br><br>
	<a href="../index.html" ><button class="buttons">Cerrar sesión</button></a>
	</center>
	</section>
</body>