<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Tipo de Usuario</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$tipo=$_POST["tipo"];
$idtipousuario=$_POST["idtipousuario"];
echo "Edicion en proceso . . . . </br>";
include_once("TipoUsuarioCollector.php");
$TipoUsuarioCollectorObj= new TipoUsuarioCollector();
$TipoUsuarioCollectorObj->updateTipoUsuario($idtipousuario,$tipo);
echo "id: ".$idtipousuario." actualizado a:".$tipo." </br>";
?>

<div class="text-fieldsl">
         <a href='readTipoUsuario.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
