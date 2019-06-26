<?php

namespace Mini\Controller;

use Mini\Model\ambiente;

class ambienteController{

	public function index($mensaje = null, $textoMensaje = null){

		$ambiente=new ambiente();
		 $ambientes = $ambiente->TodosAmbientes();

		 $tipoambiente= new  ambiente();
        $tipoAmbientes = $ambiente ->TodosTambientes();

		require APP . 'view/_templates/header.php';
		require APP . 'view/ambiente/index.php';
	}

	public function IngresarAmbiente(){

		if (isset($_POST["BtnIngresarA"])) {
			$ambiente=new ambiente();

			$result=$ambiente->IngresarA($_POST["nombretipoa"],$_POST["nombre"],$_POST["capacidad"]);
			// var_dump($result);
			// exit();
			//Retorna el objeto.
		}

		

		header('location: ' . URL . 'ambiente/index');

}
	}






	?>