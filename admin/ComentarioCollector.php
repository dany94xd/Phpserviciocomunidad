<?php 

	include_once('Comentario.php');
	include_once('Collector.php');

	/**
	* 
	*/
	class ComentarioCollector extends Collector
	{
		function showComentarios(){
			$rows = self::$db->getRows("SELECT * FROM comentario");
		
			$arrayComentario = array();
			foreach ($rows as $c) {
				$aux = new Comentario($c{'id_comentario'},$c{'descripcion'},$c{'id_denuncia'},$c{'id_denunciante'});
				array_push($arrayComentario, $aux);
			}
			return $arrayComentario;
		}

		function showComentario($id){
			$rows = self::$db->getRows("SELECT * FROM comentario WHERE id_comentario = ?", array("{$id}"));
			$ObjComentario = new Comentario($rows[0]{'id_comentario'},$rows[0]{'descripcion'},$rows[0]{'id_denuncia'},$rows[0]{'id_denunciante'});
			return $ObjComentario;
		}

		function updateComentario($id_comentario,$descripcion){
			$insertRow = self::$db->updateRow("UPDATE public.comentario SET descripcion = ? WHERE id_comentario = ?", array ("{$descripcion}",$id_comentario));

		}

		function deleteComentario($id){
			$deleteRow = self::$db->deleteRow("DELETE FROM public.comentario WHERE id_comentario = ?" , array ("{$id}"));
		}

		function insertComentario($descripcion) {
    $rows = self::$db->insertRow("INSERT INTO public.comentario(descripcion) VALUES (?)", array ("{$descripcion}"));             
  }
	}


 ?>