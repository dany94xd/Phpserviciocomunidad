<?php 
	include_once('Autoridad.php');
	include_once('Collector.php');

	/**
	* 
	*/
	class AutoridadCollector extends Collector
	{
		function showAutoridades(){
			$rows = self::$db->getRows("SELECT * FROM autoridad");
			echo "linea 1";
			$arrayAutoridad = array();
			foreach ($rows as $c) {
				$aux = new Autoridad($c{'id_autoridad'},$c{'nombre'},$c{'telefono'},$c{'email'},$c{'id_tipo_autoridad'},$c{'id_usuario'});
				array_push($arrayAutoridad, $aux);
			}
		}

		function showAutoridad($id){
			$rows = self::$db->getRows("SELECT * FROM autoridad WHERE id_autoridad = ?", array("{$id}"));
			$ObjAutoridad = new Autoridad($rows[0]{'id_autoridad'},$rows[0]{'nombre'},$rows[0]{'telefono'},$rows[0]{'email'},$rows[0]{'id_tipo_autoridad'},$rows[0]{'id_usuario'});
			return $ObjAutoridad;
		}

		function updateAutoridad($id_autoridad,$nombre,$telefono,$email,$id_tipo_autoridad,$id_usuario){
			$insertRow = self::$db->updateRow("UPDATE public.autoridad SET nombre = ? , telefono = ? , email = ? WHERE id_autoridad = ?", array ("{$nombre},{$telefono},{$email}",$id_autoridad));

		}

		function deleteAutoridad($id){
			$deleteRow = self::$db->deleteRow("DELETE FROM public.autoridad WHERE id_autoridad = ?" , array ("{$id}"));
		}
	}

 ?>