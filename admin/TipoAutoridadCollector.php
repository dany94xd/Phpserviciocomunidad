<?php 
	include_once('TipoAutoridad.php');
	include_once('Collector.php');

	/**
	* 
	*/
	class TipoAutoridadCollector extends Collector
	{
		function showTiposAutoridades(){
			$rows = self::$db->getRows("SELECT * FROM tipoautoridad");
			echo "linea 1";
			$arrayTipoAutoridad = array();
			foreach ($rows as $c) {
				$aux = new TipoAutoridad($c{'id_tipo_autoridad'},$c{'nombre'});
				array_push($arrayAutoridad, $aux);
			}
		}

		function showTipoAutoridad($id){
			$rows = self::$db->getRows("SELECT * FROM tipoautoridad WHERE id_tipo_autoridad = ?", array("{$id}"));
			$ObjTipoAutoridad = new TipoAutoridad($rows[0]{'id_tipo_autoridad'},$rows[0]{'nombre'});
			return $ObjTipoAutoridad;
		}

		function updateTipoAutoridad($id_tipo_autoridad,$nombre){
			$insertRow = self::$db->updateRow("UPDATE public.tipoautoridad SET nombre = ? WHERE id_tipo_autoridad = ?", array ("{$nombre}",$id_tipo_autoridad));

		}

		function deleteTipoAutoridad($id){
			$deleteRow = self::$db->deleteRow("DELETE FROM public.tipoautoridad WHERE id_tipo_autoridad = ?" , array ("{$id}"));
		}
	}

 ?>