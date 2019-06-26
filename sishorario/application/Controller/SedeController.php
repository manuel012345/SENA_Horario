<?php

namespace Mini\Controller;

use Mini\Model\sede;

class sedeController{

	public function index($mensaje = null, $textoMensaje = null){

		// $sede=new sede();
		// $Categorias = $Categoria->TodasCategorias();

		require APP . 'view/_templates/header.php';
		require APP . 'view/sede/index.php';
	}

	public function Ingresarsede(){

		

		header('location: ' . URL . 'sede/index/1');

}
	}

	?>