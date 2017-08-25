<?php

class EstadoDenuncia
{
    private $id_estado_denunciante;
    private $nombre;

    
     function __construct($id_estado_denunciante, $nombre) {
       $this->id_estado_denunciante = $id_estado_denunciante;
       $this->nombre = $nombre;
      
     }
    
     function setIdEstadoDenunciante($id_estado_denunciante){
       $this->id_estado_denunciante = $id_estado_denunciante;
     } 
     function getIdDenunciante(){
       return $this->id_estado_denunciante;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

}

?> 
