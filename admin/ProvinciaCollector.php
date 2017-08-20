<?php

include_once('Provincia.php');
include_once('Collector.php');

class ProvinciaCollector extends Collector
{
  
  function showProvincias() {
    $rows = self::$db->getRows("SELECT * FROM provincia ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Provincia($c{'idprovincia'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showProvincia($id) {
    $rows = self::$db->getRows("SELECT * FROM provincia where idprovincia= ? ", array ("{$id}"));        
$ObjDemo= new Demo($rows[0]{'idprovincia'},$rows[0]{'nombre'});
    
    return $ObjDemo;        
  }
function UpdateProvincia($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.provincia SET nombre = ? where idprovincia= ? ", array ("{$nombre}",$id));

}
function deleteProvincia($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.provincia where idprovincia= ? ", array ("{$id}"));

}


}
?>

