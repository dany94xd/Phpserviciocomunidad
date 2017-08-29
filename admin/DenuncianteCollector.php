<?php

include_once('Denunciante.php');
include_once('Collector.php');

class DenuncianteCollector extends Collector
{
  
  function showDenunciantes() {
    $rows = self::$db->getRows("SELECT * FROM denunciante ");        
    $arrayDenunciante= array();        
    foreach ($rows as $c){
      $aux = new Denunciante($c{'id_denunciante'},$c{'nombre'},$c{'apellido'},$c{'email'},$c{'id_usuario'});
      array_push($arrayDenunciante, $aux);
    }
    return $arrayDenunciante;        
  }
function showDenunciante($id) {
    $rows = self::$db->getRows("SELECT * FROM denunciante where id_denunciante= ? ", array ("{$id}"));        
$ObjDenunciante= new Denunciante($rows[0]{'id_denunciante'},$rows[0]{'nombre'},$rows[0]{'apellido'},$rows[0]{'email'},$rows[0]{'id_usuario'});
    
    return $ObjDenunciante;        
  }
function updateDenunciante($id,$nombre, $apellido, $email, $id_usuario) {
    $insertrow = self::$db->updateRow("UPDATE public.denunciante SET nombre = ?, apellido = ?, email = ?, id_usuario = ? where id_denunciante= ? ", array ("{$nombre}","{$apellido}","{$email}","{$id_usuario}",$id));

}
function deleteDenunciante($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.denunciante where id_denunciante= ? ", array ("{$id}"));

}
function insertDenunciante($nombre, $apellido, $email, $id_usuario) {
    $rows = self::$db->insertRow("INSERT INTO public.denunciante (nombre, apellido, email, id_usuario) VALUES (?,?,?,?)", array ("{$nombre}","{$apellido}","{$email}","{$id_usuario}"));             
  }


}
?>

