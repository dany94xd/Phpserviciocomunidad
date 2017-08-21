<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Denunciante</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$id_denunciante=$_POST["id_denunciante"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$id_usuario=$_POST["id_usuario"];
echo "Edicion en proceso . . . . </br>";
include_once("DenuncianteCollector.php");
$DenuncianteCollectorObj= new DenuncianteCollector();
$DenuncianteCollectorObj->updateDenunciante($id_denunciante,$nombre, $apellido, $email, $id_usuario);
echo "id: ".$id_denunciante." actualizado a:".$nombre.", ".$apellido.", ".$email.", ".$id_usuario." </br>";
?>

<div class="text-fieldsl">
         <a href='readDenunciante.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
