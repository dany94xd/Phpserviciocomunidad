<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO EDITAR TIPO DE USUARIO</title>
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
include_once("TipoUsuarioCollector.php");
include_once("TipoUsuario.php");
$TipoUsuarioCollectorObj= new TipoUsuarioCollector();
$ObjTipoUsuario=$TipoUsuarioCollectorObj->showTipoUsuario($id);
print_r($ObjTipoUsuario);
?>
<h2>Editar Objeto Provincia</h2>
<form id="contact-form" action="updateTipoUsuario.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="idtipousuario" id="idtipousuario" type="text" value="<?php echo $ObjTipoUsuario->getIdTipoUsuario(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
TIPO:	<input name="tipo" id="tipo" type="text" value="<?php echo $ObjTipoUsuario->getTipo(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<a href="readTipoUsuario.php">Cancelar</a>
<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
