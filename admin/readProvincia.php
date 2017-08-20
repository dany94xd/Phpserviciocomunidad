<?php
include_once("ProvinciaCollector.php");

$id =1;

$ProvinciaCollectorObj = new ProvinciaCollector();

foreach ($ProvinciaCollectorObj->showProvincias() as $c){
  echo "<div>";
  echo $c->getIdProvincia() . "  && " .$c->getNombre();                                     
  echo "</div>"; 
}


?>
