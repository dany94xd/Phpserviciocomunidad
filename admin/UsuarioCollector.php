<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    echo "linea 1";
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'usuario'},$c{'contrasenia'},$c{'tipousuario'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
function showUsuario($id) {
    $rows = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array ("{$id}"));        
$ObjUsuario= new Usuario($rows[0]{'idusuario'},$rows[0]{'nombre'},$rows{'contrasenia'},$rows{'tipousuario'});
    
    return $ObjUsuario;        
  }
function updateUsuario($id,$usuario, $contrasenia, $tipousuario) {
    $insertrow = self::$db->updateRow("UPDATE public.usuario SET usuario = ?, contrasenia = ?, tipousuario = ? where idusuario= ? ", array ("{$usuario}","{$contrasenia}","{$tipousuario}",$id));

}
function deleteUsuario($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.usuario where idusuario= ? ", array ("{$id}"));

}


}
?>

