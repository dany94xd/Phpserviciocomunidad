<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'usuario'},$c{'contrasenia'},$c{'tipousuario'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
function showUsuario($id) {
    $rows = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array ("{$id}"));        
$ObjUsuario= new Usuario($rows[0]{'idusuario'},$rows[0]{'usuario'},$rows[0]{'contrasenia'},$rows[0]{'tipousuario'});
    
    return $ObjUsuario;        
  }
function updateUsuario($id,$usuario, $contrasenia, $tipousuario) {
    $insertrow = self::$db->updateRow("UPDATE public.usuario SET usuario = ?, contrasenia = ?, tipousuario = ? where idusuario= ? ", array ("{$usuario}","{$contrasenia}","{$tipousuario}",$id));

}
function deleteUsuario($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.usuario where idusuario= ? ", array ("{$id}"));

}
function insertUsuario($usuario, $contrasenia, $tipousuario) {
    $rows = self::$db->insertRow("INSERT INTO public.usuario(usuario, contrasenia, tipousuario) VALUES (?,?,?)", array ("{$usuario}","{$contrasenia}","{$tipousuario}"));             
  }


}
?>

