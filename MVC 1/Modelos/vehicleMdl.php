<?php

class VehicleMdl{
	$private $vin;
	$private $brand;
	$private $tipo;
	$private $model;
	
	
	/**
	 *@param 
	 *@param 
	 *@param 
	 *@param 
	 *@param 
	 */
	create($vin, $brand, $tipo, $model){
		$this->vin	= $vin;
		$this->brand	= $brand;
		$this->tipo	= $tipo;
		$this->model	= $model;
		
		return true;
	}
}
?>