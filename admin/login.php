<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> PSW + Cookie pagina +NOMBRE</title>
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
<section id="main">
<?php
$_SESSION['MiSession']= $_POST['usuario'];
$nombre= $_POST['usuario'];
$password= $_POST['clave'];

echo "Usuario: ".$nombre. " y contraseña: ".$password;

echo "<a href='index.php'>Volver</a>"


?>
</section>

</body>
</html>


