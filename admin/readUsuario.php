<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Usuario </title>
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
include_once("UsuarioCollector.php");

$id =1;

$UsuarioCollectorObj = new UsuarioCollector();

foreach ($UsuarioCollectorObj->showUsuarios() as $c){
  echo "<div>";
  echo $c->getIdUsuario() . "  && " .$c->getUsuario()."  && " .$c->getContrasenia()."  && " .$c->getTipoUsuario()."<a href='formularioUsuarioeditar.php?id=".$c->getIdUsuario()."'>Editar</a> <a href='deleteUsuario.php?id=".$c->getIdUsuario()."'>Eliminar</a>";                                      
  echo "</div>"; 
}


?>
</aside>
</body>
</html>
