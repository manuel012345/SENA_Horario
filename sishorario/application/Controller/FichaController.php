<?php

namespace Mini\Controller;

use Mini\Model\ficha;
use Mini\Model\programa;
use Mini\Model\usuario;



class fichaController{

	public function index($mensaje = null, $textoMensaje = null){

		$ficha=new ficha();
		$ficha = $ficha->TodasFichas();

		$programa=new programa();
		$programas = $programa->TodosProgramas();

		$detalleFicha=new ficha();
		$fichas = $detalleFicha->TodasDeFichas();

		$usuario = new usuario();
        $usuarios = $usuario->TodosInstructores();

		require APP . 'view/_templates/header.php';
		require APP . 'view/ficha/index.php';
	}

	public function Ingresarficha(){

		if (isset($_POST["BtnIngresarF"])) {
			$ficha=new ficha();

			$result=$ficha->Ingresarf($_POST["idFicha"],$_POST["idPrograma"],$_POST["fechaInicio"],$_POST["fechaFin"],$_POST["cantidadAprendiz"]);
			// var_dump($result);
			// exit();
			//Retorna el objeto.
		}

		header('location: ' . URL . 'ficha/index');

	}

}

	?>