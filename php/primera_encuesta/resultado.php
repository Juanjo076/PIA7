<?php
session_start();
$id=$_SESSION['id_usuario'];
require_once "../../php/conexion.php";
$consulta= "SELECT * FROM usuario WHERE id='$id'";
$resultado= $conexion ->query ($consulta);
$usuario = $resultado -> fetch();
$resultado1=$_POST['resultado_encuesta'];
if($usuario["primera_encuesta"]==0){
try {
  $_SESSION['resultado_usuario']=$resultado1;
  $ingreso="INSERT INTO resultado_general(id, id_usuario, resultado) VALUES(NULL,:usuario, :resultado)";
  $consultar = $conexion->prepare($ingreso);
  $consultar -> execute(array(
    ':usuario' => $id,
    ':resultado' => $resultado1
    ));
}
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
try{
    $consulta = $conexion -> prepare( "UPDATE usuario SET primera_encuesta ='1' WHERE id = '$id'");
    $consulta -> execute();
    }
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
}
else{
	try{
    $consulta = $conexion -> prepare( "UPDATE resultado_general SET resultado ='$resultado1' WHERE id_usuario = '$id'");
    $consulta -> execute();
    }
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}

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
				echo'<p>Su Resultado General De Vision Es De '.$resultado1.'/10</p><br>';
			?>
			<br><br><br><br><br><br><br>
	<a href="../../html/Registro2.html" ><button class="buttons">Ingresar Datos Restantes</button></a>
</center>
	</section>
</body>