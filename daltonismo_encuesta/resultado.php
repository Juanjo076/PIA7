<?php
session_start();
require_once"../php/conexion.php";
$id=$_SESSION["id_usuario"];
$resultado_encuesta=$_POST["opcion"];
$resultado=$resultado_encuesta+$_SESSION['resultado'];
$consulta= "SELECT * FROM usuario WHERE id='$id'";
  $resultado1= $conexion ->query ($consulta);
  $usuario=$resultado1 -> fetch();
try{
    $consulta = $conexion -> prepare( "UPDATE usuario SET test_deltonismo ='1' WHERE id = '$id'");
    $consulta -> execute();
    }
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
try{
    $consulta = $conexion -> prepare( "UPDATE resultado_daltonismo SET resultado ='$resultado' WHERE id_usuario = '$id'");
    $consulta -> execute();
    header("location:../php/perfil.php");
    }
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>