<?php

include_once('Categoria.php');
include_once('Collector.php');

class CategoriaCollector extends Collector
{
  
  function showCategorias() {
    $rows = self::$db->getRows("SELECT * FROM comunidad ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_categoria'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showCategoria($id) {
    $rows = self::$db->getRows("SELECT * FROM comunidad where id_categoria= ? ", array ("{$id}"));        
$ObjCategoria= new Categoria($rows[0]{'id_categoria'},$rows[0]{'nombre'});
    
    return $ObjCategoria;        
  }
function UpdateCategoria($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.Categoria SET nombre = ? where id_categoria= ? ", array ("{$nombre}",$id));

}
function deleteCategoria($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.Categoria where id_categoria= ? ", array ("{$id}"));

}


}
?>
