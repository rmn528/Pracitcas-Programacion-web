<?php
//Recibiendo
//Get query args

switch($_GET['ctrl']){
	case 'vehicle':
		//Crear el controlador y ejecutarlo
		require('controladores/vehicleCtrl.php');
		$ctrl = new vehicleCtrl();
		break;
	case 'user':
		require('controladores/userCtrl.php');
		$ctrl = new userCtrl();
		break;
	case 'client':
		require('controladores/clientCtrl.php');
		$ctrl = new clientCtrl();
	default:
}

$ctrl->run();
//Ejecutar el controlador

?>