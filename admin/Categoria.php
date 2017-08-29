<?php

class Categoria
{
    private $id_categoria;
    private $nombre;
    
     function __construct($id_categoria, $nombre) {
       $this->id_categoria = $id_categoria;
       $this->nombre = $nombre;
     }
    
     function setIdcategoria($id_categoria){
       $this->id_categoria = $id_categoria;
     } 
     function getIdCategoria(){
       return $this->id_categoria;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 