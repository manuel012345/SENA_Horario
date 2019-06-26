<?php

namespace Mini\Controller;

use Mini\Model\centro;

class centroController{

	public function index($mensaje = null, $textoMensaje = null){

		// $centro=new centro();
		// $Categorias = $Categoria->TodasCategorias();

		require APP . 'view/_templates/header.php';
		require APP . 'view/centro/index.php';
	}

	public function IngresarCentro(){

		

		header('location: ' . URL . 'centro/index/1');

	}
}
	?>