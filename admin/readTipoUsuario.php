<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Tipo de Usuario </title>
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
include_once("TipoUsuarioCollector.php");

$id =1;

$TipoUsuarioCollectorObj = new TipoUsuarioCollector();
c
foreach ($TipoUsuarioCollectorObj->showTipoUsuarios() as $c){
  echo "<div>";
  echo $c->getIdTipoUsuario() . "  && " .$c->getTipo()."<a href='formularioTipoUsuarioeditar.php?id=".$c->getIdTipoUsuario()."'>Editar</a> <a href='deleteTipoUsuario.php?id=".$c->getIdTipoUsuario()."'>Eliminar</a>";                                      
  echo "</div>"; 
}


?>
</aside>
</body>
</html>
