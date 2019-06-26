<?php

namespace Mini\Controller;

use Mini\Model\trimestre;

class trimestreController{

	public function index($mensaje = null, $textoMensaje = null){

		$trimestre = new trimestre();
		$trimestres = $trimestre->TodosTrimestres();
		$programas = $trimestre->TodosProgramas();

		require APP . 'view/_templates/header.php';
		require APP . 'view/trimestre/index.php';
	}

	public function IngresarTrimestre(){

		if (isset($_POST["BtnIngresarT"])) {
			$trimestre =new trimestre();

			$result=$trimestre->IngresarT($_POST["idPrograma"],$_POST["descripcion"]);
			// var_dump($result);
			// exit();
			//Retorna el objeto.
		}

		

		header('location: ' . URL . 'trimestre/index');

}
	}






	?>