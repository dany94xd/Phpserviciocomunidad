<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Tipo de Usuario</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php

$id=$_GET["id"];

include_once("TipoUsuarioCollector.php");
$TipoUsuarioCollectorObj= new TipoUsuarioCollector();
$TipoUsuarioCollectorObj->deleteTipoUsuario($id);
echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='readTipoUsuario.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
