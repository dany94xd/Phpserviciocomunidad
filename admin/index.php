<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO</title>
	</head>
<body>
<header>
</header>
<section>
</section>
<section>

</section>
<aside>
<?php
if (isset($_SESSION['MiSession'])) {
echo "<p> hola usuario:(".$_SESSION['MiSession'].") [<a href='salir.php'>Salir</a>]</p>";
include_once("CategoriaCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showCategorias() as $c){
  echo "<div>";
  echo $c->getCategoria() . "  && " .$c->getNombre()."<a href='formularioDemoeditar.php?id=".$c->getCategoria()."'>Editar</a> <a href='eliminar.php?id=".$c->getIdDemo()."'>Eliminar</a>";                                     
  echo "</div>"; 
}

}
else {
?>
<form id="contact-form" action="login.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
 <input name="usuario" id="usuario" type="text" placeholder="Usuario">
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
<input name="clave" id="clave" type="password" placeholder="Contraseña">
<span><i class="fa fa-lock"></i></span>
</div>
<input type="submit" id="submit_contact" class="main-button" value="Login">
                                                          
</div>
</form>
<?php } ?>
</aside>
</body>
</html>
