<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eiminar Usuario</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php

$id=$_GET["id"];

include_once("UsuarioCollector.php");
$UsuarioCollectorObj= new UsuarioCollector();
$UsuarioCollectorObj->deleteUsuario($id);
echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='readUsuario.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
