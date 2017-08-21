<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> ELIMINAR AUTORIDAD</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php

$id=$_GET["id"];

include_once("AutoridadCollector.php");
$AutoridadCollectorObj= new AutoridadCollector();
$AutoridadCollectorObj->deleteAutoridad($id);
echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='index.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>