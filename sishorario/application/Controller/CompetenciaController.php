<?php

namespace Mini\Controller;

use Mini\Model\competencia;

class competenciaController{

	public function index($mensaje = null, $textoMensaje = null){

		$competencia = new competencia();
		$competencias = $competencia->TodosCompetencias();
		$programas = $competencia->TodosProgramas();

		require APP . 'view/_templates/header.php';
		require APP . 'view/competencia/index.php';
	}

	public function IngresarCompetencia(){

		if (isset($_POST["BtnIngresarC"])) {
			$competencia =new competencia();

			$result=$competencia->IngresarC($_POST["idPrograma"],$_POST["nombre"],$_POST["codigo"]);
			// var_dump($result);
			// exit();
			//Retorna el objeto.
		}

		

		header('location: ' . URL . 'competencia/index');

}
	}






	?>