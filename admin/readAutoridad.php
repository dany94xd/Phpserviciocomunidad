<?php  
include_once("AutoridadCollector.php");

$id =1;

$AutoridadCollectorObj = new AutoridadCollector();

foreach ($AutoridadCollectorObj->showAutoridades() as $c){
  echo "<div>";
  echo $c->getIdAutoridad() . "  && " .$c->getNombre(). "  && " .$c->getTelefono(). "  && " .$c->getEmail(). "  && " .$c->getIdTipoAutoridad(). "  && " .$c->getIdUsuario();                                     
  echo "</div>"; 
}

?>