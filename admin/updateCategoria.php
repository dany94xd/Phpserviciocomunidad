<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> actualizar Categoria</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$id_categoria=$_POST["id_categoria"];
echo "Edicion en proceso . . . . </br>";
include_once("CategoriaCollector.php");
$CategoriaCollectorObj= new CategoriaCollector();
$CategoriaCollectorObj->updateCategoria($id_categoria,$nombre);
echo "id: ".$id_categoria." actualizado a:".$nombre." </br>";
?>

<div class="text-fieldsl">
         <a href='index.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
