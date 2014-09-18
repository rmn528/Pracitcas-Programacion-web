<?php

class UserMdl{
	public $nombre;
	private $edad;
	private $sueldo;
	private $sexo;
	
	
	/**
	 *@param 
	 *@param 
	 *@param 
	 *@param 
	 *@param 
	 */
	function create($nombre, $edad, $sueldo, $sexo){
		$this->nombre	= $nombre;
		$this->edad	= $edad;
		$this->sueldo	= $sueldo;
		$this->sexo	= $sexo;
		
		return true;
	}
}
?>