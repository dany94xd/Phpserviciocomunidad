<?php

include_once('Parroquia.php');
include_once('Collector.php');

class ParroquiaCollector extends Collector
{
  
function showParroquias() {
   $rows = self::$db->getRows("SELECT * FROM parroquia");       
   $arrayParroquia= array();        
    foreach ($rows as $c){
      $aux = new Parroquia($c{'idparroquia'},$c{'nombre'},$c{'idciudad'});
      array_push($arrayParroquia, $aux);
    }
    return $arrayParroquia;        
  }

function showParroquia($id) {
$rows = self::$db->getRows("SELECT * FROM parroquia where idparroquia= ? ", array ("{$id}"));        
$ObjParroquia= new Parroquia($rows[0]{'idparroquia'},$rows[0]{'nombre'});
  return $ObjParroquia;        
}

function updateParroquia($id,$nombre) {
 $insertrow = self::$db->updateRow("UPDATE public.parroquia SET nombre= ? where idparroquia= ? ", array ("{$nombre}",$id));

}

function deleteParroquia($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.parroquia where idparroquia= ? ", array ("{$id}"));
}


function insertParroquia($nombre,$id) {
  $rows = self::$db->insertRow("INSERT INTO public.parroquia(nombre,idciudad) VALUES (?,?)", array ("{$nombre}",$id));             
}


}
?>

