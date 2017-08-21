<?php

include_once('Denunciante.php');
include_once('Collector.php');

class DenuncianteCollector extends Collector
{
  
  function showDenunciantes() {
    $rows = self::$db->getRows("SELECT * FROM denunciante ");        
    echo "linea 1";
    $arrayDenunciante= array();        
    foreach ($rows as $c){
      $aux = new Denunciante($c{'id_denunciante'},$c{'nombre'},$c{'apellido'},$c{'email'},$c{'id_usuario'});
      array_push($arrayDenunciante, $aux);
    }
    return $arrayDenunciante;        
  }
function showDenunciante($id) {
    $rows = self::$db->getRows("SELECT * FROM denunciante where id_denunciante= ? ", array ("{$id}"));        
$ObjDenunciante= new Denunciante($rows[0]{'idprovincia'},$rows[0]{'nombre'},$rows{'apellido'},$rows{'email'},$rows{'id_usuario'});
    
    return $ObjDenunciante;        
  }
function updateDenunciante($id,$nombre, $apellido, $email, $id_usuario) {
    $insertrow = self::$db->updateRow("UPDATE public.denunciante SET nombre = ?, apellido = ?, email = ?, id_usuario = ?, where id_denunciante= ? ", array ("{$nombre}","{$apellido}","{$email}","{$id_usuario}",$id));

}
function deleteDenunciante($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.denunciante where id_denunciante= ? ", array ("{$id}"));

}


}
?>

