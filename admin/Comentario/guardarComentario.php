<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Tabla Comentario </title>
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
<header>

</header>

<aside>
<?php

echo "<nav class='navbar navbar-default'>";
echo "<div class='container-fluid'>";
echo "<div class='navbar-header'><a class='navbar-brand'>Guardar Ciudad</a></div>";
echo "<ul class='nav navbar-nav'>";
echo "<li><a href='../readsupremo.php'>Menú</a></li>";
<<<<<<< HEAD
echo "<li><a href='createCiudad.php'>Nuevo</a></li>";
echo "<li><a href='readCiudad.php'>Consulta</a></li>";
=======
echo "<li><a href='crearComentario.php'>Nuevo</a></li>";
echo "<li><a href='readComentario.php'>Consulta</a></li>";
>>>>>>> master
echo "</ul>";
echo "<ul class='nav navbar-nav navbar-right'>";
echo "<li><a href='#'>Hola:(" . $_SESSION ['MiSession'] . ")</a></li>";
echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
echo "</ul>";
echo "</div>";
echo "</nav>";

$id =$_POST['Codigo'];
$descripccion =$_POST['descripccion'];
$id_denuncia=$_POST['id_denuncia'];
$id_denunciante=$_POST['id_denunciante'];


include_once("ComentarioCollector.php");
$ComentarioCollectorObj = new ComentarioCollector();
$ComentarioCollectorObj->updatecomentario($id,$descripccion,$id_denuncia,$id_denunciante);

echo "<br>";
echo "<div class='container'>";
echo "<div class='panel panel-default'>";
echo "<div class='panel-heading'>Registro Actualizado Correctamente</div>";
<<<<<<< HEAD
echo "<div class='panel-body'>$nombre</div>";
=======
echo "<div class='text-fieldsl'><a href='readComentario.php'>Regresar</a> </div>";
>>>>>>> master
echo "</div>";
echo "</div>";
?>

<<<<<<< HEAD
<div class="text-fieldsl">
  <a href='readComentario.php'>Regresar</a>                                          
</div>
=======

>>>>>>> master
</aside>

<?php

}

    
    else {
       // echo "permiso denegado";
        echo"<a href='../index.php'>iniciar sesion</a>";
    }
 ?>
</body>
</html>
