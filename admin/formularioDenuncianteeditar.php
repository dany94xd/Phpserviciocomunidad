<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO EDITAR DENUNCIANTE</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id=$_GET["id"];
echo "el valor de id es ".$id;
include_once("DenuncianteCollector.php");
include_once("Denunciante.php");
$DenuncianteCollectorObj= new DenuncianteCollector();
$ObjDenunciante=$DenuncianteCollectorObj->showDenunciante($id);
print_r($ObjDenunciante);
?>
<h2>Editar Objeto Denunciante</h2>
<form id="contact-form" action="updateDenunciante.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="id_denunciante" id="id_denunciante" type="text" value="<?php echo $ObjDenunciante->getIdDenunciante(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjDenunciante->getNombre(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
APELLIDO:	 <input name="apellido" id="apellido" type="text" value="<?php echo $ObjDenunciante->getApellido(); ?>"  />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
EMAIL:	<input name="email" id="email" type="text" value="<?php echo $ObjDenunciante->getEmail(); ?>"  />
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
USUARIO:<input name="id_usuario" id="id_usuario" type="text" value="<?php echo $ObjDenunciante->getIdUsuario(); ?>"  />
<span><i class="fa fa-lock"></i></span>
</div>
<a href="readDenunciante.php">Cancelar</a>
<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
