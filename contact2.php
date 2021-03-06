<?php
session_start();
?>
<!doctype html>


<html lang="en" class="no-js">

<head>
	<title>Denunciaya</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">

	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header>
			<div class="logo-box">
				<a href="index-2.html"><img alt="" src="images/logo1.png"></a>
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
	       <li><a  href="index2.php"><span>Inicio</span></a></li>
	       <li><a class="active" href="about2.php"><span>Quienes Somos</span></a></li>
	       <li><a href="services2.php"><span>Categorias</span></a></li>				
	       <li><a href="formularioDenuncia2.php"><span>Nueva Denuncia</span></a></li>
		<li><a href="contact2.php"><span>Contáctenos</span></a></li>
<li><a href="#"><span>
							<?php

							//$_SESSION['MiSession']= $_POST['usuario'];
							// $nombre= $_POST['usuario'];
							// $password= $_POST['contrasenia'];

							if (isset($_SESSION['MiSession'])) {
							echo "Bienvenido: (" . $_SESSION ['MiSession'] . ")";
							$usuario=$_SESSION['MiSession'];

							}else{
							echo '<script>window.location.href = "index.php";</script>';
							 
							}

							?>
					</span></a></li>
						<li><a href="admin/salir.php"><span>Cerrar Sesion</span></a></li>

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
					<a href="#" class="mail">denunciasyal@hotmail.com<i class="fa fa-envelope-o"></i></a>
					<p class="phone">+38164 123 456<i class="fa fa-phone"></i></p>
				</div>

				<p class="copyright">&#169; 2017 Nombresitio.com <br> All Rights Reserved</p>
			</div>
		</header>
		<!-- End Header -->

		<!-- content 
			================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="contact-page"  >
					<div id="fondo-contact" style="background-image:url(images/contacto.jpg); width: 100%; height:100%; position: absolute;top: 0;left: 0;">
					</div>

					<div class="contact-box">
						<div class="contact-info">
							<h1>Contáctenos</h1>
							<p>Cualquier duda o sugerencia acerca del sitio es bueno para nosotros escucharla y atenderla. Envianos tus comentarios llenando este formulario</p>
						</div>
						<form id="contact-form">
							<h1>Escribe tu mensaje</h1>
							<div class="text-fields">
								<div class="float-input">
									<input name="name" id="name" type="text" placeholder="Nombres y Apellidos">
									<span><i class="fa fa-user"></i></span>
								</div>
								<div class="float-input">
									<input name="mail" id="mail" type="text" placeholder="e-mail">
									<span><i class="fa fa-envelope-o"></i></span>
								</div>
														</div>

							<div class="submit-area">
								<textarea name="comment" id="comment" placeholder="Ingresa tu comentario"></textarea>
								<input type="submit" id="submit_contact" class="main-button" value="Enviar">
								<div id="msg" class="message"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End content -->

	</div>
	<!-- End Container -->

	<div class="preloader">
		<img alt="" src="images/preloader.gif">
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>


</body>

</html>