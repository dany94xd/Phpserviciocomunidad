<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Menu </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

	</head>
<body>
<header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tu Voz Ciudadana</a>
    </div>
    <ul class="nav navbar-nav">
      
          <li><a href="readsupremo.php">Menu</a></li>
  
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php
$_SESSION['MiSession']= $_POST['usuario'];
$nombre= $_POST['usuario'];
$password= $_POST['clave'];

echo "<li><a href='#''><span class='glyphicon glyphicon-user'></span> $nombre</a></li>";
echo "<li><a href='salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
?>
      
    </ul>
  </div>
</nav>




</body>
</html>


