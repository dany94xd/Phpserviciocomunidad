<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Usuario</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$contrasenia=$_POST["contrasenia"];
$tipousuario=$_POST["tipousuario"];
echo "Edicion en proceso . . . . </br>";
include_once("UsuarioCollector.php");
$UsuarioCollectorObj= new UsuarioCollector();
$UsuarioCollectorObj->updateUsuario($idusuario,$usuario, $contrasenia, $tipousuario);
echo "id: ".$idusuario." actualizado a:".$usuario.", ".$contrasenia.", ".$tipousuario." </br>";
?>

<div class="text-fieldsl">
         <a href='readUsuario.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
