<?php

class Autoridad 
{
	private $id_autoridad;
	private $nombre;
	private $telefono;
	private $email;
	private $id_tipo_autoridad;
	private $id_usuario;

	function __construct($id_autoridad,$nombre,$telefono,$email,$id_tipo_autoridad,$id_usuario){
			$this->id_autoridad = $id_autoridad;
			$this->nombre = $nombre;
			$this->telefono = $telefono;
			$this->email = $email;
			$this->id_tipo_autoridad = $id_tipo_autoridad;
			$this->id_usuario = $id_usuario;
	}

	function setIdAutoridad($id_autoridad){
		$this->id_autoridad = $id_autoridad;
	}
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	function setTelefono($telefono){
		$this->telefono = $telefono;
	}
	function setEmail($email){
		$this->email = $email;
	}
	function setIdTipoAutoridad($id_tipo_autoridad){
		$this->id_tipo_autoridad = $id_tipo_autoridad;
	}
	function setIdUsuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	function getIdAutoridad(){
		return $this->id_autoridad;
	}
	function getNombre(){
		return $this->nombre;
	}
	function getTelefono(){
		return $this->telefono;
	}
	function getEmail(){
		return $this->email;
	}
	function getIdTipoAutoridad(){
		return $this->id_tipo_autoridad;
	}
	function getIdUsario(){
		return $this->id_usuario;
	}
}
?>