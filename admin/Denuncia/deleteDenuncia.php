<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Denuncia </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="../../css/tablas.css" rel="stylesheet" >
	</head>
<body>
<?php
if (isset($_SESSION['MiSession'])){
    ?>
<<<<<<< HEAD
=======
<<<<<<< HEAD


=======
>>>>>>> master
>>>>>>> 92dc60c788d1bba883ed51db157f59d39e5cd1e3
<section>
</section>
<section>

</section>
<aside>
<?php
echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Denuncia</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='../readsupremo.php'>Menú</a></li>";
			echo "<li><a href='newDenuncia.php'>Nuevo</a></li>";
			echo "<li><a href='readDenuncia.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
			echo "<li><a href='../salir.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

$id=$_GET['id'];

include_once("DenunciaCollector.php");
$DenunciaCollectorObj= new DenunciaCollector();
$DenunciaCollectorObj->deleteDenuncia($id);
echo "<br>";

	echo "<div class='container'>";
<<<<<<< HEAD
	echo "  <h2>Denuncia</h2>";
	echo "  <div class='panel panel-default'>";
	echo "    <div class='panel-heading'>Denuncia Eliminada Correctamente</div>";

=======
<<<<<<< HEAD
	echo "  <h2>Usuario</h2>";
	echo "  <div class='panel panel-default'>";
	echo "    <div class='panel-heading'>Denuncia Eliminada Correctamente</div>";
	echo "    <div class='panel-body'>$id</div>";
=======
	echo "  <h2>Denuncia</h2>";
	echo "  <div class='panel panel-default'>";
	echo "    <div class='panel-heading'>Denuncia Eliminada Correctamente</div>";

>>>>>>> master
>>>>>>> 92dc60c788d1bba883ed51db157f59d39e5cd1e3
	echo "  </div>";
	echo "</div>";
?>

<div class="text-fieldsl">
<<<<<<< HEAD
              <div> <a href="readDenuncia.php">Regresar</a></div>                          
</div>

</aside>
=======
<<<<<<< HEAD
                                        
</div>

</aside>
=======
              <div> <a href="readDenuncia.php">Regresar</a></div>                          
</div>

</aside>
>>>>>>> 92dc60c788d1bba883ed51db157f59d39e5cd1e3
<?php

}

    
    else {
       echo "permiso denegado";
       echo"<a href='../index.php'>inicia sesion</a>";
    }
 ?>
<<<<<<< HEAD
=======
>>>>>>> master
>>>>>>> 92dc60c788d1bba883ed51db157f59d39e5cd1e3
</body>
</html>








