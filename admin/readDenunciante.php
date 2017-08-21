<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Denunciante </title>
	</head>
<body>
<header>
<nav>
<a href="inicio.html">Inicio</a>
<a href="inicio.html">Nosotros</a>
<a href="inicio.html">Servicios</a>
<a href="inicio.html">Contactenos</a>
</nav>
</header>
<section>
</section>
<section>

</section>
<aside>
<?php
include_once("DenuncianteCollector.php");

$id =1;

$DenuncianteCollectorObj = new DenuncianteCollector();
c
foreach ($DenuncianteCollectorObj->showDenunciantes() as $c){
  echo "<div>";
  echo $c->getIdDenunciante() . "  && " .$c->getNombre()."  && " .$c->getApellido()."  && " .$c->getEmail()."  && " .$c->getIdUsuario()."<a href='formularioDenuncianteeditar.php?id=".$c->getIdDenunciante()."'>Editar</a> <a href='deleteDenunciante.php?id=".$c->getIdDenunciante()."'>Eliminar</a>";                                      
  echo "</div>"; 
}


?>
</aside>
</body>
</html>
