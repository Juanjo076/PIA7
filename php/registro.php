 <?php
session_start();
require_once "conexion.php";
$nombre=$_POST['nombres'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['Contrasena'];
try {
	$sql="INSERT INTO usuario (id, nombre, usuario ,password) VALUES(NULL,:nombres ,:usuario,:contrasena)";
	$consulta = $conexion->prepare($sql);
	$consulta -> execute(array(
		    ':nombres' => $nombre,
		    ':contrasena' =>$contrasena,
		    ':usuario' =>$usuario
			));
	echo'<script type="text/javascript">
    alert("tu registro ha sido completado con exito,puedes ingresar datos extra en tu perfil");
    window.location.href="../index.html";
    </script>';
	}
	catch(Exception $e){
		echo 'Error conectando a la base de datos: '. $e->getMessage();
	}
 
try {
	$consulta= "SELECT * FROM usuario WHERE usuario='$usuario' AND password='$contrasena'";
 $resultado= $conexion ->query ($consulta);
 $usuario=$resultado -> fetch();
 $id=$usuario["id"];
 $_SESSION['id_usuario'];
  $ingreso="INSERT INTO resultado_miopia(id, id_usuario, resultado) VALUES(NULL,:usuario, NULL)";
  $consultar = $conexion->prepare($ingreso);
  $consultar -> execute(array(
    ':usuario' => $id,
    ));
  $ingreso1="INSERT INTO resultado_daltonismo(id, id_usuario, resultado) VALUES(NULL,:user, NULL)";
 $consultar1 = $conexion->prepare($ingreso1);
 $consultar1 -> execute(array(
   ':user' => $id,
   ));
}
catch(Exception $e){
echo 'Error conectando a la base de datos: '. $e->getMessage();
}
 ?>