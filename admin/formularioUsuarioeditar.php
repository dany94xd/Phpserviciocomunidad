<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO EDITAR USUARIO</title>
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
include_once("UsuarioCollector.php");
include_once("Usuario.php");
$UsuarioCollectorObj= new UsuarioCollector();
$ObjUsuario=$UsuarioCollectorObj->showUsuario($id);
print_r($ObjUsuario);
?>
<h2>Editar Objeto Usuario</h2>
<form id="contact-form" action="updateUsuario.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="idusuario" id="idusuario" type="text" value="<?php echo $ObjUsuario->getIdUsuario(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
USUARIO:	<input name="usuario" id="usuario" type="text" value="<?php echo $ObjUsuario->getUsuario(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
CONTRASEÑA:	 <input name="contrasenia" id="contrasenia" type="text" value="<?php echo $ObjUsuario->getContrasenia(); ?>"  />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
TIPO DE USUARIO:	<input name="tipousuario" id="tipousuario" type="text" value="<?php echo $ObjUsuario->getTipoUsuario(); ?>" />
<span><i class="fa fa-lock"></i></span>
</div>
<a href="readUsuario.php">Cancelar</a>
<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
