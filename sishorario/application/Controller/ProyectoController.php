<?php

namespace Mini\Controller;

use Mini\Model\proyecto;

class ProyectoController{

	public function index($mensaje = null, $textoMensaje = null){

		$proyecto = new proyecto();
        $actiproys = $proyecto ->TodosActiproy();
        $RAprendizajes = $proyecto ->listarRAprendizajes();

		require APP . 'view/_templates/header.php';
		require APP . 'view/proyecto/index.php';
	}

	public function IngresarActiproy(){

		if (isset($_POST["btnIngresarAp"])) {
			$proyecto=new proyecto();

			$result=$proyecto->IngresarActiproy($_POST["idResultA"],$_POST["nombre"]);
		}

		

		header('location: ' . URL . 'proyecto/index');

	}
}

?>