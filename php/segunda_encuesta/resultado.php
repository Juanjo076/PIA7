<?php
session_start();
$id=$_SESSION['id_usuario'];
require_once "../../php/conexion.php";
$consulta= "SELECT * FROM usuario WHERE id='$id'";
$resultado= $conexion ->query ($consulta);
$usuario = $resultado -> fetch();
$resultado1=$_POST['resultado_encuesta'];
try{
    $consulta = $conexion -> prepare( "UPDATE usuario SET primera_encuesta ='1' WHERE id = '$id'");
    $consulta -> execute();
    }
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
try{
    $consulta = $conexion -> prepare( "UPDATE resultado_miopia SET resultado ='$resultado1' WHERE id_usuario = '$id'");
    $consulta -> execute();
    }
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	 <link rel="shortcut icon" href="../../img/icono.png">
	<link rel="stylesheet" type="text/css" href="../../css/login.css">
	<title>Resultado</title>
</head>
<body>
	<section class="form-login">
		<center>
			<h2>Resultado:</h2><br><br>
			<?php
				echo'<p>Su Resultado General De Vision Es De '.$resultado1.'/5</p><br>';
			?>
			<br><br><br><br><br><br><br>
	<a href="../perfil.php" ><button class="buttons">Volver al perfil</button></a>
</center>
	</section>
</body>