<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO Categoria</title>
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
include_once("CategoriaCollector.php");
include_once("Categoria.php");
$CategoriaCollectorObj= new CategoriaCollector();
$ObjCategoria=$CategoriaCollectorObj->showCategoria($id);
print_r($ObjCategoria);
?>
<h2>Editar Tabla Categoria</h2>
<form id="contact-form" action="actualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="id_categoria" id="id_categoria" type="text" value="<?php echo $ObjCategoria->getcategoria(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjCategoria->getNombre(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<a href="index.php">Cancelar</a>
<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
