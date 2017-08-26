<?php

include_once('Categoria.php');
include_once('Collector.php');

class CategoriaCollector extends Collector
{
  
  function showCategorias() {
    $rows = self::$db->getRows("SELECT id_categoria,nombre FROM categoria ");        
    $arrayCategoria= array();        
    foreach ($rows as $c){
      $aux = new Categoria($c{'id_categoria'},$c{'nombre'});
      array_push($arrayCategoria, $aux);
    }
    return $arrayCategoria;        
  }

function UpdateCategoria($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.categoria SET nombre = ? where id_categoria= ? ", array ("{$nombre}",$id));

}
function deleteCategoria($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.categoria where id_categoria= ? ", array ("{$id}"));

}

function insertCategoria($nombre) {
    $rows = self::$db->insertRow("INSERT INTO public.categoria(nombre) VALUES (?)", array ("{$nombre}"));             
  }

}
?>
