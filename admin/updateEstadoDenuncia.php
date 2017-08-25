<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> actualizar EStado DEnuncia</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$id_estado_denuncia=$_POST["id_estado_denuncia"];
echo "Edicion en proceso . . . . </br>";
include_once("EstadoDenunciaCollector.php");
$EstadoDenunciaCollectorObj= new EstadoDenunciaCollector();
$EstadoDenunciaCollectorObj->updateEstadoDenuncia($id_estado_denuncia,$nombre);
echo "id: ".$id_estado_denuncia." actualizado a:".$nombre." </br>";
?>

<div class="text-fieldsl">
         <a href='index.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
