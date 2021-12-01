 <?php
session_start();
require_once "conexion.php";
$documento=$_POST['documento'];
$telefono=$_POST['telefono'];
$correo=$_SESSION['id_usuario'];
$id=$_SESSION['id_usuario'];
$consulta=$conexion -> query("SELECT * FROM usuario WHERE id='$id'");
$XD = $consulta ->fetch();
		try {
			$sql="INSERT INTO datos (id, documento,telefono ,correo) VALUES(:id,:documento ,:telefono,:correo)";
			$consulta = $conexion->prepare($sql);
			$consulta -> execute(array(
				    ':documento' => $documento,
				    ':telefono' =>$telefono,
				    ':correo' =>$correo,
				    ':id' =>$XD['id']
					));
			echo'<script type="text/javascript">
        	alert("Todos tus datos se guardaron con exito");
        	window.location.href="perfil.php";
       		</script>';
			}
			catch(Exception $e){
				echo 'Error conectando a la base de datos: '. $e->getMessage();
			}
 ?>
