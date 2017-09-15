<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar EstadoDenuncia</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php


echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Usuario</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='../readsupremo.php'>Menú</a></li>";
			echo "<li><a href='newUsuario.php'>Nuevo</a></li>";
			echo "<li><a href='readUsuario.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
			echo "<li><a href='../salir.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

$id=$_GET["id"];

include_once("EstadoDenunciaCollector.php");
$EstadoDenunciaCollectorObj= new EstadoDenunciaCollector();
$EstadoDenunciaCollectorObj->deleteEstadoDenunciante($id);
echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='readEstadoDenuncia.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
