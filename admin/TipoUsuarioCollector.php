<?php

include_once('TipoUsuario.php');
include_once('Collector.php');

class TipoUsuarioCollector extends Collector
{
  
  function showTipoUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM tipousuario ");        
    echo "linea 1";
    $arrayTipoUsuarios= array();        
    foreach ($rows as $c){
      $aux = new Provincia($c{'idtipousuario'},$c{'tipo'});
      array_push($arrayTipoUsuarios, $aux);
    }
    return $arrayTipoUsuarios;        
  }
function showTipoUsuario($id) {
    $rows = self::$db->getRows("SELECT * FROM tipousuario where idtipousuario= ? ", array ("{$id}"));        
$ObjTipoUsuarios= new TipoUsuarios($rows[0]{'idtipousuario'},$rows[0]{'tipo'});
    
    return $ObjTipoUsuarios;        
  }
function updateTipoUsuario($id,$tipo) {
    $insertrow = self::$db->updateRow("UPDATE public.tipousuario SET tipo = ? where idtipousuario= ? ", array ("{$tipo}",$id));

}
function deleteTipoUsuario($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.tipousuario where idtipousuario= ? ", array ("{$id}"));

}


}
?>

