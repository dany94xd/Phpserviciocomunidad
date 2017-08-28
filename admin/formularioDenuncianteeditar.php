<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Denunciante </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="../css/tablas.css" rel="stylesheet" >
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
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Denunciante</a></div>";
    echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='readsupremo.php'>Menú</a></li>";
			echo "<li><a href='newDenunciante.php'>Nuevo</a></li>";
		echo "</ul>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    echo "<li><a href='salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";



$id=$_GET['id'];

include_once("DenuncianteCollector.php");
include_once("Denunciante.php");
$DenuncianteCollectorObj= new DenuncianteCollector();
$ObjDenunciante=$DenuncianteCollectorObj->showDenunciante($id);


echo "Edicion en proceso . . . . </br></br>";

?>

<form method= "post" class="form-horizontal" action= "updateDenunciante.php" >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Código:</label>
         <div class="col-xs-10">
             <input name = "id_denunciante" type="text" id= "id_denunciante" class="form-control"
 placeholder="Codigo" value="<?php echo $ObjDenunciante->getIdDenunciante(); ?>" readonly/>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Nombres:</label>
         <div class="col-xs-10">
             <input name = "nombre" type="text" id= "nombre" class="form-control" placeholder="nombres" value="<?php echo $ObjDenunciante->getNombre(); ?>"autofocus required/>
         </div>
     </div>
  <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Apellidos:</label>
         <div class="col-xs-10">
             <input name = "apellido" type="text" id= "apellido" class="form-control"
 placeholder="apellidos" value="<?php echo $ObjDenunciante->getApellido(); ?>" />
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Email:</label>
         <div class="col-xs-10">
             <input name = "email" type="text" id= "email" class="form-control" placeholder="email" value="<?php echo $ObjDenunciante->getEmail(); ?>"/>
         </div>
     </div>
<div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Usuario:</label>
         <div class="col-xs-10">
             <input name = "id_usuario" type="text" id= "id_usuario" class="form-control" placeholder="id usuario" value="<?php echo $ObjDenunciante->getIdUsuario(); ?>"/>
         </div>
     </div>
      
     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
</form>



</aside>
</body>
</html>







