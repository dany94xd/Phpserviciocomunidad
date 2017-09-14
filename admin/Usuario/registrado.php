	<?php
$usuario=$_POST["usuario"];
$contrasenia=$_POST["contrasenia"];
$tipousuario="2";
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];


include_once("UsuarioCollector.php");
$UsuarioCollectorObj= new UsuarioCollector();
$UsuarioCollectorObj->insertUsuario($usuario, $contrasenia, $tipousuario);
include_once("Usuario.php");
//$UsuarioCollectorsObj= new UsuarioCollector();
$ObjUsuario=$UsuarioCollectorObj->consUsuario($usuario, $contrasenia);
$id_usuario=$ObjUsuario->getIdUsuario();
include_once("../Denunciante/DenuncianteCollector.php");
$DenuncianteCollectorObj= new DenuncianteCollector();
$DenuncianteCollectorObj->insertDenunciante($nombre, $apellido, $email, $id_usuario);
?>


<!doctype html>


<html lang="en" >

<head>
<title>TuVozCiudadana</title>
<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
<link rel="icon" href="../../favicon.ico" type="image/x-icon">
<meta charset="utf-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

 <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" media="screen">	
<link rel="stylesheet" type="text/css" href="../../css/magnific-popup.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../css/font-awesome.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../css/flexslider.css" media="screen">
<!--<link rel="stylesheet" type="text/css" href="../../css/regis.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">-->

	
</head>
<body>

<!-- Container -->
<div id="container">
<!-- Header
		    ================================================== -->
<header>
<div class="logo-box">
<a href="../../index.html"><img alt="Denuncia ya" src="../../images/logo1.png"></a>
</div>
<div class="search-box">
<div></div>
<form class="form-search" method="get" id="s" action="/">
<div class="input-append">
<input type="text" class="input-medium search-query" name="s" placeholder="Search" value="">
<button type="button" class="btn btn-default btn-sm">
<i class="fa fa-search" aria-hidden="true"></i> 
</button>
</div>
</form>
<div></div>
</div>
<a class="elemadded responsive-link" href="#">Menu</a>

<div class="menu-box">
<ul class="menu">
<li><a href="../../index.html"><span>Inicio</span></a></li>
<li><a href="../../about.html"><span>Quiénes Somos</span></a></li>
<li><a href="../../services.html"><span>Categorías</span></a></li>
<li><a class="active" href="../../login.html"><span>Iniciar Sesión</span></a></li>
<li><a href="../../formularioDenuncia.html"><span>Nueva Denuncia</span></a></li>
<li><a  href="../../contact.html"><span>Contáctenos</span></a></li>
</ul>					
</div>

<div class="social-box">
<ul class="social-icons">
<li><a href="#" class="facebook" ><i class="fa fa-facebook"></i></a></li>
<li><a href="#" class="twitter" ><i class="fa fa-twitter"></i></a></li>
<li><a href="#" class="dribble" ><i class="fa fa-dribbble"></i></a></li>
<li><a href="#" class="pinterest" ><i class="fa fa-pinterest"></i></a></li>
</ul>
<div class="info">
<a href="#" class="mail">tuvozciudadana@hotmail.com<i class="fa fa-envelope-o"></i></a>
<p class="phone">0921505061<i class="fa fa-phone"></i></p>
</div>

<p class="copyright">&#169; 2017 tuvozciudadana.com <br> Todos los derechos reservados</p>
</div>
</header>
<!-- End Header -->

<!-- content 
================================================== -->
<div id="content">
	<div class="inner-content">
		<div class="contact-page"  >
			<div id="fondo-contact" style="background-image:url(../../images/contacto.jpg); width: 100%; height:100%; position: absolute;top: 0;left: 0;">
			</div>

				<div class="contact-box">
					<div class="login-info">

<center><h1>FELICIDADES</h1>
<br>
<hr class="style18">

<h3>Ya tienes tu cuenta en Tu Voz Ciudadana</h3>

<h4>ahora procede a 
<a href="../../login.html"> iniciar sesion </a> </h4>
</center>
<div>

</div>
</div>


</div>
</div>
</div>
</div>
<!-- End content -->

</div>
<!-- End Container -->

<div class="preloader">
<img alt="" src="../../images/preloader.gif">
</div>

	


</body>

</html>
