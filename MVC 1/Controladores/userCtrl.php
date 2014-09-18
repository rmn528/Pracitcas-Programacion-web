<?php

class UserCtrl{
	private $user;
	function __construct(){
		require('Modelos/userMdl.php');
		$this->user = new userMdl();
		//creamos modelo
	}
	/**
	*Ejecutar acciones en base a la accion seleccionada
	*del usuario en los argumentos de la consulta
	*/
	function run(){
		switch($_GET['act']){
			case 'create':
				$this->create();
				break;
			default:
			# code....
			break;
		}
	}
	
	private function create(){
		//Valida variables
		$nombre = $this->validaTexto($_POST['nombre']);
		$edad = $this->validaTexto($_POST['edad']);
		$sexo = $this->validaTexto($_POST['sexo']);
		$sueldo = $this->validaTexto($_POST['sueldo']);
		
		//Uso modelo para insertar
		$result = $this->user->create($nombre, $edad, $sexo, $sueldo);
		
		//Insert successful
		if($result){
			//Cargar la vista
			require('Vistas/userInserted.php');
		}
		else{
			require('Vistas/Error.php');
		}
	}
		
	/**
	 *@param string $data
	 *@return string $data
	 *Validate a string to be text
	 */
	
	public function validaTexto($data){
		return $data;
	}
}
?>