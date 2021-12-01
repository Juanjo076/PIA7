<?php 
try{
	$conexion = new PDO('mysql:host=localhost;dbname=pia7',"root","Pascual2021*");
}
catch(PDOException $e){
	echo "ERROR".$e->getMessage();
}
?>