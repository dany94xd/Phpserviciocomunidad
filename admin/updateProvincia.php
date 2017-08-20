<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> actualizar demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$idprovincia=$_POST["idprovincia"];
echo "Edicion en proceso . . . . </br>";
include_once("ProvinciaCollector.php");
$ProvinciaCollectorObj= new ProvinciaCollector();
$ProvinciaCollectorObj->UpdateProvincia($idprovincia,$nombre);
echo "id: ".$idprovincia." actualizado a:".$nombre." </br>";
?>

<div class="text-fieldsl">
         <a href='readProvincia.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
