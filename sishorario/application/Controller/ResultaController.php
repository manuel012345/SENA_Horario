<?php

namespace Mini\Controller;

use Mini\Model\resulta;

class resultaController{

	public function index($mensaje = null, $textoMensaje = null){

		$resulta = new resulta();
		$resultas = $resulta->TodosResultas();
		$trimetres = $resulta->TodosTrimestres();
		$competencias = $resulta->TodosCompetencias();

		require APP . 'view/_templates/header.php';
		require APP . 'view/resulta/index.php';
	}

	public function IngresarResulta(){

		if (isset($_POST["BtnIngresarRa"])) {
			$resulta =new resulta();

			$result = $resulta->IngresarRa($_POST["idResultA"],$_POST["idTrimestre"],$_POST["idCompetencia"],$_POST["nombre"]);
			//var_dump($resulta);
			// exit();
			//Retorna el objeto.


		}

		header('location: ' . URL . 'resulta/index');

	}

}

	?>