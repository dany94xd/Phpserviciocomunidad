<?php 
	include_once('EstadoDenuncia.php');
	include_once('Collector.php');

	/**
	* 
	*/
	class EstadoDenunciaCollector extends Collector
	{
		function showEstadoDenuncia(){
			$rows = self::$db->getRows("SELECT * FROM estadodenuncia");
			echo "linea 1";
			$arrayTipoAutoridad = array();
			foreach ($rows as $c) {
				$aux = new EstadoDenuncia($c{'id_estado_denuncia'},$c{'nombre'});
				array_push($arrayAutoridad, $aux);
			}
		}

		function showEstadoDenuncias($id){
			$rows = self::$db->getRows("SELECT * FROM estadodenuncia WHERE id_estado_denuncia = ?", array("{$id}"));
			$ObjEstadoDenuncia = new EstadoDenuncia($rows[0]{'id_estado_denuncia'},$rows[0]{'nombre'});
			return $ObjEstadoDenuncia;
		}

		function updateEstadoDenuncia($id_estado_denuncia,$nombre){
			$insertRow = self::$db->updateRow("UPDATE public.tipoautoridad SET nombre = ? WHERE id_estado_denuncia = ?", array ("{$nombre}",$id_estado_denuncia));

		}

		function deleteEstadoDenuncia($id){
			$deleteRow = self::$db->deleteRow("DELETE FROM public.estadodenuncia WHERE id_estado_denuncia = ?" , array ("{$id}"));
		}
	}

 ?>