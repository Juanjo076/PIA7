<?php
session_start();
require_once "conexion.php";
$usuario=$_POST['usuario'];
$contra=$_POST['contrasena'];
$so=0;
$consulta= "SELECT * FROM usuario";
$resultado= $conexion ->query ($consulta);
 while ($si = $resultado -> fetch()){
	if($usuario==$si["usuario"] && $contra==$si["password"]){
		$so=1;
		$_SESSION['id_usuario']=$si["id"];
		$_SESSION['nombre_usuario']=$si["nombre"];
		if($si["primera_encuesta"]==0){
		header ("location:primera_encuesta.php");
		}
		else{
			header("location:perfil.php");
		}
	}
}
if($so!=1 ){
	header ("location:../index.html");
}
?>