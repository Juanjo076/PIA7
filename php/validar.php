<?php 
require_once "conexion.php";
$oftalmologo=$_POST["oftalmologo"];
$calificacion=$_POST["calificacion"];
$orden=$_POST["oftalmologo"];
$consulta= "SELECT * FROM ordenes";
$resultado= $conexion ->query ($consulta);
 while ($val = $resultado -> fetch()){
 	if($val["orden"]==$orden){
 		try{
 	$consulta1= "SELECT * FROM oftalmologos";
	$resultado1= $conexion ->query ($consulta1);
	$control=$resultado1 -> fetch();
	if ($control["calificacion"]==0) {
		$consulta = $conexion -> prepare( "UPDATE oftalmologos SET calificacion ='$calificacion' WHERE id = '$oftalmologo'");
    	$consulta -> execute();
    	header("location:../perfil.php");
    }
    else{
    $calificacion=($calificacion+$control["calificacion"])/2;
    $consulta2 = $conexion -> prepare( "UPDATE oftalmologos SET calificacion ='$calificacion' WHERE id = '$oftalmologo'");
    $consulta2 -> execute();
    header("location:../php/perfil.php");
    }
    }
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
 	}
 }
?>