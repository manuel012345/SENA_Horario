<?php

namespace Mini\Controller;

use Mini\Model\programa;

class programaController{

	public function index($mensaje = null, $textoMensaje = null){

		$programa = new programa();
		$programas = $programa->TodosProgramas();
		$centros = $programa->TodosCentros();
		$allPrograms = $programa->listarProgramas();

		require APP . 'view/_templates/header.php';
		require APP . 'view/programa/index.php';
	}

	public function IngresarPrograma(){

		if (isset($_POST["BtnIngresarP"])) {
			$programa=new programa();

			$result=$programa->IngresarP($_POST["idCentro"],$_POST["nombreprog"],$_POST["tipoFormacion"],$_POST["horario"]);
			// var_dump($result);
			// exit();
			//Retorna el objeto.
		}

		

		header('location: ' . URL . 'programa/index');

}
	}
	?>