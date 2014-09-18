<?php

class VehicleCtrl{
	private $model;
	function __construct(){
		requiere('modelos/vehicleMdl.php');
		$this->model = new vehicleMdl();
		//creamos modelo
	}
	/**
	*Ejecutar acciones en base a la accion seleccionada
	*del usuario en los argumentos de la consulta
	*/
	run(){
		switch($_GET['act']){
			case 'create':
			this->create();
			break;
			default:
			# code....
			break;
		}
	}
	
	private create(){
		//Valida variables
		$vin = $this->validaNumero($_POST['vin']);
		$brand = $this->validaTexto($_POST['brand']);
		$tipo = $this->validaTexto($_POST['tipo']);
		$model = $this->validaNumero($_POST['model']);
		
		//Uso modelo para insertar
		$this->model->create($vin, $brand, $tipo, $model);
		
		//Insert successful
		if($result){
			//Cargar la vista
			requiere('views/vehicleInserted.html');
		}
		else{
			requiere('views/Error.html');
		}
		
		/**
		 *@param string $data
		 *@return string $data
		 *Validate 
		 */
	}
}
?>